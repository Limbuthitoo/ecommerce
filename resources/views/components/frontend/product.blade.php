
    <div class="card" style=" height:280px">
        <a href="/product/{{$product->id}}" class="text-decoration-none text-black">

                <div class=" d-block mx-auto" style="width: 134px; height:134px" >
                    <img src="{{asset($product->image)}}" alt="" class="img-fluid ">
                    @if ($product->discount != 0 || !empty($product->discount))
                        <div class="card-img-overlay">
                            <h5 class="card-title bg-danger p-1" style="font-size: 12px; color:aliceblue; width:40px">{{$product->discount}} % off</h5>
                        </div>
                    @endif
                </div>

            <div class="card-body">
                <div class="card-title d-flex" style="height: 35px">
                    <p>{{Str::limit($product->name,35, '...') }}</p>
                </div>
                <p><span style="font-size: 12px; color:grey">{{$product->quantity}} {{$product->unit->unit}}</span></p>
                <div class="d-flex justify-content-between">
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
                    <button class="btn btn-success h-100">Add</button>
                </div>
            </div>

        </a>
    </div>

