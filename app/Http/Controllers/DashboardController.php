<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Itemgroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

       // Get all Items in Dashboard Page
       public function GetAllItem() {
        $data = DB::table('itemgroups')
        ->join('items' , 'itemgroups.id', '=', 'items.ItemGroupId')
        ->get();

        return view('dashboard.controlpannel', ['data' => $data]);
    }

    // Add New Group in Dashboard Page
    public function AddNewGroupDashboard() {
        $data = Itemgroup::All();
        return view('dashboard.addgroupitem', ['data' => $data]);
    }

       // Add New Item in Dashboard Page
       public function AddNewItemDashboard() {
        $data = Item::All();
        return view('dashboard.additem', ['data' => $data]);
    }

    // Logout

// public function Logout(){
    
// }

}
