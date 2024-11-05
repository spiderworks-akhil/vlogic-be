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
        <input type="text" name="content[banner_title1]" class="form-control"
            @if($obj->content && isset($obj->content['banner_title1'])) value="{{ $obj->content['banner_title1'] }}" @endif>
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
</fieldset>


</div>
