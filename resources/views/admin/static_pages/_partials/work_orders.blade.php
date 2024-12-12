    <div id="form-vertical" class="form-horizontal form-wizard-wrapper">
        <h3>Banner Section</h3>
        <fieldset>

            <div class="form-group col-md-12">
                <label>Title</label>
                <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
            </div>

            <div class="form-group ">
                <p>Image size-(width-1440px x height-300px)</p>
                @php
                $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
                @endphp
                @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
            </div>

            <div class="form-group col-md-12">
                <label>Banner Description</label>
                <textarea name="content[banner_description]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
            </div>

        </fieldset>


    <h3>Top Section </h3>
    <fieldset>

        {{-- <div class="form-group col-md-12">
            <label>title</label>
            <input type="text" name="content[banner_title0]" class="form-control" @if($obj->content && isset($obj->content['banner_title0'])) value="{{$obj->content['banner_title0']}}" @endif >
        </div> --}}


        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>
          <p>Image size-(width-550px x height-400px)</p>
        @php
        $media_id_works_first_featured_image =
            $obj->content && isset($obj->content['media_id_works_first_featured_image'])
                ? $obj->content['media_id_works_first_featured_image']
                : null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $media_id_works_first_featured_image,
        'title' => 'featured Image - (width-800px x height-800px) ',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image]',
        'id' => 'media_id_works_first_featured_image',
        'display' => 'horizontal',
    ])
    </fieldset>

    <h3> Regulatory section </h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>title</label>
            <textarea name="content[banner_title1]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title1'])) {{$obj->content['banner_title1']}} @endif</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first03]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first03'])) {{$obj->content['section_description_first03']}} @endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label>Youtube video link</label>
            @php
            $media_id_works_video = $obj->content['media_id_works_video'] ?? null;
            @endphp
            @include('admin.media.set_file', ['file' => $media_id_works_video, 'title' => 'Works Video', 'popup_type' => 'single_image', 'type' => 'Video', 'holder_attr' => 'content[media_id_works_video]', 'id' => 'media_id_works_video', 'display' => 'horizontal'])

            <input type="text" name="content[youtube_video_link]" class="form-control" @if($obj->content && isset($obj->content['youtube_video_link'])) value="{{$obj->content['youtube_video_link']}}" @endif >
        </div>

    </fieldset>

    </fieldset>
    <h3>Drawing Section</h3>
<fieldset>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Top Content</label>
            <textarea name="content[section_description_first04]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first04'])) {{$obj->content['section_description_first04']}} @endif</textarea>
        </div>
    </div>

    <div class="form-group col-md-12">
        <label>Title</label>
        <textarea name="content[banner_title01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title01'])) {{$obj->content['banner_title01']}} @endif</textarea>
    </div>

    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>GENERAL CMMS FUNCTIONS</label>
            <textarea name="content[section_description_first05]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first05'])) {{$obj->content['section_description_first05']}} @endif</textarea>
        </div>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first08]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first08'])) {{$obj->content['section_description_first08']}} @endif</textarea>
        </div>
    </div>
</fieldset>

    <h3>Solutions Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title02]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title02'])) {{$obj->content['banner_title02']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[banner_title05]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title05'])) {{$obj->content['banner_title05']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Solutions Heading 1</label>
            <textarea name="content[banner_title2]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title2'])) {{$obj->content['banner_title2']}} @endif</textarea>
        </div>
        <p>Image size-(width-450px x height-350px)</p>

        @php
        $media_id_works_first_featured_image1 = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image1,
            'title' => 'Banner Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal'
        ])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Solution Description 1</label>
                <textarea name="content[section_description_first06]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first06'])) {{$obj->content['section_description_first06']}} @endif</textarea>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label>Solutions Heading 2</label>
            <textarea name="content[banner_title3]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title3'])) {{$obj->content['banner_title3']}} @endif</textarea>
        </div>
        <p>Image size-(width-450px x height-350px)</p>
        @php
        $media_id_works_first_featured_image2 = $obj->content['media_id_works_first_featured_image2'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image2,
            'title' => 'Banner Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image2]',
            'id' => 'media_id_works_first_featured_image2',
            'display' => 'horizontal'
        ])
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Solution Description 2</label>
                <textarea name="content[section_description_first07]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first07'])) {{$obj->content['section_description_first07']}} @endif</textarea>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label>Solutions Heading 3</label>
            <textarea name="content[banner_title4]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title4'])) {{$obj->content['banner_title4']}} @endif</textarea>
        </div>
        <p>Image size-(width-350px x height-480px)</p>
        @php
        $media_id_works_first_featured_image3 = $obj->content['media_id_works_first_featured_image3'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image3,
            'title' => 'Banner Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image3]',
            'id' => 'media_id_works_first_featured_image3',
            'display' => 'horizontal'
        ])
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Solution Description 3</label>
                <textarea name="content[section_description_first001]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first001'])) {{$obj->content['section_description_first001']}} @endif</textarea>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>

    <h3>Customer Stories section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Listing module Heading</label>
            <textarea name="content[banner_title10]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title10'])) {{$obj->content['banner_title10']}} @endif</textarea>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[2])}}" class="btn btn-primary" target="_blank">Customer Stories Listing</a>
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
