<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver;
use Symfony\Component\VarDumper\VarDumper;

class APIController extends Controller
{

    function __construct()
    {
        $this->account = new Account;
    }
     
    //landing page or index page
    public function index(){
        $accounts = $this->account->getAccounts();
        return view("index", compact('accounts'));
    }


    //inser data to database
    public function saveAccount(Request $request){
        $data = [
            'email'=>$request->email,
            'pass'=>$request->pswd
        ];
        
        $this->account->saveTask($data);
        return back();
    }

    //delete acc 
    public function deleteAcc($id){
        $this->account->deleteAcc($id);
        return back();
     }

     public function getAcc($id){
        $accounts = $this->account->getAcc($id);
        return view("update-acc",compact("accounts"));
     }

     public function saveUpdateAcc(Request $request){
        $data = [
           'email' => $request->updateEmail,
           'pass' => $request->updatePswd
        ];

       
        $this->account->saveUpdatedAcc($data, $request->id);
        return redirect()->route('index');
     }
}
