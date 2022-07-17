<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Add Category</h3></div>
            <div><a class="btn btn-danger" href="/category">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/category" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-backend.label for="name"><span class="fw-bold">Category:</span></x-backend.label>
                    <x-backend.input name="name" type="text" placeholder="Enter Category" value=""/>
                </div>
                <div class="form-group">
                    <x-backend.label for="image"><span class="fw-bold">Upload Category Image:</span></x-backend.label>
                    <x-backend.input name="image" type="file" placeholder="Upload File" value=""/>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Add Category</button></div>

            </form>
        </div>
    </div>
</x-backend.dashboard>
