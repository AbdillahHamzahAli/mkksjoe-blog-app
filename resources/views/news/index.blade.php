@extends('layouts.dashboard')

@section('title', __('dashboard.link.news.news'))
@section('breadcrumbs', Breadcrumbs::render('news'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="col">
                            <form action="" method="GET" class="form-inline form-row">
                                <div class="d-flex">
                                    <div class="input-group mx-1">
                                        <label class="mx-2 col-form-label">
                                            {{ __('newspost.form_control.select.status.label') }}
                                        </label>
                                        <div class="col-sm-5">
                                            <select name="status" class="form-select">
                                                <option value="draft">Draft
                                                </option>
                                                <option value="publish" selected="">Publish
                                                </option>
                                            </select>
                                        </div>

                                        <div class="input-group-append col-sm-3">
                                            <button class="btn btn-primary" type="submit">
                                                {{ __('newspost.button.apply.value') }}
                                            </button>
                                        </div>
                                    </div>
                                    <div class="input-group mx-1">
                                        <input name="keyword" value="" type="search" class="form-control"
                                            placeholder="{{ __('newspost.form_control.input.search.placeholder') }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a href="{{ route('newspost.create') }}" class="btn btn-primary float-right" role="button">
                                {{ __('newspost.button.create.value') }}
                                <i class="bi bi-plus-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @forelse($newsposts as $newspost)
                            <div class="border-bottom my-2">
                                <div class="pb-2">
                                    <h5 class="card-title">{{ $newspost->title }}</h5>
                                    <p>
                                        {{ $newspost->description }}
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <!-- detail -->
                                        <a href="{{ route('newspost.show', ['newspost' => $newspost]) }}"
                                            class="btn btn-sm btn-primary" role="button">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <!-- edit -->
                                        <a href="{{ route('newspost.edit', ['newspost' => $newspost]) }}"
                                            class="btn btn-sm btn-info mx-1" role="button">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- delete -->
                                        <form action="{{ route('newspost.destroy', ['newspost' => $newspost]) }}"
                                            class="d-inline" role="alert"
                                            alert-text="{{ __('newspost.alert.delete.message.confirm', ['title' => $newspost->title]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="my-2">
                                {{ __('newspost.label.no_data.fetch') }}
                            </p>
                        @endforelse
                        <!-- list post -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript-internal')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Delete Tag
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "{{ __('newspost.alert.delete.title') }}",
                    text: $(this).attr('alert-text'),
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: "{{ __('newspost.button.cancel.value') }}",
                    reverseButtons: true,
                    confirmButtonText: "{{ __('newspost.button.delete.value') }}",
                }).then((result) => {
                    if (result.dismiss == 'cancel') return;
                    event.target.submit();
                });
            })
        })
    </script>
@endpush
