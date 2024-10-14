<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banner title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group ">
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

    </fieldset>
    <h3>Contact sectio></h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Contact title</label>
            <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Place details 1 </label>
            <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Place details 2 </label>
            <input type="text" name="content[banner_title3]" class="form-control" @if($obj->content && isset($obj->content['banner_title3'])) value="{{$obj->content['banner_title3']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Place details 3 </label>
            <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_banner_title4title'])) value="{{$obj->content['banner_title4']}}" @endif >
        </div>
    </fieldset>

</div>
