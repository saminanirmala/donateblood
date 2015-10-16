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
    'password' => 'required',
    'password_confirm' => 'required|same:password'
  );

  public function donorValidation($donorDatas)
  {
    return Validator::make($donorDatas, $this->rules);
  }

  public function add($donorDatas)
  {
    return Donor::create($donorDatas);
  }
}
