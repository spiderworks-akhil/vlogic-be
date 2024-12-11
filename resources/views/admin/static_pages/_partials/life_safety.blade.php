    <div id="form-vertical" class="form-horizontal form-wizard-wrapper">
        <h3>Banner Section</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label> Title</label>
                <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
            </div>

            <div class="form-group col-md-12">
                <label>Banner Short Description</label>
                <textarea name="content[banner_description]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
            </div>

            <div class="form-group">
                @php
                    $media_id_banner_image = $obj->content['media_id_banner_image'] ?? null;
                @endphp
                @include('admin.media.set_file', [
                    'file' => $media_id_banner_image,
                    'title' => 'Banner Image - (width-800px x height-800px)',
                    'popup_type' => 'single_image',
                    'type' => 'Image',
                    'holder_attr' => 'content[media_id_banner_image]',
                    'id' => 'media_id_banner_image',
                    'display' => 'horizontal'
                ])
            </div>

            {{-- <div class="form-group col-md-12">
                <label>Top Description</label>
                <textarea name="content[banner_shortdescription]" class="form-control">
                    {{ $obj->content['banner_shortdescription'] ?? '' }}
                </textarea>
            </div> --}}

            {{-- <div class="form-group col-md-12">
                <label>Page url</label>
                <textarea name="url" class="form-control editor">{{ isset($obj->url) ? $obj->url : '' }}</textarea>
            </div> --}}

        </fieldset>

        <h3>Top Section </h3>
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
                $media_id_works_first_featured_image001 = $obj->content['media_id_works_first_featured_image001'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_works_first_featured_image001,
                'title' => 'Author Image',
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_works_first_featured_image001]',
                'id' => 'media_id_works_first_featured_image001',
                'display' => 'horizontal'
            ])

            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first1]" class="form-control editor">
                    {{ $obj->content['section_description_first1'] ?? '' }}
                </textarea>
            </div>

            @php
            $media_id_works_first_featured_image00 = $obj->content['media_id_works_first_featured_image00'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image00,
            'title' => 'Thumbline Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image00]',
            'id' => 'media_id_works_first_featured_image00',
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
                <textarea name="content[banner_title1]" class="form-control editor">{{ $obj->content['banner_title1'] ?? '' }}</textarea>
            </div>


            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first2]" class="form-control editor">
                    {{ $obj->content['section_description_first2'] ?? '' }}
                </textarea>
            </div>

            @php
            $media_id_works_first_featured_image0 = $obj->content['media_id_works_first_featured_image0'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image0,
            'title' => 'Thumbline Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image0]',
            'id' => 'media_id_works_first_featured_image0',
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
                <label>Building System Heading</label>
                <textarea name="content[banner_title01]" class="form-control editor">{{ $obj->content['banner_title01'] ?? '' }}</textarea>
            </div>


            <div class="form-group col-md-12">
                <label> Building System Description</label>
                <textarea name="content[section_description_first01]" class="form-control editor">
                    {{ $obj->content['section_description_first01'] ?? '' }}
                </textarea>
            </div>

            <div class="form-group col-md-12">
                <label>Prevention Systems Heading</label>
                <textarea name="content[banner_title02]" class="form-control editor">{{ $obj->content['banner_title02'] ?? '' }}</textarea>
            </div>


            <div class="form-group col-md-12">
                <label>Prevention Systems Description</label>
                <textarea name="content[section_description_first02]" class="form-control editor">
                    {{ $obj->content['section_description_first02'] ?? '' }}
                </textarea>
            </div>

            <div class="form-group col-md-12">
                <label>Bottom Content</label>
                <textarea name="content[section_description_first03]" class="form-control editor">
                    {{ $obj->content['section_description_first03'] ?? '' }}
                </textarea>
            </div>
        </fieldset>

        <h3>Safety Section</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label>Heading</label>
                <textarea name="content[banner_title03]" class="form-control editor">{{ $obj->content['banner_title03'] ?? '' }}</textarea>
            </div>


            <div class="form-group col-md-12">
                <label> Description</label>
                <textarea name="content[section_description_first04]" class="form-control editor">
                    {{ $obj->content['section_description_first04'] ?? '' }}
                </textarea>
            </div>

            @php
                $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_works_first_featured_image1,
                'title' => 'Safety Section Image - (width-800px x height-800px)',
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
            <div class="form-group col-md-12">
                <label>Footer content</label>
                <textarea name="content[banner_title005]" class="form-control editor">{{ $obj->content['banner_title005'] ?? '' }}</textarea>
            </div>

        </fieldset>

    <h3>Safety section 2</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading</label>
            <textarea name="content[banner_title004]" class="form-control editor">{{ $obj->content['banner_title004'] ?? '' }}</textarea>
        </div>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label> Description </label>
                <textarea name="content[section_description_first0]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first0']))
    {{ $obj->content['section_description_first0'] }}
    @endif
    </textarea>
            </div>
        </div>



        @php
        $media_id_works_first_featured_image01 = $obj->content['media_id_works_first_featured_image01'] ?? null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $media_id_works_first_featured_image01,
        'title' => 'Safety Section Image - (width-800px x height-800px)',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image01]',
        'id' => 'media_id_works_first_featured_image01',
        'display' => 'horizontal'
    ])




