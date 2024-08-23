@extends('layout/master')

@section('title')
Danh sách hình sản phẩm
@endsection

@section('content')
<h1>Danh sách hình sản phẩm</h1>
<a href="{{ route('hinhsanpham.create') }}" class="btn btn-primary" >Thêm mới</a>
<table class="table table-bordered">
  <thead>
    <th>Mã HSP</th>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Hành động</th>
  </thead>
  <tbody>
    @foreach($dsHinhsanpham as $hsp)
    <tr>
      <td>{{ $hsp->hsp_ma }}</td>
      <td>
        <img src="/storage/uploads/{{ $hsp->hsp_tentaptin }}" class="img-fuild hinh-sanpham" alt="">
        <a href="/storage/uploads/{{ $hsp->hsp_tentaptin }}">{{ $hsp->hsp_tentaptin }}</a>
      </td>
      <td>{{ $hsp->sanpham->sp_ten }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection