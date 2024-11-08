<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group col-md-12">
            <label>Banners title</label>
            <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
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

        <div class="form-group col-md-12">
            <label>Content Description</label>
            <textarea name="content[banner_shortdescription01]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription01'])) {{$obj->content['banner_shortdescription01']}} @endif</textarea>
        </div>
    </fieldset>






    <h3>Bottom content</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading</label>
        <input type="text" name="content[works_heading1]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading1'])) value="{{ $obj->content['works_heading1'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challenges</label>
            <textarea name="content[section_description_first]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first']))
    {{ $obj->content['section_description_first'] }}
    @endif
    </textarea>
        </div>
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




<div class="card-body row">
    <div class="form-group col-md-12">
        <label>Detail</label>
        <textarea name="content[section_description_first1]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first1']))
{{ $obj->content['section_description_first1'] }}
@endif
</textarea>
    </div>
</div>
<div class="form-group">
    @php
    $media_id_works_video= ($obj->content && isset($obj->content['media_id_works_video']))?$obj->content['media_id_works_video']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_video, 'title'=>'Works Video', 'popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'content[media_id_works_video]', 'id'=>'media_id_works_video', 'display'=> 'horizontal'])
    <div class="form-group col-md-12">


    </div>
</fieldset>



<h3>Section 2</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading</label>
        <input type="text" name="content[works_heading2]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading2'])) value="{{ $obj->content['works_heading2'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Content</label>
            <textarea name="content[section_description_first2]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first2']))
    {{ $obj->content['section_description_first2'] }}
    @endif
    </textarea>
        </div>
    </div>

@php

    $media_id_works_first_featured_image1 =
    $obj->content && isset($obj->content['media_id_works_first_featured_image1'])
        ? $obj->content['media_id_works_first_featured_image1']
        : null;
@endphp
@include('admin.media.set_file', [
'file' => $media_id_works_first_featured_image1,
'title' => 'Banner Image ',
'popup_type' => 'single_image',
'type' => 'Image',
'holder_attr' => 'content[media_id_works_first_featured_image1]',
'id' => 'media_id_works_first_featured_image1',
'display' => 'horizontal',
])




<div class="card-body row">
    <div class="form-group col-md-12">
        <label>Detail 2</label>
        <textarea name="content[section_description_first]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first2']))
{{ $obj->content['section_description_first2'] }}
@endif
</textarea>
    </div>
</div>
<div class="form-group">
    @php
    $media_id_works_video1= ($obj->content && isset($obj->content['media_id_works_video1']))?$obj->content['media_id_works_video']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_video1, 'title'=>'Works Video', 'popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'content[media_id_works_video1]', 'id'=>'media_id_works_video1', 'display'=> 'horizontal'])
    <div class="form-group col-md-12">


    </div>
</fieldset>






<h3>Challenges&Solution</h3>

<fieldset>

    <div class="form-group col-md-12">
        <label>Heading left</label>
        <input type="text" name="content[works_heading3]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading3'])) value="{{ $obj->content['works_heading3'] }}" @endif>
    </div>

    <div class="form-group col-md-12">
        <label>Heading right</label>
        <input type="text" name="content[works_heading03]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading03'])) value="{{ $obj->content['works_heading03'] }}" @endif>
    </div>


    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[9])}}" class="btn btn-primary" target="_blank">Service listing
       </a>
        <input type="hidden" name="content[challenges_solution]" value="9">  

       </div>
</fieldset>

<h3>Service Listing</h3>

<fieldset>

    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[8])}}" class="btn btn-primary" target="_blank">Service
       </a>
        <input type="hidden" name="content[Service]" value="8">  

       </div>

</fieldset>
<h3>Footer</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading</label>
        <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>short</label>
            <textarea name="content[section_description_first002]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first002']))
            {{ $obj->content['section_description_first002'] }}
            @endif
            </textarea>
          </div>
    </div>
    @php

    $media_id_works_first_featured_image =
    $obj->content && isset($obj->content['media_id_works_first_featured_image01'])
        ? $obj->content['media_id_works_first_featured_image01']
        : null;
@endphp
@include('admin.media.set_file', [
'file' => $media_id_works_first_featured_image,
'title' => 'Banner Image ',
'popup_type' => 'single_image',
'type' => 'Image',
'holder_attr' => 'content[media_id_works_first_featured_image01]',
'id' => 'media_id_works_first_featured_image01',
'display' => 'horizontal',
])
</fieldset>
    </div>
