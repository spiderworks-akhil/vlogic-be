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
    <h3>Works Section</h3>
    <fieldset>
        <div>
            <div class="form-group col-md-12">
                <label>Advisory Board Name</label>
                <input type="text" name="content[section1_title]" class="form-control" @if($obj->content && isset($obj->content['section2_title1'])) value="{{$obj->content['section1_title']}}" @endif>
            </div>

            @php
            $media_id_works_first_featured_image1 = ($obj->content && isset($obj->content['media_id_works_first_featured_image1'])) ? $obj->content['media_id_works_first_featured_image1'] : null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image1, 'title'=>'Advisory Image 1', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image1]', 'id'=>'media_id_works_first_featured_image1', 'display'=> 'horizontal'])


            <div class="form-group col-md-12">
                <label>About Advisory Board</label>
                <input type="text" name="content[works_first_featured_img_heading1]" class="form-control" @if($obj->content && isset($obj->content['works_first_featured_img_heading1'])) value="{{$obj->content['works_first_featured_img_heading1']}}" @endif>
            </div>

        </div><br><br><br>

        <div>
            <div class="form-group col-md-12">
                <label>Advisory Board Name 2</label>
                <input type="text" name="content[section2_title]" class="form-control" @if($obj->content && isset($obj->content['section2_title1'])) value="{{$obj->content['section2_title']}}" @endif>
            </div>

            @php
            $media_id_works_first_featured_image2 = ($obj->content && isset($obj->content['media_id_works_first_featured_image2'])) ? $obj->content['media_id_works_first_featured_image2'] : null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image2, 'title'=>'Advisory Image 1', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image2]', 'id'=>'media_id_works_first_featured_image2', 'display'=> 'horizontal'])


            <div class="form-group col-md-12">
                <label>About Advisory Board</label>
                <input type="text" name="content[works_first_featured_img_heading2]" class="form-control" @if($obj->content && isset($obj->content['works_first_featured_img_heading2'])) value="{{$obj->content['works_first_featured_img_heading2']}}" @endif>
            </div>

        </div><br><br><br>


        <div>
            <div class="form-group col-md-12">
                <label>Advisory Board Name 3</label>
                <input type="text" name="content[section3_title]" class="form-control" @if($obj->content && isset($obj->content['section3_title1'])) value="{{$obj->content['section3_title']}}" @endif>
            </div>

            @php
            $media_id_works_first_featured_image3 = ($obj->content && isset($obj->content['media_id_works_first_featured_image3'])) ? $obj->content['media_id_works_first_featured_image3'] : null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image3, 'title'=>'Advisory Image 1', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[mmedia_id_works_first_featured_image3]', 'id'=>'media_id_works_first_featured_image3', 'display'=> 'horizontal'])


            <div class="form-group col-md-12">
                <label>About Advisory Board</label>
                <input type="text" name="content[works_first_featured_img_heading3]" class="form-control" @if($obj->content && isset($obj->content['wworks_first_featured_img_heading3'])) value="{{$obj->content['works_first_featured_img_heading3']}}" @endif>
            </div>

        </div><br><br><br>

        <div>
            <div class="form-group col-md-12">
                <label>Advisory Board Name 4</label>
                <input type="text" name="content[section4_title]" class="form-control" @if($obj->content && isset($obj->content['section4_title1'])) value="{{$obj->content['section4_title']}}" @endif>
            </div>

            @php
            $media_id_works_first_featured_image4 = ($obj->content && isset($obj->content['media_id_works_first_featured_image4'])) ? $obj->content['media_id_works_first_featured_image4'] : null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image4, 'title'=>'Advisory Image 1', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image4]', 'id'=>'media_id_works_first_featured_image4', 'display'=> 'horizontal'])


            <div class="form-group col-md-12">
                <label>About Advisory Board</label>
                <input type="text" name="content[works_first_featured_img_heading4]" class="form-control" @if($obj->content && isset($obj->content['wworks_first_featured_img_heading4'])) value="{{$obj->content['works_first_featured_img_heading4']}}" @endif>
            </div>

        </div><br><br><br>


    </fieldset>
</div>
