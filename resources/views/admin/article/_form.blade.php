@if (isset($article))
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Fill the title field.." autofocus value="{{ $article->title }}">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('/storage/article/picture/' . $article->picture) }}" alt="" class="img-thumbnail" style="width: 100%;">
            </div>
            <div class="col-md-7">
                <input type="file" name="picture" id="picture" class="form-control @error('picture') is-invalid @enderror" placeholder="Fill the picture field..">
            </div>
        </div>
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea type="text" name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="10" placeholder="Fill the content field..">{{ $article->content }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Edit Article</button>
    </div>
@else
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Fill the title field.." autofocus>
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" name="picture" id="picture" class="form-control @error('picture') is-invalid @enderror" placeholder="Fill the picture field..">
        @error('picture')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea type="text" name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="10" placeholder="Fill the content field.."></textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Create New Article</button>
    </div>
@endif