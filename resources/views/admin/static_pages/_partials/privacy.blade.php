<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>privacy section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>section head</label>
            <textarea name="content[banner_title5]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title5'])) {{$obj->content['banner_title5']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>section Short Description</label>
            <textarea name="content[banner_shortdescription5]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription5'])) {{$obj->content['banner_shortdescription5']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>section 1 title</label>
            <textarea name="content[banner_title6]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title6'])) {{$obj->content['banner_title6']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>section 1 Short Description</label>
            <textarea name="content[banner_shortdescription6]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription6'])) {{$obj->content['banner_shortdescription6']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>section 2 title</label>
            <textarea name="content[banner_title7]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title7'])) {{$obj->content['banner_title7']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>section 2 Short Description</label>
            <textarea name="content[banner_shortdescription7]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription7'])) {{$obj->content['banner_shortdescription7']}} @endif</textarea>
        </div>

    </fieldset>
</div>
