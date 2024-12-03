<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title'])) {{$obj->content['banner_title']}} @endif</textarea>
        </div>

        {{-- <div class="form-group col-md-12">
            <label>Banners title</label>
            <textarea name="content[banner_title2]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title2'])) {{$obj->content['banner_title2']}} @endif</textarea>
        </div> --}}

        <div class="form-group">
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription01'])) {{$obj->content['banner_shortdescription01']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Page url</label>
            <textarea name="url" class="form-control editor">@if(isset($obj->url)) {{$obj->url}} @endif</textarea>
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

</div>
