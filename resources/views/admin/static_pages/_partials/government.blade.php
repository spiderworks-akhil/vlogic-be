<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group ">
            <p>Image size-(width-100px x height-100px)</p>
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

    </fieldset>


    <h3>Top section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Heading</label>
            <textarea name="content[section_title11]" class="form-control editor">@if($obj->content && isset($obj->content['section_title11'])) {{ htmlspecialchars_decode($obj->content['section_title11']) }} @endif</textarea>
        </div>

        <p>Image size-(width-950px x height-650px)</p>
        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Advisory Image - (width-800px x height-800px) ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Types Sections</label>
                <textarea name="content[section_description_first]" class="form-control editor ">
        @if ($obj->content && isset($obj->content['section_description_first']))
        {{ $obj->content['section_description_first'] }}
        @endif
        </textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description  </label>
            <textarea name="content[banner_title01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title01'])) {{$obj->content['banner_title01']}} @endif</textarea>
        </div>
    </fieldset>

    <h3>Government section</h3>
        <fieldset>

            <div class="form-group col-md-12">
                <label>Listing module Heading  </label>
                <textarea name="content[banner_title10]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title10'])) {{$obj->content['banner_title10']}} @endif</textarea>
            </div>

            <div class="form-group">
                <a href="{{route('admin.listing-items.index',[1])}}" class="btn btn-primary" target="_blank">Government Listing
               </a>
                <input type="hidden" name="content[government_listing]" value="1">  

             </div>

    </fieldset>

<h3>Turnkey Services Section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Turnkey Services Heading  </label>
        <textarea name="content[banner_title11]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title11'])) {{$obj->content['banner_title11']}} @endif</textarea>
    </div>
    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[28])}}" class="btn btn-primary" target="_blank">Turnkey Services
       </a>
        <input type="hidden" name="content[turn-key]" value="28">  

       </div>
</fieldset>

    <h3>Third Section</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label> Detail Section</label>
                <textarea name="content[section_description_first01]" class="form-control editor">
                @if ($obj->content && isset($obj->content['section_description_first01']))
                {{ $obj->content['section_description_first01'] }}
                @endif
                </textarea>
              </div>
        </div>
    </fieldset>

</div>
