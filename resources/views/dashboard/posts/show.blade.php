@extends('dashboard.layouts.main')


@section('container')

<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1 class="mb-4">{{ $post->title }}</h1>
            
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back to all my Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            
                @method('delete')
    
                @csrf
    
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash3"></i> Delete</button>
                
            </form>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3"> 
            @endif


            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>

        </div>
    </div>
</div>

@endsection