@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1>Detail Article</h1>
            <div class="mt-3">
                <x-flash></x-flash>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">Detail Article : {{ $article->title }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>:</td>
                                    <td>{{ $article->title }}</td>
                                </tr>
                                <tr>
                                    <td>Picture</td>
                                    <td>:</td>
                                    <td><img src="{{ asset('/storage/article/picture/' . $article->picture) }}" alt="" style="width: 80%;"></td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>:</td>
                                    <td>
                                        {!! $article->content !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td>:</td>
                                    <td>{{ $article->author->name }}</td>
                                </tr>
                                <tr>
                                    <td>Posted At</td>
                                    <td>:</td>
                                    <td>{{ $article->created_at->diffForHumans() . ', ' . $article->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection