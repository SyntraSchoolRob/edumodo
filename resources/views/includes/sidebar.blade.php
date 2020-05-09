<div class="col-12 col-sm-4 col-md-3 p-3 p-md-4 border-right rounded">
    <h1 class="">Shop</h1>
{{--        <input class="form-control" type="search" placeholder="Search" aria-label="Search">--}}
        <p class="fs18 pt-4 pb-1 border-bottom">Software categories</p>
        <a href="{{route('shop')}}" class="c5a9 hcBeige hline">All categories</a>
        <div class="d-none d-md-block">
            @foreach($categories as $category)
                <a href="{{route('productsPerCategory', $category->id)}}" class="c5a9 hcBeige hline">{{$category->name}}</a>
            @endforeach
        </div>
        <div class="d-block d-md-none">
            @foreach($categories as $category)
                <a href="{{route('productsPerCategory', $category->id)}}" class="c5a9 hcBeige hline"><p class="m-0">{{$category->name}}</p></a>
            @endforeach
        </div>
        <p class="fs18 pt-4 pb-1 border-bottom">School type</p>

        <div>
            @foreach($schooltypes as $schooltype)
                <a href="" class="c5a9 hcBeige hline"><p class="m-0">{{$schooltype->type}}</p></a>
            @endforeach
        </div>



{{--        <p class="fs18 pt-4 pb-1 border-bottom">Price range</p>
        <div class="regular-slider mt-5 mb-5"></div>--}}

</div>
