@extends('layouts.app')
@section('title,','-انشاء مشروع جديد')
@section('content')
    <div class="row justify-content-center text-end">
        <div class="col-10 col-xl-7 card p-5 mt-5">
            <div class="text-center pb-5 fw-bold">مشروع جديد</div>
            <form action="/projects" method="post">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان المشروع</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">وصف المشروع</label>
                    <textarea class="form-control text-right" col="30" rows="10" id="description" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary px-4 px-sm-5" type="submit">انشاء</button>
                    <a class="btn btn-light px-4 px-sm-5" href="/projects">الغاء</a>
                </div>
            </form>
        </div>
    </div>
@endsection
