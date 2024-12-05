<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
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
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription1]" class="form-control editor">
                {{ $obj->content['banner_shortdescription1'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <h3>Top Section </h3>
    <fieldset>
        @php
            $media_id_works_first_featured_image = $obj->content && isset($obj->content['media_id_works_first_featured_image'])
                ? $obj->content['media_id_works_first_featured_image']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first01]" class="form-control editor">
                    {{ $obj->content['section_description_first01'] ?? '' }}
                </textarea>
            </div>
        </div>
    </fieldset>

    <h3>Tracking Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title1]" class="form-control editor">
                {{ $obj->content['banner_title1'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_first_featured_image1 = $obj->content && isset($obj->content['media_id_works_first_featured_image1'])
                ? $obj->content['media_id_works_first_featured_image1']
                : null;
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

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first]" class="form-control editor">
                    {{ $obj->content['section_description_first'] ?? '' }}
                </textarea>
            </div>
        </div>
    </fieldset>

    <h3>Maintenance Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title2]" class="form-control editor">
                {{ $obj->content['banner_title2'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_first_featured_image2 = $obj->content && isset($obj->content['media_id_works_first_featured_image2'])
                ? $obj->content['media_id_works_first_featured_image2']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image2,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image2]',
            'id' => 'media_id_works_first_featured_image2',
            'display' => 'horizontal',
        ])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first1]" class="form-control editor">
                    {{ $obj->content['section_description_first1'] ?? '' }}
                </textarea>
            </div>
        </div>
    </fieldset>

    <h3>Management Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title3]" class="form-control editor">
                {{ $obj->content['banner_title3'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_first_featured_image3 = $obj->content && isset($obj->content['media_id_works_first_featured_image3'])
                ? $obj->content['media_id_works_first_featured_image3']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image3,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image3]',
            'id' => 'media_id_works_first_featured_image3',
            'display' => 'horizontal',
        ])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first2]" class="form-control editor">
                    {{ $obj->content['section_description_first2'] ?? '' }}
                </textarea>
            </div>
        </div>
    </fieldset>
</div>
