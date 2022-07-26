<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Enter Product Ads</h3></div>
            <div><a class="btn btn-danger" href="/ads">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/ads" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-backend.label for="title"><span class="fw-bold">Ads Title:</span></x-backend.label>
                    <x-backend.input name="title" type="text" placeholder="" value=""/>
                </div>
                <div class="form-group">
                    <x-backend.label for="detail"><span class="fw-bold">Ads Detail:</span></x-backend.label>
                    <textarea id="detail" class="form-control" name="detail" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <x-backend.label for="image"><span class="fw-bold">Product Photo:</span></x-backend.label>
                    <x-backend.input name="image" type="file" placeholder="Upload File" value=""/>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Add Ads</button></div>
            </form>
        </div>
    </div>
</x-backend.dashboard>
