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
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input name="keyword" type="search" class="form-control"
                                        placeholder="{{ __('categories.form_control.input.search.placeholder') }}"
                                        value="">
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
                        @include('categories._categories-list', [
                            'categories' => $categories,
                            'count' => 0,
                        ])

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
