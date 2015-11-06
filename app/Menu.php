<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class Menu extends Model
{
  protected $table = 'tbl_menu';
  protected $fillable = ['menu', 'status'];
  private $rules = array(
    'menu' => 'required|min:3',
  );

  public function menuValidation($menuDatas)
  {
    return Validator::make($menuDatas, $this->rules);
  }

  public function add($menuDatas)
  {
    return Menu::create($menuDatas);
  }
  public function getMenu(){
    return Menu::all();
  }
  public function changeStatus($status,$menuId){
 return Menu::where('id',$menuId)->update(array('status'=>$status));
  }
  public function searchMenu($keyword){
   return Menu::where('menu', 'LIKE', '%'.$keyword.'%')->get();
  }
}
