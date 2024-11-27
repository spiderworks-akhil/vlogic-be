<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banner title</label>
            <input type="text" name="content[banner_title]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <input type="text" name="content[banner_description]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_description'])) value="{{ $obj->content['banner_description'] }}" @endif>
        </div>


        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Top Description </label>
                <textarea name="content[banner_title2]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['banner_title2']))
{{ $obj->content['banner_title2'] }}
@endif
    </textarea>
            </div>
        </div>




        @php
            $bannerImage = $obj->content['media_id_works_first_featured_image'] ?? null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $bannerImage,
            'title' => 'Banner Image',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])
        <div class="form-group col-md-12">
            <label>Page url</label>
            <input type="text" name="url" class="form-control" value="{{ isset($obj->url) ? $obj->url : '' }}">
        </div>
    </fieldset>

    <h3>Space Management Use Case Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title_01]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title_01'])) value="{{ $obj->content['banner_title_01'] }}" @endif>
        </div>
        <a href="{{ route('admin.listing-items.index', [15]) }}" class="btn btn-primary" target="_blank">Space
            management cases</a>
        <input type="hidden" name="content[space-management-cases]" value="15">
    </fieldset>

    <h3>Location Based solution</h3>
    <fieldset>
        <a href="{{ route('admin.listing-items.index', [16]) }}" class="btn btn-primary" target="_blank">Space
            management location</a>
        <input type="hidden" name="content[space-management-location]" value="16">

        <div class="form-group col-md-12">
            <label>Title</label>
            <input type="text" name="content[banner_title_05]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title_05'])) value="{{ $obj->content['banner_title_05'] }}" @endif>
        </div>
    </fieldset>


    <h3>Key Space Management Section </h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label> Title</label>
            <input type="text" name="content[banner_title1]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title1'])) value="{{ $obj->content['banner_title1'] }}" @endif>
        </div>

        @php
        $bannerImage = $obj->content['media_id_works_first_featured_image1'] ?? null;
    @endphp
    @include('admin.media.set_file', [
        'file' => $bannerImage,
        'title' => ' Image',
        'popup_type' => 'single_image',
        'type' => 'Image',
        'holder_attr' => 'content[media_id_works_first_featured_image1]',
        'id' => 'media_id_works_first_featured_image1',
        'display' => 'horizontal',
    ])

        <h3>Questions</h3>
        <fieldset>
            <div class="form-group col-md-12">
                <label>Questions title 1</label>
                <input type="text" name="content[banner_title5]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title5'])) value="{{ $obj->content['banner_title5'] }}" @endif>
            </div>
            <div class="form-group col-md-12">
                <label>Questions title 2</label>
                <input type="text" name="content[banner_title3]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title3'])) value="{{ $obj->content['banner_title3'] }}" @endif>
            </div>
            <div class="form-group col-md-12">
                <label>Questions title 3</label>
                <input type="text" name="content[banner_title4]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title4'])) value="{{ $obj->content['banner_title4'] }}" @endif>
            </div>
            <div class="card-body row">
                <div class="form-group col-md-12">
                    <label>Description </label>
                    <textarea name="content[section_description_first]" class="form-control editor ">
        @if ($obj->content && isset($obj->content['section_description_first']))
{{ $obj->content['section_description_first'] }}
@endif
        </textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Footer</label>
                <input type="text" name="content[banner_title0]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title0'])) value="{{ $obj->content['banner_title0'] }}" @endif>
            </div>
        </fieldset>
    </fieldset>
    <h3>Section what</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading </label>
            <input type="text" name="content[banner_title01]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title01'])) value="{{ $obj->content['banner_title01'] }}" @endif>
        </div>
        <a href="{{ route('admin.listing-items.index', [17]) }}" class="btn btn-primary" target="_blank">Space
            management Challenge</a>
        <input type="hidden" name="content[space-management-what-do-have]" value="17">
        <div class="form-group col-md-12">
            <label>Challenges heading</label>
            <input type="text" name="content[banner_title02]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title02'])) value="{{ $obj->content['banner_title02'] }}" @endif>
        </div>

        <a href="{{ route('admin.listing-items.index', [18]) }}" class="btn btn-primary" target="_blank">Space
            management Solution</a>
        <input type="hidden" name="content[space-management-what-do-have-solution]" value="18">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <input type="text" name="content[banner_title03]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title03'])) value="{{ $obj->content['banner_title03'] }}" @endif>
        </div>
    </fieldset>



    <h3>Section Who</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading </label>
            <input type="text" name="content[banner_title04]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title04'])) value="{{ $obj->content['banner_title04'] }}" @endif>
        </div>
        <a href="{{ route('admin.listing-items.index',[19]) }}" class="btn btn-primary" target="_blank">Space
            management requirements</a>
        <input type="hidden" name="content[space-management-who-is-using-requirements]" value="19">
        <div class="form-group col-md-12">
            <label>Requirements heading</label>
            <input type="text" name="content[banner_title05]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title05'])) value="{{ $obj->content['banner_title05'] }}" @endif>
        </div>

        <a href="{{ route('admin.listing-items.index', [20]) }}" class="btn btn-primary" target="_blank">Space
            management Solution</a>
        <input type="hidden" name="content[space-management-who-is-using-solution]" value="20">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <input type="text" name="content[banner_title06]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title06'])) value="{{ $obj->content['banner_title06'] }}" @endif>
        </div>
    </fieldset>


    <h3>Section Where</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Main Heading </label>
            <input type="text" name="content[banner_title08]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title08'])) value="{{ $obj->content['banner_title08'] }}" @endif>
        </div>
        <a href="{{ route('admin.listing-items.index', [21]) }}" class="btn btn-primary" target="_blank">Space
            management Customer Requirements</a>
        <input type="hidden" name="content[space-management-where-requirements]" value="21">
        <div class="form-group col-md-12">
            <label>Requirements heading</label>
            <input type="text" name="content[banner_title09]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title09'])) value="{{ $obj->content['banner_title09'] }}" @endif>
        </div>

        <a href="{{ route('admin.listing-items.index', [22]) }}" class="btn btn-primary" target="_blank">Space
            management Customer Solution</a>
        <input type="hidden" name="content[space-management-where-solution]" value="22">
        <div class="form-group col-md-12">
            <label>Solution heading</label>
            <input type="text" name="content[banner_title_1]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title_1'])) value="{{ $obj->content['banner_title_1'] }}" @endif>
        </div>
    </fieldset>






















    <h3>Footer Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Heading</label>
            <input type="text" name="content[banner_title001]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title001'])) value="{{ $obj->content['banner_title001'] }}" @endif>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Description </label>
                <textarea name="content[section_description_first1]" class="form-control editor ">
    @if ($obj->content && isset($obj->content['section_description_first1']))
    {{ $obj->content['section_description_first1'] }}
    @endif
    </textarea>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label>Testimonial  heading</label>
            <input type="text" name="content[banner_title_2]" class="form-control"
                @if ($obj->content && isset($obj->content['banner_title_2'])) value="{{ $obj->content['banner_title_2'] }}" @endif>
        </div>

    </fieldset>
</div>
