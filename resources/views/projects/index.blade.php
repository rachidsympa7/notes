@extends('layouts.app');
@section('title', 'Projects');
@section('content')
<header class="d-flex justify-content-between align-items-center my-5" dir="rtl">
    <div class="h6 text-dark">
        <a href="/projects" class="text-decorstion-none">المشاريع</a>
    </div>
    <div class="h6 text-dark">
        <a href="/projects/create" class="btn btn-primary px-4">مشروع جديد</a>
    </div>
</header>

<section class="row text-end" dir="rtl">
    @forelse ($projects as $item)
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="status mb-2">
                        @switch($item->status)
                            @case(1)
                                <span class="badge bg-success">مكتمل</span>
                                @break;
                            @case(2)
                                <span class="badge bg-danger">ملغي</span>
                                @break;
                            @default
                                <span class="badge bg-secondary">قيد الانجاز</span>
                        @endswitch
                    </div>
                    
                    <h5 class="fw-bold card-title"><a href="/projects/{{ $item->id }}" class="text-decoration-none">{{ $item->title }}</a></h5>
                    <p class="card-text mt-3">{{ Str::limit($item->description,100) }}</p>
                </div>
                @include('projects.footer');
            </div>
        </div>
    @empty
        <div class="m-auto align-content-center text-center">
            <p class="text-muted">لا توجد مشاريع.</p>
            <div class="mt-5">
                <a href="/projects/create" class="btn btn-primary px-4">مشروع جديد</a>
            </div>
        </div>
    @endforelse
</section>
@endsection