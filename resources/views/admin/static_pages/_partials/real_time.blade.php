<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
        <fieldset>

        <div class="form-group col-md-12">
            <label>Banners title</label>
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
<h3>Requirement section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Short Description top </label>
        <input type="text" name="content[banner_title2]" class="form-control"
            @if ($obj->content && isset($obj->content['banner_title2'])) value="{{ $obj->content['banner_title2'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>title</label>
        <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[section_description_first]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first']))
            {{ $obj->content['section_description_first'] }}
            @endif
            </textarea>
          </div>
    </div>
    @php
    $media_id_works_first_featured_image =
        $obj->content && isset($obj->content['media_id_works_first_featured_image'])
            ? $obj->content['media_id_works_first_featured_image']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image]',
    'id' => 'media_id_works_first_featured_image',
    'display' => 'horizontal',
])
</fieldset>


<h3>Requirements </h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Head</label>
        <input type="text" name="content[banner_title4]" class="form-control" @if($obj->content && isset($obj->content['banner_title4'])) value="{{$obj->content['banner_title4']}}" @endif >
    </div>
    <div class="form-group col-md-12">
        <label>Short Description top </label>
        <input type="text" name="content[banner_title5]" class="form-control"
            @if ($obj->content && isset($obj->content['banner_title5'])) value="{{ $obj->content['banner_title5'] }}" @endif>
    </div>
    <div class="form-group col-md-12">
        <label>Challenges Heading</label>
        <input type="text" name="content[banner_title6]" class="form-control" @if($obj->content && isset($obj->content['banner_title6'])) value="{{$obj->content['banner_title6']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challenges</label>
            <textarea name="content[section_description_first1]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first1']))
            {{ $obj->content['section_description_first1'] }}
            @endif
            </textarea>
          </div>
    </div>



    <div class="form-group col-md-12">
        <label>Solution Heading</label>
        <input type="text" name="content[banner_title7]" class="form-control" @if($obj->content && isset($obj->content['banner_title7'])) value="{{$obj->content['banner_title7']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challengess</label>
            <textarea name="content[section_description_first2]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first2']))
            {{ $obj->content['section_description_first2'] }}
            @endif
            </textarea>
          </div>
    </div>
    @php
    $media_id_works_first_featured_image1 =
        $obj->content && isset($obj->content['media_id_works_first_featured_image1'])
            ? $obj->content['media_id_works_first_featured_image1']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image1,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image1]',
    'id' => 'media_id_works_first_featured_image1',
    'display' => 'horizontal',
])

</fieldset>

<h3>Requirements section 2</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Challenges Heading</label>
        <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challenges</label>
            <textarea name="content[section_description_first01]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first01']))
            {{ $obj->content['section_description_first01'] }}
            @endif
            </textarea>
          </div>
    </div>



    <div class="form-group col-md-12">
        <label>Solution Heading</label>
        <input type="text" name="content[banner_title02]" class="form-control" @if($obj->content && isset($obj->content['banner_title02'])) value="{{$obj->content['banner_title02']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challengess</label>
            <textarea name="content[section_description_first02]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first02']))
            {{ $obj->content['section_description_first02'] }}
            @endif
            </textarea>
          </div>
    </div>
    @php
    $media_id_works_first_featured_image01 =
        $obj->content && isset($obj->content['media_id_works_first_featured_image01'])
            ? $obj->content['media_id_works_first_featured_image01']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image01,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image01]',
    'id' => 'media_id_works_first_featured_image01',
    'display' => 'horizontal',
])

</fieldset>
<h3>End section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Solution Heading</label>
        <input type="text" name="content[banner_title03]" class="form-control" @if($obj->content && isset($obj->content['banner_title03'])) value="{{$obj->content['banner_title03']}}" @endif >
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challengess</label>
            <textarea name="content[section_description_first03]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first03']))
            {{ $obj->content['section_description_first03'] }}
            @endif
            </textarea>
          </div>
    </div>
    @php
    $media_id_works_first_featured_image02 =
        $obj->content && isset($obj->content['media_id_works_first_featured_image02'])
            ? $obj->content['media_id_works_first_featured_image02']
            : null;
@endphp
@include('admin.media.set_file', [
    'file' => $media_id_works_first_featured_image02,
    'title' => 'Banner Image ',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image02]',
    'id' => 'media_id_works_first_featured_image02',
    'display' => 'horizontal',
])

</fieldset>
    </div>
