@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">تحديد نوع مجموعة التذكرة</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('save')}}" method="post">
                        @csrf
                        <label for="itemgroupname">نوع الفعالية</label>
                        <input type="text" name="itemgroupname" id="itemgroupname">
                        <div class="row mt-3 p-2"></div>
                        <div class="col">
                        <button class="btn btn-primary" type="submit">حفظ</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>رقم المجموعة</th>
                        <th>اسم المجموعة</th>
                        <th colspan="2">اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)

                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemgroupname}}</td>
                        <td><a href="{{route('del',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                        <td><a href="{{route('edit',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection