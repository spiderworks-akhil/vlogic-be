<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banner title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group ">
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control ">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

    </fieldset>
    <h3>Contact section</h3>
    <fieldset>


        <div class="form-group col-md-12">
            <label>Contact title</label>
            <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
        </div>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[29])}}" class="btn btn-primary" target="_blank">Addresses
           </a>
            <input type="hidden" name="content[address]" value="29">  

           </div>

        {{-- <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Place detail 1 </label>
                <textarea name="content[section_description_first]" class="form-control editor ">
        @if ($obj->content && isset($obj->content['section_description_first']))
        {{ $obj->content['section_description_first'] }}
        @endif
        </textarea>
            </div>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Place detail 2 </label>
                <textarea name="content[section_description_first1]" class="form-control editor ">
        @if ($obj->content && isset($obj->content['section_description_first1']))
        {{ $obj->content['section_description_first1'] }}
        @endif
        </textarea>
            </div>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Place detail 1 </label>
                <textarea name="content[section_description_first2]" class="form-control editor ">
        @if ($obj->content && isset($obj->content['section_description_first2']))
        {{ $obj->content['section_description_first2'] }}
        @endif
        </textarea>
            </div>
        </div> --}}

        <div class="form-group col-md-12">
            <label>Map </label>
            <textarea name="content[works_shortdescription]" class="form-control ">
        @if ($obj->content && isset($obj->content['works_shortdescription']))
        {{ $obj->content['works_shortdescription'] }}
        @endif
        </textarea>
        </div>


    </fieldset>

</div>
