@extends('layouts.app')



@section('content')


<div class="container">

@foreach($data as $row)
<div class="card mt-2">
    <div class="card-body" style="background-color: #f5f3f5;">
        <div class="row mt-2">
            <div class="col-sm-3">
                <img src="/images/{{$row->image}}" style="max-width: 200px; height: 200px;">
            </div>
            <div class="col-sm-9 text-start">
                <h1 class="alert alert-secondary">{{$row->itemname}}</h1>
                <h5>Price: {{$row->price}}</h5>

                <div class="row">
                    <div class="col text-center">
                        <a href="{{route('addtocart',['id'=>$row->id])}}" class="btn" style="background-color: #ffd97d; "> Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endforeach

</div>
@endsection
