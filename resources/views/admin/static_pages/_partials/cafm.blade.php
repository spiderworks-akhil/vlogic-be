<div id="form-vertical" class="form-horizontal form-wizard-wrapper">
    <!-- Banner Section -->
    <h3>Banner Section</h3>
    <fieldset>
        <!-- Banner Title Input -->
        <div class="form-group col-md-12">
            <label>Banners Title</label>
            <input type="text" name="content[banner_title]" class="form-control"
                value="{{ $obj->content['banner_title'] ?? '' }}">
        </div>

        <!-- Banner Image Upload -->
        <div class="form-group">
            <p>Image size-(width-100px x height-100px)</p>
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

        <!-- Banner Short Description -->
        <div class="form-group col-md-12">
            <label>Banner Short Description</label>
            <textarea name="content[banner_shortdescription]" class="form-control editor">
                {{ $obj->content['banner_shortdescription'] ?? '' }}
            </textarea>
        </div>

        <!-- Additional Banner Description -->
        <div class="form-group col-md-12">
            <label>Additional Banner Short Description</label>
            <textarea name="content[banner_shortdescription1]" class="form-control editor">
                {{ $obj->content['banner_shortdescription1'] ?? '' }}
            </textarea>
        </div>
    </fieldset>

    <!-- Questions Section -->
    <h3>Questions Section</h3>
    <fieldset>
        <!-- Featured Image 1 Upload -->
        <p>Image size-(width-940px x height-400px)</p>
        @php
            $media_id_works_first_featured_image = $obj->content && isset($obj->content['media_id_works_first_featured_image'])
                ? $obj->content['media_id_works_first_featured_image']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image,
            'title' => 'Featured Image 1',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image]',
            'id' => 'media_id_works_first_featured_image',
            'display' => 'horizontal',
        ])

        <!-- Short Description for Questions -->
        <div class="form-group col-md-12">
            <label>Short Description</label>
            <textarea name="content[works_shortdescription]" class="form-control editor">
                @if ($obj->content && isset($obj->content['works_shortdescription']))
                    {{ $obj->content['works_shortdescription'] }}
                @endif
            </textarea>
        </div>

        <!-- Featured Image 2 Upload -->
        <p>Image size-(width-940px x height-400px)</p>
        @php
            $media_id_works_first_featured_image2 = $obj->content && isset($obj->content['media_id_works_first_featured_image2'])
                ? $obj->content['media_id_works_first_featured_image2']
                : null;
        @endphp
        @include('admin.media.set_file', [
            'file' => $media_id_works_first_featured_image2,
            'title' => 'Featured Image 2',
            'popup_type' => 'single_image',
            'type' => 'Image',
            'holder_attr' => 'content[media_id_works_first_featured_image2]',
            'id' => 'media_id_works_first_featured_image2',
            'display' => 'horizontal',
        ])

        <!-- Questions Section Description -->
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Questions Section Description</label>
                <textarea name="content[section_description_first]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first']))
                        {{ $obj->content['section_description_first'] }}
                    @endif
                </textarea>
            </div>
        </div>
    </fieldset>

    <!-- End Section -->
    <h3>End Section</h3>
    <fieldset>
        <!-- Difference Description -->
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>Difference</label>
                <textarea name="content[section_description_first1]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first1']))
                        {{ $obj->content['section_description_first1'] }}
                    @endif
                </textarea>
            </div>
        </div>

        <!-- End Section Title -->
        <div class="form-group col-md-12">
            <label>End Section Title</label>
            <textarea type="text" name="content[banner_title01]" class="form-control editor">
                {{ $obj->content['banner_title01'] ?? '' }}
            </textarea>

        </div>

        <!-- CAFM Details -->
        <div class="card-body row">
            <div class="form-group col-md-12">
                <label>CAFM Details</label>
                <textarea name="content[section_description_first3]" class="form-control editor">
                    @if ($obj->content && isset($obj->content['section_description_first3']))
                        {{ $obj->content['section_description_first3'] }}
                    @endif
                </textarea>
            </div>
        </div>
    </fieldset>
</div>
