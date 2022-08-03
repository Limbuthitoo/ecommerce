<x-frontend.template>
    <x-slot name="title">Home</x-slot>
    <x-frontend.navbar />

    {{-- /** Welcome with download app link **/ --}}
    <div class="container">
        <div class="row">
            @foreach ($ads as $ad)
            <div class="col-12 py-1">
                <img src="{{asset($ad->image)}}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
    </div>

    {{-- Category Navigation Bar  --}}
    <div class="container py-2">
        <div class="row g-2">
            <div class="col-md-4">
                <div class="d-flex flex-row  ">

                    @foreach ($menus as $index=>$category)
                    <a href="/product/category/{{$category->id}}">
                        @if ($index>=0 && $index<=3)
                            <div >
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    </a>
                    @endforeach

                 </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row  ">
                    @foreach ($menus as $index=>$category)
                    <a href="/product/category/{{$category->id}}">
                        @if ($index>=4 && $index<=7)
                            <div >
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    </a>
                    @endforeach
                 </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row ">
                    @foreach ($menus as $index=>$category)
                    <a href="/product/category/{{$category->id}}">
                        @if ($index>=8 && $index<=11)
                            <div>
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    </a>
                    @endforeach
                 </div>
            </div>
        </div>
    </div>

    {{-- Fresh Fruits and Vegetable --}}
    <div class="py-3">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h4>{{$fruitVegetable->name}}</h4>
                <a href="">See All</a>
            </div>
            <div class="row py-2 owl-carousel owl-theme owl-loaded">
                <div class="col-12 owl-stage-outer">
                    <div class="owl-stage" >
                        @foreach ($fruitsVegetables as $index=> $freshVeg)
                            @if ($index>=0 && $index<=14)
                                <div class="owl-item" >
                                    <x-frontend.product :product=$freshVeg />
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- dairy breads and eggs--}}
    <div class="py-3">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h4>{{$dairyBreadEgg->name}}</h4>
                <a href="">See All</a>
            </div>
            <div class="row py-2 owl-carousel owl-theme owl-loaded">
                <div class="col-12 owl-stage-outer">
                    <div class="owl-stage" >
                        @foreach ($dairyBreadsEggs as $index=> $dairyProduct)
                            @if ($index>=0 && $index<=14)
                                <div class="owl-item" >
                                    <x-frontend.product :product=$dairyProduct />
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Personal Care--}}
    <div class="py-3">
        <div class="container">
            <div class="d-flex justify-content-between fw-bold">
                <h4>{{$personalCare->name}}</h4>
                <a href="">See All</a>
            </div>
            <div class="row py-2 owl-carousel owl-theme owl-loaded">
                <div class="col-12 owl-stage-outer">
                    <div class="owl-stage" >
                        @foreach ($personalCares as $index=> $personalCare)
                            @if ($index>=0 && $index<=14)
                                <div class="owl-item" >
                                    <x-frontend.product :product=$personalCare />
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- /** Footer **/ --}}
    <x-frontend.footer/>
</x-frontend.template>
