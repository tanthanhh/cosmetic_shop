@extends('guest.page.layout', [
    'title' => ( $title ?? 'Danh sách sản phẩm' )
])

@section('content')
<section class="section-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="banner-wrap">
                    <img src="{{asset('1.png')}}" class="w-100 rounded">
                </article>
            </div> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- container //  -->
</section>
<header class="section-heading">
        <a href="#" class="btn btn-outline-primary float-right">See all</a>
        <h3 class="section-title">Danh sách sản phẩm</h3>
    </header><!-- sect-heading -->
<div class="row">
    @foreach($products as $product)
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="{{route('guest.show',['id' => $product->id])}}" class="img-wrap"> <img src="{{asset('storage/'.$product->image)}}"> </a>
                <figcaption class="info-wrap">
                    <a href="{{route('guest.show',['id' => $product->id])}}" class="title">{{$product->name}}</a>
                    @foreach($product->size as $i => $size)
						@if($i==0)
                            <div class="price mt-1">{{$size->product_price->price}} VNĐ</div> <!-- price-wrap.// -->
						@endif
					@endforeach
                    @php 
                        $id=$product->id;
                    @endphp
                  <button class="btn addToCart" onclick="addToCart({{$id}})">Add to Cart</button>
                </figcaption>
            </div>
        </div> <!-- col.// -->
    @endforeach
</div>
<div class="card-inner">
    <div class="nk-block-between-md g-3">
        <div class="g">
            {!!$products->links('pagination::bootstrap-4')!!}
        </div>
    </div><!-- .nk-block-between -->
</div>
@endsection

@push('footer')
<script>
    function addToCart(id){
        $.ajax({
            url: "/addCart/" +id,
            type:"GET",
            success: function(result){
                console.log(result);
                $('#cart').html(result);
            }
        });
    };
</script>
@endpush