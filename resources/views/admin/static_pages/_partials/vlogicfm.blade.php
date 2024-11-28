
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
    <h3>Top Section</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Top Description</label>
                <textarea name="content[section_description_first]" class="form-control editor ">
                @if ($obj->content && isset($obj->content['section_description_first']))
                {{ $obj->content['section_description_first'] }}
                @endif
                </textarea>
              </div>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[30])}}" class="btn btn-primary" target="_blank"> Asset Linking listing
           </a>
            <input type="hidden" name="content[asset_linking]" value="30">  

           </div>




    </fieldset>
    <h3>Client</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Client Heading </label>
            <input type="text" name="content[client_heading]" class="form-control"
                @if ($obj->content && isset($obj->content['client_heading'])) value="{{ $obj->content['client_heading'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Client Subtitle </label>
            <input type="text" name="content[client_subtitle]" class="form-control"
                @if ($obj->content && isset($obj->content['client_subtitle'])) value="{{ $obj->content['client_subtitle'] }}" @endif>
        </div>
    </fieldset>


    <h3>Mid Content </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Midle content Heading</label>
            <input type="text" name="content[middle_heading]" class="form-control"
                @if ($obj->content && isset($obj->content['middle_heading'])) value="{{ $obj->content['middle_heading'] }}" @endif>
        </div>

        <div class="form-group col-md-12">
            <label>Midle content Subtitle</label>
            <input type="text" name="content[middle_subtitle]" class="form-control"
                @if ($obj->content && isset($obj->content['middle_subtitle'])) value="{{ $obj->content['middle_subtitle'] }}" @endif>
        </div>
    </fieldset>

</div>
