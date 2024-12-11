<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
            <textarea name="content[banner_title]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title'])) {{$obj->content['banner_title']}} @endif</textarea>
        </div>

        <div class="form-group ">
            <p>Image size-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

    </fieldset>
</div>
