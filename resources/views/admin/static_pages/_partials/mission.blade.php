<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Banner title</label>
            <textarea name="content[banner_title]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title'])) {{$obj->content['banner_title']}} @endif</textarea>
        </div>

        <div class="form-group ">
            <p>Imagesize-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

    </fieldset>

    <h3>Extensive Service</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>content short Description</label>
            <textarea name="content[banner_title1]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title1'])) {{$obj->content['banner_title1']}} @endif</textarea>
        </div>
        <div class="form-group ">
            <p>Imagesize-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image1 = ($obj->content && isset($obj->content['media_id_banner_image1']))?$obj->content['media_id_banner_image1']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image1, 'title'=>' Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image1]', 'id'=>'media_id_banner_image1', 'display'=> 'horizontal'])
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Content 1</label>
                <textarea name="content[section_description_first1]" class="form-control editor">
@if ($obj->content && isset($obj->content['section_description_first1']))
{{ $obj->content['section_description_first1'] }}
@endif
</textarea>
            </div>
        </div>

    </fieldset>

    <h3>Mission</h3>
    <fieldset>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Content 2</label>
                <textarea name="content[section_description_first2]" class="form-control editor">
@if ($obj->content && isset($obj->content['section_description_first2']))
{{ $obj->content['section_description_first2'] }}
@endif
</textarea>
            </div>
        </div>
        <div class="form-group ">
            <p>Imagesize-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image2 = ($obj->content && isset($obj->content['media_id_banner_image2']))?$obj->content['media_id_banner_image2']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image2, 'title'=>' Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image2]', 'id'=>'media_id_banner_image2', 'display'=> 'horizontal'])
        </div>

    </fieldset>

    <h3>Loyalty</h3>
    <fieldset>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Content 3</label>
                <textarea name="content[section_description_first3]" class="form-control editor">
@if ($obj->content && isset($obj->content['section_description_first3']))
{{ $obj->content['section_description_first3'] }}
@endif
</textarea>
            </div>
        </div>
        <div class="form-group ">
            <p>Imagesize-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image3 = ($obj->content && isset($obj->content['media_id_banner_image3']))?$obj->content['media_id_banner_image3']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image3, 'title'=>' Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image3]', 'id'=>'media_id_banner_image3', 'display'=> 'horizontal'])
        </div>

    </fieldset>

</div>
