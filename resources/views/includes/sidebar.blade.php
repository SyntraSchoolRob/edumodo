<div class="col-12 col-sm-4 col-md-3 p-3 p-md-4 border-right rounded">
    <h1 class="fs14">Shop</h1>
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <p class="fs18 pt-4 pb-1 border-bottom">Software categories</p>

{{--        <div class="custom-control custom-radio">
            <a href="{{route('shop')}}" class="c5a9">
                <input class="form-check-input" type="checkbox" value="" id="catAll">
                <label class="form-check-label hcBeige" for="catAll">All categories</label>
            </a>
        </div>--}}


        @foreach($categories as $category)
                <div class="form-check">
                    <a href="{{route('productsPerCategory', $category->id)}}" class="c5a9">
                        <input class="custom-control-input" type="checkbox" value="" id="cat{{$category->id}}">
                        <label class="custom-control-label" for="cat{{$category->id}}">{{$category->name}}</label>
                    </a>
                </div>
        @endforeach



    <p class="fs18 pt-4 pb-1 border-bottom">School type</p>

        @foreach($schooltypes as $schooltype)
            <div class="form-check">
                <a href="{{route('productsPerSchoolType', $schooltype->id)}}" class="c5a9">
                    <input class="form-check-input" type="checkbox" value="" id="cat{{$schooltype->type}}">
                    <label class="form-check-label hcBeige" for="cat{{$schooltype->type}}">{{$schooltype->type}}</label>
                </a>
            </div>
        @endforeach


        <p class="fs18 pt-4 pb-1 border-bottom">Price range</p>
        <div class="regular-slider mt-5 mb-5"></div>

</div>
