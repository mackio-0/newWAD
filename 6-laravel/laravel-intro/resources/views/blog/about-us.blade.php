@extends('blog.main')
@push('style')
    <style>
        .about {
            background-color: rgb(124, 124, 224);
        }
    </style>
@endpush
@section('content')
    <div class="about">
        <h1>About Page</h1>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore itaque sapiente perspiciatis corporis,
            delectus
            quidem magni vero tempora enim doloremque soluta, reiciendis ipsa molestias, ab voluptatibus est in? Odit,
            alias.
        </p>
    </div>
@endsection

{{-- @push('script')
    <script>
        alert('hello about page');
    </script>
@endpush --}}
