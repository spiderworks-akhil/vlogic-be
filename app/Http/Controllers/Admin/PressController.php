<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController as Controller;
use App\Http\Requests\Admin\PressRequest;
use App\Traits\ResourceTrait;
use App\Models\Press;
use App\Models\Department;
use Redirect;

class PressController extends Controller
{
    use ResourceTrait;

    public function __construct()
    {
        parent::__construct();

        $this->model = new Press;
        $this->route .= '.press';
        $this->views .= '.press';

        $this->permissions = ['list'=>'press_listing', 'create'=>'press_adding', 'edit'=>'press_editing', 'delete'=>'press_deleting'];
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
        return view($this->views . '.form')->with('obj', $this->model)->with('tab', 'basic');
    }

    public function edit($id, $tab="basic") {
        $id =  decrypt($id);
        if($obj = $this->model->find($id)){
            return view($this->views . '.form')->with('obj', $obj)->with('tab', $tab);
        } else {
            return $this->redirect('notfound');
        }
    }

    public function store(PressRequest $request)
    {
        $request->validated();
        $data = $request->all();

        return $this->_store($data);
    }


    public function update(PressRequest $request)
    {
        $request->validated();
        $data = $request->all();
        $id = decrypt($data['id']);
        return $this->_update($id, $data);
    }

}
