@extends('layouts.frontend')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <img src="{{ asset('/storage/article/picture/' . $article->picture) }}" class="img-thumbnail" alt="" style="width: 100%;">
        <div class="my-5">
            <div class="mt-4 text-center">
                <h1>{{ Str::limit($article->title, 30) }}</h1>
                <hr style="max-width: 60%;">
            </div>
            <div class="ml-4">
                {!! $article->content !!}
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        @foreach ($articles as $a)
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('/storage/article/picture/' . $a->picture) }}" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <p class="lead">
                                    <a href="{{ route('home.showarticle', $a->id) }}">
                                        {{ Str::limit($a->title, 18) }}
                                    </a>
                                </p>
                                <p>{{ Str::limit($a->content, 30) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <hr>
        <p class="text-center">Presented by &copy; Yoni Widhi 2021</p>
    </div>
</div>
@endsection