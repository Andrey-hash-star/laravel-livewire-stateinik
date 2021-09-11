@extends('layouts.layout')

@section('title', 'Страница статьи')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <img src="https://via.placeholder.com/150" height="400px" width="mx-auto" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
                <hr>
                <hr>
                <nav class="nav">
                    <a class="nav-link" href="#">Тэг1</a>
                    <a class="nav-link" href="#">Тэг2</a>
                    <a class="nav-link" href="#">Тэг3</a>
                    <a class="nav-link" href="#">Тэг4</a>
                </nav>
                <hr>
                <hr>
                @livewire('like-post-controller', ['post' => $post])
                <hr>
                @livewire('view-post-controller', ['post' => $post])
                <hr>
                <hr>
                <h3 class="text-center">Форма для комментария</h3>
                @livewire('form-post-controller', ['post' => $post])
            </div>

        </div>
    </div>
@endsection
