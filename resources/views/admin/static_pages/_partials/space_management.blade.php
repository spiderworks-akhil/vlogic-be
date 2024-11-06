<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Head Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head Content</label>
            <input type="text" name="content[banner_title]" class="form-control"
                @if($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description Top</label>
            <input type="text" name="content[banner_description]" class="form-control"
                @if($obj->content && isset($obj->content['banner_description'])) value="{{ $obj->content['banner_description'] }}" @endif>
        </div>

        @php
            $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => 'Banner Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])
    </fieldset>

    <!-- Works Section -->

<h3>Work section </h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head Content</label>
        <input type="text" name="content[banner_title2]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
    </div>


    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Speed-up </label>
            <textarea name="content[section_description_first0]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first0']))
{{ $obj->content['section_description_first0'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label> Real-time </label>
            <textarea name="content[section_description_first01]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first01']))
{{ $obj->content['section_description_first01'] }}
@endif
</textarea>
        </div>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label> Move Planning</label>
            <textarea name="content[section_description_first02]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first02']))
{{ $obj->content['section_description_first02'] }}
@endif
</textarea>
        </div>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label> Facility Drawings</label>
            <textarea name="content[section_description_first03]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first03']))
{{ $obj->content['section_description_first03'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Manage Occupant</label>
            <textarea name="content[section_description_first04]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first04']))
{{ $obj->content['section_description_first04'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Manage Furniture</label>
            <textarea name="content[section_description_first05]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first05']))
{{ $obj->content['section_description_first05'] }}
@endif
</textarea>
        </div>
    </div>
</fieldset>


<h3>Location Solutions </h3>
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

    {{-- <div class="form-group col-md-12">
        <label>Short Description</label>
        <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
    </div>
</fieldset> --}}
<h3>Solution listing</h3>
<fieldset>
    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[7])}}" class="btn btn-primary" target="_blank">Room solutions
       </a>
        <input type="hidden" name="content[]" value="7">  

           </div>
</fieldset>


</div>
