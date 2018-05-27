<?php

namespace App\Http\Controllers;

use Session;
use App\WaitlistedProductCategory;
use App\WaitlistedProduct;
use App\WaitlistedProductRequest;
use App\WaitlistedProductGallery;
use App\Group;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaitlistedProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $user = Admin::where('admin_id', $user->details_id)->first();

        $waitlisted_products = DB::table('waitlisted_products')->join('waitlisted_product_categories','waitlisted_product_categories.id','=','waitlisted_products.waitlisted_product_category_id')->select('waitlisted_product_categories.name as category_name', 'waitlisted_products.*')->get()->toArray();
		
        $admins = Admin::all();
        
        return view('admin_waitlisted_products')->with(['user'=> $user,'admins'=> $admins, 'waitlisted_products'=> $waitlisted_products]);

    }


    public function requests()
    {
        //
        $user = Auth::user();
        $user = Admin::where('admin_id', $user->details_id)->first();

        $waitlisted_product_requests = DB::table('waitlisted_product_requests')->join('customers','customers.customer_id','=','waitlisted_product_requests.customer_id')->join('waitlisted_products','waitlisted_products.id','=','waitlisted_product_requests.waitlisted_product_id')->select('customers.phone','customers.firstname', 'customers.lastname', 'waitlisted_products.*', 'waitlisted_product_requests.*')->get()->toArray();
		
        $admins = Admin::all();
        
        return view('admin_waitlisted_product_requests')->with(['user'=> $user,'admins'=> $admins, 'waitlisted_product_requests'=> $waitlisted_product_requests]);

    }


    public function newwaitlistedProduct(){

        $user = Auth::user();
        $user = Admin::where('admin_id', $user->details_id)->first();

        $categories = WaitlistedProductCategory::all();

        return view('admin_waitlisted_product_new')->with(['user'=> $user, 'categories'=> $categories]);
    }

    public function editwaitlistedProduct($id){

        $gallery = DB::table('waitlisted_product_gallery')->where('waitlisted_product_id', $id)->get()->toArray();
        $user = Auth::user();
        $user = Admin::where('admin_id', $user->details_id)->first();
        
        $categories = WaitlistedProductCategory::all();
        //$members_joined = DB::table('customer_event')->where('event_id', $id)->join('customers','customers.customer_id','=','customer_event.customer_id')->select('customers.*', 'customers.avatar as customer_avatar', 'customer_event.*')->get()->toArray();

        $waitlisted_product = DB::table('waitlisted_products')->where('waitlisted_products.id', $id)->join('waitlisted_product_categories','waitlisted_product_categories.id','=','waitlisted_products.waitlisted_product_category_id')->select('waitlisted_product_categories.name as category_name', 'waitlisted_products.*')->first();
        
        
        return view('admin_waitlisted_product_edit')->with(['user'=> $user, 'categories'=> $categories, /*, 'members_joined'=> $members_joined,*/ 'gallery'=> $gallery, 'waitlisted_product'=> $waitlisted_product]);
    }

    public function upload(Request $request)
    {
        $avatar = $request->file('avatar'); // create method to handle this section...
        
        $extension = $avatar->extension();

        $filename = time();

        $path = 'images/'.$filename.'.'.$extension;

        move_uploaded_file($avatar, public_path($path));

        $gallery = new WaitlistedProductGallery;

        $gallery->waitlisted_product_id = $request->input('waitlisted_product_id');
        
        $gallery->avatar = $path;
        


        if($gallery->save()){
            Session::flash('success', 'Image has been uploaded');
            return back();
        }else{
            Session::flash('error', 'An error occured. Could not upload image');
            return back();
        }  
    }    


    public function updateAdmin(Request $request)
    {
        $waitlisted_product = WaitlistedProductRequest::where('id', $request->input('id'))->first();

        $waitlisted_product->in_charge = $request->input('in_charge');

        if($waitlisted_product->save()){
            Session::flash('success', $waitlisted_product->in_charge. ' has been assigned ');
            return back();
        }else{
            Session::flash('error', 'An error occured. Could not assign admin');
            return back();
        }  

    }

    public function updateStatus(Request $request)
    {
        $waitlisted_product = WaitlistedProductRequest::where('id', $request->input('id'))->first();

        $waitlisted_product->status = $request->input('status');

        if($waitlisted_product->save()){
            Session::flash('success', 'Status has been set');
            return back();
        }else{
            Session::flash('error', 'An error occured. Could not set status');
            return back();
        }  

    }

    public function store(Request $request)
    {
        //
        $waitlisted_product = new WaitlistedProduct;

        $waitlisted_product->name = $request->input('name');

        $waitlisted_product->price= $request->input('price');

        $waitlisted_product->supplier_name = $request->input('supplier_name');

        $waitlisted_product->waitlisted_product_category_id = $request->input('waitlisted_product_category_id');

       

        $avatar = $request->file('avatar'); // create method to handle this section...
        
        $extension = $avatar->extension();

        $filename = time();

        $path = 'images/'.$filename.'.'.$extension;

        move_uploaded_file($avatar, public_path($path));
        
        $waitlisted_product->avatar = $path;
        


        if($waitlisted_product->save()){
            Session::flash('success', 'Event '. $waitlisted_product->name . ' has been created');
            return back();
        }else{
            Session::flash('error', 'An error occured. Could not create product');
            return back();
        }  

    }

    public function update(Request $request)
    {
        //
        $waitlisted_product = WaitlistedProduct::where('id', $request->input('waitlisted_product_id'))->first();

        $waitlisted_product->name = $request->input('name');

        $waitlisted_product->price = $request->input('price');

        $waitlisted_product->supplier_name = $request->input('supplier_name');



        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar'); 
            
            $extension = $avatar->extension();

            $filename = time();

            $path = 'images/'.$filename.'.'.$extension;

            move_uploaded_file($avatar, public_path($path));
            
            $waitlisted_product->avatar = $path;
        }


        if($waitlisted_product->save()){
            Session::flash('success', 'Event '. $waitlisted_product->name . ' has been updated');
            return back();
        }else{
            Session::flash('error', 'An error occured. Could not create category');
            return back();
        }  

    }



}
