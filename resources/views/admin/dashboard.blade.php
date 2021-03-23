@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
            <h1>Admin dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card shadow-sm p-3">
                <h3>Total User</h3>
                <h5>{{ $users }}</h5>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card shadow-sm p-3">
                <h3>Total Articles</h3>
                <h5>{{ $articles }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
$(document).ready(function() {
    $('.card').mouseover(function() {
        $(this).addClass('shadow-lg');
    }).mouseleave(function() {
        $(this).removeClass('shadow-lg');
    });
});
</script>
@endsection