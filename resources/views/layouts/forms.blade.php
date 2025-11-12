@extends('layouts.main')
@section('container')

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Input email anda di sini.</div>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputNama">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
