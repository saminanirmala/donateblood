@extends('layouts.master')
@section('content')
<section>
  <div class="container">
    <div class="register">
      <h3>Registration for Donors</h3>
      @if(Session::has('success'))
      <div class="alert alert-success fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
          <i class="fa fa-times"></i>
        </button>
        <h2>{{ Session::get('success') }}</h2>
      </div>
      @endif
      {!! Form::open(['url'=>'/registeraction', 'class'=>'frm_field']) !!}
      <label><b>Name :</b><input type="text" name="name" placeholder="Full name" class="txt"/></label>
      @if($errors->any())
      <label class="error" for="name">{{$errors->first('name')}}</label>
      @endif
      <label><b>Address :</b><input type="text" name="address" placeholder="Address" class="txt"/></label>
      @if($errors->any())
      <label class="error" for="address">{{$errors->first('address')}}</label>
      @endif
      <label><b>Gender :</b><span><input type="radio" name="gender" value="male"> Male</span>
        <span><input type="radio" name="gender" value="female"> Female</span>
        <span><input type="radio" name="gender" value="other"> Other</span></label>

      <div class="clearfix"></div>
      <label><b>Date of Birth :</b><input type="text" name="dob" placeholder="Date of Birth"
                                          class="txts datepicker"/></label>
      <label><b>Contact no :</b><input type="text" name="contact" placeholder="Contact no" class="txts"/></label>
      @if($errors->any())
      <label class="error" for="contact">{{$errors->first('contact')}}</label>
      @endif
      <label><b>Ward no :</b><input type="text" name="ward_number" placeholder="Ward no" class="txts"/></label>
      @if($errors->any())
      <label class="error" for="ward_number">{{$errors->first('ward_number')}}</label>
      @endif
      <label><b>Email :</b><input type="text" name="email" placeholder="Email Address" class="txt"/></label>
      @if($errors->any())
      <label class="error" for="email">{{$errors->first('email')}}</label>
      @endif
      <label><b>Password :</b><input type="password" name="password" placeholder="Password" class="txts"/></label>
      @if($errors->any())
      <label class="error" for="password">{{$errors->first('password')}}</label>
      @endif
      <label><b>Confirm Password :</b><input type="password" name="password_confirm" placeholder="Password" class="txts"/></label>
      @if($errors->any())
      <label class="error" for="confirm_password">{{$errors->first('password_confirm')}}</label>
      @endif
      <label><b>Blood Type :</b><select name="blood_type">
          <option value="A">A</option>
          <option value="A+ve">A+ve</option>
          <option value="A-ve">A-ve</option>
          <option value="B">B</option>
        </select>
      </label>

      <button type="submit" class="btn btn-primary bt"> Sign Up</button>
      {!! Form::close() !!}
    </div>
    <!-- end of register -->
  </div>
  <!-- end of container -->
</section><!-- end of section -->
<div class="container">
  @stop
  <script>
    $('.datepicker').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  </script>