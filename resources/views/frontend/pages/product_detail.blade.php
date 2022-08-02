<x-frontend.template>
    <x-slot name="title">Home</x-slot>
    <x-frontend.navbar />
    <div class="container py-2">
        {{-- Menus  --}}
        <div class="row g-2">
            <div class="col-11">
                <div class="d-flex justify-content-between text-center">
                    @foreach ($menus as $index=>$category)
                        @if ($index>=0 && $index<=6)
                            <div >
                                <a href="/product/category/{{$category->id}}">{{$category->name}}</a>
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
            <div class="col-1">
                <div class="dropdown text-end">
                    <a class="dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      More
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($menus as $index=>$category)
                        @if ($index>=7 && $index<=11)
                            <div >
                                <li><a class="dropdown-item" href="/product/category/{{$category->id}}">{{$category->name}}</a></li>
                            </div>
                        @endif
                    @endforeach
                    </ul>
                  </div>
            </div>
        </div>
    </div>

    {{-- Product Details --}}
    <div class="container  py-5">
        <div class="row">
            <div class="col-md-4 overlay">
                <div class="overlay-content">
                    @if (!empty($product->discount))
                        <h5 class="bg-danger p-1" style="font-size: 24px; color:aliceblue; width:100px;">{{$product->discount}} % off</h5>
                    @endif
                </div>
                <img src="{{asset($product->image)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <h3>{{$product->name}}</h3>
                    </div>
                    <div class="col-2 py-3">
                        <div class="card border border-success">
                            <div class="card-body">
                                   <span class="text-success" style="font-size: 15px;"> Rs {{$product->selling_price}} / {{$product->unit->unit}}</span><br>
                                   @if (!empty($product->discount))
                                    <span class="text-decoration-line-through text-danger fs-5">Rs {{$product->price}}</span>
                                   @endif
                            </div>
                            @if (!empty($product->discount))
                                <div class="card-footer bg-success text-center text-white ">
                                    <h6 class="fw-bold">{{$product->discount}}% off</h6>
                                </div>
                            @endif
                        </div>
                        <div class="py-4">
                            <button class="btn border-success fw-bold fs-5 text-success" style="width: 150px; height:50px" type="submit">ADD</button>
                        </div>
                    </div>
                    <div class="col-12 py-4">
                        {!!$product->description!!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-frontend.footer/>
</x-frontend.template>
