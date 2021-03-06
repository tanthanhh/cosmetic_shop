@extends('admin.product.layout', [
    'title' => ( $title ?? 'Product detail' )
])

@section('content')
<div class="nk-block">
    <div class="card card-bordered">
        <div class="card-inner">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <!-- <div class="product-gallery mr-xl-1 mr-xxl-5">
                       
                    </div> -->
                </div>

                <div class="col-lg-6">
                    <div class="product-gallery mr-xl-1 mr-xxl-5">
                        <img src="{{asset('storage/'.$product->image)}}" alt="">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="product-info mt-5 mr-xxl-5">
                        <h4 class="product-price text-primary">
                            @foreach($product->size as $j => $size)
                            @endforeach

                            @foreach($product->size as $i => $size)
                                <small class="text-muted fs-14px">
                                <?php echo number_format($size->product_price->price)."đ"; ?> @if($i!=$j) - @endif</small>
                            @endforeach
                        </h4>
                        <h2 class="product-title">{{$product->name}}</h2>
                        <div class="product-excrept text-soft">
                            <p class="lead">{!!$product->discription!!}</p>
                        </div>
                        <div class="product-meta">
                            <ul class="d-flex g-3 gx-5">
                                <li>
                                    <div class="fs-14px text-muted">Brand</div>
                                    <div class="fs-16px fw-bold text-secondary">
                                        @foreach($brands as $brand) 
                                            @if($product->brand_id==$brand->id)
                                                {{$brand->name}}
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <div class="fs-14px text-muted">Category</div>
                                    <div class="fs-16px fw-bold text-secondary">
                                        @foreach($categories as $category) 
                                            @if($product->category_id==$category->id)
                                                {{$category->name}}
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="product-meta">
                            <h6 class="title">Size</h6>
                            <ul class="custom-control-group">
                                @foreach($product->size as $size)
                                <li>
                                    <div class="custom-control custom-radio custom-control-pro no-control checked">
                                        <input type="radio" class="custom-control-input" name="sizeCheck">
                                        <label class="custom-control-label">{{$size->name}}</label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div><!-- .product-meta -->
                        <div class="product-meta">
                            <h6 class="title">Ingredient</h6>
                            <p class="lead">{!!$product->ingredient!!}</p>
                        </div><!-- .product-meta -->
                        <div class="product-meta">
                            <h6 class="title">Direction</h6>
                            <p class="lead">{!!$product->direction!!}</p>
                        </div><!-- .product-meta -->
                    </div><!-- .product-info -->
                </div><!-- .col -->
            </div><!-- .row -->
            <hr class="hr border-light">
        </div>
    </div>
</div>
@endsection
