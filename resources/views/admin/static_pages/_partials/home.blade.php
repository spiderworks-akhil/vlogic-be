<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Head section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head content Description</label>
            <textarea name="content[banner_title]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title'])){{$obj->content['banner_title']}}@endif</textarea>
        </div>

        {{-- <div class="form-group col-md-12">
            <label>Short Description 1</label>
            <textarea name="content[banner_title1]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title1'])){{$obj->content['banner_title1']}}@endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Head title</label>
            <textarea name="content[banner_title2]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title2'])){{$obj->content['banner_title2']}}@endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_title3]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title3'])){{$obj->content['banner_title3']}}@endif</textarea>
        </div> --}}

        {{-- <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Section Spotlight</label>
                <textarea name="content[section_description_first]" class="form-control editor">
        @if ($obj->content && isset($obj->content['section_description_first']))
        {{ $obj->content['section_description_first'] }}
        @endif
        </textarea>
            </div>
        </div> --}}
    </fieldset>
    <h3>spotlight</h3>
    <fieldset>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[12])}}" class="btn btn-primary" target="_blank">spotlight Listing</a>
            <input type="hidden" name="content[spotlight]" value="12">
        </div>
    </fieldset>

    <h3>Section 2 product</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title Heading</label>
            <textarea name="content[banner_title4]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title4'])){{$obj->content['banner_title4']}}@endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_title5]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title5'])){{$obj->content['banner_title5']}}@endif</textarea>
        </div>
        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Advisory Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])
    </fieldset>

    <h3>Solution Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Solution Heading</label>
            <textarea name="content[banner_title01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title01'])){{$obj->content['banner_title01']}}@endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Solution description</label>
            <textarea name="content[banner_title02]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title02'])){{$obj->content['banner_title02']}}@endif</textarea>
        </div>
    </fieldset>

    <h3>Facility</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title Heading</label>
            <textarea name="content[banner_title6]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title6'])){{$obj->content['banner_title6']}}@endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_title7]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title7'])){{$obj->content['banner_title7']}}@endif</textarea>
        </div>
    </fieldset>

    <h3>Facilities</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Facilities Heading 1</label>
            <textarea name="content[banner_title8]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title8'])){{$obj->content['banner_title8']}}@endif</textarea>
        </div>
        @php
        $media_id_works_first_featured_image1 = ($obj->content && isset($obj->content['media_id_works_first_featured_image1'])) ? $obj->content['media_id_works_first_featured_image1'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image1, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image1]', 'id'=>'media_id_works_first_featured_image1', 'display'=> 'horizontal'])

        <div class="form-group col-md-12">
            <label>Facilities Heading 2</label>
            <textarea name="content[banner_title9]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title9'])){{$obj->content['banner_title9']}}@endif</textarea>
        </div>
        @php
        $media_id_works_first_featured_image2 = ($obj->content && isset($obj->content['media_id_works_first_featured_image2'])) ? $obj->content['media_id_works_first_featured_image2'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image2, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image2]', 'id'=>'media_id_works_first_featured_image2', 'display'=> 'horizontal'])

        <div class="form-group col-md-12">
            <label>Facilities Heading 3</label>
            <textarea name="content[banner_title10]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title10'])){{$obj->content['banner_title10']}}@endif</textarea>
        </div>
        @php
        $media_id_works_first_featured_image3 = ($obj->content && isset($obj->content['media_id_works_first_featured_image3'])) ? $obj->content['media_id_works_first_featured_image3'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image3, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image3]', 'id'=>'media_id_works_first_featured_image3', 'display'=> 'horizontal'])
    </fieldset>

    </div>
