<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3> privacy section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>section  head</label>
            <input type="text" name="content[banner_title5]" class="form-control" @if($obj->content && isset($obj->content['banner_title5'])) value="{{$obj->content['banner_title5']}}" @endif >
        </div>



        <div class="form-group col-md-12">
            <label>section Short Description</label>
            <textarea name="content[banner_shortdescription5]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription5'])) {{$obj->content['banner_shortdescription5']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>section 1  title</label>
            <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
        </div>

        <div class="form-group col-md-12">
            <label>section 1 Short Description</label>
            <textarea name="content[banner_shortdescription6]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription6'])) {{$obj->content['banner_shortdescription6']}} @endif</textarea>
        </div>


        <div class="form-group col-md-12">
            <label>section 2  title</label>
            <input type="text" name="content[banner_title7]" class="form-control" @if($obj->content && isset($obj->content['banner_title7'])) value="{{$obj->content['banner_title7']}}" @endif >
        </div>



        <div class="form-group col-md-12">
            <label>section 2 Short Description</label>
            <textarea name="content[banner_shortdescription7]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription7'])) {{$obj->content['banner_shortdescription7']}} @endif</textarea>
        </div>

    </fieldset>

</div>
