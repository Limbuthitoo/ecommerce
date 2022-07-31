
    <div class="card" style=" height:280px">
        <a href="/product/{{$product->id}}" class="text-decoration-none text-black">
        <div class="p-1 align-center" >
                <div class=" d-block mx-auto" style="width: 134px; height:134px" >
                    <img src="{{asset($product->image)}}" alt="" class="img-cover ">
                </div>

            <div class="card-body">
                <div class="card-title d-flex" style="height: 35px">
                    <p>{{Str::limit($product->name,20, '...') }}</p>
                </div>
                <p><span style="font-size: 12px; color:grey">{{$product->quantity}} {{$product->unit->unit}}</span></p>
                <div class="d-flex justify-content-between">
                    <div class="fw-bold">
                        <p>Rs {{$product->selling_price}}</p>
                    </div>
                    <button class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
        </a>
    </div>

