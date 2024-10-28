<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
            <input type="text" name="content[banner_title8]" class="form-control" @if($obj->content && isset($obj->content['banner_title8'])) value="{{$obj->content['banner_title8']}}" @endif >
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


    <h3>Top section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Heading</label>
            <input type="text" name="content[section_title11]" class="form-control" @if($obj->content && isset($obj->content['section_title11'])) value="{{$obj->content['section_title11']}}" @endif>
        </div>
        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Advisory Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])

        <div class="form-group col-md-12">
            <label>Content Heading</label>
            <input type="text" name="content[section_title]" class="form-control" @if($obj->content && isset($obj->content['section_title'])) value="{{$obj->content['section_title']}}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label> Content Description  </label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>
        </fieldset>

        <h3>Second Section</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label>First Head Title  </label>
                <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
            </div>
            <div class="form-group col-md-12">
                <label>First Short Description  </label>
                <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
            </div>


            <div class="form-group col-md-12">
                <label>Second Head Title  </label>
                <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
            </div>
            <div class="form-group col-md-12">
                <label> Second Description  </label>
                <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
            </div>

        </fieldset>









    <h3>Government section</h3>
        <fieldset>

            <div class="form-group">
                <a href="{{route('admin.listing-items.index',[1])}}" class="btn btn-primary" target="_blank">Government Listing
               </a>
                <input type="hidden" name="content[government_listing]" value="1">  

             </div>

    </fieldset>

    <h3>Third Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Third Head Title  </label>
            <input type="text" name="content[banner_title3]" class="form-control" @if($obj->content && isset($obj->content['banner_title3'])) value="{{$obj->content['banner_title3']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Third Short Description  </label>
            <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_title4'])) value="{{$obj->content['banner_title4']}}" @endif >
        </div>


        <div class="form-group col-md-12">
            <label>Fourth Head Title  </label>
            <input type="text" name="content[banner_title5]" class="form-control" @if($obj->content && isset($obj->content['banner_title5'])) value="{{$obj->content['banner_title5']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label> Fourth Description  </label>
            <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
        </div>

    </fieldset>

</div>
