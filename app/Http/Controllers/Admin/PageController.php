<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Traits\ResourceTrait;
use App\Models\Page;
use Illuminate\Http\Request;
use View;

class PageController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Page;
        $this->route .= '.pages';
        $this->views .= '.pages';
        $this->permissions = ['list'=>'page_listing', 'create'=>'page_adding', 'edit'=>'page_editing', 'delete'=>'page_deleting'];
        $this->resourceConstruct();

    }

    public function index(Request $request, $parent=null)
    {
        if ($request->ajax()) {
            $collection = $this->getCollection();
            $parent_id = ($parent)?$parent:0;
            $collection->where('pages.parent_id', '=', $parent_id);
            $route = $this->route;
            return $this->setDTData($collection)->make(true);
        } else {
            $parent_data = null;
            if($parent)
                $parent_data = $this->model->find($parent);
            $search_settings = $this->getSearchSettings();
            return View::make($this->views . '.index', array('parent'=>$parent, 'parent_data'=>$parent_data, 'search_settings'=>$search_settings));
        }
    }
    
    protected function getCollection() {
        return $this->model->select('id', 'name', 'parent_id', 'slug', 'title', 'status', 'created_at', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
        	->addColumn('sub-pages', function($obj) use ($route) {
                $has_child = $this->model->where('parent_id', '=', $obj->id)->count();
                return '<a href="' . route( $route . '.index',  [$obj->id] ) . '" class="btn btn-info btn-sm" >Sub-Pages (' . $has_child . ')</a>'; 
            })
            ->addColumn('action_delete_category', function($obj) use ($route) {
                if(auth()->user()->can($this->permissions['delete'])){
                    $has_child = $this->model->where('parent_id', '=', $obj->id)->count();
                    if($has_child)
                    {
                        return '<a href="javascript:void(0);" class= "text-danger delete_have_child" title="Created at : ' . date('d/m/Y - h:i a', strtotime($obj->created_at)) . '" > <i class="fa fa-trash"></i></button>';
                    }
                    else{
                        return '<a href="' . route( $route . '.destroy',  [encrypt($obj->id)] ) . '" class="text-danger webadmin-btn-warning-popup" data-message="Are you sure to delete?  Associated data will be removed if it is deleted." title="' . ($obj->updated_at ? 'Last updated at : ' . date('d/m/Y - h:i a', strtotime($obj->updated_at)) : '') . '" ><i class="fa fa-trash"></i></a>';  
                    }
                }
                else
                    return '<a href="javascript:void(0)" class="text-secondary" title="You have no permission to delete" ><i class="fa fa-trash"></i></a>';
            })
            ->rawColumns(['action_edit', 'action_delete_category', 'status', 'sub-pages']);
    }

    protected function getSearchSettings(){}

    public function create($parent=null)
    {
        $parent_data = null;
        if($parent)
            $parent_data = $this->model->find($parent);
        $pages = $this->model->where('parent_id',0)->get();
        return View::make($this->views . '.form', array('obj'=>$this->model, 'parent'=>$parent, 'parent_data'=>$parent_data, 'pages'=>$pages));
    }

    public function store(PageRequest $request)
    {
        $request->validated();
        return $this->_store($request->all());
    }

    public function edit($id) {
    	$id = decrypt($id);
        if($obj = $this->model->find($id)){
            $parent = null;
            if($obj->parent_id >0)
                $parent = $obj->parent_id;
            $parent_data = $this->model->where('parent_id', $obj->parent_id)->first();
            $pages = $this->model->where('parent_id',0)->get();
            return view($this->views . '.form')->with('obj', $obj)->with('parent', $parent)->with('parent_data', $parent_data)->with('pages', $pages);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function update(PageRequest $request)
    {
        $request->validated();
    	$id = decrypt($request->id);
        return $this->_update($id, $request->all());
    }
}
