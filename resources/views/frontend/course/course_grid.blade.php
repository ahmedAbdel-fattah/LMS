@extends('frontend.master')

@section('title')
    | Course List
@endsection

@section('home')
@php
    $courses = App\Models\Course::with(['user', 'reviews' => function($query) {
        $query->where('status', 1);
    }])->where('status', 1)->orderBy('id', 'ASC')->paginate(6);

    $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
@endphp

<section class="course-area pb-120px">
    <div class="container">
        <div class="section-heading text-center">
            <h5 class="ribbon ribbon-lg mb-2">Choose your desired courses</h5>
            <h2 class="section__title">The world's largest selection of courses</h2>
            <span class="section-divider"></span>
        </div>

        <ul class="nav nav-tabs generic-tab justify-content-center pb-4" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
            </li>
            @foreach ($categories as $category)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#category{{ $category->id }}" role="tab">{{ $category->category_name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="card-content-wrapper bg-gray pt-50px pb-120px">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="row">
                        @foreach ($courses as $course)
                            @include('frontend.course_card', ['course' => $course])
                        @endforeach
                    </div>
                </div>

                @foreach ($categories as $category)
                    <div class="tab-pane fade" id="category{{ $category->id }}" role="tabpanel">
                        <div class="row">
                            @php
                                $catwiseCourses = App\Models\Course::where('category_id', $category->id)->where('status', 1)->get();
                            @endphp

                            @forelse ($catwiseCourses as $course)
                                @include('frontend.course_card', ['course' => $course])
                            @empty
                                <h5 class="text-danger">No Course Found</h5>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="text-center pt-3">
        {{ $courses->links() }}
    </div>
</section>

<div class="text-center pt-3">
    {{ $courses->links() }}
</div>
@endsection
