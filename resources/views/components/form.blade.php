<form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data" class="row">
    @csrf
    <div class="mb-3 offset-md-5">
        <label class="form-label">Title</label>
        <input type="text" name="title" class="form-control">
    </div>
    <div class="mb-3 offset-md-5">
        <label class="form-label">Description</label>
        <input type="text" name="description" class="form-control">
    </div>
    <div class="mb-3 offset-md-5">
        <label class="form-label">Category</label>
        <select name="category_id" id="" class="form-select">
            @foreach ($categories as $category)
             <option value="{{$category->id}}">{{$category->name}}</option>    
            @endforeach
        </select>
    </div>
    <div class="mb-3 offset-md-5">
        <label class="form-label">Image</label>
        <input type="file" name="img" class="form-control">
    </div>
    <div class="mb-3 offset-md-5">
        <label class="form-label">Body</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Tags</label>
        <select name="tags[]" class="form-select">
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-secondary offset-md-5">Crea Articolo</button>
</form>