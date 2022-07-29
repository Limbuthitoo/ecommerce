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
                    @foreach ($categories as $index=>$category)
                        @if ($index>=0 && $index<=3)
                            <div >
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row  ">
                    @foreach ($categories as $index=>$category)
                        @if ($index>=4 && $index<=7)
                            <div >
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-row ">
                    @foreach ($categories as $index=>$category)
                        @if ($index>=8 && $index<=11)
                            <div>
                                <img src="{{asset($category->image)}}"  class="img-fluid" alt="">
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
        </div>
    </div>

    {{-- /** Footer **/ --}}
    <x-frontend.footer/>
</x-frontend.template>
