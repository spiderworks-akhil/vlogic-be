<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_description]" class="form-control editor">@if($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_title2]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title2'])) {{$obj->content['banner_title2']}} @endif</textarea>
        </div>

        <div class="form-group">
            <p>Image size-(width-1440px x height-300px)</p>
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image - (width-800px x height-800px)', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>

    <h3>Top Section</h3>
    <fieldset>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first'])) {{ $obj->content['section_description_first'] }} @endif</textarea>
            </div>
        </div>
        <p>Image size-(width-500px x height-300px)</p>
        @php
        $media_id_works_first_featured_image =
            $obj->content && isset($obj->content['media_id_works_first_featured_image'])
                ? $obj->content['media_id_works_first_featured_image']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'Banner  Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Proposition</label>
                <textarea name="content[section_description_first1]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first1'])) {{ $obj->content['section_description_first1'] }} @endif</textarea>
            </div>
        </div>

    </fieldset>

    <h3>Savings Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading</label>
            <textarea name="content[banner_title01]" class="form-control editor">{{ $obj->content['banner_title01'] ?? '' }}</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first2]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first2'])) {{ $obj->content['section_description_first2'] }} @endif</textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Components Heading</label>
            <textarea name="content[banner_title004]" class="form-control editor">{{ $obj->content['banner_title004'] ?? '' }}</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Components description</label>
            <textarea name="content[banner_title005]" class="form-control editor">{{ $obj->content['banner_title005'] ?? '' }}</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Service Heading</label>
            <textarea name="content[banner_title001]" class="form-control editor">{{ $obj->content['banner_title001'] ?? '' }}</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Services</label>
                <textarea name="content[section_description_first3]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first3'])) {{ $obj->content['section_description_first3'] }} @endif</textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Software Heading</label>
            <textarea name="content[banner_title002]" class="form-control editor">{{ $obj->content['banner_title002'] ?? '' }}</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Software Description</label>
                <textarea name="content[section_description_first4]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first4'])) {{ $obj->content['section_description_first4'] }} @endif</textarea>
            </div>
        </div>

    </fieldset>

    <h3>Solution Model section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading</label>
            <textarea name="content[banner_title02]" class="form-control editor">{{ $obj->content['banner_title02'] ?? '' }}</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first5]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first5'])) {{ $obj->content['section_description_first5'] }} @endif</textarea>
            </div>
        </div>
    </fieldset>

    <h3>Featured Image (for home page)</h3>
    <fieldset>
        <p>Image size-(width-500px x height-300px)</p>
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
