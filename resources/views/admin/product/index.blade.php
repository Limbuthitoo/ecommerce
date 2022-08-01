<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Products Information</h3>
            @if (empty($product))
                <a href="/product/create" class="btn btn-success py-2">Add Products</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table-stripped table">
                <thead >
                    <tr style="font-weight: bold;">
                        <th>Photo</th>
                        <th>Product </th>
                        <th>Category</th>
                        <th>Base Price (Rs.)</th>
                        <th>Discount(%)</th>
                        <th>Selling Price (Rs.)</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ( $products as $product )
                            @if (!empty($product))
                                <tr>
                                    <td><img src="{{asset($product->image)}}" width="50" alt=""></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        <form action="/product/{{$product->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="/product/{{$product->id}}/edit" class="btn btn-success">edit</a>
                                        <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
            </table>
            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</x-backend.dashboard>
