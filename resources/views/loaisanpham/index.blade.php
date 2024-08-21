@extends('layout/master')

@section('title')
Danh sách loại sản phẩm
@endsection

@section('content')
<h1>Danh sách loại sản phẩm</h1>
<a href="{{ route('loaisanpham.create') }}">Thêm mới</a>
<table class="table">
  <thead class="table-secondary">
    <th>Mã loại sản phẩm</th>
    <th>Tên loại sản phẩm</th>
    <th>Mô tả loại sản phẩm</th>
    <th>Hành động</th>
  </thead>
  <tbody>
    @foreach($dsLoaiSanPham as $lsp)
    <tr>
      <td>{{ $lsp->lsp_ma }}</td>
      <td>{{ $lsp->lsp_ten }}</td>
      <td>{{ $lsp->lsp_mota }}</td>
      <td>
        <a href="" class="btn btn-warning">Sửa</a>
        <a href="" class="btn btn-danger">Xóa</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection