<div class="custom-col-style-2 custom-col-4" >
    <div class="product-wrapper product-border mb-24" style="border-radius:16px">
        <div class="product-img-3">
            <a href="{{route('products.show', $product)}}">
                @if(!empty($product->cover_img))
                    <img src="{{ url('storage/'.$product->cover_img) }}" alt="" >
                    <img src="{{ $product->cover_img }}" alt="">
                @else
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTtqPloORJW0rm_Pg78oNbMAWC4alWcbfg3w&s" alt="">
                @endif
            </a>
            <div class="product-action-right">
                <a class="animate-right" href="{{route('products.show', $product)}}" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="#">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center" style="background:#0A5EB0">
           
            <h4><a href="{{route('products.show', $product)}}" class"text-truncate" style="white-space: nowrap; overflow: hidden; color:white">{{$product->name}}</a></h4>
            
            <h5 style="color:white">$ {{$product->price}}</h5>
       
        </div>
    </div>
</div>
