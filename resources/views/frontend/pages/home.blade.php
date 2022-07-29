<x-frontend.template>
    <x-slot name="title">Home</x-slot>
    <x-frontend.navbar />

    /** Welcome with download app link **/
    <div class="container">
        <div class="row">
            @foreach ($ads as $ad)
            <div class="col-12 py-1">
                <img src="{{asset($ad->image)}}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>
    </div>

    /** Category Navigation Bar **/
    <div class="container ">
        <div class="row g-2">
            <div class="col-lg-6">
                <div class="d-flex flex-row justify-content-center py-1">
                    @foreach ($categories as $index=>$category)
                        @if ($index>=0 && $index<=5)
                            <div class="p-1 flex-grow-1">
                                <img src="{{asset($category->image)}}" width="200" class="img-fluid" alt="">
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-row justify-content-center py-1">
                    @foreach ($categories as $index=>$category)
                        @if ($index>=6 && $index<=12)
                            <div class="p-1 flex-grow-1 ">
                                <img src="{{asset($category->image)}}" width="200" class="img-fluid" alt="">
                            </div>
                        @endif
                    @endforeach
                 </div>
            </div>
        </div>
    </div>

    /** Footer **/
    <x-frontend.footer/>
</x-frontend.template>
