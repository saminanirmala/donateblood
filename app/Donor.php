<?php

namespace App;

use Validator;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
  protected $table = 'tbl_donor';
  protected $fillable = ['name', 'address', 'gender', 'dob', 'contact', 'ward_number', 'email', 'password', 'blood_type'];

  private $rules = array(
    'name' => 'required|min:3',
    'address' => 'required|min:3',
    'contact' => 'regex:/^[\+]?([0-9]*)\s*\(?\s*([0-9]{3})?\s*\)?[\s\-\.]*([0-9]{3})[\s\-\.]*([0-9]{4})[a-zA-Z\s\,\.]*[x\#]*[a-zA-Z\.\s]*([\d]*)/',
    'ward_number' => 'required|min:1|max:10',
    'email'    => 'required|email|unique:users',
    'password' => 'required',
    'password_confirm' => 'required|same:password'
  );

  public function donorValidation($donorDatas)
  {
    return Validator::make($donorDatas, $this->rules);
  }

  public function add($donorDatas)
  {
    $thisData['name']=$donorDatas['name'];
    $thisData['address']=$donorDatas['address'];
    $thisData['gender']=$donorDatas['gender'];
    $thisData['dob']=$donorDatas['dob'];
    $thisData['contact']=$donorDatas['contact'];
    $thisData['ward_number']=$donorDatas['ward_number'];
    $thisData['email']=$donorDatas['email'];
    $thisData['password']=md5($donorDatas['password']);
    $thisData['blood_type']=$donorDatas['blood_type'];
    return Donor::create($thisData);
  }
}
