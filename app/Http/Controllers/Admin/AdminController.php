<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Account;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $NUM_PAGE = 5;
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        $auth = Auth::user()->id;
        $accounts = Account::where('user_create_id', $auth)->orderBy('updated_at','desc')
                                                      ->paginate($NUM_PAGE);  
        return view('admin.home')->with('accounts',$accounts)
                                  ->with('page',$page)
                                  ->with('NUM_PAGE',$NUM_PAGE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/create_account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auth = Auth::user();
        $request['user_create_id'] = $auth->id;
        $account = Account::create(request()->all());
        return redirect()->route('admin.index')->with("success","เพิ่มผู้ดูแลระดับตำบลสำเร็จ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = Account::where('id', $id)->where('user_create_id', Auth::user()->id)->first();
        if(isset($account)) {
          return view('header.show_account')->with('account', $account);
        } else {
          return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = Account::where('id', $id)->where('user_create_id', Auth::user()->id)->first();
        if(isset($account)) {
          return view('header.edit_account')->with('account', $account);
        } else {
          return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
