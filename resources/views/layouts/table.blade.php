@extends('layouts.main')
@section('container')

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Lili</td>
      <td>B</td>
      <td>Lili@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>A</td>
      <td>jacob@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry</td>
      <td>Larrythebird@gmail.com</td>
    </tr>
  </tbody>
</table>

@endsection