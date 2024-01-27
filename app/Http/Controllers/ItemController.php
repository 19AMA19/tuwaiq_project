<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Itemgroup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Double;

class ItemController extends Controller
{
    public function GetItemGroup(){
        $data = Itemgroup::All();
        $conut = DB::table('cart')->get()->count();
        Session::put('cartItems', $conut);
        return view('itemgroup', ['data' => $data]);
    }

    public function GetItem(){
        $data = Item::All();
        return view('items', ['data' => $data]);
    }

    public function ShowAllGroup(){
        $data = Itemgroup::All();
        $count = $data->count();
        return view('welcome', ['data' => $data, 'count' =>$count]);
    }

    public function AddNewGroup(Request $request){
        
        $data = Itemgroup::create([
            'ItemGroupName' => $request -> ItemGroupName,
            'ItemGroupImage' => $request -> ItemGroupImage
        ]);
        $data->save();
        return redirect()->back()->with('success', 'Added Successfully');
    }

    // Controller
    public function AddNewItem(Request $request){
        $data = Item::create([
            'ItemName' => $request -> ItemName,
            'ItemPrice' => $request -> ItemPrice,
            'Quantity'=> $request -> Quantity,
            'Color'=> $request -> Color,
            'ItemGroupId'=> $request -> ItemGroupId,
        ]);
        $data->save();
        return redirect()->back()->with('success', 'Added Successfully');
    }

    public function DeleteGroupItem($id){

        $item = Itemgroup::find($id);
        $item->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function EditGroupItem($id){
        $item = Itemgroup::where('id', $id) -> first();
        return view('editgroupitem', ['item' => $item]);
    }

    public function UpdateGroupItem(Request $request){
        $item = Itemgroup::find($request -> id);
        $item -> ItemGroupName = $request -> ItemGroupName;
        $item->save();
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function getItemsByGroup($id){
        $data = Item::where('ItemGroupId', $id)->get();
        return view('showproducts', ['data' => $data]);
    }



    public function Checkout(){
        $data = DB::table('cart')->get();
        $total = DB::table('cart')->sum('ItemPrice');
        if($total > 99){
            $shipping = 0; 
        } else {
            $shipping = 27; 
        }
        $tax = $total * 0.15;
        return view('checkout', ['data' => $data, 'total' => $total, 'shipping' => $shipping, 'tax' => $tax]);
    }

    public function AddToCart($ItemName, $ItemPrice, $Image){
        DB::table('cart')->insert(['ItemName'=> $ItemName, 'ItemPrice' => $ItemPrice, 'Image' => $Image]);
        $conut = DB::table('cart')->get()->count();
        Session::put('cartItems', $conut);
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function AddToFavorite($ItemName, $ItemPrice, $Image){
        DB::table('favorite')->insert(['ItemName'=> $ItemName, 'ItemPrice' => $ItemPrice, 'Image'=>$Image]);
        $conutFavorite = DB::table('favorite')->get()->count();
        Session::put('conutFavorite', $conutFavorite);
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function ConfirmOrder($Quantity, $TotalPrice, $CustomerId, $Status){
        DB::table('invoice')->insert(['Quantity' => $Quantity, 'TotalPrice' => $TotalPrice, 'CustomerId' => $CustomerId, 'Status' => $Status]);
        $conut = DB::table('invoice')->get()->count();
        Session::put('invoice', $conut);

        $data = DB::table('invoice')
        ->where('CustomerId', auth()->user()->id)
        ->get();

        return view('profile', ['data' => $data]);
    }


    
    
    public function Favorite(){
        $data = DB::table('favorite')->get();
        return view('favorite', ['data' => $data]);
    }
    
    // public function myInvoice(){
    //     $data = DB::table('invoice')
    //     ->where('CustomerId', auth()->user()->id)
    //     ->get();

    //     return view('profile', ['data' => $data]);
    // }




    // public function Checkout(){
    //     return view('checkout');
    // }

    // public function TestAPI(){
    //     $response = Http::get('https://jsonplaceholder.typicode.com/photos');
    //     $data = $response->json();
        // dd($data );
    //   $apiURL = 'https://v1.baseball.api-sports.io/leagues';
    //   $headers = [
    //     'Content-Type' => 'application/json',
    //     'X-RapidAPI-Key' => '24c939c2ba293c859d5ecd476932d293'
    // ];
    // $response = Http::withHeaders($headers)->get($apiURL);
    // $data = $response->json();

    // return view('testapi', ['data' => $data]);
    // }
}