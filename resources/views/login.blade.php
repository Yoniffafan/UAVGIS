@extends('template')

@section('judul')
  Login Admin
@endsection

@section('isi')
  <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
      <div class="search-box">
        <div class="caption">
          <h3>Administrator Authentication</h3>
        </div>
        <form action="" class="loginForm">
          <div class="input-group">
            <input type="text" id="name" class="form-control" placeholder="Full Name">
            <input type="password" id="paw" class="form-control" placeholder="Password">
            <input type="submit" id="submit" class="form-control" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
