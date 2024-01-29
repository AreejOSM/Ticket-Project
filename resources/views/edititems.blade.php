@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
      <h1 class="alert alert-success">تعديل بيانات الأصناف</h1>
        <div class="col">
        <div class="card">
            <div class="card-body d-flex justify-content-center">
                <form action="{{route('update-items')}}" method="post">
                @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <label for="x1" class="p-1">اسم الصنف</label>
            <input type="text" class="form-control form-control-sm pt-1" name="itemname" id="x1" value="{{$item->itemname}}">

            <label for="x1" class="p-1">السعر</label>
            <input type="text" class="form-control form-control-sm pt-1" name="price" id="x2" value="{{$item->price}}">

            <label for="" class="p-1">الكمية</label>
            <input type="text" class="form-control form-control-sm pt-1" name="qty" id="x3" value="{{$item->qty}}">

            <label for="locations" class="p-1">الموقع</label>
            <input type="text" class="form-control form-control-sm pt-1" name="locations" id="x4" value="{{$item->locations}}">

            <label for="itemgroupno" class="p-1">رقم المجموعة</label>
            <input type="text" class="form-control form-control-sm pt-1" name="itemgroupno" id="x5" value="{{$item->itemgroupno}}">

            <label for="image" class="p-1">الصورة</label>
            <input type="file" class="form-control-file" name="image" id="image">
            
            <div class="text-center">
                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                 </div>
                </form>
            </div>
        </div>
    </div>
 </div>
</div> 
@endsection
