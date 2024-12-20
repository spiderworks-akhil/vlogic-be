<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Http\Requests\Admin\ListRequest;
use App\Traits\ResourceTrait;

use App\Models\Listing;

class ListingController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Listing;
        $this->route .= '.listings';
        $this->views .= '.listings';

        $this->permissions = ['list'=>'listing_listing', 'create'=>'listing_adding', 'edit'=>'listing_editing', 'delete'=>'listing_deleting'];
        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'created_at', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->addColumn('list', function($obj) use ($route) {
                return '<a href="'.route('admin.listing-items.index', [$obj->id]).'" class="text-success" title="Listings" target="_blank" ><i class="fas fa-list"></i></i></a>';
            })
            ->addColumn('action_edit', function($obj) use ($route) {
                if(auth()->user()->can($this->permissions['edit']))
                    return '<a href="'.route($route.'.edit', [encrypt($obj->id)]).'" class="text-info webadmin-open-ajax-popup" title="Update Listing" ><i class="fa fa-pencil-alt"></i></a>';
                else
                    return '<a href="'.route($route.'.show', [encrypt($obj->id)]).'" class="text-info webadmin-open-ajax-popup" data-popup-size="large" title="View '.$obj->name.'" ><i class="fas fa-eye"></i></a>';
            })
            ->rawColumns(['action_edit', 'action_delete', 'list']);
    }

    protected function getSearchSettings(){}

    public function store(ListRequest $request)
    {
                    

        $request->validated();
        return $this->_store($request->all());
    }

    public function update(ListRequest $request)
    {

        $request->validated();
        $id = decrypt($request->id);
        return $this->_update($id, $request->all());
    }

}
