<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Banner Section</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Banner Top Title</label>
                <textarea name="content[banner_top_title]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['banner_top_title']))
                        {{ $obj->content['banner_top_title'] }}
                    @endif
                </textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Banner Title</label>
            <textarea name="content[banner_title]" class="form-control editor">
                @if ($obj->content && isset($obj->content['banner_title']))
                    {{ $obj->content['banner_title'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_description]" class="form-control editor">
                @if ($obj->content && isset($obj->content['banner_description']))
                    {{ $obj->content['banner_description'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button Name</label>
            <textarea name="content[button_name]" class="form-control editor">
                {{ optional($obj->content)['button_name'] }}
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button URL</label>
            <textarea name="content[button_url]" class="form-control editor">
                @if ($obj->content && isset($obj->content['button_url']))
                    {{ $obj->content['button_url'] }}
                @endif
            </textarea>
        </div>
        <p>Imagesize-(width-600px x height-600px)</p>
        @php
            $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => 'Banner Image - (width-100px x height-100px)',
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
                <textarea name="content[section_description_first]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first']))
                        {{ $obj->content['section_description_first'] }}
                    @endif
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.listing-items.index', [30]) }}" class="btn btn-primary" target="_blank">Asset Linking Listing</a>
            <input type="hidden" name="content[asset_linking]" value="30">
        </div>
    </fieldset>
    <h3>Client</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Client Heading</label>
            <textarea name="content[client_heading]" class="form-control editor">
                @if ($obj->content && isset($obj->content['client_heading']))
                    {{ $obj->content['client_heading'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Client Subtitle</label>
            <textarea name="content[client_subtitle]" class="form-control editor">
                @if ($obj->content && isset($obj->content['client_subtitle']))
                    {{ $obj->content['client_subtitle'] }}
                @endif
            </textarea>
        </div>
    </fieldset>
    <h3>Mid Content</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Middle Content Heading</label>
            <textarea name="content[middle_heading]" class="form-control editor">
                @if ($obj->content && isset($obj->content['middle_heading']))
                    {{ $obj->content['middle_heading'] }}
                @endif
            </textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Middle Content Subtitle</label>
                <textarea name="content[middle_subtitle]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['middle_subtitle']))
                        {{ $obj->content['middle_subtitle'] }}
                    @endif
                </textarea>
            </div>
        </div>
        @php
            $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image1,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal',
        ])
        <div class="form-group col-md-12">
            <label>Button Name</label>
            <textarea name="content[button_name1]" class="form-control editor">
                @if ($obj->content && isset($obj->content['button_name1']))
                    {{ $obj->content['button_name1'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button URL</label>
            <textarea name="content[button_url1]" class="form-control editor">
                @if ($obj->content && isset($obj->content['button_url1']))
                    {{ $obj->content['button_url1'] }}
                @endif
            </textarea>
        </div>
    </fieldset>
    <h3>Contact Section</h3>
    <fieldset>
        @php
            $contactImage = $obj->content['media_id_works_first_featured_image2'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $contactImage,
            'title' => 'Contact Image - (width-100px x height-100px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image2]',
            'id' => 'media_id_works_first_featured_image2',
            'display' => 'horizontal',
        ])
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[top_title]" class="form-control editor">
                @if ($obj->content && isset($obj->content['top_title']))
                    {{ $obj->content['top_title'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Sub Title</label>
            <textarea name="content[sub_title]" class="form-control editor">
                @if ($obj->content && isset($obj->content['sub_title']))
                    {{ $obj->content['sub_title'] }}
                @endif
            </textarea>
        </div>
    </fieldset>
    <h3>Footer</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Footer Title</label>
            <textarea name="content[footer_title]" class="form-control editor">
                @if ($obj->content && isset($obj->content['footer_title']))
                    {{ $obj->content['footer_title'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Footer Sub Title</label>
            <textarea name="content[footer_subtitle]" class="form-control editor">
                @if ($obj->content && isset($obj->content['footer_subtitle']))
                    {{ $obj->content['footer_subtitle'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button Name</label>
            <textarea name="content[button_name2]" class="form-control editor">
                @if ($obj->content && isset($obj->content['button_name2']))
                    {{ $obj->content['button_name2'] }}
                @endif
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button URL</label>
            <textarea name="content[button_url2]" class="form-control editor">
                @if ($obj->content && isset($obj->content['button_url2']))
                    {{ $obj->content['button_url2'] }}
                @endif
            </textarea>
        </div>
    </fieldset>
</div>
