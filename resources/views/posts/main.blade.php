@extends('layouts.layout')

@section('title', 'Главная страница')

@section('content')
    <main>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($posts as $post)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3 class="card-title text-center">{{ $post->title }}</h3>
                                    <p class="card-text">{{ substr($post->content, 0, 100) }}</p>
                                    <p class="card-text"><a href="{{ route('posts.show', ['slug' => $post->slug]) }}">Подробнее....</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
