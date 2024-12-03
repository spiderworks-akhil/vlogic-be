
<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Modal Section</h3>
    <fieldset>
        @php
$bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
@endphp
@include('admin.media.set_file', [
    'file' => $bannerImage,
    'title' => 'Background Image',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image]',
    'id' => 'media_id_works_first_featured_image',
    'display' => 'horizontal'
])
        <div class="form-group col-md-12">
            <label>Modal title</label>
            <textarea name="content[modal_title]" class="form-control editor">@if ($obj->content && isset($obj->content['modal_title'])) {{$obj->content['modal_title']}} @endif</textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Button name</label>
            <input type="text" name="content[button_name]" class="form-control" @if($obj->content && isset($obj->content['button_name'])) value="{{$obj->content['button_name']}}" @endif >
        </div>


<div class="form-group col-md-12">
    <label>Button Url</label>
    <input type="text" name="content[button_url]" class="form-control" @if($obj->content && isset($obj->content['button_url'])) value="{{$obj->content['button_url']}}" @endif >
        </div>
@php
$bannerImage = $obj->content['media_id_works_first_featured_image1'] ?? null;
@endphp
@include('admin.media.set_file', [
    'file' => $bannerImage,
    'title' => 'Pop Image',
    'popup_type' => 'single_image',
    'type' => 'Image',
    'holder_attr' => 'content[media_id_works_first_featured_image1]',
    'id' => 'media_id_works_first_featured_image1',
    'display' => 'horizontal'
])


        </div>
