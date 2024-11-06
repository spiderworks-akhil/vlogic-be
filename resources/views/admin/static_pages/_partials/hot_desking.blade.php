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
        <label>Heading</label>
        <input type="text" name="content[works_heading3]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading3'])) value="{{ $obj->content['works_heading3'] }}" @endif>
    </div>

    <div class="form-group col-md-12">
        <label>Short Description top </label>
        <input type="text" name="content[banner_title2]" class="form-control"
            @if ($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
    </div>


</fieldset>

<h3>challenges & Solution Section 1</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Heading content </label>
        <input type="text" name="content[works_heading01]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading01'])) value="{{ $obj->content['works_heading01'] }}" @endif>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first01]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first01']))
{{ $obj->content['section_description_first01'] }}
@endif
</textarea>
        </div>
    </div>
     <div class="form-group col-md-12">
        <label>Solution Heading content </label>
        <input type="text" name="content[works_heading02]" class="form-control"
            @if ($obj->content && isset($obj->content['works_heading02'])) value="{{ $obj->content['works_heading02'] }}" @endif>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first02]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first02']))
{{ $obj->content['section_description_first02'] }}
@endif
</textarea>
        </div>
    </div>
</fieldset>





<h3>challenges  & Solution Section 2</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first0]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first0']))
{{ $obj->content['section_description_first0'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first03]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first03']))
            {{ $obj->content['section_description_first03'] }}
            @endif
</textarea>
        </div>
    </div>
</fieldset>




<h3>challenges & Solution Section 3</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first04]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first04']))
            {{ $obj->content['section_description_first04'] }}
            @endif
            </textarea>
          </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first05]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first05']))
            {{ $obj->content['section_description_first05'] }}
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
        <textarea class="form-control" name="content[youtube_video_link]">@if ($obj->content && isset($obj->content['youtube_video_link'])){{$obj->content['youtube_video_link']}}@endif
        </textarea>

        </div>
</fieldset>





<h3>challenges & Solution Section 4</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first06]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first06']))
            {{ $obj->content['section_description_first06'] }}
            @endif
            </textarea>
          </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first07]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first07']))
            {{ $obj->content['section_description_first07'] }}
            @endif
</textarea>
        </div>
    </div>
</fieldset>
<h3>challenges & Solution Section 5</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first08]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first08']))
            {{ $obj->content['section_description_first08'] }}
            @endif
            </textarea>
          </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first09]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first09']))
            {{ $obj->content['section_description_first09'] }}
            @endif
</textarea>
        </div>
    </div>
</fieldset>



<h3>challenges & Solution Section 6</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>challenges</label>
            <textarea name="content[section_description_first00]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first00']))
            {{ $obj->content['section_description_first00'] }}
            @endif
            </textarea>
          </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution</label>
            <textarea name="content[section_description_first001]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first001']))
            {{ $obj->content['section_description_first001'] }}
            @endif
</textarea>
        </div>
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
