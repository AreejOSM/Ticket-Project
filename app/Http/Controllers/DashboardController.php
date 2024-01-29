<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }





    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function displayadditems()
    {
        $data=Items::All();
        return view('dashboard.additems',['data'=>$data]);
    }
}
