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
            <textarea name="content[banner_shortdescription0]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription0'])) {{$obj->content['banner_shortdescription0']}} @endif</textarea>
        </div>

    </fieldset>

<h3> Section </h3>
<fieldset>

    <div class="form-group col-md-12">
        <label>title</label>
        <input type="text" name="content[banner_title0]" class="form-control" @if($obj->content && isset($obj->content['banner_title0'])) value="{{$obj->content['banner_title0']}}" @endif >
    </div>


    <div class="form-group col-md-12">
        <label>Short Description</label>
        <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
    </div>
    @php
    $media_id_works_first_featured_image =
        $obj->content && isset($obj->content['media_id_works_first_featured_image'])
            ? $obj->content['media_id_works_first_featured_image']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image,
    'title' => 'featured Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image]',
    'id' => 'media_id_works_first_featured_image',
    'display' => 'horizontal',
])
</fieldset>

<h3> Regulatory section </h3>
<fieldset>

    <div class="form-group col-md-12">
        <label>title</label>
        <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first03]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first03']))
            {{ $obj->content['section_description_first03'] }}
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
<h3>Drawing  Section</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first04]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first04']))
            {{ $obj->content['section_description_first04'] }}
            @endif
            </textarea>
          </div>
    </div>

    <div class="form-group col-md-12">
        <label>Title</label>
        <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
    </div>


    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>GENERAL CMMS FUNCTIONS</label>
            <textarea name="content[section_description_first05]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first05']))
            {{ $obj->content['section_description_first05'] }}
            @endif
            </textarea>
          </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first08]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first08']))
            {{ $obj->content['section_description_first08'] }}
            @endif
            </textarea>
          </div>
    </div>


</fieldset>
<h3>Solutions Section </h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>title</label>
        <input type="text" name="content[banner_title02]" class="form-control" @if($obj->content && isset($obj->content['banner_title02'])) value="{{$obj->content['banner_title02']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Description</label>
        <input type="text" name="content[banner_title05]" class="form-control" @if($obj->content && isset($obj->content['banner_title05'])) value="{{$obj->content['banner_title05']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Solutions Heading 1</label>
        <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
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
            <label>Solution Description 1 </label>
            <textarea name="content[section_description_first06]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first06']))
            {{ $obj->content['section_description_first06'] }}
            @endif
            </textarea>
          </div>
    </div>

    <div class="form-group col-md-12">
        <label>Solutions Heading 2</label>
        <input type="text" name="content[banner_title3]" class="form-control" @if($obj->content && isset($obj->content['banner_title3'])) value="{{$obj->content['banner_title3']}}" @endif >
    </div>
    @php
    $media_id_works_first_featured_image2 =
        $obj->content && isset($obj->content['media_id_works_first_featured_image2'])
            ? $obj->content['media_id_works_first_featured_image2']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image2,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image2]',
    'id' => 'media_id_works_first_featured_image2',
    'display' => 'horizontal',
])
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution Description 2 </label>
            <textarea name="content[section_description_first07]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first07']))
            {{ $obj->content['section_description_first07'] }}
            @endif
            </textarea>
          </div>
    </div>


    <div class="form-group col-md-12">
        <label>Solutions Heading 3</label>
        <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_title4'])) value="{{$obj->content['banner_title4']}}" @endif >
    </div>
    @php
    $media_id_works_first_featured_image3 =
        $obj->content && isset($obj->content['media_id_works_first_featured_image3'])
            ? $obj->content['media_id_works_first_featured_image3']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image3,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image3]',
    'id' => 'media_id_works_first_featured_image3',
    'display' => 'horizontal',
])
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Solution Description 3 </label>
            <textarea name="content[section_description_first001]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first001']))
            {{ $obj->content['section_description_first001'] }}
            @endif
            </textarea>
          </div>
    </div>

    <div class="form-group col-md-12">
        <label>Page url</label>
        <input type="text" name="url" class="form-control" value="{{ isset($obj->url) ? $obj->url : '' }}">
    </div>

</fieldset>


<h3>Customer Stories  section</h3>
<fieldset>

    <div class="form-group col-md-12">
        <label>Listing module Heading  </label>
        <input type="text" name="content[banner_title10]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
    </div>

    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[2])}}" class="btn btn-primary" target="_blank">Customer Stories Listing
       </a>
        <input type="hidden" name="content[government_listing]" value="1">  

       </div>

</fieldset>
</div>
