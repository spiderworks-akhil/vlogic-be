<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title]" class="form-control"
                value="{{ $obj->content['banner_title'] ?? '' }}">
        </div>

        <div class="form-group">
            @php
                $media_id_banner_image = $obj->content['media_id_banner_image'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_banner_image,
                'title' => 'Banner Image',
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_banner_image]',
                'id' => 'media_id_banner_image',
                'display' => 'horizontal'
            ])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control">
                {{ $obj->content['banner_shortdescription'] ?? '' }}
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription1]" class="form-control">
                {{ $obj->content['banner_shortdescription1'] ?? '' }}
            </textarea>
        </div>
    </fieldset>
    <h3>Section 2</h3>
    <fieldset>
        @php
        $media_id_works_first_featured_image1 =
            $obj->content && isset($obj->content['media_id_works_first_featured_image1'])
                ? $obj->content['media_id_works_first_featured_image1']
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
 <div class="form-group col-md-12">
    <label>Short Description</label>
    <textarea name="content[banner_shortdescription2]" class="form-control">
        {{ $obj->content['banner_shortdescription2'] ?? '' }}
    </textarea>
</div>
    </fieldset>
</div>
