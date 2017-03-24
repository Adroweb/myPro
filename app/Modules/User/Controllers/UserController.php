<?php namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $allshops = DB::table('shop')->orderBy('shop_id','DESC')->get();

        return view("User::index",['shops' => $allshops]);

    }

    public function about()
    {
        return view("User::uabout");
    }

    public function services()
    {
        return view("User::services");
    }

    public function stores()
    {
        $allshops = DB::table('shop')->orderBy('shop_id','DESC')->get();
        return view("User::stores",['shops' => $allshops,'single_shop'=>'0']);
    }

    public function store($id)
    {
        $pro_tbl_id = DB::table('shop')->where('shop_id','=',$id)->value('seller_id');
        $allshops = DB::table('shop')->where('shop_id','=',$id)->orderBy('shop_id','DESC')->get();
        $allproducts = DB::table('sl17_'.$pro_tbl_id.'_product')->orderBy('id','DESC')->get();
        return view("User::shops",['shops' => $allshops,'products'=>$allproducts,'single_shop'=>'1']);
    }

    public function contact()
    {
        return view("User::contact");
    }

    public function login()
    {
        return view("User::login");
    }

    public function register()
    {
        return view("User::register");
    }

    public function registerUser(Request $request)
    {
        // dd("ddddddddddddddd");
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|alpha|min:2',
            'lastname' => 'required|alpha|min:2',
            'email' => 'required|email',

            'mobile' => 'required|numeric|regex:/^[1-9]{1}[0-9]{9}$/',

            'password' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/',
            'confirmpassword' => 'required|same:password'

        ]);

        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $firstname = $request->firstname;
            $lastname = $request->lastname;

            $email = $request->email;
            $mobile = $request->mobile;
            $password = $request->password;
            $password = Hash::make($password);


            $roles = DB::table('users')->where('email','=',$email)->value('role');
            $roledata = explode("#", $roles);

                if(count($roles) == 0)
                {
                    $data = array('firstname' => $firstname, 'lastname' => $lastname, 'name' => $firstname . ' ' . $lastname, 'email' => $email, 'mobile' => $mobile, 'password' => $password,'role'=>1);
                    $obj = new User();
                    $result = $obj->registerUser($data);
                    $userid = DB::table('users')->where('email','=', $email)->value('id');
                    DB::table('wallets')->insert(
                        ['user_id' => $userid,'user_type'=>'customer','green_amount'=>'0.00','red_amount'=>'0.00']
                    );

                    return redirect('/signin')->with('status', 'You have successfully Registered!,please login');
                }
                else
                {
                    foreach ($roledata as $role)
                    {
                        if($role === "1")
                        {
                            return redirect('/signin')->with('status', 'Your Email is already registered as a "customer" please login with same username & password.');

                        }
                    }
                    if($role === "2")
                    {
                        DB::table('users')->where('email','=',$email)->update(['role' => $roles.'#1']);
                        return redirect('/signin')->with('status', 'Your username/password is Updated as a "customer" please login with same username & password.');
                    }
                    else
                    {
                        DB::table('users')->where('email','=',$email)->update(['role' => $roles.'#1']);
                        return redirect('/signin')->with('status', 'Your username/password is Updated as a "customer" please login with same username & password.');
                    }
                }


        }

    }

    public function loginAuth(Request $request)
    {
        // dd("ddddddddddddddddddd");
        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'password' => 'required',

        ]);

        if ($validator->fails()) {
            // dd("ddddddddddddddddddd");

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $email = $request->email;
            $password = $request->password;

            $name = DB::table('users')->where('email', $email)->value('name');
            $mobile = DB::table('users')->where('email', $email)->value('mobile');
            Session::put('username', $name);
            Session::put('email', $email);
            Session::put('mobile', $mobile);

//            Wallet Data For Display in Home Lay Out

            $roles = DB::table('users')->where('email','=',$email)->value('role');
            $roledata = explode("#", $roles);

            if (Auth::attempt(['email' => $email, 'password' => $password]))
            {
                foreach ($roledata as $role)
                {
                    if($role === "1")
                    {
                        return Redirect::to('udashboard')->with('alert-success', 'You are now logged in.');
                    }

                }
                return redirect('/signin')->with('message', 'Your username/password was not found please register.');

            }
            else
            {
                return Redirect::to('signin')->with('message', 'Your username/password was incorrect')->withInput();
            }

        }

    }

    public function udashboard()
    {

        if (Auth::check()) {

            $userid = Auth::user()->id;

            //            ******start home layout contents*****
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
            //            ******End home layout contents*****

            $shop_u_id = DB::table('shop')->value('seller_id');
            $pro_tbl_id = DB::table('users')->where('id','=',$shop_u_id)->value('id');

            $allshops = DB::table('shop')->orderBy('shop_id','DESC')->get();
            $allproducts = DB::table('sl17_'.$pro_tbl_id.'_product')->orderBy('id','DESC')->get();

            return view("User::udashboard",['wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages,'shops' =>$allshops,'products'=>$allproducts]);
        } else {
            return view("User::login");
        }

    }

//    public function visiteshop()
//    {
//
//        if (Auth::check()) {
//
//            $userid = Auth::user()->id;
//
//            //            ******start home layout contents*****
//            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
//            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
//            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
//            //            ******End home layout contents*****
//
//            return view("User::udashboard",['wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages]);
//        } else {
//            return view("User::login");
//        }
//
//    }

    public function myshoplife()
    {
        if (Auth::check()) {
            $userid = Auth::user()->id;
            $shoplife = DB::table('shoplife')->where('user_id', '=', $userid)->get();

            //            ******start home layout contents*****
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
            //            ******End home layout contents*****

            return view("User::myshoplife", ['postdata' => $shoplife,'wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages]);
        } else {
            return view("User::login");
        }
    }

    public function profile()
    {
        if (Auth::check()) {
//            ***profile Data***
            $users = Auth::User();

            $userid = Auth::User()->id;

            $followers=DB::table('follows')->where('user_id','=',$userid)->value('user_id');
            $following=DB::table('follows')->where('follower_id','=',$userid)->value('follower_id');


            $userfollow=DB::table('users')->distinct()->where('id','<>',$followers)->get();
            $userfollowing=DB::table('users')->distinct()->where('id','<>',$following)->get();

            $followerdates=DB::table('follows')->where('user_id','=',$userid)->get();
            $followingdates=DB::table('follows')->where('user_id','=',$userid)->get();

            //            ******start home layout contents*****
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
            //            ******End home layout contents*****

            return view("User::profile", ['userdata' => $users,'follower'=>$userfollow,'following'=>$userfollowing,
                'wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages,'followerdate'=>$followerdates, 'followingdate'=>$followingdates]);
        } else {
            return view("User::login");
        }
    }


    public function userdetailscheckupdate($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:2',
            'mobile' => 'required|regex:/^[1-9]{1}[0-9]{9}$/'
        ]);
        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $name = $request->username;
            $mobile = $request->mobile;
            Session::put('username', $name);
            DB::table('users')->where('id', $id)->update(['name' => $name, 'mobile' => $mobile]);
            return Redirect::to('profile')->with('alert-success', 'User Details Successfully Updated.');
        }
    }

    public function changepassword($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldpass' => 'required',
            'password' => 'required|min:6|regex:/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6}/',
            'confirmpassword' => 'required|same:password'
        ]);

        $data = $request->all();
        $user = User::find(auth()->user()->id);

        if (!Hash::check($data['oldpass'], $user->password)) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->with('alert-danger','The specified password does not match your old password');

        }
        else
        {
            $password = $request->password;
            $password = Hash::make($password);
            DB::table('users')->where('id','=',$id)->update(['password' => $password]);
            return Redirect::to('setting')->with('alert-success', 'Password Updated Successfully');
        }
    }
    public function updateaddress($id,Request $request)
    {

            $billaddress = $request->billingaddress;
            $shipaddress = $request->shippingddress;
            DB::table('users')->where('id', $id)->update(['bill_address' => $billaddress,'ship_address' => $shipaddress]);
            return Redirect::to('setting')->with('alert-success', 'Address Updated Successfully');

    }
    public function addmoneytowallet($id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'addmoneytext' => 'required|numeric'

        ]);

        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $newamount = $request->addmoneytext;

            $oldamount = DB::table('wallets')->where('user_id', '=', $id)->value('green_amount');
            $addmoney = $newamount + $oldamount;
            DB::table('wallets')->where('user_id', '=', $id)->update(['green_amount' => $addmoney]);

            DB::table('notification')->insert(
                ['user_id' => $id, 'user_type' => 'customer', 'sender_id' => $id, 'sender_type' => 'customer',
                    'not_text' => 'Rs. '.$newamount.' has been credited in your wallet', 'link' => 'www.Adroweb.com', 'status' => 'unread']
            );

            return Redirect::to('setting')->with('alert-success', 'Your Wallet Updated Successfully');
        }
    }

    public function sendmoney($id,Request $request)
    {

        $validator = Validator::make($request->all(), [
            'txtmoney' => 'required|numeric',
            'txtemail' => 'required|email'
        ]);

        if ($validator->fails()) {
            // dd("ddddddddddddddddddd");

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            $amount = $request->txtmoney;
            $email = $request->txtemail;

            $currentuseramount = DB::table('wallets')->where('user_id', '=', $id)->value('green_amount');

            $receiveruserid = DB::table('users')->where('email', '=', $email)->value('id');
            $receiverwallet = DB::table('wallets')->where('user_id', '=', $receiveruserid)->value('green_amount');

            $walletupdate = $currentuseramount - $amount;
            $receivemoney = $receiverwallet + $amount;

            DB::table('wallets')->where('user_id', '=', $id)->update(['green_amount' => $walletupdate]);

            $receiverid = DB::table('users')->where('email', '=', $email)->value('id');
            DB::table('wallets')->where('user_id', '=', $receiverid)->update(['green_amount' => $receivemoney]);

            DB::table('notification')->insert(
                ['user_id' => $id,'user_type'=>'customer','sender_id' => $receiverid,'sender_type'=>'customer',
                    'not_text'=>'Rs. '.$amount.' has been Debited to your wallet.','link'=>'www.Adroweb.com','status'=>'unread']
            );

            return Redirect::to('setting')->with('alert-success', 'Money Transfer Successfully');
        }
    }

    public function myorder()
    {
        if (Auth::check()) {

            $userid = Auth::user()->id;

            //            ******start home layout contents*****
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
            //            ******End home layout contents*****

            $orders = DB::table('orders')->where('c_id', '=',$userid)->get();
            return view("User::myorder",['order' => $orders,'wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages]);
        } else {
            return view("User::login");
        }

    }
    public function wishlist()
    {
        $userid = Auth::user()->id;

        //            ******start home layout contents*****
        $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
        $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
        $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
        //            ******End home layout contents*****

        return view("User::wishlist",['wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages]);
    }
    public function setting()
    {
        if(Auth::check())
        {
            $users = Auth::User();
            $userid = Auth::user()->id;

            $usersaddress = DB::table('users')->where('id','=',$userid)->get();

            $transations = DB::table('transactions')->where('user_id', '=',$userid)->get();

            //            ******start home layout contents*****
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','customer')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','customer')->orderBy('msg_id','DESC')->get();
            //            ******End home layout contents*****

            return view("User::setting",['user'=>$users,'address'=>$usersaddress,'transation'=>$transations,'wallet' => $wallets,'notification'=>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("User::login");
        }

    }
    public function userlogout()
    {
        Session::flush();
        return Redirect::to('signin')->with('message', 'You have successfully logout !! please login again');
    }

}
