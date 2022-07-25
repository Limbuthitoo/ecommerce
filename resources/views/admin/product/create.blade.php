<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div><h3>Enter Product Details</h3></div>
            <div><a class="btn btn-danger" href="/product">Back</a></div>
        </div>
        <div class="card-body">
            <form action="/product" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-backend.label for="name"><span class="fw-bold">Product Name:</span></x-backend.label>
                    <x-backend.input name="name" type="text" placeholder="Enter Product Name" value=""/>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="category"><span class="fw-bold">Category:</span></x-backend.label>
                            <select name="category_id"  class="select2 js-states form-control" id="id_label_multiple" multiple="multiple" style="width:100%">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="unit"><span class="fw-bold">Unit:</span></x-backend.label>
                            <select name="unit_id"  class="select2 js-states form-control" id="id_label_multiple" multiple="multiple" style="width:100%">
                                @foreach ($units as $item)
                                <option value="{{$item->id}}">
                                    {{$item->unit}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="price"><span class="fw-bold">Base Price:</span></x-backend.label>
                            <x-backend.input name="price" type="text" placeholder="Enter Base Price" value=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <x-backend.label for="discount"><span class="fw-bold">Discount(%):</span></x-backend.label>
                            <x-backend.input name="discount" type="text" placeholder="Product Discount" value=""/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <x-backend.label for="quantity"><span class="fw-bold">Quantity:</span></x-backend.label>
                    <x-backend.input name="quantity" type="text" placeholder="Product Quantity" value=""/>
                </div>
                <div class="form-group">
                    <x-backend.label for="description"><span class="fw-bold">Product Description:</span></x-backend.label>
                    <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <x-backend.label for="image"><span class="fw-bold">Product Photo:</span></x-backend.label>
                    <x-backend.input name="image" type="file" placeholder="Upload File" value=""/>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-success">Add Product</button></div>
            </form>
        </div>
    </div>
</x-backend.dashboard>
