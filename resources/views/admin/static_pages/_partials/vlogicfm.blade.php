
<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banner Top Title</label>
            <input type="text" name="content[banner_top_title]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_top_title'])) value="{{ $obj->content['banner_top_title'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Banner title</label>
            <input type="text" name="content[banner_title]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <input type="text" name="content[banner_description]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_description'])) value="{{ $obj->content['banner_description'] }}" @endif>
        </div>


        <div class="form-group col-md-12">
            <label>Button Name</label>
            <input type="text" name="content[button_name]" class="form-control"
                @if ($obj->content && isset($obj->content['button_name'])) value="{{ $obj->content['button_name'] }}" @endif>
        </div>

        <div class="form-group col-md-12">
            <label>Button url</label>
            <input type="text" name="content[button_url]" class="form-control"
                @if ($obj->content && isset($obj->content['button_url'])) value="{{ $obj->content['button_url'] }}" @endif>
        </div>
        @php
            $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => 'Banner Image - ( width-100px x height-100px )',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])

    </fieldset>
</div>
