<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Fill the title field.." autofocus>
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="picture">Picture</label>
    <input type="file" name="picture" id="picture" class="form-control @error('picture') is-invalid @enderror" placeholder="Fill the picture field.." autofocus>
    @error('picture')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea type="text" name="content" id="content" class="form-control @error('content') is-invalid @enderror" rows="8" placeholder="Fill the content field.." autofocus></textarea>
    @error('content')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group text-right">
    <button type="submit" class="btn btn-primary">Create New Article</button>
</div>