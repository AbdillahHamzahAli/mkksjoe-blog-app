@extends('layouts.dashboard')

@section('title', __('newspost.title.detail'))
@section('breadcrumbs', Breadcrumbs::render('detail_news_title', $newspost))

@section('content')

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                @if (file_exists(public_path($newspost->thumbnail)))
                    <img src="{{ asset($newspost->thumbnail) }}" class="card-img-top" alt="...">
                @else
                    <svg class="img-fluid" width="100%" height="400" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" fill="#dee2e6" dy=".3em"
                            font-size="24">
                            {{ $newspost->title }}
                        </text>
                    </svg>
                @endif
                {{-- <img src="assets/img/card.jpg" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $newspost->title }}</h5>
                    <p class="card-text">{{ $newspost->description }}</p>
                    <span class="badge bg-info text-dark"><i class="bi bi-info-circle me-1"></i>
                        {{ $newspost->status }}</span>
                    <span class="badge bg-secondary"><i class="bi bi-collection me-1"></i>
                        {{ $newspost->created_at->format('Y-m-d') }}</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('newspost.form_control.input.category.label') }}</h5>
                    @foreach ($categories as $category)
                        <a href="{{ route('categories.show', ['category' => $category]) }}"
                            class="badge bg-secondary">{{ $category->title }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ __('newspost.form_control.textarea.content.label') }}</h5>
                    {!! $newspost->content !!}
                </div>
            </div>
        </div>
    </div>

@endsection
