@extends('admin.product.layout', [
    'title' => ( $title ?? 'Update Price ' )
])

@section('content')
<div class="card card-bordered">
    <div class="card-inner">
        <form class="form-validate" action="{{route('product.store_price',['id'=>$product->id])}}" id="dynamic_form" novalidate="novalidate" method="POST" >
        @csrf
            <div class="row g-gs">
                <div class="col-md-6">
                    <label class="form-label" for="">Add Price</label>
                    <table class="" id="dynamicAddRemove">
                        @foreach($product->size as $i => $prices)
                        <tr>
                            <td><input type="text" name="size[{{$i}}]" placeholder="Enter size" class="form-control"  value="{{$prices->name}}" />
                            </td>
                            <td><input type="text" name="price[{{$i}}]" placeholder="Enter price" class="form-control" value="{{$prices->product_price->price}}"/>
                            </td>
                            @if($i==0)
                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Price</button></td>
                            @else
                                <td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td>
                            @endif
                        </tr>
                        @endforeach
                        <input type="hidden" value="{{$i}}" id="idi">
                    </table>
                </div>
                <div class="col-md-12">
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" id="button" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection 


@push('footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var i = $("#idi").val();
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><input type="text" name="size[' + i +
                ']" placeholder="Enter size" class="form-control" /></td> <td><input type="text" name="price['+ i +
                ']" placeholder="Enter price" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
                );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
@endpush

