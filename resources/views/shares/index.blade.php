@extends('layout')
<div class="topnav">
    <link href="{{ url('css/homepage.css') }}" rel="stylesheet" type="text/css" />
      <a href="/homepage">Home</a>
      <a href="/home">Dashboard</a>
  </div>
  <br> <br>
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nama</td>
          <td>Email</td>
          <td>No Telepon</td>
          <td>Alamat</td>
          <td>Kategori</td>
          <td>Jumlah</td>
        </tr>
    </thead>
    <tbody>
        @foreach($shares as $share)
        <tr>
            <td>{{$share->id}}</td>
            <td>{{$share->nama}}</td>
            <td>{{$share->email}}</td>
            <td>{{$share->no_telepon}}</td>
            <td>{{$share->alamat}}</td>
            <td>{{$share->kategori}}</td>
            <td>{{$share->jumlah}}</td>
            <!-- <td><a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection