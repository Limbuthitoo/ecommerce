<x-backend.dashboard>

    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3>Ads Information</h3>
            @if (empty($product))
                <a href="/ads/create" class="btn btn-success py-2">Add Ads</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table-stripped table">
                <thead >
                    <tr style="font-weight: bold;">
                        <th>Image</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ( $ads as $ad )
                            @if (!empty($ad))
                                <tr>
                                    <td><img src="{{asset($ad->image)}}" width="100" alt=""></td>
                                    <td>{{$ad->title}}</td>
                                    <td>{{$product->details}}</td>
                                    <td>
                                        <form action="/ads/{{$ad->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                        <a href="/ads/{{$ad->id}}/edit" class="btn btn-success">edit</a>
                                        <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-backend.dashboard>
