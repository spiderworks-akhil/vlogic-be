<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group">
            <p>Image size-(width-1440px x height-300px)</p>
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_description]" class="form-control editor">@if($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription01'])) {{$obj->content['banner_shortdescription01']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>

    <h3>Service Listing</h3>
    <fieldset>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[8])}}" class="btn btn-primary" target="_blank">Service</a>
            <input type="hidden" name="content[Service]" value="8">
        </div>
    </fieldset>

    <h3>Substantial Benefits</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Challenges Title</label>
            <textarea name="content[works_heading3]" class="form-control editor">@if ($obj->content && isset($obj->content['works_heading3'])) {{ $obj->content['works_heading3'] }} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Solution Title</label>
            <textarea name="content[works_heading03]" class="form-control editor">@if ($obj->content && isset($obj->content['works_heading03'])) {{ $obj->content['works_heading03'] }} @endif</textarea>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[9])}}" class="btn btn-primary" target="_blank">Service listing</a>
            <input type="hidden" name="content[challenges_solution]" value="9">
        </div>
    </fieldset>

    <h3>Footer</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Content</label>
                <textarea name="content[section_description_first002]" class="form-control editor">
                @if ($obj->content && isset($obj->content['section_description_first002']))
                {{ $obj->content['section_description_first002'] }}
                @endif
                </textarea>
            </div>
        </div>
        <p>Image size-(width-700px x height-700px)</p>
        @php

        $media_id_works_first_featured_image =
        $obj->content && isset($obj->content['media_id_works_first_featured_image01'])
            ? $obj->content['media_id_works_first_featured_image01']
            : null;
        @endphp
        @include('admin.media.set_file', [
        'file' => $media_id_works_first_featured_image,
        'title' => 'Banner Image - (width-800px x height-800px) ',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image01]',
        'id' => 'media_id_works_first_featured_image01',
        'display' => 'horizontal',
        ])
    </fieldset>

    <h3>Featured Image (for home page)</h3>
    <fieldset>
        <p>Image size-(width-700px x height-500px)</p>
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
