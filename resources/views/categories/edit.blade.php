@extends('layouts.dashboard')

@section('title', __('categories.title.edit'))
@section('breadcrumbs', Breadcrumbs::render('edit_categories_title', $category))

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ __('categories.form_control.title.add') }}</h5>
            <!-- General Form Elements -->
            <form action="{{ route('categories.update', ['category' => $category]) }}" method="POST">
                @method('PUT')
                @csrf
                {{-- title --}}
                <div class="row mb-3">
                    <label for="inputText"
                        class="col-sm-2 col-form-label">{{ __('categories.form_control.input.title.label') }}</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ old('title', $category->title) }}"
                            class="form-control @error('title') is-invalid @enderror" name="title"
                            id="input_category_title"
                            placeholder="{{ __('categories.form_control.input.title.placeholder') }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- slug --}}
                <div class="row mb-3">
                    <label for="inputEmail"
                        class="col-sm-2 col-form-label">{{ __('categories.form_control.input.slug.label') }}</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{ old('slug', $category->slug) }}"
                            class="form-control  @error('slug') is-invalid @enderror" name="slug"
                            id="input_category_slug"
                            placeholder="{{ __('categories.form_control.input.slug.placeholder') }}" readonly>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- thumbnail --}}
                <div class="row mb-3">
                    <label for="inputNumber"
                        class="col-sm-2 col-form-label">{{ __('categories.form_control.input.thumbnail.label') }}</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button id="button_category_thumbnail" data-input="input_category_thumbnail"
                                    data-preview="holder" class="btn btn-primary" type="button">
                                    {{ __('categories.button.browse.value') }}
                                </button>
                            </div>
                            <input id="input_category_thumbnail" name="thumbnail"
                                value="{{ old('thumbnail', asset($category->thumbnail)) }}" type="text"
                                class="form-control @error('thumbnail') is-invalid @enderror"
                                placeholder="{{ __('categories.form_control.input.thumbnail.placeholder') }}" readonly />
                            @error('thumbnail')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div id="holder"></div>
                </div>

                {{-- parent category --}}
                <div class="row mb-3">
                    <label for="select_category_parent"
                        class="col-sm-2 col-form-label">{{ __('categories.form_control.select.parent_category.label') }}</label>
                    <div class="col-sm-10">
                        <select id="select_category_parent" name="parent_category" class="form-control  "
                            data-placeholder="{{ __('categories.form_control.select.parent_category.placeholder') }}">
                            @if (old('parent_category', $category->parent()))
                                <option value="{{ old(('parent_category')->id ?? '', $category->parent->id ?? '') }}"
                                    selected disable>
                                    {{ old(('parent_category')->title ?? '', $category->parent->title ?? '') }}
                                </option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">
                        {{ __('categories.form_control.textarea.description.label') }}
                    </label>
                    <div class="col-sm-10">
                        <textarea id="input_category_description" name="description"
                            class="form-control @error('description') is-invalid @enderror" style="height: 100px"
                            placeholder="{{ __('categories.form_control.textarea.description.placeholder') }}">{{ old('description', $category->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <a class="btn btn-warning px-4"
                            href="{{ route('categories.index') }}">{{ __('categories.button.back.value') }}</a>
                        <button type="submit" class="btn btn-primary">{{ __('categories.button.edit.value') }}</button>
                    </div>
                </div>

            </form>
            <!-- End General Form Elements -->

        </div>
    </div>
@endsection

@push('css-external')
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@push('javascript-external')
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/i18n/' . app()->getlocale() . '.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
@endpush


@push('javascript-internal')
    <script>
        $(function() {

            // Generate Slug
            function generateSlug(value) {
                return value.trim()
                    .toLowerCase()
                    .replace(/[^a-z\d-]/gi, '-')
                    .replace(/-+/g, '-').replace(/^-|-$/g, "");
            }
            // event slug 
            $('#input_category_title').change(function() {
                let title = $(this).val();
                let parent_category = $('#select_category_parent').val() ?? "";
                $('#input_category_slug').val(generateSlug(title + " " + parent_category))
            })
            // event slug 
            $('#select_category_parent').change(function() {
                let title = $('#input_category_title').val();
                let parent_category = $(this).val() ?? "";
                $('#input_category_slug').val(generateSlug(title + " " + parent_category))
            })
            // Select Parent Category


            $('#select_category_parent').select2({
                theme: 'bootstrap4',
                language: "{{ app()->getlocale() }}",
                allowClear: true,
                ajax: {
                    url: "{{ route('categories.select', ['category' => $category->id]) }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.title,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
            // event thumbnail
            $('#button_category_thumbnail').filemanager('image')
        })
    </script>
@endpush
