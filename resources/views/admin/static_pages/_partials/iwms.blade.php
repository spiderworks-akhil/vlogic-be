<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <h3>Banner Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title]" class="form-control" @if($obj->content && isset($obj->content['banner_title'])) value="{{$obj->content['banner_title']}}" @endif >
        </div>

        <div class="form-group">
            <p>Image size-(width-1440px x height-300px)</p>
            @php
                $media_id_banner_image = $obj->content['media_id_banner_image'] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $media_id_banner_image,
                'title' => 'Banner Image - (width-800px x height-800px)',
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_banner_image]',
                'id' => 'media_id_banner_image',
                'display' => 'horizontal'
            ])
        </div>

        <div class="form-group col-md-12">
            <label>Description</label>
            <textarea name="content[banner_title2]" class="form-control editor">{{ $obj->content['banner_title2'] ?? '' }}</textarea>
        </div>
    </fieldset>

    <h3>Service listing</h3>
    <fieldset>
        <div class="form-group">
            <a href="{{route('admin.listing-items.index',[10])}}" class="btn btn-primary" target="_blank">Service Listing
            </a>
            <input type="hidden" name="content[service_listing]" value="10">
        </div>
    </fieldset>

    <h3>Table Section 1</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head Content</label>
            <textarea name="content[banner_title0]" class="form-control editor">
                @if($obj->content && isset($obj->content['banner_title0']))
                    {{ $obj->content['banner_title0'] }}
                @endif
            </textarea>
        </div>

        <div class="form-group col-md-12">
            <label>Table Head title left</label>
            <textarea name="content[banner_title01]" class="form-control editor">
                @if($obj->content && isset($obj->content['banner_title01']))
                    {{ $obj->content['banner_title01'] }}
                @endif
            </textarea>
        </div>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Table Features left</label>
                <textarea name="content[section_description_first04]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first04']))
                        {{ $obj->content['section_description_first04'] }}
                    @endif
                </textarea>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label>Table Head title right</label>
            <textarea name="content[banner_title03]" class="form-control editor">
                @if($obj->content && isset($obj->content['banner_title03']))
                    {{ $obj->content['banner_title03'] }}
                @endif
            </textarea>
        </div>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Table Features Right</label>
                <textarea name="content[section_description_first03]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first03']))
                        {{ $obj->content['section_description_first03'] }}
                    @endif
                </textarea>
            </div>
        </div>
    </fieldset>

    <h3>Table Section 2</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head Content</label>
            <textarea name="content[banner_title04]" class="form-control editor">
                @if($obj->content && isset($obj->content['banner_title04']))
                    {{ $obj->content['banner_title04'] }}
                @endif
            </textarea>
        </div>

        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Table Requirements</label>
                <textarea name="content[section_description_first01]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first01']))
                        {{ $obj->content['section_description_first01'] }}
                    @endif
                </textarea>
            </div>
        </div>
    </fieldset>
</div>
