<x-backend.dashboard>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Edit Unit</h3></div>
            <div><a class="btn btn-danger" href="/unit">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/unit/{{$unit->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <x-backend.label for="name"><span class="fw-bold">Category:</span></x-backend.label>
                    <x-backend.input name="name" type="text" placeholder="" value="{{$unit->name}}"/>
                </div>

                <div class="form-group"><button type="submit" class="btn btn-success">Update Unit</button></div>

            </form>
        </div>
    </div>
</x-backend.dashboard>
