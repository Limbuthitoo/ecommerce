<x-backend.dashboard>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Edit Category</h3></div>
            <div><a class="btn btn-danger" href="/category">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/category/{{$category->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <x-backend.label for="name"><span class="fw-bold">Category:</span></x-backend.label>
                    <x-backend.input name="name" type="text" placeholder="" value="{{$category->name}}"/>
                </div>
                <div>
                    <img src="{{asset($category->image)}}" alt="" width="150">
                </div>
                <div class="form-group">
                    <x-backend.label for="image"><span class="fw-bold">Upload Category Image:</span></x-backend.label>
                    <x-backend.input name="image" type="file" placeholder="Upload File" value=""/>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Update Category</button></div>

            </form>
        </div>
    </div>
</x-backend.dashboard>
