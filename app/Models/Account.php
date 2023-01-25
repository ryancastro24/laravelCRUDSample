<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function saveTask($data){
        return $this->create($data);
    }

    public function getAccounts(){
        return $this->all();
    }
    public function deleteAcc($id){
        $account = $this->find($id);
        $account->delete();
    }
    public function getAcc($id){
        return $this->find($id);
    }
    public function saveUpdatedAcc($data, $id){
        $account = $this->find($id);
        $account->update($data);
    }
}
