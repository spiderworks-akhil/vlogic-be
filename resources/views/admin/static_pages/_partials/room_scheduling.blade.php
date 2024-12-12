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
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>
        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_title2]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title2'])) {{$obj->content['banner_title2']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Banner Description</label>
            <textarea name="content[banner_description]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>

    <h3>Service Section</h3>
    <fieldset>

        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[13])}}" class="btn btn-primary" target="_blank">Service listing</a>
            <input type="hidden" name="content[room service listing]" value="13">
        </div>

    </fieldset>

    <h3>Challenges & Solution</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Challenges Heading</label>
            <textarea name="content[banner_title0]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title0'])) {{$obj->content['banner_title0']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Solutions Heading</label>
            <textarea name="content[banner_title01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title01'])) {{$obj->content['banner_title01']}} @endif</textarea>
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[6])}}" class="btn btn-primary" target="_blank">Challenges & Solutions Listing</a>
            <input type="hidden" name="content[room solution]" value="6">
        </div>

    </fieldset>

    <h3>Footer Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title001]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title001'])) {{$obj->content['banner_title001']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[banner_shortdescription0]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription0'])) {{$obj->content['banner_shortdescription0']}} @endif</textarea>
        </div>
        <p>Image size-(width-500px x height-300px)</p>
        @php
        $media_id_works_first_featured_image = $obj->content && isset($obj->content['media_id_works_first_featured_image']) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'Featured Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal'
        ])

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
