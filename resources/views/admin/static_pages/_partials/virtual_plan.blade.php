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
        </div>   <div class="form-group col-md-12">
            <label> Short Description</label>
            <textarea name="content[banner_shortdescription0]" class="form-control">
                {{ $obj->content['banner_shortdescription0'] ?? '' }}
            </textarea>
        </div>
    </fieldset>
    <h3>Section 1</h3>
    <fieldset>
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
      <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Bullet point Description</label>
            <textarea name="content[section_description_first1]" class="form-control editor ">
            @if ($obj->content && isset($obj->content['section_description_first1']))
            {{ $obj->content['section_description_first1'] }}
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

<div class="form-group">
    @php
    $media_id_works_video= ($obj->content && isset($obj->content['media_id_works_video']))?$obj->content['media_id_works_video']:null;
    @endphp
    @include('admin.media.set_file', ['file'=>$media_id_works_video, 'title'=>'Works Video', 'popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'content[media_id_works_video]', 'id'=>'media_id_works_video', 'display'=> 'horizontal'])
    <div class="form-group col-md-12">
    <textarea class="form-control" name="content[youtube_video_link]">@if ($obj->content && isset($obj->content['youtube_video_link'])){{$obj->content['youtube_video_link']}}@endif
    </textarea>

    </div>
    </fieldset>
    <h3>Management  Section 2</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading </label>
            <input type="text" name="content[banner_title1]" class="form-control" @if($obj->content && isset($obj->content['banner_title1'])) value="{{$obj->content['banner_title1']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Description </label>
            <input type="text" name="content[banner_title01]" class="form-control" @if($obj->content && isset($obj->content['banner_title01'])) value="{{$obj->content['banner_title01']}}" @endif >
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Requirements Description 1</label>
                <textarea name="content[section_description_first2]" class="form-control editor ">
                @if ($obj->content && isset($obj->content['section_description_first2']))
                {{ $obj->content['section_description_first2'] }}
                @endif
                </textarea>
              </div>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Requirements Description 2</label>
                <textarea name="content[section_description_first3]" class="form-control editor ">
                @if ($obj->content && isset($obj->content['section_description_first3']))
                {{ $obj->content['section_description_first3'] }}
                @endif
                </textarea>
              </div>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Requirements Description 3</label>
                <textarea name="content[section_description_first4]" class="form-control editor ">
                @if ($obj->content && isset($obj->content['section_description_first4']))
                {{ $obj->content['section_description_first4'] }}
                @endif
                </textarea>
              </div>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Requirements Description 4</label>
                <textarea name="content[section_description_first5]" class="form-control editor ">
                @if ($obj->content && isset($obj->content['section_description_first5']))
                {{ $obj->content['section_description_first5'] }}
                @endif
                </textarea>
              </div>
        </div>
        <div class="form-group">
            @php
            $media_id_works_video1= ($obj->content && isset($obj->content['media_id_works_video1']))?$obj->content['media_id_works_video1']:null;
            @endphp
            @include('admin.media.set_file', ['file'=>$media_id_works_video1, 'title'=>'Works Video', 'popup_type'=>'single_image', 'type'=>'Video', 'holder_attr'=>'content[media_id_works_video1]', 'id'=>'media_id_works_video1', 'display'=> 'horizontal'])
            <div class="form-group col-md-12">
            <textarea class="form-control" name="content[youtube_video_link]">@if ($obj->content && isset($obj->content['youtube_video_link'])){{$obj->content['youtube_video_link']}}@endif
            </textarea>

            </div>
    </fieldset>

<h3>Customer Stories  section</h3>
<fieldset>

    <div class="form-group col-md-12">
        <label>Listing module Heading  </label>
        <input type="text" name="content[banner_title02]" class="form-control" @if($obj->content && isset($obj->content['banner_title10'])) value="{{$obj->content['banner_title10']}}" @endif >
    </div>

    <div class="form-group">
        <a href="{{route('admin.listing-items.index',[3])}}" class="btn btn-primary" target="_blank">Customer Stories Listing
       </a>
        <input type="hidden" name="content[government_listing]" value="1">  

       </div>
</div>
