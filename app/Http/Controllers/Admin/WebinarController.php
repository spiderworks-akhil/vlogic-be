<?php

namespace App\Http\Controllers\Admin;

use Redirect;
use App\Models\Webinar;
use App\Models\Department;
use App\Traits\ResourceTrait;
use App\Http\Requests\Admin\WebinarRequest;
use App\Http\Controllers\Admin\BaseController as Controller;

class WebinarController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Webinar;
        $this->route .= '.webinar';
        $this->views .= '.webinar';

        $this->permissions = ['list'=>'webinar_listing', 'create'=>'webinar_adding', 'edit'=>'webinar_editing', 'delete'=>'webinar_deleting'];
        $this->resourceConstruct();

    }

    protected function getCollection() {
        return $this->model->select('id', 'name', 'slug', 'priority', 'status', 'updated_at');
    }

    protected function setDTData($collection) {
        $route = $this->route;
        return $this->initDTData($collection)
            ->rawColumns(['action_edit', 'action_delete', 'status']);
    }

    protected function getSearchSettings(){}

    public function create()
    {

        return view($this->views . '.form')->with('obj', $this->model);
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

    public function store(WebinarRequest $request)
    {
        $request->validated();
        $data = $request->all();
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

    public function update(WebinarRequest $request)
    {
        $request->validated();
        $data = $request->all();
        $id = decrypt($data['id']);

        if($obj = $this->model->find($id)){

            $data['is_featured'] = isset($data['is_featured'])?1:0;
            $data['priority'] = (!empty($data['priority']))?$data['priority']:0;
            $data['published_on'] = !empty($data['published_on'])?$this->parse_date_time($data['published_on']):date('Y-m-d H:i:s');
        	$obj->update($data);

            return $this->redirect('updated','success', 'edit', [encrypt($obj->id)]);
        } else {
            return $this->redirect('notfound');
        }

        // return $this->_update($id, $data);
    }

}
