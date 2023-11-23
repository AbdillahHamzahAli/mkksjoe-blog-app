@extends('layouts.dashboard')

@section('title', __('newspost.title.create'))
@section('breadcrumbs', Breadcrumbs::render('add_news'))

@section('content')

    <form action="{{ route('newspost.store') }}" method="POST" class="row">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="pt-4">
                    {{-- title --}}
                    <div class="row mb-3">
                        <label for="title"
                            class="col-sm-2 col-form-label">{{ __('newspost.form_control.input.title.label') }}</label>
                        <div class="col-sm-10">
                            <input value="{{ old('title') }}" type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" id="input_newspost_title"
                                placeholder="{{ __('newspost.form_control.input.title.placeholder') }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- slug --}}
                    <div class="row mb-3">
                        <label for="slug"
                            class="col-sm-2 col-form-label">{{ __('newspost.form_control.input.slug.label') }}</label>
                        <div class="col-sm-10">
                            <input value="{{ old('slug') }}" type="text" name="slug"
                                class="form-control @error('slug') is-invalid @enderror" id="input_newspost_slug"
                                placeholder="{{ __('newspost.form_control.input.slug.placeholder') }}" readonly>
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- thumbnail --}}
                    <div class="row mb-3">
                        <label for="thumbnail"
                            class="col-sm-2 col-form-label">{{ __('newspost.form_control.input.thumbnail.label') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button id="button_newspost_thumbnail" data-input="input_newspost_thumbnail"
                                        data-preview="holder" class="btn btn-primary" type="button">
                                        {{ __('newspost.button.browse.value') }}
                                    </button>
                                </div>
                                <input value="{{ old('thumbnail') }}" id="input_newspost_thumbnail" name="thumbnail"
                                    type="text" class="form-control @error('thumbnail') is-invalid @enderror"
                                    placeholder="{{ __('newspost.form_control.input.thumbnail.placeholder') }}" readonly />
                                @error('thumbnail')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="holder"></div>
                    </div>
                    {{-- description --}}
                    <div class="row mb-3">
                        <label for="description"
                            class="col-sm-2 col-form-label">{{ __('newspost.form_control.textarea.description.label') }}</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" style="height: 100px"
                                placeholder="{{ __('newspost.form_control.textarea.description.placeholder') }}">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Content --}}
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="input_post_content" class="font-weight-bold py-4">
                        {{ __('newspost.form_control.textarea.content.label') }}
                    </label>
                    <textarea id="input_newspost_content" name="content"
                        placeholder="{{ __('newspost.form_control.textarea.content.placeholder') }}"
                        class="form-control @error('content') is-invalid @enderror" rows="20">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="pt-4">
                    {{-- category --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Select</label>
                        <div class="col-sm-10">
                            <select id="select_category_parent" name="category[]"
                                class="form-control @error('status') is-invalid @enderror"
                                data-placeholder="{{ __('newspost.form_control.input.category.placeholder') }}" multiple>
                                @if (old('category'))
                                    @foreach (old('category') as $item)
                                        <option value="{{ $item->id }}" selected>{{ $item->title }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    {{-- status --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select id="select_newspost_status" class="form-select @error('status') is-invalid @enderror"
                                name="status">
                                @foreach ($statuses as $key => $value)
                                    <option value="{{ $key }}" {{ old('status') == $key ? 'selected' : null }}>
                                        {{ $value }}
                                    </option>
                                @endforeach
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-warning px-4 mx-2"
                                href="{{ route('newspost.index') }}">{{ __('newspost.button.back.value') }}</a>
                            <button type="submit" class="btn btn-primary ">{{ __('newspost.button.save.value') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('css-external')
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush

@push('javascript-external')
    {{-- SELECT 2 --}}
    <script src="{{ asset('assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/i18n/' . app()->getlocale() . '.js') }}"></script>
    {{-- File manager --}}
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    {{-- TINY MCE5 --}}
    <script src="{{ asset('assets/vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce5/tinymce.min.js') }}"></script>
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
            $('#input_newspost_title').change(function() {
                $("#input_newspost_slug").val(
                    event.target.value
                    .trim()
                    .toLowerCase()
                    .replace(/[^a-z\d-]/gi, "-")
                    .replace(/-+/g, "-")
                    .replace(/^-|-$/g, "")
                );
            })
            // event thumbnail
            $('#button_newspost_thumbnail').filemanager('image')
            // Text editor TINYMCE5
            $("#input_newspost_content").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
                file_picker_callback: function(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth;
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight;

                    let cmsURL = "{{ route('unisharp.lfm.show') }}" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinyMCE.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Filemanager',
                        width: x * 0.8,
                        height: y * 0.8,
                        resizable: "yes",
                        close_previous: "no",
                        onMessage: (api, message) => {
                            callback(message.content);
                        }
                    });
                }

            });
            // Select Parent Category
            $('#select_category_parent').select2({
                theme: 'bootstrap4',
                language: "{{ app()->getlocale() }}",
                allowClear: true,
                ajax: {
                    url: "{{ route('categories.select') }}",
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
        })
    </script>
@endpush
