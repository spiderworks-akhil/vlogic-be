<?php

namespace App\Http\Controllers\Apis;

use DB;
use App\Models\Faq;
use App\Traits\App;
use App\Models\Lead;
use App\Models\Menu;
use App\Models\News;
use App\Models\Page;
use App\Models\Listing;
use App\Models\Setting;
use App\Models\MenuItem;
use App\Models\Redirect;
use App\Models\FrontendPage;
use Illuminate\Http\Request;
use App\Http\Resources\Media;
use App\Models\ListingContent;
use App\Services\MailSettings;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\FaqCollection;
use App\Http\Resources\LeadCollection;
use Maatwebsite\Excel\Concerns\ToArray;
use App\Http\Resources\CommonPageResource;
use App\Http\Resources\Lead as LeadResource;
use App\Http\Resources\FrontendPage as ResourcesFrontendPage;

class CommonController extends Controller
{
    use App;
    public function menu($position)
    {
        return response()->json(['data' => $this->getMenu($position)]);
    }

    public function settings()
    {
        $settings = $this->getSettings();
        return response()->json(['data' => $settings]);
    }


    public function GeneralSettings()
    {
        $allMenus = Menu::select('position')->where('status', 1)->get();
        $formattedMenus = [];

        foreach ($allMenus as $menu) {
            $menuId = $menu->id;
            $position = $menu->position;

            $menuResponse = $this->menu($position);
            $menuData = json_decode($menuResponse->getContent());

            $menuItems = MenuItem::where('menu_id', $menuId)
                ->select('title', 'url')
                ->get();

            $formattedMenus[str_replace(' ', '_', $position)] = array_merge(
                (array) $menuData->data,
                $menuItems->toArray()
            );
        }

        $settings = $this->getSettings();

        return response()->json([
            'all_menus' => $formattedMenus,
            'all_settings' => $settings,

        ]);
    }


    //     public function page(string $slug){
    //         $page_settings = FrontendPage::with(['faq', 'og_image'])->where('slug', $slug)->where('status', 1)->first();

    // if('slug'== 'government'){


    //         $listing_id = Listing::where('name','government_listing')->pluck('id')->first();
    //         if (is_null($listing_id)) {
    //         return response()->json(['message' => 'Listing ID not found'], 400);
    //     }
    //         $listing_content = ListingContent::where('listing_id',$listing_id)->get();
    //         if ($listing_content->isEmpty()) {
    //             return response()->json(['message' => 'No content found for the specified listing ID'], 400);
    //         }
    //         $page_details = FrontendPage::where('slug','government')->first();
    //         if (is_null($page_details)) {
    //             return response()->json(['message' => 'Government page not found'], 400);
    //         }
    //     }
    //         if(!$page_settings)
    //             return response()->json(['error' => 'Page not Found!'], 404);
    //         return new ResourcesFrontendPage($page_settings);
    //     }



    public function page(string $slug )
    {


        $data = FrontendPage::with(['faq', 'og_image'])->where('slug', $slug)->where('status', 1)->first();
        

        if (is_null($data)) {
            return response()->json(['error' => 'Page not Found!'], 404);
        }



        return new ResourcesFrontendPage($data);
    }


    public function company_page(string $slug)
    {
        $page = Page::where('slug', $slug)->where('status', 1)->first();
        if (!$page)
            return response()->json(['error' => 'Page not Found!'], 404);

        return new CommonPageResource($page);
    }

