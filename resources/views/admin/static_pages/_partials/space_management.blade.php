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
        <div class="form-group col-md-12">
            <label>Short description</label>
            <input type="text" name="content[banner_title2]" class="form-control"
                @if($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
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
        <input type="text" name="content[banner_title3]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title3'])) value="{{ $obj->content['banner_title3'] }}" @endif>
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
            <textarea name="content[section_description_first06]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first06']))
{{ $obj->content['section_description_first06'] }}
@endif
</textarea>
        </div>
    </div>
</fieldset>

<h3>Solution listing</h3>
<fieldset>
    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[7])}}" class="btn btn-primary" target="_blank">Room solutions
       </a>
        <input type="hidden" name="content[service listing]" value="7">  

           </div>
</fieldset>

<h3>key space</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head Content</label>
        <input type="text" name="content[banner_title0]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title0'])) value="{{ $obj->content['banner_title0'] }}" @endif>
    </div>
    @php
    $bannerImage = $obj->content['media_id_works_first_featured_image0'] ?? null;
@endphp
@include('admin.media.set_file', [
    'file' => $bannerImage,
    'title' => 'Set  Image',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image0]',
    'id' => 'media_id_works_first_featured_image0',
    'display' => 'horizontal',
])
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Questions</label>
            <textarea name="content[section_description_first00]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first00']))
{{ $obj->content['section_description_first00'] }}
@endif
</textarea>
        </div>
    </div>


</fieldset>
<h3> Table Section 1</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head Content</label>
        <input type="text" name="content[banner_title01]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title01'])) value="{{ $obj->content['banner_title01'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>Table Head title left</label>
        <input type="text" name="content[banner_title02]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title02'])) value="{{ $obj->content['banner_title02'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Requirements left </label>
            <textarea name="content[section_description_first07]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first07']))
{{ $obj->content['section_description_first07'] }}
@endif
</textarea>
        </div>
    </div>

    <div class="form-group col-md-12">
        <label>Table Head title right</label>
        <input type="text" name="content[banner_title07]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title07'])) value="{{ $obj->content['banner_title07'] }}" @endif>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Solutions right </label>
            <textarea name="content[section_description_first08]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first08']))
{{ $obj->content['section_description_first08'] }}
@endif
</textarea>
        </div>
    </div>

</fieldset>
<h3> Table Section 2</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head Content</label>
        <input type="text" name="content[banner_title03]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title03'])) value="{{ $obj->content['banner_title03'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>Table Head title left</label>
        <input type="text" name="content[banner_title04]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title04'])) value="{{ $obj->content['banner_title04'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Requirements left </label>
            <textarea name="content[section_description_first09]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first09']))
{{ $obj->content['section_description_first09'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="form-group col-md-12">
        <label>Table Head title Right</label>
        <input type="text" name="content[banner_title08]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title08'])) value="{{ $obj->content['banner_title08'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Solutions Right </label>
            <textarea name="content[section_description_first001]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first001']))
{{ $obj->content['section_description_first001'] }}
@endif
</textarea>
        </div>
    </div>

</fieldset>
<h3> Table Section 3</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head Content</label>
        <input type="text" name="content[banner_title05]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title05'])) value="{{ $obj->content['banner_title05'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>Table requirement title left</label>
        <input type="text" name="content[banner_title06]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title06'])) value="{{ $obj->content['banner_title06'] }}" @endif>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Requirements left </label>
            <textarea name="content[section_description_first002]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first002']))
{{ $obj->content['section_description_first002'] }}
@endif
</textarea>
        </div>
    </div>
    <div class="form-group col-md-12">
        <label>Table solution title right</label>
        <input type="text" name="content[banner_title09]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title09'])) value="{{ $obj->content['banner_title09'] }}" @endif>
    </div>


    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Table  Solutions left </label>
            <textarea name="content[section_description_first003]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first003']))
{{ $obj->content['section_description_first003'] }}
@endif
</textarea>
        </div>
    </div>

</fieldset>


<h3>Footer Section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Footer heading</label>
        <input type="text" name="content[banner_title001]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title001'])) value="{{ $obj->content['banner_title001'] }}" @endif>
    </div>

    <div class="form-group col-md-12">
        <label>Short Description</label>
        <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
    </div>


</fieldset>


</div>
