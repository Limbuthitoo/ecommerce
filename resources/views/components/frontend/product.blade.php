
    <div class="card w-100" style=" height:280px;">
        <a href="/product/{{$product->id}}" class="text-decoration-none text-black">
            <div class=" d-block mx-auto" style="width: 134px; height:134px" >
                <img src="{{asset($product->image)}}" alt="" class="img-fluid ">
                @if (!empty($product->discount))
                    <div class="card-img-overlay" style="font-size: 12px; color:aliceblue; width:80px">
                        <h5 class="card-title bg-danger p-1" >{{$product->discount}} % off</h5>
                    </div>
                 @endif
            </div>
        </a>

            <div class="card-body">
                <div class="card-title d-flex" style="height: 35px">
                    <p>{{Str::limit($product->name,35, '...') }}</p>
                </div>
                <p><span style="font-size: 12px; color:grey">{{$product->quantity}} {{$product->unit->unit}}</span></p>

                <div class="d-flex justify-content-between align-items-center">
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <input type="hidden" name="selling_price" value="{{$product->selling_price}}">
                    <div class="fw-bold">
                        <p>
                            <span>
                                Rs {{$product->selling_price}}
                            </span>
                            <br>
                            <span class="text-danger text-decoration-line-through" style="font-size: 12px">
                                @if (!empty($product->discount))
                                Rs {{$product->price}}
                                @endif
                            </span>
                        </p>
                    </div>
                    <div>

                        <div class="py-2">
                            <a class="btn btn-success text-white border-1 h-100" href="{{route('add.to.cart', $product->id)}}" style="width:80px; height:35px;" >Add</a>
                        </div>
                    </div>
                </div>

            </div>

    </div>

