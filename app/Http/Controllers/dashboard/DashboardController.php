<?php

namespace App\Http\Controllers\dashboard;

use App\User;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

class DashboardController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function __construct()
  {
    $this->user = new User;
    $this->menu = new Menu;
  }

  public function index()
  {
    $users = $this->user->getUser();
    foreach ($users as $user) {
      $data['userData'] = $user->username;
    }
    return view('dashboard/dashboard', $data);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function listMenu()
  {
    $users = $this->user->getUser();
    foreach ($users as $user) {
      $data['userData'] = $user->username;
    }
    $data['allMenus'] = $this->menu->getMenu();
    return view('dashboard.listMenu', $data);
  }

  public function listPost()
  {
    $users = $this->user->getUser();
    foreach ($users as $user) {
      $data['userData'] = $user->username;
    }
    return view('dashboard.postList', $data);
  }


  public function addMenu()
  {
    $validator = $this->menu->menuValidation(Input::all());
    if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput(Input::all());
    $this->menu->add(Input::all());
    return redirect('/menulist')->with('success', 'Sucessfully added menu okay');
  }

  public function changeStatus()
  {
    $status = Input::get('status');
    $menuId = Input::get('menuid');
    $this->menu->changeStatus($status, $menuId);
    return redirect('/menulist')->with('menu-edit', 'Menu Edited Sucessfully.');
  }

  public function search()
  {
    $keyword = Input::get('keyword');
    $searchData = $this->menu->searchMenu($keyword);
    if ($searchData->isEmpty()) {
      return redirect('/menulist')->with('search-result', 'No result found.');
    } else {
      $users = $this->user->getUser();
      foreach ($users as $user) {
        $data['userData'] = $user->username;
      }
      $data['searchResult'] = $searchData;
      return view('dashboard.searchMenuList', $data);
    }
  }


  /** nirmala**/
  public function deleteMenu()
  {
    $menuId = Input::get('menuid');
    $this->menu->where('id', 'like', $menuId)->delete();
    return redirect('/menulist');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
