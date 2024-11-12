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
            <label>Short Description top </label>
            <input type="text" name="content[banner_title2]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="url" class="form-control" value="{{ isset($obj->url) ? $obj->url : '' }}">
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
            <label>Short description </label>
            <textarea name="content[section_description_first0]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first0']))
{{ $obj->content['section_description_first0'] }}
@endif
</textarea>
        </div>
    </div>







</fieldset>

<h3> service section</h3>
<fieldset>

    <div class="form-group col-md-12">
        <label>Listing module Heading  </label>
        <input type="text" name="content[banner_title10]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
    </div>

    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[7])}}" class="btn btn-primary" target="_blank">Service listing
       </a>
        <input type="hidden" name="content[service listing]" value="7">  

       </div>


</fieldset>


<h3>Challenges&Solution</h3>

<fieldset>

    {{-- <div class="form-group col-md-12">
        <label>Listing module Heading  </label>
        <input type="text" name="content[banner_title10]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
    </div>

    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[5])}}" class="btn btn-primary" target="_blank">Room Challenges
       </a>
        <input type="hidden" name="content[government_listing]" value="5">  

       </div> --}}

{{--
<div class="form-group col-md-12">
    <label>Listing module Heading  </label>
    <input type="text" name="content[banner_title10]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
</div> --}}

<div class="form-group col-md-12">
    <label>Table Heading left  </label>
    <input type="text" name="content[banner_title0]" class="form-control" @if($obj->content && isset($obj->content['banner_title0'])) value="{{$obj->content['banner_title0']}}" @endif >
</div>
<div class="form-group col-md-12">
    <label>Table Heading left   </label>
    <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
</div>
<div class="form-group">
    <a href="{{route('admin.listing-items.index',[6])}}" class="btn btn-primary" target="_blank">Challenges & solutions Listing
   </a>
    <input type="hidden" name="content[room solution]" value="6">  

       </div>
</fieldset>
<h3>Footer section </h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Title</label>
        <input type="text" name="content[banner_title001]" class="form-control" @if($obj->content && isset($obj->content['banner_title001'])) value="{{$obj->content['banner_title001']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Short Description</label>
        <textarea name="content[banner_shortdescription0]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription0'])) {{$obj->content['banner_shortdescription0']}} @endif</textarea>
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

</div>

