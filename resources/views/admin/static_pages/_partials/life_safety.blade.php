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
    </fieldset>

    <h3>Description Section 1</h3>
    <fieldset>
        @php
            $media_id_works_first_featured_image = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'First Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal'
        ])

        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first]" class="form-control editor">
                {{ $obj->content['section_description_first'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image1,
            'title' => 'Second Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal'
        ])

        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first1]" class="form-control editor">
                {{ $obj->content['section_description_first1'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_video_thumb_img = $obj->content['media_id_works_video_thumb_img'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_video_thumb_img,
            'title' => 'Video Thumbnail Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_video_thumb_img]',
            'id' => 'media_id_works_video_thumb_img',
            'display' => 'horizontal'
        ])

        <div class="form-group">
            @php
                $media_id_works_video = $obj->content['media_id_works_video'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_works_video,
                'title' => 'Works Video',
                'popup_type' => 'single_image',
                'type' => 'Video',
                'holder_attr' => 'content[media_id_works_video]',
                'id' => 'media_id_works_video',
                'display' => 'horizontal'
            ])

            <div class="form-group col-md-12">
                <label>YouTube Video Link</label>
                <textarea class="form-control" name="content[youtube_video_link]">
                    {{ $obj->content['youtube_video_link'] ?? '' }}
                </textarea>
            </div>
        </div>
    </fieldset>

    <h3>Requirements Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title1]" class="form-control"
                value="{{ $obj->content['banner_title1'] ?? '' }}">
        </div>

        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first2]" class="form-control editor">
                {{ $obj->content['section_description_first2'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_video_thumb_img = $obj->content['media_id_works_video_thumb_img'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_video_thumb_img,
            'title' => 'Video Thumbnail Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_video_thumb_img]',
            'id' => 'media_id_works_video_thumb_img',
            'display' => 'horizontal'
        ])

        @php
            $media_id_works_video = $obj->content['media_id_works_video'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_video,
            'title' => 'Works Video',
            'popup_type' => 'single_image',
            'type' => 'Video',
            'holder_attr' => 'content[media_id_works_video]',
            'id' => 'media_id_works_video',
            'display' => 'horizontal'
        ])

        <div class="form-group col-md-12">
            <label>YouTube Video Link</label>
            <textarea class="form-control" name="content[youtube_video_link]">
                {{ $obj->content['youtube_video_link'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <h3>System Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>System Heading</label>
            <input type="text" name="content[banner_title01]" class="form-control"
                value="{{ $obj->content['banner_title01'] ?? '' }}">
        </div>

        <div class="form-group col-md-12">
            <label>System Description</label>
            <textarea name="content[section_description_first01]" class="form-control editor">
                {{ $obj->content['section_description_first01'] ?? '' }}
            </textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Prevention Heading</label>
            <input type="text" name="content[banner_title02]" class="form-control"
                value="{{ $obj->content['banner_title02'] ?? '' }}">
        </div>

        <div class="form-group col-md-12">
            <label>Prevention Description</label>
            <textarea name="content[section_description_first02]" class="form-control editor">
                {{ $obj->content['section_description_first02'] ?? '' }}
            </textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Section Description</label>
            <textarea name="content[section_description_first03]" class="form-control editor">
                {{ $obj->content['section_description_first03'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <h3>Safety Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Safety Solution Heading</label>
            <input type="text" name="content[banner_title03]" class="form-control"
                value="{{ $obj->content['banner_title03'] ?? '' }}">
        </div>

        <div class="form-group col-md-12">
            <label>Safety Section Description</label>
            <textarea name="content[section_description_first04]" class="form-control editor">
                {{ $obj->content['section_description_first04'] ?? '' }}
            </textarea>
        </div>

        @php
            $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image1,
            'title' => 'Safety Section Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal'
        ])

        <div class="form-group col-md-12">
            <label>Post Safety Description</label>
            <textarea name="content[post_safety_description]" class="form-control editor">
                {{ $obj->content['post_safety_description'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <h3>Final Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Final Section Heading</label>
            <input type="text" name="content[banner_title04]" class="form-control"
                value="{{ $obj->content['banner_title04'] ?? '' }}">
        </div>

        <div class="form-group col-md-12">
            <label>Final Section Description</label>
            <textarea name="content[final_section_description]" class="form-control editor">
                {{ $obj->content['final_section_description'] ?? '' }}
            </textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Banner Video Link</label>
            <textarea name="content[banner_video_link]" class="form-control">
                {{ $obj->content['banner_video_link'] ?? '' }}
            </textarea>
        </div>
    </fieldset>
</div>
