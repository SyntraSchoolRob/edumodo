@php $count=1; @endphp
@foreach($products as $product)
@php  $random_number =  rand(1,3);  @endphp
@if($random_number==1)
<div class="col-12 col-md-4 boxjeP mt-4">
    @elseif($random_number==2)
    <div class="col-12 col-md-4 boxjeY mt-4">
    @else
    <div class="col-12 col-md-4 boxjeR mt-4">
@endif
    <a href="{{route('product', ['id'=>4])}}" class="hnone"><div class="card">
            <img src="{{$product->photo ? asset($product->photo->file) : asset('images/website/shopImg.png') }}" alt="product" class="img-fluid card-img-top">
            <p class="montserratL text-center m-0 card-title c5a9">{{$product->title}}</p>
            <p class="fs18 font-weight-bold text-center card-text pb-3 c5a9">${{$product->price}}</p>
            @if($random_number==1)
            <div class="overlayP">
                @elseif($random_number==2)
                <div class="overlayY">
                @else
                <div class="overlayR">
                @endif
                <div class="textOverlay">{{$product->category ? $product->category->name : 'test'}} <i class="fas fa-arrow-right pl-2"></i></div>
            </div>
        </div></a>
</div>
@endforeach
