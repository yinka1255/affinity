<?php

namespace App\Http\Controllers;

use Session;
use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
	public function index(){

        //$user = Auth::user();

        $admins = DB::table('admins')->join('users','users.id','=','admins.user_id')->select('admins.*', 'users.*')->get()->toArray();
		

        return view('admin/index1')->with([/*'user'=> $user,*/ 'admins'=> $admins]);

	
	}
	
	public function create(Request $request)
    {
        $user = new User;
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->status = 2; // Not yet verified
        $user->user_type = 1; // 1 for admin profile
        
        if($user->save()){
            
            $admin = new Admin;
            
            $admin->user_id = $user->id;    

            $admin->name = $request->input('name');

            $admin->phone = $request->input('phone');

            $admin->email = $request->input('email');

            $admin->staff_id = $request->input('staff_id');

            $admin->staff_unit = $request->input('staff_unit');

            $admin->staff_unit_id = $request->input('staff_unit_id');

            $admin->branch = $request->input('branch');

            $admin->email = $request->input('email');
                
            
            $avatar = $request->file('profile_picture'); 

            $filename = time();

            $extension = $avatar->extension();

            $path = 'images/'.$filename.'.'.$extension;

            move_uploaded_file($avatar, public_path($path));
        
            if ($request->file('profile_picture')->isValid()) {
                
                $admin->avatar = $path;

            }

            if($admin->save()){
                Session::flash('success', 'Congrats! New record saved');
                return back();
            }
            else{
                Session::flash('error', 'Ooops! An error occured');
                return back();
            }
        }   
        else{
            Session::flash('error', 'Ooops! An error occured');
            return back();
        } 

    }
	
	public function destroy($id)
    {
        //
        try
        {

            $admin = Admin::findOrFail($id);


            if ($admin->delete())
            {


            $user = User::findByDetailsId($id);

            $user->delete();

            return response()->json(['error' => false, 'message' => 'Admin record deleted successfully'],200);
            
            }

            return response()->json(['error' => true, 'message' => 'Admin record could not be deleted'],200);
        
        }
        catch (ModelNotFoundException $ex)
        {
            return response()->json(['error' => true, 'message' => 'Record not found'],404);
        }

    }

	
    public function show($id)
    {
        //
      try
        {
            $admin = Admin::findOrFail($id);

            return response()->json(['error' => false, 'admin' => $admin],200);

        }

        catch (ModelNotFoundException $ex)
        {
            return response()->json(['error' => true, 'message' => 'Record not found'],404);
        }



    }
    
    public function update(Request $request, $id)
    {
        $user = User::findByDetailsId($id);
        
        $admin = Admin::findOrFail($id);

            if ($request->has('username'))
            {
                $user->username = $request->input('username');

                if ($request->has('password'))
                    $user->password = bcrypt($request->input('password'));
                    
                 if ($request->has('name'))
                    $admin->name = $request->input('name');
                    
                 if ($request->has('phone'))
                    $admin->phone = $request->input('phone');
                
                 if ($request->has('email'))
                    $admin->email = $request->input('email');
            
            }        
            
            if ($admin->save())
            {
             
               if ($user->save())
               {
                    return response()->json(['error' => false, 'message' => 'User updated successfully with ID: ' . $id],200);
               }
    			else{
    			return response()->json(['error' => true, 'message' => 'Error updating user record'],200);
    
    			}
            }	
    }

	
	
	public function generateAdminID($id)
    {
     
        $customIdentifier = new CustomIdentifier;

        $generatedID = $customIdentifier->generateCustomID($id, "Admin");

        return $generatedID;

    }

    public function generatefakeID()
    {
     
        $fake = time();

        return $fake;
    }
	
}
