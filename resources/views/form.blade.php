@extends('template')

@section('judul')
  Tambah Data
@endsection

@section('isi')
  <div class="container">
  <div class="col-md-5 col-md-push-3">
      <div class="form-area">
          <form role="form">
          <br style="clear:both">
                      <h3 style="margin-bottom: 25px; text-align: center;">Input Data</h3>
      				<div class="form-group">
  						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
  					</div>
  					<div class="form-group">
  						<input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal" required>
  					</div>
  					<div class="form-group">
  						<input type="text" class="form-control" id="longi" name="longi" placeholder="longitude" required>
  					</div>
  					<div class="form-group">
  						<input type="text" class="form-control" id="lati" name="lati" placeholder="latitude" required>
  					</div>
                      <div class="form-group">
                      <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                          <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                      </div>

          <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
          </form>
      </div>
  </div>
  </div>
@endsection
