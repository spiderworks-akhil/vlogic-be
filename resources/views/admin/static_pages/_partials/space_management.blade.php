<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banner title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>
        <div class="form-group col-md-12">
            <label>Banner Description</label>
            <textarea name="content[banner_description]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_description'])) {{$obj->content['banner_description']}} @endif</textarea>
        </div>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Top Description</label>
                <textarea name="content[banner_title2]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title2'])) {{$obj->content['banner_title2']}} @endif</textarea>
            </div>
        </div>

        @php
        $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => 'Banner Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal'
        ])

      <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="content[url]" class="form-control" @if($obj->content && isset($obj->content['url'])) value="{{$obj->content['url']}}" @endif >
        </div>

    </fieldset>
    <h3>Space Management Use Case Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title_01]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title_01'])) {{$obj->content['banner_title_01']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [15]) }}" class="btn btn-primary" target="_blank">Space management cases</a>
        <input type="hidden" name="content[space-management-cases]" value="15">
    </fieldset>

    <h3>Location Based solution</h3>
    <fieldset>
        <a href="{{ route('admin.listing-items.index', [16]) }}" class="btn btn-primary" target="_blank">Space management location</a>
        <input type="hidden" name="content[space-management-location]" value="16">

        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title_05]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title_05'])) {{$obj->content['banner_title_05']}} @endif</textarea>
        </div>
    </fieldset>
    <h3>Key Space Management Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <textarea name="content[banner_title1]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title1'])) {{$obj->content['banner_title1']}} @endif</textarea>
        </div>

        @php
        $bannerImage = $obj->content['media_id_works_first_featured_image1'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => ' Image Image - (width-800px x height-800px)',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image1]',
            'id' => 'media_id_works_first_featured_image1',
            'display' => 'horizontal'
        ])

        <h3>Questions</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label>Questions title 1</label>
                <textarea name="content[banner_title5]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title5'])) {{$obj->content['banner_title5']}} @endif</textarea>
            </div>
            <div class="form-group col-md-12">
                <label>Questions title 2</label>
                <textarea name="content[banner_title3]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title3'])) {{$obj->content['banner_title3']}} @endif</textarea>
            </div>
            <div class="form-group col-md-12">
                <label>Questions title 3</label>
                <textarea name="content[banner_title4]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title4'])) {{$obj->content['banner_title4']}} @endif</textarea>
            </div>
            <div class="card-body row">
                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea name="content[section_description_first]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first'])) {{$obj->content['section_description_first']}} @endif</textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Footer</label>
                <textarea name="content[banner_title0]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title0'])) {{$obj->content['banner_title0']}} @endif</textarea>
            </div>
        </fieldset>
    </fieldset>

    <h3>Section What</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading</label>
            <textarea name="content[banner_title01]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title01'])) {{$obj->content['banner_title01']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [17]) }}" class="btn btn-primary" target="_blank">Space management Challenge</a>
        <input type="hidden" name="content[space-management-what-do-have]" value="17">
        <div class="form-group col-md-12">
            <label>Challenges heading</label>
            <textarea name="content[banner_title02]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title02'])) {{$obj->content['banner_title02']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [18]) }}" class="btn btn-primary" target="_blank">Space management Solution</a>
        <input type="hidden" name="content[space-management-what-do-have-solution]" value="18">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <textarea name="content[banner_title03]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title03'])) {{$obj->content['banner_title03']}} @endif</textarea>
        </div>
    </fieldset>

    <h3>Section Who</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading</label>
            <textarea name="content[banner_title04]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title04'])) {{$obj->content['banner_title04']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index',[19]) }}" class="btn btn-primary" target="_blank">Space management requirements</a>
        <input type="hidden" name="content[space-management-who-is-using-requirements]" value="19">
        <div class="form-group col-md-12">
            <label>Requirements heading</label>
            <textarea name="content[banner_title05]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title05'])) {{$obj->content['banner_title05']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [20]) }}" class="btn btn-primary" target="_blank">Space management Solution</a>
        <input type="hidden" name="content[space-management-who-is-using-solution]" value="20">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <textarea name="content[banner_title06]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title06'])) {{$obj->content['banner_title06']}} @endif</textarea>
        </div>
    </fieldset>

    <h3>Section Where</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading</label>
            <textarea name="content[banner_title08]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title08'])) {{$obj->content['banner_title08']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [21]) }}" class="btn btn-primary" target="_blank">Space management Customer Requirements</a>
        <input type="hidden" name="content[space-management-where-requirements]" value="21">
        <div class="form-group col-md-12">
            <label>Requirements heading</label>
            <textarea name="content[banner_title09]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title09'])) {{$obj->content['banner_title09']}} @endif</textarea>
        </div>
        <a href="{{ route('admin.listing-items.index', [22]) }}" class="btn btn-primary" target="_blank">Space management Customer Solution</a>
        <input type="hidden" name="content[space-management-where-solution]" value="22">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <textarea name="content[banner_title_1]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title_1'])) {{$obj->content['banner_title_1']}} @endif</textarea>
        </div>
    </fieldset>

    <h3>Footer Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading</label>
            <textarea name="content[banner_title001]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title001'])) {{$obj->content['banner_title001']}} @endif</textarea>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description</label>
                <textarea name="content[section_description_first1]" class="form-control editor">@if ($obj->content && isset($obj->content['section_description_first1'])) {{$obj->content['section_description_first1']}} @endif</textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Testimonial heading</label>
            <textarea name="content[banner_title_2]" class="form-control editor">@if ($obj->content && isset($obj->content['banner_title_2'])) {{$obj->content['banner_title_2']}} @endif</textarea>
        </div>
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
