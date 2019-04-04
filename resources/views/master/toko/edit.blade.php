@extends('master')
@section('content')
<div class="container py-6">
	<!-- START MODAL -->
	<h3 class="text-center">Data Toko</h3>

	<div class="container" style="margin-bottom:3%;">
        <form method="post" action="{{route('updatetoko')}}" enctype="multipart/form-data" style="padding-top: 30px; margin-bottom: 3%;">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$new->id}}">
        

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="namainstansi">nama instansi</label>
              <input type="text" class="form-control" name="namainstansi" placeholder="namainstansi"  value="{{$new->namainstansi}}">
    </div>
  </div>

  <div class="form-group">
      <div class="form-group col-md-6">
    <label for="telp">telpon</label>
              <input type="text" class="form-control" name="telp" placeholder="telp"  value="{{$new->telp}}">
  </div>
</div>

  <div class="form-group">
     <div class="form-group col-md-6">
   <label for="kodepos">kodepos</label>
              <input type="text" class="form-control" name="kodepos" placeholder="kodepos"  value="{{$new->kodepos}}">
  </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="deskripsi">deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi"  value="{{$new->deskripsi}}">
    </div>
  </div>

    <div class="form-group col-md-6">
      <label for="alamat">alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="alamat"  value="{{$new->alamat}}">
    </div>
     
    <div class="text-right" style="margin-top: 2%;">
        <button type="submit" class="btn btn-info">Update</button>
        </div>
</form>
</div>
</div>
@endsection