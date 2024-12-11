<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
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

        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control editor">
                {{ $obj->content['banner_shortdescription'] ?? '' }}
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription0]" class="form-control editor">
                {{ $obj->content['banner_shortdescription0'] ?? '' }}
            </textarea>
        </div>

        {{-- <div class="form-group col-md-12">
            <label>Page url</label>
            <textarea name="url" class="form-control editor">{{ isset($obj->url) ? $obj->url : '' }}</textarea>
        </div> --}}

    </fieldset>

    <h3>Top Section</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first]" class="form-control editor">
                @if ($obj->content && isset($obj->content['section_description_first']))
                {{ $obj->content['section_description_first'] }}
                @endif
                </textarea>
            </div>
        </div>
        @php
        $media_id_works_first_featured_image = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'set Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal'
        ])
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Point Description</label>
                <textarea name="content[section_description_first1]" class="form-control editor">
                @if ($obj->content && isset($obj->content['section_description_first1']))
                {{ $obj->content['section_description_first1'] }}
                @endif
                </textarea>
            </div>
        </div>
        @php
        $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image1,
            'title' => 'Author Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal'
        ])

        <div class="form-group">
            <label>Youtube video link</label>


            @php
            $media_id_works_video = $obj->content['media_id_works_video'] ?? null;
            @endphp
            @include('admin.media.set_file', ['file' => $media_id_works_video, 'title' => 'Works Video', 'popup_type' => 'single_image', 'type' => 'Video', 'holder_attr' => 'content[media_id_works_video]', 'id' => 'media_id_works_video', 'display' => 'horizontal'])


            <input type="text" name="content[youtube_video_link]" class="form-control" @if($obj->content && isset($obj->content['youtube_video_link'])) value="{{$obj->content['youtube_video_link']}}" @endif >
        </div>
    </fieldset>

    <h3>Management Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Requirements Heading</label>
            <textarea name="content[banner_title03]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title03'])) {{$obj->content['banner_title03']}} @endif</textarea>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[27])}}" class="btn btn-primary" target="_blank">Requirements Heading</a>
            <input type="hidden" name="content[virtual-plan-room-requirement]" value="27">
        </div>
    </fieldset>

    <h3>Customer Stories section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Listing module Heading</label>
            <textarea name="content[customer_stories]" class="form-control editor">@if($obj->content && isset($obj->content['customer_stories'])) {{$obj->content['customer_stories']}} @endif</textarea>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[3])}}" class="btn btn-primary" target="_blank">Customer Stories Listing</a>
            <input type="hidden" name="content[government_listing]" value="1">
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
