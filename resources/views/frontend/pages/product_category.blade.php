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

    {{-- Product by categories --}}

    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <h4>{{$categories->name}}</h4>
        </div>
        <div class="row py-2">
            <div class="col-12">
                <div class="row g-3">
                    @foreach ($products as $product)
                            <div class="col-2" >
                                <x-frontend.product :product=$product />
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <x-frontend.footer/>
</x-frontend.template>
