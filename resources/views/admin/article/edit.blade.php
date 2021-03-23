@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1>Edit Article</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header">Form Edit Article</div>
                <div class="card-body">
                    <form action="{{ route('admin.article.update', $article->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @include('admin.article._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection