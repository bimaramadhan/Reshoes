@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('shares.update', $share->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nama:</label>
          <input type="text" class="form-control" name="nama" value={{ $share->nama }} />
        </div>
        <div class="form-group">
          <label for="price">Email:</label>
          <input type="text" class="form-control" name="email" value={{ $share->email }} />
        </div>
        <div class="form-group">
          <label for="no_telepon">No Telepon:</label>
          <input type="text" class="form-control" name="no_telepon" value={{ $share->no_telepon }} />
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" class="form-control" name="alamat" value={{ $share->alamat }} />
        </div>
        <div class="form-group">
          <label for="kategori">Kategori:</label>
          <input type="text" class="form-control" name="kategori" value={{ $share->kategori }} />
        </div>
        <div class="form-group">
          <label for="jumlah">Jumlah:</label>
          <input type="text" class="form-control" name="jumlah" value={{ $share->jumlah }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection