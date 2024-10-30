<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title]" class="form-control"
                value="{{ $obj->content['banner_title'] ?? '' }}">
        </div>

        <div class="form-group">
            @php
                $media_id_banner_image = $obj->content['media_id_banner_image'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_banner_image,
                'title' => 'Banner Image',
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_banner_image]',
                'id' => 'media_id_banner_image',
                'display' => 'horizontal'
            ])
        </div>

        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control">
                {{ $obj->content['banner_shortdescription'] ?? '' }}
            </textarea>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription1]" class="form-control">
                {{ $obj->content['banner_shortdescription1'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <h3>Section 2</h3>
    <fieldset>

        @php
        $media_id_works_first_featured_image =
            $obj->content && isset($obj->content['media_id_works_first_featured_image'])
                ? $obj->content['media_id_works_first_featured_image']
                : null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $media_id_works_first_featured_image,
        'title' => 'featured Image ',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image]',
        'id' => 'media_id_works_first_featured_image',
        'display' => 'horizontal',
    ])

<div class="form-group col-md-12">
    <label>Short Description</label>
    <textarea name="content[works_shortdescription]" class="form-control ">
@if ($obj->content && isset($obj->content['works_shortdescription']))
{{ $obj->content['works_shortdescription'] }}
@endif
</textarea>
</div>

@php
$media_id_works_first_featured_image1 =
    $obj->content && isset($obj->content['media_id_works_first_featured_image1'])
        ? $obj->content['media_id_works_first_featured_image1']
        : null;
@endphp
@include('admin.media.set_file', [
'file' => $media_id_works_first_featured_image1,
'title' => 'featured Image ',
'popup_type' => 'single_image',
'type' => 'Image',
'holder_attr' => 'content[media_id_works_first_featured_image1]',
'id' => 'media_id_works_first_featured_image1',
'display' => 'horizontal',
])


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
    </fieldset>

    <h3>Section 3</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Title</label>
            <input type="text" name="content[banner_title1]" class="form-control"
                value="{{ $obj->content['banner_title1'] ?? '' }}">
        </div>


        <div class="form-group col-md-12">
            <label>Sub Title</label>
            <input type="text" name="content[banner_title2]" class="form-control"
                value="{{ $obj->content['banner_title2'] ?? '' }}">
        </div>




<div class="card-body row">
    <div class="form-group col-md-12">
        <label>CMMS FEATURES</label>
        <textarea name="content[section_description_first1]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first1']))
{{ $obj->content['section_description_first1'] }}
@endif
</textarea>
    </div>
</div>





<div class="form-group col-md-12">
    <label>Sub Title</label>
    <input type="text" name="content[banner_title3]" class="form-control"
        value="{{ $obj->content['banner_title3'] ?? '' }}">
</div>




<div class="card-body row">
<div class="form-group col-md-12">
<label>CMMS FEATURES</label>
<textarea name="content[section_description_first2]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first2']))
{{ $obj->content['section_description_first2'] }}
@endif
</textarea>
</div>
</div>

    </fieldset>
    <h3>End Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>End Title</label>
            <input type="text" name="content[banner_title4]" class="form-control"
                value="{{ $obj->content['banner_title4'] ?? '' }}">
        </div>



<div class="card-body row">
    <div class="form-group col-md-12">
    <label>FEATURES</label>
    <textarea name="content[section_description_first3]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first3']))
    {{ $obj->content['section_description_first3'] }}
    @endif
    </textarea>
    </div>
    </div>
    </fieldset>

    </div>
