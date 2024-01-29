<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ItemsController extends Controller
{
//
    public function GetItemgroup()
    {
        $data=Itemgroup::All();
        $issave=true;
        return view('itemgroup',['data'=>$data,'issave'=>$issave]);
    }

    
    public function SaveGroupsItems(Request $request)
    {
        
        $data=Itemgroup::Create([
            'itemgroupname'=>$request->itemgroupname
        ]);
        $data->save();
        return redirect('addgritem');
    }


    public function del($x)
    {
        $item=ItemGroup::find($x);
        $item->delete();
        return redirect('itemgroup');
    }

    public function edit($x)
    {
        $item=ItemGroup::where('id',$x)
        ->first();
        return view('editgroupitem',['item'=>$item]);
    }



    public function Update(Request $request)
    {
        $item=ItemGroup::find($request->id);
        $item->itemgroupname=$request->namegroup;

        $item->save();
        return redirect('itemgroup');

    }

    public function DisplayItems()
    {
        $data=DB::table('itemgroups')
        ->join('items','itemgroups.id','=','items.itemgroupno')
        ->get();

        return view('dashboard.controlpanel',['data'=>$data]);
    }

    public function displayadditemsgroup()
    {
        $data=Itemgroup::All();
        return view('dashboard.addgroupsitem',['data'=>$data]);
    }

    



    public function GetItems()
    {
        $data=Items::All();
        return view('items',['data'=>$data]);
    }


    public function SaveItems(Request $request)
    {
        $data=Items::Create([
            'itemname'=>$request->itemname,
            'locations'=>$request->locations,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'image'=>$request->image,
            'itemgroupno'=>$request->itemgroupno ]);
        $data->save();
        return redirect('additem');
    }


    public function delete($x)
    {
        $item=Items::find($x);
        $item->delete();
        return redirect('items');
    }


    public function EditItem($x)
    {
        $item=Items::where('id',$x)
        ->first();
        return view('edititems',['item'=>$item]);
    }



    public function UpdateItems(Request $request)
    {
        $item=Items::find($request->id);
        $item->itemname=$request->itemname;
        $item->price=$request->price;
        $item->qty=$request->qty;
        $item->locations=$request->locations;
        $item->itemgroupno=$request->itemgroupno;

        $item->save();
        return redirect('items');
    }

    public function displayadditems()
    {
        $data=Items::All();
        return view('dashboard.additems',['data'=>$data]);
    }

    
    public function ShowItemGroup()
    {
        $data=Itemgroup::All();
        $count=$data->count();
        return view('welcome',['data'=>$data,'count'=>$count]);
    }

    public function Showproduct($id)
    {
        $data=Items::where('itemgroupno',$id)
        ->get();
        Session::put('id',$id);
        return view('showproduct',['data'=>$data]);
    }

public function AddtoCart($id)
{

    DB::table('cart')->insert(['iditem'=> $id]);
    $idgroup=Session::get('id');
    $count=DB::table('cart')->get()->count();

    Session::put('countitem',$count);
    return redirect('showproduct/'.$idgroup);

}

public function Checkout()
{
    return view ('checkout');
}

}