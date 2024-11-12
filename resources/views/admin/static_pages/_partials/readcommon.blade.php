<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Banner Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif>
        </div>

        <div class="form-group">
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image'])) ? $obj->content['media_id_banner_image'] : null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>




    </fieldset>


    <h3>Section</h3>
    <fieldset>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Detail section Description</label>
                <textarea name="content[section_description_first]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first']))
    {{ $obj->content['section_description_first'] }}
    @endif
    </textarea>
            </div>
        </div>




        @php
        $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $bannerImage,
        'title' => ' Image',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image]',
        'id' => 'media_id_works_first_featured_image',
        'display' => 'horizontal',
    ])

    </fieldset>

</div>
