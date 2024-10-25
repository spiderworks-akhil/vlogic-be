<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
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

<h3>Bottom content</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading</label>
        <input type="text" name="content[works_heading1]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading1'])) value="{{ $obj->content['works_heading1'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>Short Description top </label>
        <input type="text" name="content[banner_title1]" class="form-control"
            @if ($obj->content && isset($obj->content['banner_title1'])) value="{{ $obj->content['banner_title1'] }}" @endif>
    </div>
    @php
    $media_id_works_first_featured_image =
        $obj->content && isset($obj->content['media_id_works_first_featured_image'])
            ? $obj->content['media_id_works_first_featured_image']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image]',
    'id' => 'media_id_works_first_featured_image',
    'display' => 'horizontal',
])

<div class="form-group col-md-12">
    <label>Heading</label>
    <input type="text" name="content[works_heading2]" class="form-control"
        @if ($obj->content && isset($obj->content['works_heading2'])) value="{{ $obj->content['works_heading2'] }}" @endif>
</div>
<div class="form-group col-md-12">
    <label>Short Description top </label>
    <input type="text" name="content[banner_title2]" class="form-control"
        @if ($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
</div>

<div class="form-group ">
    @php
    $media_id_works_video_thumb_img = ($obj->content && isset($obj->content['media_id_works_video_thumb_img']))?$obj->content['media_id_works_video_thumb_img']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_video_thumb_img, 'title'=>'Video Thumb  Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_video_thumb_img]', 'id'=>'media_id_works_video_thumb_img', 'display'=> 'horizontal'])
</div>
<div class="form-group">
    @php
    $media_id_works_video= ($obj->content && isset($obj->content['media_id_works_video']))?$obj->content['media_id_works_video']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_video, 'title'=>'Works Video', 'popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'content[media_id_works_video]', 'id'=>'media_id_works_video', 'display'=> 'horizontal'])
    <div class="form-group col-md-12">
    <textarea class="form-control" name="content[youtube_video_link]">@if ($obj->content && isset($obj->content['youtube_video_link'])){{$obj->content['youtube_video_link']}}@endif
    </textarea>

    </div>




</fieldset>



</div>

