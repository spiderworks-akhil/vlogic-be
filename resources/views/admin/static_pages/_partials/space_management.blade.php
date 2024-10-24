<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Head section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head content </label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Short Description top  </label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Banner Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])


        </fieldset>
        {{-- <div class="form-group col-md-12">
            <label>Head content 2 </label>
            <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Short Description  </label>
            <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
        </div> --}}
        <h3>Works Section</h3>
<fieldset>

 <div class="form-group col-md-12">
      <label>Heading</label>
        <input type="text" name="content[works_heading]" class="form-control" @if($obj->content && isset($obj->content['works_heading'])) value="{{$obj->content['works_heading']}}" @endif>
</div>

<div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[works_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription'])) {{$obj->content['works_shortdescription']}} @endif</textarea>
        </div>

<div class="form-group">
    @php
    $media_id_works_first_featured_image1 = ($obj->content && isset($obj->content['media_id_works_first_featured_image1']))?$obj->content['media_id_works_first_featured_image1']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image1, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image1]', 'id'=>'media_id_works_first_featured_image1', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description 2</label>
    <textarea name="content[works_shortdescription1]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription1'])) {{$obj->content['works_shortdescription1']}} @endif</textarea>
</div>

<div class="form-group">
@php
$media_id_works_first_featured_image2 = ($obj->content && isset($obj->content['media_id_works_first_featured_image2']))?$obj->content['media_id_works_first_featured_image2']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image2, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image2]', 'id'=>'media_id_works_first_featured_image2', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description 3</label>
    <textarea name="content[works_shortdescription2]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription2'])) {{$obj->content['works_shortdescription2']}} @endif</textarea>
</div>

<div class="form-group">
@php
$media_id_works_first_featured_image3 = ($obj->content && isset($obj->content['media_id_works_first_featured_image3']))?$obj->content['media_id_works_first_featured_image3']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image3, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image3]', 'id'=>'media_id_works_first_featured_image3', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description 4</label>
    <textarea name="content[works_shortdescription4]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription4'])) {{$obj->content['works_shortdescription4']}} @endif</textarea>
</div>

<div class="form-group">
@php
$media_id_works_first_featured_image4 = ($obj->content && isset($obj->content['media_id_works_first_featured_image4']))?$obj->content['media_id_works_first_featured_image4']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image4, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image4]', 'id'=>'media_id_works_first_featured_image4', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description 5</label>
    <textarea name="content[works_shortdescription5]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription5'])) {{$obj->content['works_shortdescription5']}} @endif</textarea>
</div>

<div class="form-group">
@php
$media_id_works_first_featured_image5 = ($obj->content && isset($obj->content['media_id_works_first_featured_image5']))?$obj->content['media_id_works_first_featured_image5']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image5, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image5]', 'id'=>'media_id_works_first_featured_image5', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description 6</label>
    <textarea name="content[works_shortdescription6]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription6'])) {{$obj->content['works_shortdescription6']}} @endif</textarea>
</div>

<div class="form-group">
@php
$media_id_works_first_featured_image6 = ($obj->content && isset($obj->content['media_id_works_first_featured_image6']))?$obj->content['media_id_works_first_featured_image6']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image6, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image6]', 'id'=>'media_id_works_first_featured_image6', 'display'=> 'horizontal'])
</div>


</fieldset>




<h3>Middle Section</h3>
<fieldset>

 <div class="form-group col-md-12">
      <label> Main Heading</label>
        <input type="text" name="content[works_heading7]" class="form-control" @if($obj->content && isset($obj->content['works_heading7'])) value="{{$obj->content['works_heading7']}}" @endif>
</div>

<div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[works_shortdescription7]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription7'])) {{$obj->content['works_shortdescription7']}} @endif</textarea>
        </div>
<div class="form-group col-md-12">
            <label>Heading content</label>
              <input type="text" name="content[works_heading7]" class="form-control" @if($obj->content && isset($obj->content['works_heading7'])) value="{{$obj->content['works_heading7']}}" @endif>
</div>
<div class="form-group">
    @php
    $media_id_works_first_featured_image7 = ($obj->content && isset($obj->content['media_id_works_first_featured_image7']))?$obj->content['media_id_works_first_featured_image7']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image7, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image7]', 'id'=>'media_id_works_first_featured_image7', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
    <label>Short Description content</label>
    <textarea name="content[works_shortdescription7]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription7'])) {{$obj->content['works_shortdescription7']}} @endif</textarea>
</div>


<div class="form-group col-md-12">
    <label>Heading content 2</label>
      <input type="text" name="content[works_heading8]" class="form-control" @if($obj->content && isset($obj->content['works_heading8'])) value="{{$obj->content['works_heading8']}}" @endif>
</div>
<div class="form-group">
@php
$media_id_works_first_featured_image8 = ($obj->content && isset($obj->content['media_id_works_first_featured_image8']))?$obj->content['media_id_works_first_featured_image8']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image8, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image8]', 'id'=>'media_id_works_first_featured_image8', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
<label>Short Description content</label>
<textarea name="content[works_shortdescription9]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription9'])) {{$obj->content['works_shortdescription9']}} @endif</textarea>
</div>


<div class="form-group col-md-12">
    <label>Heading content 3</label>
      <input type="text" name="content[works_heading9]" class="form-control" @if($obj->content && isset($obj->content['works_heading9'])) value="{{$obj->content['works_heading9']}}" @endif>
</div>
<div class="form-group">
@php
$media_id_works_first_featured_image9 = ($obj->content && isset($obj->content['media_id_works_first_featured_image9']))?$obj->content['media_id_works_first_featured_image9']:null;
@endphp
@include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image9, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image9]', 'id'=>'media_id_works_first_featured_image9', 'display'=> 'horizontal'])
</div>

<div class="form-group col-md-12">
<label>Short Description content</label>
<textarea name="content[works_shortdescription9]" class="form-control ">@if($obj->content && isset($obj->content['works_shortdescription9'])) {{$obj->content['works_shortdescription9']}} @endif</textarea>
</div>


</fieldset>

<h3>Question Section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading content </label>
          <input type="text" name="content[works_heading10]" class="form-control" @if($obj->content && isset($obj->content['works_heading10'])) value="{{$obj->content['works_heading10']}}" @endif>
    </div>
    <div class="card-header">
        Question
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Bottom content</label>
            <textarea name="bottom_description" class="form-control editor" id="bottom_description">{{$obj->bottom_description}}</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Browser title</label>
            <input type="text" class="form-control" name="browser_title" id="browser_title" value="{{$obj->browser_title}}">
        </div>
    <div class="form-group">
        @php
        $media_id_works_first_featured_image10 = ($obj->content && isset($obj->content['media_id_works_first_featured_image10']))?$obj->content['media_id_works_first_featured_image10']:null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image10, 'title'=>'Works Featured Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image10]', 'id'=>'media_id_works_first_featured_image10', 'display'=> 'horizontal'])
        </div>
</fieldset>



</div>



