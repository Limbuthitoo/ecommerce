<x-backend.dashboard>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Categories</h3>

                <a href="/category/create" class="btn btn-success py-2">Add Category</a>


        </div>
        <div class="card-body">
            <table class="table-stripped table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($categories as $category)
                        @if (!empty($category))
                            <tr>

                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td><img src="{{asset($category->image)}}" alt="" width="50"></td>
                                <td>
                                    <form action="/category/{{$category->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                    <a href="/category/{{$category->id}}/edit" class="btn btn-success">edit</a>
                                    <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
</x-backend.dashboard>
