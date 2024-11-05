<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Head Section -->
    <h3>Head Section</h3>
    <fieldset>
        <div class="form-group col-md-12">
            <label>Head Content</label>
            <input type="text" name="content[banner_title]" class="form-control"
                @if($obj->content && isset($obj->content['banner_title'])) value="{{ $obj->content['banner_title'] }}" @endif>
        </div>
        <div class="form-group col-md-12">
            <label>Short Description Top</label>
            <input type="text" name="content[banner_description]" class="form-control"
                @if($obj->content && isset($obj->content['banner_description'])) value="{{ $obj->content['banner_description'] }}" @endif>
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
    </fieldset>

    <!-- Works Section -->
    <h3>Space Management</h3>
    <fieldset>
        @foreach (range(1, 6) as $index)
            <div class="form-group col-md-12">
                <label>Heading</label>
                <input type="text" name="content[works_heading_{{ $index }}]" class="form-control"
                    @if($obj->content && isset($obj->content['works_heading_' . $index]))
                        value="{{ $obj->content['works_heading_' . $index] }}"
                    @endif>
            </div>

  <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Speed-up </label>
            <textarea name="content[section_description_first0]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first0']))
{{ $obj->content['section_description_first0'] }}
@endif
</textarea>
        </div>
    </div>
      <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Occupancy in Real-time </label>
            <textarea name="content[section_description_first001]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first001']))
{{ $obj->content['section_description_first001'] }}
@endif
</textarea>
        </div>
    </div>
      <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Manage Occupant </label>
            <textarea name="content[section_description_first02]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first02']))
{{ $obj->content['section_description_first02'] }}
@endif
</textarea>
        </div>
    </div>
  <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Room Assignments</label>
            <textarea name="content[section_description_first03]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first03']))
{{ $obj->content['section_description_first03'] }}
@endif
</textarea>
        </div>
    </div>


  <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Take Control</label>
            <textarea name="content[section_description_first04]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first04']))
{{ $obj->content['section_description_first04'] }}
@endif
</textarea>
        </div>
    </div>

  <div class="card-body row">
        <div class="form-group col-md-12">
            <label>Manage Furniture</label>
            <textarea name="content[section_description_first06]" class="form-control editor ">
@if ($obj->content && isset($obj->content['section_description_first06']))
{{ $obj->content['section_description_first06'] }}
@endif
</textarea>
        </div>
    </div>
            @php
                $featuredImage = $obj->content['media_id_works_first_featured_image' . $index] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $featuredImage,
                'title' => 'Works Featured Image ' . $index,
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_works_first_featured_image' . $index . ']',
                'id' => 'media_id_works_first_featured_image' . $index,
                'display' => 'horizontal',
            ])
        @endforeach
    </fieldset>

    <!-- Middle Section -->
    <h3>Middle Section</h3>
    <fieldset>
        @foreach (range(7, 8) as $index)
            <div class="form-group col-md-12">
                <label>Main Heading</label>
                <input type="text" name="content[works_heading_{{ $index }}]" class="form-control"
                    @if($obj->content && isset($obj->content['works_heading_' . $index]))
                        value="{{ $obj->content['works_heading_' . $index] }}"
                    @endif>
            </div>

            <div class="form-group col-md-12">
                <label>Short Description</label>
                <textarea name="content[works_shortdescription_{{ $index }}]" class="form-control">
@if($obj->content && isset($obj->content['works_shortdescription_' . $index]))
{{ $obj->content['works_shortdescription_' . $index] }}
@endif
</textarea>
            </div>

            @php
                $featuredImage  = $obj->content['media_id_works_first_featured_image' . $index] ?? null;
            @endphp
            @include('admin.media.set_file', [
                'file' => $featuredImage,
                'title' => 'Works Featured Image ' . $index,
                'popup_type' => 'single_image',
                'type' => 'Image',
                'holder_attr' => 'content[media_id_works_first_featured_image' . $index . ']',
                'id' => 'media_id_works_first_featured_image' . $index,
                'display' => 'horizontal',
            ])
        @endforeach
    </fieldset>
</div>
