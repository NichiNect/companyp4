@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1>All of Articles</h1>
            <a href="{{ route('admin.article.create') }}" class="btn btn-outline-primary">Create New Article</a>
            <div class="mt-3">
                <x-flash></x-flash>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Picture</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Posted At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($articles as $a)
                                <tr>
                                    <td>{{ $articles->count() * ($articles->currentPage() - 1) + $loop->iteration }}</td>
                                    <td>{{ Str::limit($a->title, 25) }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/article/picture/' . $a->picture) }}" alt="" class="img-thumbnail" style="width: 80%;">
                                    </td>
                                    <td>{{ Str::limit($a->content, 300) }}</td>
                                    <td>{{ $a->author->name }}</td>
                                    <td>{{ $a->created_at->diffForHumans() . ', ' . $a->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.article.show', $a->id) }}" class="btn btn-info my-1">Detail</a>
                                        <a href="" class="btn btn-warning my-1">Edit</a>
                                        <form action="" method="post" class="d-inline">
                                            @csrf
                                            @method('put')
                                            <button type="submit" class="btn btn-danger my-1">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="7">
                                        <h3>Data Kosong</h3>
                                    </th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection