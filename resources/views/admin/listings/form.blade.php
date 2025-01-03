<div class="settings-item w-100 confirm-wrap">
  <div class="row m-0">
     <form id="inputForm" data-validate=true class="w-100" method="POST" @if($obj->id) action="{{ route($route.'.update') }}" @else action="{{ route($route.'.store') }}" @endif enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" @if($obj->id) value="{{encrypt($obj->id)}}" @endif />
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$obj->name}}">
        </div>
        <div class="form-group">
          Configurations
          <hr/>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
              <label for="name">Title</label>
              <select class="form-control" name="title">
                <option value="No" @if($obj->title == "No") selected="selected" @endif >No</option>
                <option value="Yes" @if($obj->title == "Yes") selected="selected" @endif>Yes</option>
              </select>
          </div>
          <div class="form-group col-md-6">
              <label for="name">Short Description</label>
              <select class="form-control" name="short_description">
                <option value="No" @if($obj->short_description == "No") selected="selected" @endif >No</option>
                <option value="Yes" @if($obj->short_description == "Yes") selected="selected" @endif>Yes</option>
              </select>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Content Description</label>
            <select class="form-control" name="content">
              <option value="No" @if($obj->content == "No") selected="selected" @endif >No</option>
              <option value="Yes" @if($obj->content == "Yes") selected="selected" @endif>Yes</option>
            </select>
         </div>


          <div class="form-group col-md-6">
            <label for="name">Url</label>
            <select class="form-control" name="custom_url">
              <option value="No" @if($obj->custom_url == "No") selected="selected" @endif >No</option>
              <option value="Yes" @if($obj->custom_url == "Yes") selected="selected" @endif>Yes</option>
            </select>
         </div>




          <div class="form-group col-md-6">
              <label for="name">Detailed Description</label>
              <select class="form-control" name="detailed_description">
                <option value="No" @if($obj->detailed_description == "No") selected="selected" @endif >No</option>
                <option value="Yes" @if($obj->detailed_description == "Yes") selected="selected" @endif>Yes</option>
              </select>
          </div>

          <div class="form-group col-md-6">
            <label for="name">Youtube link</label>
            <select class="form-control" name="youtube_link">
              <option value="No" @if($obj->youtube_link == "No") selected="selected" @endif >No</option>
              <option value="Yes" @if($obj->youtube_link == "Yes") selected="selected" @endif>Yes</option>
            </select>
         </div>
          <div class="form-group col-md-6">
              <label for="name">Icon</label>
              <select class="form-control" name="icon">
                <option value="No" @if($obj->icon == "No") selected="selected" @endif >No</option>
                <option value="Yes" @if($obj->icon == "Yes") selected="selected" @endif>Yes</option>
              </select>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Solutions</label>
            <select class="form-control" name="solution">
              <option value="No" @if($obj->solution == "No") selected="selected" @endif >No</option>
              <option value="Yes" @if($obj->solution == "Yes") selected="selected" @endif>Yes</option>
            </select>
         </div>

          <div class="form-group col-md-6">
              <label for="name">Image</label>
              <select class="form-control" name="image">
                <option value="No" @if($obj->image == "No") selected="selected" @endif >No</option>
                <option value="Yes" @if($obj->image == "Yes") selected="selected" @endif>Yes</option>
              </select>
          </div>
          <div class="form-group col-md-6">
            <label for="name">Challenges</label>
            <select class="form-control" name="challenges">
              <option value="No" @if($obj->challenges == "No") selected="selected" @endif >No</option>
              <option value="Yes" @if($obj->challenges == "Yes") selected="selected" @endif>Yes</option>
            </select>
         </div>

         </div>
         <button type="button" id="webadmin-ajax-form-submit-btn" class="btn btn-primary float-right">Submit</button>
     </form>
  </div>
</div>
