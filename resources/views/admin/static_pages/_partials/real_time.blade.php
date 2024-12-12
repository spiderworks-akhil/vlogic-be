<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group ">
            @php
            $media_id_banner_image = ($obj->content && isset($obj->content['media_id_banner_image']))?$obj->content['media_id_banner_image']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_banner_image, 'title'=>'Banner Image', 'popup_type'=>'single_image', 'type'=>'Image', 'holder_attr'=>'content[media_id_banner_image]', 'id'=>'media_id_banner_image', 'display'=> 'horizontal'])
        </div>

        <div class="form-group col-md-12">
            <label>Top Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription'])) {{$obj->content['banner_shortdescription']}} @endif</textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Banner Description</label>
            <textarea name="content[banner_description]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div>`

        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>

    <h3>Requirement section</h3>
    <fieldset>

        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[banner_shortdescription01]" class="form-control editor">@if($obj->content && isset($obj->content['banner_shortdescription01'])) {{$obj->content['banner_shortdescription01']}} @endif</textarea>
        </div>

        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[14])}}" class="btn btn-primary" target="_blank">Service listing</a>
            <input type="hidden" name="content[room service listing]" value="14">
        </div>

    </fieldset>




{{-- <h3>Solving Requirement Section </h3>
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








<h3>Direct Requirements section </h3>
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

</fieldset> --}}
<h3>Solving Requirement Section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Solving Stakeholder Requirements Title</label>
        <textarea name="content[banner_title_1]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title_1'])) {{$obj->content['banner_title_1']}} @endif</textarea>
    </div>
    <div class="form-group col-md-12">
        <label>Challenges heading</label>
        <textarea name="content[banner_title0]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title0'])) {{$obj->content['banner_title0']}} @endif</textarea>
    </div>
    <a href="{{ route('admin.listing-items.index', [23]) }}" class="btn btn-primary" target="_blank">Solving Requirement Section</a>
    <input type="hidden" name="content[solving-stakeholder]" value="23">
    <div class="form-group col-md-12">
        <label>Solution heading</label>
        <textarea name="content[banner_title04]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title04'])) {{$obj->content['banner_title04']}} @endif</textarea>
    </div>
    <a href="{{ route('admin.listing-items.index', [24]) }}" class="btn btn-primary" target="_blank">Solving Requirement solution</a>
    <input type="hidden" name="content[solving-stakeholder-solution]" value="24">
</fieldset>

<h3>Direct Requirements section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Need's heading</label>
        <textarea name="content[banner_title001]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title001'])) {{$obj->content['banner_title001']}} @endif</textarea>
    </div>
    <a href="{{ route('admin.listing-items.index', [25]) }}" class="btn btn-primary" target="_blank">Manager Requirement Section</a>
    <input type="hidden" name="content[manager-needs]" value="25">
    <div class="form-group col-md-12">
        <label>Solution heading</label>
        <textarea name="content[banner_title04]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title04'])) {{$obj->content['banner_title04']}} @endif</textarea>
    </div>
    <a href="{{ route('admin.listing-items.index', [26]) }}" class="btn btn-primary" target="_blank">Manager Requirement solution</a>
    <input type="hidden" name="content[manager-needs-solution]" value="26">
</fieldset>

<h3>End section</h3>
<fieldset>
    <div class="form-group col-md-12">
        <label>Solution Heading</label>
        <textarea name="content[banner_title03]" class="form-control editor">@if($obj->content && isset($obj->content['banner_title03'])) {{$obj->content['banner_title03']}} @endif</textarea>
    </div>
    <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Challenges</label>
            <textarea name="content[section_description_first03]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first03'])) {{$obj->content['section_description_first03']}} @endif</textarea>
        </div>
    </div>
    @php
    $media_id_works_first_featured_image02 = $obj->content && isset($obj->content['media_id_works_first_featured_image02']) ? $obj->content['media_id_works_first_featured_image02'] : null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $media_id_works_first_featured_image02,
        'title' => 'Banner Image',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image02]',
        'id' => 'media_id_works_first_featured_image02',
        'display' => 'horizontal'
    ])
</fieldset>

    <h3>Featured Image (for home page)</h3>
    <fieldset>
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
