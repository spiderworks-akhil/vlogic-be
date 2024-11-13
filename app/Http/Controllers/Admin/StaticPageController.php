<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Http\Requests\Admin\StaticPageRequest;
use App\Traits\ResourceTrait;
use App\Models\FrontendPage;
use App\Models\FrontendPageTestimonial;
use App\Models\Testimonial;

class StaticPageController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new FrontendPage;
        $this->route .= '.static-pages';
        $this->views .= '.static_pages';

        $this->permissions = ['list'=>'static_pages_listing', 'create'=>'', 'edit'=>'static_pages_editing', 'delete'=>''];
        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'slug', 'name', 'title', 'updated_at');
    }

    protected function setDTData($collection) {
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    protected function getSearchSettings(){}


    public function update(StaticPageRequest $request)
    {
        $request->validated();
    	$data = request()->all();
    	$id = decrypt($data['id']);
        if(!empty($data['content'])){
            $data['content'] = json_encode($data['content']);
        }

        if($obj = $this->model->find($id)){
            $data['is_featured'] = isset($data['is_featured'])?1:0;
            $data['priority'] = (!empty($data['priority']))?$data['priority']:0;
        	if($obj->update($data)){
                if(!empty($data['testimonials'])){
                    FrontendPageTestimonial::where('frontend_page_id',$obj->id)->delete();
                    foreach($data['testimonials'] as $item){
                        $new = new FrontendPageTestimonial;
                        $new->testimonial_id = $item;
                        $new->frontend_page_id = $obj->id;
                        $new->save();
                    }
                }
            }
            return $this->redirect('updated','success', 'edit', [encrypt($obj->id)]);
        } else {
            return $this->redirect('notfound');
        }

    }



}
