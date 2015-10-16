@extends('layouts.master')
@section('content')
<section>
  <div class="container">
    <div class="register">
      <h3>Registration for Donors</h3>
      <form class="frm_field">
        <label><b>Name :</b><input type="text" placeholder="Full name" class="txt"/></label>
        <label><b>Address :</b><input type="text" placeholder="Address" class="txt"/></label>
        <label><b>Gender :</b><span><input type="radio" name="sex" value="male"> Male</span>
          <span><input type="radio" name="sex" value="female"> Female</span>
          <span><input type="radio" name="sex" value="other"> Other</span></label><div class="clearfix"></div>
        <label><b>Date of Birth :</b><input type="text" placeholder="Date of Birth" class="txts datepicker"/></label>
        <label><b>Contact no :</b><input type="text" placeholder="Contact no" class="txts"/></label>

        <label><b>Ward no :</b><input type="text" placeholder="Ward no" class="txts"/></label>
        <label><b>Email :</b><input type="text" placeholder="Email Address" class="txt"/></label>
        <label><b>Password :</b><input type="text" placeholder="Password" class="txts"/></label>
        <label><b>Confirm Password :</b><input type="text" placeholder="Password" class="txts"/></label>
        <label><b>Blood Type :</b><select><option>A</option>
            <option>A+ve</option>
            <option>A-ve</option>
            <option>B</option>
          </select>
        </label>

        <button class="btn btn-primary bt"> Sign Up</button>
      </form>
    </div><!-- end of register -->
  </div><!-- end of container -->
</section><!-- end of section -->
<div class="container">
  @stop
  <script>
    $('.datepicker').datetimepicker({
      format: 'YYYY-MM-DD'
    });
  </script>