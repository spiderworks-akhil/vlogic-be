<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Traits\ResourceTrait;
use App\Models\News;
use App\Models\Department;
use Redirect;

class NewsController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new News;
        $this->route .= '.news';
        $this->views .= '.news';

        $this->permissions = ['list'=>'news_listing', 'create'=>'news_adding', 'edit'=>'news_editing', 'delete'=>'news_deleting'];
        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'slug', 'designation', 'priority', 'status', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    protected function getSearchSettings(){}

    public function create()
    {
        $departments = Department::get();
        return view($this->views . '.form')->with('obj', $this->model)->with('tab', 'basic')->with('departments', $departments);
    }

    public function edit($id, $tab="basic") {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            $departments = Department::get();
            return view($this->views . '.form')->with('obj', $obj)->with('tab', $tab)->with('departments', $departments);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(NewsRequest $request)
    {
        $request->validated();
        $data = $request->all();

        if($data['department_id'])
            $data['department_id'] = $this->saveDepartment($data['department_id']);

        return $this->_store($data);
    }

    protected function saveDepartment($department_id)
    {
        $department = Department::find($department_id);
        if(!$department){
            $new_department = New Department;
            $new_department->name = $department_id;
            $new_department->save();
            return $new_department->id;
        }
        else
            return $department->id;
    }

    public function update(NewsRequest $request)
    {
        $request->validated();
        $data = $request->all();
        $id = decrypt($data['id']);
        if($data['department_id'])
            $data['department_id'] = $this->saveDepartment($data['department_id']);
        return $this->_update($id, $data);
    }

}
