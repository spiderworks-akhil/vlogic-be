<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
<h3>Head section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head content </label>
        <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Short Description  </label>
        <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
    </div>

    <div class="form-group col-md-12">
        <label>Head title </label>
        <input type="text" name="content[banner_title2]" class="form-control" @if($obj->content && isset($obj->content['banner_title2'])) value="{{$obj->content['banner_title2']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Short Description  </label>
        <input type="text" name="content[banner_title3]" class="form-control" @if($obj->content && isset($obj->content['banner_title3'])) value="{{$obj->content['banner_title3']}}" @endif >
    </div>

    </fieldset>

    <h3>Section 2 product</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title Heading  </label>
            <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_title4'])) value="{{$obj->content['banner_title4']}}" @endif >
        </div>

        <div class="form-group col-md-12">
            <label>Short Description   </label>
            <input type="text" name="content[banner_title5]" class="form-control" @if($obj->content && isset($obj->content['banner_title5'])) value="{{$obj->content['banner_title5']}}" @endif >
        </div>
        @php
        $media_id_works_first_featured_image = ($obj->content && isset($obj->content['media_id_works_first_featured_image'])) ? $obj->content['media_id_works_first_featured_image'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image, 'title'=>'Advisory Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image]', 'id'=>'media_id_works_first_featured_image', 'display'=> 'horizontal'])

    </fieldset>


<h3>Solution Section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>  Solution Heading  </label>
        <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Solution description  </label>
        <input type="text" name="content[banner_title02]" class="form-control" @if($obj->content && isset($obj->content['banner_title02'])) value="{{$obj->content['banner_title02']}}" @endif >
    </div>
</fieldset>




    <h3>Facility</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title Heading  </label>
            <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Short Description   </label>
            <input type="text" name="content[banner_title7]" class="form-control" @if($obj->content && isset($obj->content['banner_title7'])) value="{{$obj->content['banner_title7']}}" @endif >
        </div>
    </fieldset>

    <h3>Facilities</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Facilities Heading 1 </label>
            <input type="text" name="content[banner_title8]" class="form-control" @if($obj->content && isset($obj->content['banner_title8'])) value="{{$obj->content['banner_title8']}}" @endif >
        </div>
        @php
        $media_id_works_first_featured_image1 = ($obj->content && isset($obj->content['media_id_works_first_featured_image1'])) ? $obj->content['media_id_works_first_featured_image1'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image1, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image1]', 'id'=>'media_id_works_first_featured_image1', 'display'=> 'horizontal'])






        <div class="form-group col-md-12">
            <label>Facilities Heading 2 </label>
            <input type="text" name="content[banner_title9]" class="form-control" @if($obj->content && isset($obj->content['banner_title9'])) value="{{$obj->content['banner_title9']}}" @endif >
        </div>
        @php
        $media_id_works_first_featured_image2 = ($obj->content && isset($obj->content['media_id_works_first_featured_image2'])) ? $obj->content['media_id_works_first_featured_image2'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image2, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image2]', 'id'=>'media_id_works_first_featured_image2', 'display'=> 'horizontal'])







        <div class="form-group col-md-12">
            <label>Facilities Heading 3 </label>
            <input type="text" name="content[banner_title10]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
        </div>
        @php
        $media_id_works_first_featured_image3 = ($obj->content && isset($obj->content['media_id_works_first_featured_image3'])) ? $obj->content['media_id_works_first_featured_image3'] : null;
        @endphp
        @include('admin.media.set_file', ['file'=>$media_id_works_first_featured_image3, 'title'=>'Facilities Image ', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_works_first_featured_image3]', 'id'=>'media_id_works_first_featured_image3', 'display'=> 'horizontal'])

    </fieldset>

</div>

