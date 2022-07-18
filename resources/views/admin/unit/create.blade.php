<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Add Category</h3></div>
            <div><a class="btn btn-danger" href="/unit">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/unit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-backend.label for="unit"><span class="fw-bold">Unit:</span></x-backend.label>
                    <x-backend.input name="unit" type="text" placeholder="Enter Category" value=""/>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Add Unit</button></div>
            </form>
        </div>
    </div>
</x-backend.dashboard>
