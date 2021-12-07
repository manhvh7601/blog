<form action="{{ route('blog.store') }}" method="post">
    @csrf
    <div>
        <label>Title</label>
        <input type="text" name="title">
    </div>
    <div>
        <label>Description</label>
        <textarea name="desc" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Add</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>title</th>
            <th>desc</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->desc }}</td>
                <td>
                    <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}">Edit</a>
                    <form method="POST" action="{{ route('blog.destroy', ['blog' => $blog->id]) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
