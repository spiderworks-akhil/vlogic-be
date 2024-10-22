<div id="form-vertical" class="form-horizontal form-wizard-wrapper">


    <h3>Top section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label> Head Description  </label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>
        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Advisory Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])

        <div class="form-group col-md-12">
            <label>Content Heading</label>
            <input type="text" name="content[section1_title]" class="form-control" @if($obj->content && isset($obj->content['section2_title1'])) value="{{$obj->content['section1_title']}}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label> Content Description  </label>
            <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
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

</div>
