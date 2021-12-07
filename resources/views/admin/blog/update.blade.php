<form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="post">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{$blog->title}}">
    </div>
    <div>
        <label>Description</label>
        <textarea name="desc" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Update</button>
</form>
