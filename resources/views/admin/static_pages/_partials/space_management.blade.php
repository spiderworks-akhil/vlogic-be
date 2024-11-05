<div id="form-vertical" class="form-horizontal form-wizard-wrapper">


    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title0]" class="form-control"
                value="{{ $obj->content['banner_title0'] ?? '' }}">
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
    </fieldset>

    <!-- Head Section -->
    <h3>Head Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head Content</label>
            <input type="text" name="content[banner_title]" class="form-control"
                @if($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>challenges</label>
                <textarea name="content[section_description_first0]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first0']))
    {{ $obj->content['section_description_first0'] }}
    @endif
    </textarea>
            </div>
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
    <h3>Works Section</h3>
    <fieldset>
        @foreach (range(1, 6) as $index)
            <div class="form-group col-md-12">
                <label>Heading</label>
                <input type="text" name="content[works_heading_{{ $index }}]" class="form-control"
                    @if($obj->content && isset($obj->content['works_heading_' . $index]))
                        value="{{ $obj->content['works_heading_' . $index] }}"
                    @endif>
            </div>

            <div class="form-group col-md-12">
                <label>Short Description {{ $index }}</label>
                <textarea name="content[works_shortdescription_{{ $index }}]" class="form-control">
@if($obj->content && isset($obj->content['works_shortdescription_' . $index]))
{{ $obj->content['works_shortdescription_' . $index] }}
@endif
</textarea>
            </div>

            @php
                $featuredImage = $obj->content['media_id_works_first_featured_image' . $index] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $featuredImage,
                'title' => 'Works Featured Image ' . $index,
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_works_first_featured_image' . $index . ']',
                'id' => 'media_id_works_first_featured_image' . $index,
                'display' => 'horizontal',
            ])
        @endforeach
    </fieldset>

    <!-- Middle Section -->
    <h3>Middle Section</h3>
    <fieldset>
        @foreach (range(7, 8) as $index)
            <div class="form-group col-md-12">
                <label>Main Heading</label>
                <input type="text" name="content[works_heading_{{ $index }}]" class="form-control"
                    @if($obj->content && isset($obj->content['works_heading_' . $index]))
                        value="{{ $obj->content['works_heading_' . $index] }}"
                    @endif>
            </div>

            <div class="form-group col-md-12">
                <label>Short Description</label>
                <textarea name="content[works_shortdescription_{{ $index }}]" class="form-control">
@if($obj->content && isset($obj->content['works_shortdescription_' . $index]))
{{ $obj->content['works_shortdescription_' . $index] }}
@endif
</textarea>
            </div>

            @php
                $featuredImage = $obj->content['media_id_works_first_featured_image' . $index] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $featuredImage,
                'title' => 'Works Featured Image ' . $index,
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_works_first_featured_image' . $index . ']',
                'id' => 'media_id_works_first_featured_image' . $index,
                'display' => 'horizontal',
            ])
        @endforeach
    </fieldset>
</div>
