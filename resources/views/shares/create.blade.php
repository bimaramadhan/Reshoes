@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add New Order
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('shares.store') }}" onSubmit="validasi()">
          <div class="form-group">
              @csrf
              <label for="name">Nama:</label>
              <input type="text" class="form-control" name="nama"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="no_telepon">No Telepon:</label>
              <input type="text" class="form-control" name="no_telepon"/>
          </div>
          <div class="form-group">
              <label for="alamat">Alamat:</label>
              <input type="text" class="form-control" name="alamat"/>
          </div>
          <div class="form-group">
              <label for="kategori">Kategori:</label>
              <select class="form-control" name="kategori"> 
                <option value="Cleaning">Cleaning</option>
                <option value="Repaint">Repaint</option>
                <option value="Repair">Repair</option>
                <option value="Custom Painting">Custom Painting</option>
              </select>
          </div>
          <div class="form-group">
              <label for="jumlah">Jumlah:</label>
              <input type="text" class="form-control" name="jumlah"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
      <script type="text/javascript">
        function validasi() {
          var nama = document.getElementById("nama").value;
          var email = document.getElementById("email").value;
          var no_telepon = document.getElementById("no_telepon").value;
          var alamat = document.getElementById("alamat").value;
          var kategori = document.getElementById("kategori").value;
          var jumlah = document.getElementById("jumlah").value;
          if (nama != "" && email !="" && no_telepon !="" && alamat !="" && kategori !="" && jumlah !="") {
            return true;
          }else{
            alert('Anda harus mengisi data dengan lengkap !');
          }
        }
      </script>
  </div>
</div>
@endsection