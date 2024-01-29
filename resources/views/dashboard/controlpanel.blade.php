@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center"> بيانات الأصناف</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>رقم العنصر </th>
                                <th> اسم العنصر</th>
                                <th>رقم المجموعة </th>
                                <th>السعر </th>
                                <th>الكمية </th>
                                <th>الموقع</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($data!=null)

                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->itemname}}</td>
                                <td>{{$row->itemgroupno}}</td>
                                <td>{{$row->price}}</td>
                                <td>{{$row->qty}}</td>
                                <td>{{$row->locations}}</td>
                            </tr>


                            @endforeach

                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
