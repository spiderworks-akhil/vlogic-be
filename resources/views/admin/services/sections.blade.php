<div   id="form-vertical" class="form-horizontal form-wizard-wrapper">
        <h3>Banner Section</h3>
        <fieldset>

            <div class="form-group col-md-12">
                <label>Head title</label>
                <input type="text" name="content[banner_title]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
            </div>

            <div class="form-group ">
                @php
                    $media_id_banner_image =
                        $obj->content && isset($obj->content['media_id_banner_image'])
                            ? $obj->content['media_id_banner_image']
                            : null;
                @endphp
                @include('admin.media.set_file', [
                    'file' => $media_id_banner_image,
                    'title' => 'Banner Image',
                    'popup_type' => 'single_image',
                    'type' => 'Image',
                    'holder_attr' => 'content[media_id_banner_image]',
                    'id' => 'media_id_banner_image',
                    'display' => 'horizontal',
                ])
            </div>

            <div class="form-group col-md-12">
                <label>Banner Short Description</label>
                <textarea name="content[banner_shortdescription]" class="form-control ">
@if ($obj->content && isset($obj->content['banner_shortdescription']))
{{ $obj->content['banner_shortdescription'] }}
@endif
</textarea>
            </div>

            <div class="form-group col-md-12">
                <label>Page url</label>
                <input type="text" name="url" class="form-control" value="{{ isset($obj->url) ? $obj->url : '' }}">
            </div>

        </fieldset>
        {{-- <h3>Top Content</h3>
        <fieldset>



            <div class="form-group col-md-12">
                <label>Title</label>
                <input type="text" name="content[banner_title0]" class="form-control"
                    @if ($obj->content && isset($obj->content['banner_title0'])) value="{{ $obj->content['banner_title0'] }}" @endif>
            </div>

            <div class="form-group col-md-12">
                <label>Content</label>
                <textarea name="content[description_1]" class="form-control editor">
@if ($obj->content && isset($obj->content['description_1']))
{{ $obj->content['description_1'] }}
@endif
  </textarea>
            </div>
            <div class="form-group ">
                @php
                    $media_id_1 =
                        $obj->content && isset($obj->content['media_id_1']) ? $obj->content['media_id_1'] : null;
                @endphp
                @include('admin.media.set_file', [
                    'file' => $media_id_1,
                    'title' => 'Featured Image',
                    'popup_type' => 'single_image',
                    'type' => 'Image',
                    'holder_attr' => 'content[media_id_1]',
                    'id' => 'content_image_1',
                    'display' => 'horizontal',
                ])
            </div><!--end form-group-->
        </fieldset><!--end fieldset--> --}}


    </div><!--end form-->


