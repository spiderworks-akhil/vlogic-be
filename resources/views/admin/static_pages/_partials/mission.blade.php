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

    <h3>Extensive Service</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>content short Description  </label>
            <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
        </div>
        <div class="form-group ">
            @php
            $media_id_banner_image1 = ($obj->content && isset($obj->content['media_id_banner_image1']))?$obj->content['media_id_banner_image1']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image1, 'title'=>' Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image1]', 'id'=>'media_id_banner_image1', 'display'=> 'horizontal'])
        </div>
        <div class="form-group col-md-12">
            <label>Contact Heading</label>
            <input type="text" name="content[banner_title3]" class="form-control" @if($obj->content && isset($obj->content['banner_title3'])) value="{{$obj->content['banner_title3']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Contact Heading short Description</label>
            <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_title4'])) value="{{$obj->content['banner_title4']}}" @endif >
        </div>
    </fieldset>

    <h3>Mission</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>content short Description  </label>
            <input type="text" name="content[banner_title5]" class="form-control" @if($obj->content && isset($obj->content['banner_title5'])) value="{{$obj->content['banner_title5']}}" @endif >
        </div>
        <div class="form-group ">
            @php
            $media_id_banner_image2 = ($obj->content && isset($obj->content['media_id_banner_image2']))?$obj->content['media_id_banner_image2']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image2, 'title'=>' Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image2]', 'id'=>'media_id_banner_image2', 'display'=> 'horizontal'])
        </div>

    </fieldset>


    <h3>Loyalty </h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>content short Description  </label>
            <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
        </div>
        <div class="form-group ">
            @php
            $media_id_banner_image3 = ($obj->content && isset($obj->content['media_id_banner_image3']))?$obj->content['media_id_banner_image3']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image3, 'title'=>' Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image3]', 'id'=>'media_id_banner_image3', 'display'=> 'horizontal'])
        </div>

    </fieldset>


</div>