    public function contact_save(ContactRequest $request)
    {

        $request->validated();
        // $response = Http::withOptions(['verify' => true])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('services.recaptcha.secret'),

        //     'response' => $request->recaptcha_token,
        // ]);

        // $recaptchaResult = $response->json();

        // if (!($recaptchaResult['success'] ?? false)) {
        //     return response()->json(['success' => false, 'message' => 'reCAPTCHA verification failed', 'res' => $recaptchaResult, 'token' => $request->recaptcha_token, "secret" => config('services.recaptcha.secret')], 422);
        // }

        // If reCAPTCHA is successful, proceed with saving the contact
        $contact = new Lead;
        $data = $request->all();

        // $data['solution'] = json_encode($data['solution']);

        $contact->fill($data);

        $contact->save();

        $notif_emails = Setting::where('code', 'contact_notification_email_ids')->first();

        if ($notif_emails && trim($notif_emails->value_text) != '') {
            $mail = new MailSettings;
            $email_array = explode(',', $notif_emails->value_text);
            array_filter($email_array, function ($value) {
                return !is_null($value) && $value !== '';
            });
            $email_array = array_map('trim', $email_array);
            $mail->to($email_array)->send(new \App\Mail\Contact($contact));
        }
        if ($contact->email) {
            $thank_mail = new MailSettings;
            $thank_mail->to($contact->email)->send(new \App\Mail\ContactThankyou($contact));
        }
        return response()->json([
            'success' => true
        ]);
    }

    public function list_urls($page)
    {
        $urls = [];
        if ($page == "company") {
            $urls = DB::table('pages')->select('slug')->where('status', 1)->get();
        } elseif ($page == "blog") {
            $urls = DB::table('blogs')->select('slug')->where('status', 1)->get();
        }
        return response()->json($urls);
    }

    public function faq(Request $request)
    {

        $limit = ($request->limit) ? $request->limit : 12;
        $faqs = Faq::whereHasMorph('linkable', '*', function ($query) {
            $query->where('status', 1);
        });

        if ($search = $request->search) {
            $faqs->where(function ($query) use ($search) {
                $query->whereRaw("MATCH (question) AGAINST ('{$search}')")->orWhereRaw("MATCH (answer) AGAINST ('{$search}')")->orWhere('question', 'LIKE', '%' . $search . '%')->orWhere('answer', 'LIKE', '%' . $search . '%');
            });
        }
        $faqs = $faqs->paginate($limit);
        return new FaqCollection($faqs);
    }

    public function leads(Request $request)
    {

        $limit = ($request->limit) ? $request->limit : 12;
        $leads = Lead::where('status', 1);

        if ($search = $request->search) {
            $leads->where(function ($query) use ($search) {
                $query->whereRaw("MATCH (name) AGAINST ('{$search}')")->orWhereRaw("MATCH (email) AGAINST ('{$search}')")->orWhere('phone_number', 'LIKE', '%' . $search . '%')->orWhere('created_at', 'LIKE', '%' . $search . '%');
            });
        }
        $leads = $leads->paginate($limit);

        return new LeadCollection($leads);
    }
    public function leads_view($id)
    {

        $lead = Lead::where('status', 1)->find($id);

        if (!$lead)
            return response()->json(['error' => 'Page not Found!'], 404);

        return new LeadResource($lead);
    }

    public function privacy()
    {

        $page_details = FrontendPage::where('slug', 'privacy')->first();
        if (is_null($page_details)) {
            return response()->json(['message' => "Privacy Policy page not found"], 400);
        }
        return response()->json([
            'success' => true,
            'page_details' => $page_details
        ]);
    }
    public function mission()
    {
        $page_details = FrontendPage::where('slug', 'mission')->first();


        if (is_null($page_details)) {
            return response()->json(['message' => "Privacy Policy page not found"], 400);
        }

        return response()->json([
            'success' => true,
            'page_details' => $page_details
        ]);
    }
    public function index()
    {


        $banner = FrontendPage::where('slug', 'news')->first();

        $page_details = News::with('media')->orderBy('created_at', 'asc')->get();
        if (!$page_details) {


            return response()->json(['message' => "Privacy Policy page not found"], 400);
        }



        return response()->json([
            'success' => true,
            'data' => $page_details
        ]);
    }

    public function redirect_links()
    {
        $redirects = Redirect::select('redirect_from', 'redirect_to')->get();

        return $redirects->toArray();
    }

    // //solution
    // public function space_management(){
    //     $data = FrontendPage::where('slug','space_management')->first();


    // }



}
