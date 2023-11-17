@extends('layouts.dashboard')

@section('title', __('dashboard.link.news.category'))
@section('breadcrumbs', Breadcrumbs::render('categories'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-6">
                            <form action="{{ route('categories.index') }}" method="GET">
                                <div class="input-group">
                                    <input name="keyword" type="search" class="form-control"
                                        placeholder="{{ __('categories.form_control.input.search.placeholder') }}"
                                        value="{{ request()->get('keyword') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div>
                            <a href="{{ route('categories.create') }}" class="btn btn-primary " role="button">
                                {{ __('categories.button.create.value') }}
                                <i class="bi bi-plus-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <ul class="list-group list-group-flush">
                        @if (count($categories))
                            @include('categories._categories-list', [
                                'categories' => $categories,
                                'count' => 0,
                            ])
                        @else
                            <p class="p-4">
                                @if (request()->get('keyword'))
                                    {{ __('categories.label.no_data.search', ['keyword' => request()->get('keyword')]) }}
                                @else
                                    {{ __('categories.label.no_data.fetch') }}
                                @endif
                            </p>
                        @endif
                    </ul>
                </div>
                @if ($categories->hasPages())
                    <div class="card-footer">
                        {{ $categories->links('vendor.pagination.bootstrap-5') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('javascript-internal')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Event Delete Category
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: $(this).attr('alert-title'),
                    text: $(this).attr('alert-text'),
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: $(this).attr('alert-btn-cancel'),
                    reverseButtons: true,
                    confirmButtonText: $(this).attr('alert-btn-yes'),
                }).then((result) => {
                    if (result.dismiss == 'cancel') return;
                    event.target.submit();
                });
            });
        });
    </script>
@endpush