<div class="form-group col-md-12">
    <label>Section mobile Heading</label>
    <textarea name="content[banner_title05]" class="form-control editor">{{ $obj->content['banner_title05'] ?? '' }}</textarea>
</div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Short description </label>
            <textarea name="content[section_description_first001]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first001']))
    {{ $obj->content['section_description_first001'] }}
    @endif
    </textarea>
        </div>
    </div>



    @php
    $media_id_works_first_featured_image002 = $obj->content['media_id_works_first_featured_image002'] ?? null;
    @endphp
    @include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image002,
    'title' => 'Safety Section Image - (width-800px x height-800px)',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image002]',
    'id' => 'media_id_works_first_featured_image002',
    'display' => 'horizontal'
    ])






<div class="form-group col-md-12">
    <label>Section utility Heading</label>
    <textarea name="content[banner_title006]" class="form-control editor">{{ $obj->content['banner_title006'] ?? '' }}</textarea>
</div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Short description </label>
            <textarea name="content[section_description_first003]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first003']))
    {{ $obj->content['section_description_first003'] }}
    @endif
    </textarea>
        </div>
    </div>



    @php
    $media_id_works_first_featured_image03 = $obj->content['media_id_works_first_featured_image03'] ?? null;
    @endphp
    @include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image03,
    'title' => 'Safety Section Image - (width-800px x height-800px)',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image03]',
    'id' => 'media_id_works_first_featured_image03',
    'display' => 'horizontal'
    ])

    </fieldset>


        <h3>Final Section</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label>Final Section Heading</label>
                <textarea name="content[banner_title04]" class="form-control editor">{{ $obj->content['banner_title04'] ?? '' }}</textarea>
            </div>


            {{-- <div class="form-group col-md-12">
                <label>Final Section Description</label>
                <textarea name="content[final_section_description]" class="form-control editor">
                    {{ $obj->content['final_section_description'] ?? '' }}
                </textarea>
            </div> --}}

            <div class="form-group col-md-12">
                <label>Banner Video Link</label>
                <textarea name="content[banner_video_link]" class="form-control">
                    {{ $obj->content['banner_video_link'] ?? '' }}
                </textarea>
            </div>
        </fieldset>

        <h3>Featured Image (for home page)</h3>
    <fieldset>
        @php
        $featuredImage = $obj->content['media_id_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $featuredImage,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_featured_image]',
            'id' => 'media_id_featured_image',
            'display' => 'horizontal'
        ])

    </fieldset>
    </div>
