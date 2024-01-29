@extends('layouts.app')

@section('content')

<?php 
$c = 0;
 ?>

<div class="container">

    <h2 class="alert alert-warning text-center">أحجز تذكرتك الآن بكل أمان وبسعر أقل <i class="fa-solid fa-hand-peace"></i>!</h2>
    @while($c < $count) 
    <div class="row mt-4 text-center d-flex align-items-center justify-content-center">
        <div class="col-sm-4 text-center p-2">
            <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
                <div class="card">
                    <div class="card-body" style="background-color: #f5f3f5;">
                        <h4>{{$data[$c]->itemgroupname}}</h4>
                        <h3><i class="fa-solid fa-fire text-danger"></i></h3>
                    </div>
                </div>
            </a>
        </div>

        <?php $c++;?>
        @if($c < $count) 
        <div class="col-sm-4 text-center p-2">
            <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
                <div class="card">
                    <div class="card-body" style="background-color: #f5f3f5;">
                        <h4>{{$data[$c]->itemgroupname}}</h4>
                        <h3><i class="fa-solid fa-futbol text-info"></i></h3>
                    </div>
                </div>
            </a>
</div>

<?php $c++;?>
@endif
@if($c < $count) <div class="col-sm-4 text-center p-2">
    <a href="{{route('showproduct',['id'=>$data[$c]->id])}}">
        <div class="card">
            <div class="card-body" style="background-color: #f5f3f5;">
                <h4>{{$data[$c]->itemgroupname}}</h4>
                <h3><i class="fa-solid fa-clapperboard"></i></h3>
            </div>
        </div>
    </a>
</div>
    <?php $c++;?>
    @endif
 </div>
    @endwhile
</div>
    @endsection