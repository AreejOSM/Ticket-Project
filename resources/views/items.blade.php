@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <form action="{{ route('save-items')}}" method="post">
                        @csrf
                        <label for="itemname" class="p-1">اسم العنصر</label>
                        <input type="text" class="form-control form-control-sm p-0" name="itemname" id="itemname">

                        <label for="price" class="p-1">السعر</label>
                        <input type="text" class="form-control form-control-sm p-0" name="price" id="price">

                        <label for="qty" class="p-1">الكمية</label>
                        <input type="text" class="form-control form-control-sm p-0" name="qty" id="qty">

                        <label for="locations" class="p-1">الموقع</label>
                        <input type="text" class="form-control form-control-sm p-0" name="locations" id="locations">

                        <label for="itemgroupno" class="p-1">رقم المجموعة</label>
                        <input type="text" class="form-control form-control-sm p-0" name="itemgroupno" id="itemgroupno">

                        <label for="image" class="p-1">الصورة</label>
                        <input type="file" class="form-control-file" name="image" id="image">

                        <div class="row">
                            <div class="text-center">
                                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>اسم الصنف</th>
                        <th>السعر</th>
                        <th>الكمية</th>
                        <th>الموقع</th>
                        <th>رقم المجموعة</th>
                        <th colspan="2">اجراء</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->itemname}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->qty}}</td>
                        <td>{{$row->locations}}</td>
                        <td>{{$row->image}}</td>
                        <td>{{$row->itemgroupno}}</td>
                        <td><a href="{{route('delete',['x'=>$row->id])}}"><i
                                    class="fa-regular fa-trash-can text-danger"></i></a></td>
                        <td><a href="{{route('edit-item',['x'=>$row->id])}}"><i
                                    class="fa-regular fa-pen-to-square text-success"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection