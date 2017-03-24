<?php namespace App\Modules\Seller\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Modules\Seller\Models\Seller;
use Illuminate\Support\Facades\Schema;
use App\Modules\User\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

use Illuminate\Support\Facades\Input;


class SellerController extends Controller {


    public function registerSeller()
    {
        return view("Seller::sellerRegistration");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newSeller(Request $request)
    {

        if ($request->isMethod('post'))
        {

//            $res=Input::get('id');
//            dd($res);

            //dd("dddddddddddddddd");
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:sellers',

                'mobile' => 'required',
                'aadharno' => 'required',

                'password' => 'required|min:6',
                'confirmpassword' => 'required|same:password'

            ]);


            if ($validator->fails()) {

                //  dd("dddddddddddddd");

                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            } else {


                $name = $request->name;
                $email = $request->email;
                $mobile = $request->mobile;
                $aadharno =$request->aadharno;
                $whatsappno = $request->whatsappno;
                $address = $request->address;
                $pincode = $request->pincode;
                $password = $request->password;
                $password = Hash::make($password);

                $roles = DB::table('users')->where('email','=',$email)->value('role');
                $roledata = explode("#", $roles);

                if(count($roles) == 0)
                {

                    $data = array('email' => $email,'password' => $password,'name' => $name,'role'=>2);
                    $obj = new User();
                    $result = $obj->registerUser($data);

                    $sellerid = DB::table('users')->where('email','=',$email)->value('id');

                    $data2 = array('seller_id'=>$sellerid,'name' => $name, 'email' => $email, 'mobile' => $mobile,'Aadharno' => $aadharno, 'whatsappno' => $whatsappno, 'address' => $address, 'pincode' => $pincode);
                    $obj = new Seller();
                    $result = $obj->registerSeller($data2);

                    $sid = DB::table('sellers')->where('email','=',$email)->value('id');
                    return view("Seller::accountDetails",['seller'=>$sid]);
                }
                else
                {
                    foreach($roledata as $role)
                    {
                        if($role === "2")
                        {
                            return redirect('/sellerlogin')->with('status', 'Your Email is already registered as a "Seller" please login with same username & password.');

                        }
                    }
                    if($role === "1")
                    {

                        $values = DB::table('users')->where('email','=',$email)->get();
                        foreach($values as $value)
                        {

                        DB::table('sellers')->insert(['seller_id' => $value->id,'name'=>$value->name,'email'=>$value->email,'mobile'=>$value->mobile,'Aadharno' => $aadharno, 'whatsappno' => $whatsappno, 'address' => $address, 'pincode' => $pincode]);

                        }
                        $sellerid = DB::table('sellers')->where('email','=',$email)->value('id');
                        DB::table('users')->where('email','=',$email)->update(['role' => $roles.'#2']);
                        return view("Seller::accountDetails",['seller'=>$sellerid])->with('status', 'Your username/password is Updated as a "Seller" please register your account details');                    }
                    else
                    {

                        $values = DB::table('users')->where('email','=',$email)->get();
                        foreach($values as $value)
                        {

                            DB::table('sellers')->insert(['seller_id' => $value->id,'name'=>$value->name,'email'=>$value->email,'mobile'=>$value->mobile,'Aadharno' => $aadharno, 'whatsappno' => $whatsappno, 'address' => $address, 'pincode' => $pincode]);

                        }
                        $sellerid = DB::table('sellers')->where('email','=',$email)->value('id');
                        DB::table('users')->where('email','=',$email)->update(['role' => $roles.'#2']);
                        return view("Seller::accountDetails",['seller'=>$sellerid])->with('status', 'Your username/password is Updated as a "Seller" please register your account details');            }
                }

            }


        }
        else
        {
            dd("Something is wrong");
        }
    }

    public function accountDetails()
    {
        return view("Seller::accountDetails");
    }

    public function accountDetailsRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'accountHolderName' => 'required',
            'accountNumber' => 'required',
            'ifscCode' =>'required',
            'panNo' =>'required',

        ]);


        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        else
        {
            $id=$request->invisible;
            $accountHolderName=$request->accountHolderName;
            $accountNumber=$request->accountNumber;
            $ifscCode=$request->ifscCode;
            $panNo=$request->panNo;

            $data=array('accountHolderName'=>$accountHolderName,'accountNumber'=>$accountNumber,'ifscCode'=>$ifscCode,'panNo'=>$panNo);

            $obj=new Seller();
            $result=$obj->updateSeller($data,$id);

            return view("Seller::sellerLogin");
        }

    }

    public function sellerlogin()
    {
        return view("Seller::sellerLogin");
    }

    public function sellerAuth(Request $request)
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

            $name = DB::table('users')->where('email','=', $email)->value('name');

            Session::put('name', $name);
            Session::put('email', $email);

//            Wallet Data For Display in Home Lay Out

            $roles = DB::table('users')->where('email','=',$email)->value('role');
            $roledata = explode("#", $roles);

            if (Auth::attempt(['email' => $email, 'password' => $password]))
            {
                foreach ($roledata as $role)
                {
                    if($role === "2")
                    {
                        return Redirect::to('/sellerdashboard')->with('alert-success', 'You are now logged in.');
                    }

                }

                return redirect('/sellerlogin')->with('message', 'Your username/password was not found please register.');
            }
            else
            {
                return Redirect::to('/sellerlogin')->with('message', 'Your username/password was incorrect')->withInput();
            }

        }

    }

    public function maindashboard()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::sellerdashboard",['theme'=>$colortheme,'notification'=>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }

    }

    public function sellerwallet()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;
            $wallets = DB::table('wallets')->where('user_id', '=',$userid)->get();

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::wallet",['theme'=>$colortheme,'walletdata' => $wallets,'user' => $userid,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
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
                ['user_id' => $id, 'user_type' => 'seller', 'sender_id' => $id, 'sender_type' => 'seller',
                    'not_text' => 'Rs. '.$newamount.' has been credited in your wallet', 'link' => 'www.Adroweb.com', 'status' => 'unread']
            );

            return redirect()->back()->with('alert-success', 'Your Wallet Updated Successfully');
        }
    }

    public function sendmoneytofrnd($id,Request $request)
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
                ['user_id' => $id,'user_type'=>'seller','sender_id' => $receiverid,'sender_type'=>'customer',
                    'not_text'=>'Rs. '.$amount.' has been Debited to your wallet.','link'=>'www.Adroweb.com','status'=>'unread']
            );

            return redirect()->back()->with('alert-success', 'Money Transfer Successfully');
        }
    }

    public function mailbox()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::mailbox",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function marketing()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::marketing",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function salesGrowth()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::salesgrowth",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function customerReview()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::customersreview",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function myaccount()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::myaccount",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function sellerprofile()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::sellerprofile",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function settings()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            $selleraddress = DB::table('sellers')->where('seller_id','=',$userid)->value('address');
            return view("Seller::settings",['theme'=>$colortheme,'address'=>$selleraddress,'user'=>$userid,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function updateselleraddress($id,Request $request)
    {

        $billaddress = $request->billingaddress;
        DB::table('sellers')->where('seller_id','=',$id)->update(['address' => $billaddress]);
        return redirect()->back()->with('alert-success', 'Address Updated Successfully');
    }

    public function changesellerpassword($id, Request $request)
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
            return redirect()->back()->with('alert-success', 'Password Updated Successfully');
        }
    }

    public function createnewshop(Request $request)
    {

        $userid = Auth::User()->id;
        $shopname = $request->shopname;
        $shopdesc = $request->shopdesc;

        $extension = time().'.'.$request->logopic->getClientOriginalExtension();
        $logopic = md5($_SERVER['HTTP_USER_AGENT'] . time()).'.'.$extension;
        $request->logopic->move(public_path('images/shop'), $logopic);

        $extension = time().'.'.$request->coverpic->getClientOriginalExtension();
        $coverpic = md5($_SERVER['HTTP_USER_AGENT']).'.'.$extension;
        $request->coverpic->move(public_path('images/shop'), $coverpic);

        DB::table('shop')->insert(['seller_id' => $userid,'id_prefix' => 'SL17_'.$userid,'shop_name'=>$shopname,'shop_desc'=>$shopdesc,'shop_logo'=>$logopic,'cover_pic'=>$coverpic,'live_link'=>'localhost.onlinestore.com/shop','shop_colortheme'=>'theme1']);

        Schema::connection('mysql')->create('SL17_'.$userid.'_categories', function($table)
            {
                $table->increments('id');
                $table->integer('seller_id');
                $table->string('name');
                $table->string('description')->nullable();
                $table->string('img_banner')->nullable();
                $table->string('img_thumbnail')->nullable();
                $table->string('status')->nullable();
                $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            });

            Schema::connection('mysql')->create('SL17_'.$userid.'_product', function($table)
            {
                $table->increments('id');
                $table->integer('cat_id');
                $table->integer('seller_id');
                $table->string('id_prefix')->nullable();
                $table->string('product_pic');
                $table->string('prod_name');
                $table->string('prod_desc');
                $table->string('attributes')->nullable();
                $table->string('filter')->nullable();
                $table->string('price', 10, 2);
                $table->string('special_price', 10, 2)->nullable();
                $table->string('qty_stock');
                $table->string('status')->nullable();
                $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            });

            Schema::connection('mysql')->create('SL17_'.$userid.'_attributes', function($table)
            {
                $table->increments('id');
                $table->integer('parent_id');
                $table->string('name');
                $table->string('value')->nullable();
            });

            Schema::connection('mysql')->create('SL17_'.$userid.'_attribute_to_product', function($table)
            {
                $table->increments('id');
                $table->integer('attribute_id');
                $table->integer('product_id');
                $table->string('description');
                $table->string('value');
                $table->string('value_prefix');
            });

            Schema::connection('mysql')->create('SL17_'.$userid.'_orders', function($table)
            {
                $table->increments('id');
                $table->integer('customer_id');
                $table->integer('seller_id');
                $table->integer('product_id');
                $table->integer('stock_id');
                $table->integer('trans_id');
                $table->string('price', 10, 2);
                $table->string('status')->nullable();
                $table->string('payment_mode')->nullable();
                $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            });
            return redirect()->back()->with('alert-success', 'Shop Created Successfully.');
    }

    public function sellershop()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            $shops = DB::table('shop')->where('seller_id','=',$userid)->get();

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::shop",['theme'=>$colortheme,'sellerid'=>$userid,'shop'=>$shops,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }

    public function editshopdetails($id, Request $request)
    {
        $shopname = $request->txtshopname;
        $shopdesc = $request->txtshopdesc;

        $extension = time().'.'.$request->logopic->getClientOriginalExtension();
        $logopic = md5($_SERVER['HTTP_USER_AGENT'] . time()).'.'.$extension;
        $request->logopic->move(public_path('images/shop'), $logopic);

        $extension = time().'.'.$request->coverpic->getClientOriginalExtension();
        $coverpic = md5($_SERVER['HTTP_USER_AGENT']).'.'.$extension;
        $request->coverpic->move(public_path('images/shop'), $coverpic);

        DB::table('shop')->where('shop_id','=',$id)->update(['shop_name' => $shopname, 'shop_desc' => $shopdesc,'shop_logo'=> $logopic,'cover_pic' => $coverpic]);
        return redirect()->back()->with('alert-success', 'Shop Details Successfully Updated.');
    }

    public function shopdelete($id)
    {
        DB::table('shop')->where('shop_id','=',$id)->delete();
        return redirect()->back()->with('alert-success', 'Shop Deleted Successfully.');
    }

    public function uploade()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            return view("Seller::uploade",['theme'=>$colortheme,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }


    public function uploadproduct(Request $request)
    {
        $userid = Auth::User()->id;
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'type' => 'required|alpha|min:2',
            'brand' => 'required',
            'pname' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pdescription' => 'required',
            'pprice' => 'required|numeric',
            'sprice' => 'required|numeric',
            'pquantity' => 'required|numeric'
        ]);

        if ($validator->fails()) {

            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $categories = $request->category;
            $type = $request->type;
            $brand = $request->brand;
            $pname = $request->pname;
            $pdesc = $request->pdescription;
            $pprice = $request->pprice;
            $sprice = $request->sprice;
            $pqty = $request->pquantity;

            $extension = time().'.'.$request->image->getClientOriginalExtension();
            $fileName = md5($_SERVER['HTTP_USER_AGENT'] . time()).'.'.$extension;
            $request->image->move(public_path('images/shop'), $fileName);


            DB::table('SL17_'.$userid.'_categories')->insert(['seller_id' => $userid,'name' => $categories]);

            $catid = DB::table('SL17_'.$userid.'_categories')->where('name','=',$categories)->value('id');

            DB::table('SL17_'.$userid.'_product')->insert(['cat_id' => $catid,'seller_id'=>$userid,'attributes' => $type,'filter' => $brand,'product_pic'=>$fileName,'prod_name' => $pname,'prod_desc' => $pdesc,'price' => $pprice,'special_price' => $sprice,'qty_stock' => $pqty]);
            return redirect()->back()->with('alert-success', 'Product Uploaded Successfully.');
        }
    }

    public function productlist()
    {
        if (Auth::check())
        {
            $userid = Auth::User()->id;

            //        *******Start Layout code********
            $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
            $notifications = DB::table('notification')->where('user_id', '=',$userid)->where('user_type','seller')->orderBy('not_id','DESC')->get();
            $messages = DB::table('messages')->where('reciever_id', '=',$userid)->where('reciever_type','seller')->orderBy('msg_id','DESC')->get();
            //        *******End  code********

            $categories = DB::table('SL17_'.$userid.'_categories')->get();

            $products = DB::table('SL17_'.$userid.'_product')->orderBy('id', 'desc')->get();
            return view("Seller::sellerproducts",['theme'=>$colortheme,'productlist'=>$products,'categorieslist'=>$categories,'notification' =>$notifications,'messages'=>$messages]);
        }
        else
        {
            return view("Seller::sellerLogin");
        }
    }
    public function GetProduct($id, Request $request)
    {
        $userid = Auth::User()->id;

        $product = DB::table('SL17_'.$userid.'_product')->where('id','=',$id)->get();

        echo \GuzzleHttp\json_encode($product);
    }
    public function ProductEdit($id, Request $request)
    {
        $userid = Auth::User()->id;

        $pname = $request->txtproname;
        $pdesc = $request->txtprodesc;
        $proprice = $request->txtproprice;
        $psprice = $request->txtprodsprice;
        $pqty = $request->txtproqty;


        $categories = DB::table('SL17_'.$userid.'_categories')->get();

        $products = DB::table('SL17_'.$userid.'_product')->orderBy('id', 'desc')->get();

        DB::table('SL17_'.$userid.'_product')->where('id','=',$id)->update(['id_prefix' => '101_2017','prod_name' => $pname,'prod_desc' => $pdesc,'price' => $proprice,'special_price' => $psprice,'qty_stock' => $pqty,'status' => 'available']);

        return redirect()->back()->with('alert-success','Product Details Successfully Updated.',['productlist'=>$products,'categorieslist'=>$categories]);
    }


    public function themecolor($id,Request $request)
    {
        $userid = Auth::User()->id;
        $theme = $request->theme1;
        DB::table('shop')->where('seller_id','=',$id)->update(['shop_colortheme' => $theme]);

//        *******Start theme Color code********
        $colortheme = DB::table('shop')->where('seller_id','=',$userid)->value('shop_colortheme');
//        *******End theme Color code********

        return redirect()->back()->with('alert-success','Your favourite theme is updated..',['sellerid'=>$userid,'theme'=>$colortheme]);
    }

    public function sellerlogout()
    {
        Session::flush();
        return Redirect::to('sellerlogin')->with('status', 'You have successfully logout !! please login again');
    }
}
