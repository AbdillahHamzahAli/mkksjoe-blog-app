@extends('layouts.dashboard')

@section('title', __('categories.title.detail'))
@section('breadcrumbs', Breadcrumbs::render('detail_categories_title', $category))

@section('content')

    <div class="card">
        @if (file_exists(public_path($category->thumbnail)))
            <img src="{{ asset($category->thumbnail) }}" class="card-img-top" alt="...">
        @else
            <svg class="img-fluid" width="100%" height="400" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#dee2e6" dy=".3em"
                    font-size="24">
                    {{ $category->title }}
                </text>
            </svg>
        @endif
        {{-- <img src="assets/img/card.jpg" class="card-img-top" alt="..."> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $category->title }}</h5>
            <p class="card-text">{{ $category->description }}</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('categories.index') }}" class="btn btn-primary mx-1" role="button">
                    {{ __('categories.button.back.value') }}
                </a>
            </div>
        </div>

    </div>

@endsection
