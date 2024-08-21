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
        <a href="{{ route('loaisanpham.edit', ['lsp_ma' =>  $lsp->lsp_ma]) }}" class="btn btn-warning">Sửa</a>
        <form action="{{ route('loaisanpham.delete') }}" name="frmDelete" method="post">
          @csrf
          <input type="hidden" name="lsp_ma" value="{{ $lsp->lsp_ma }}" />
          <button type="submit" class="btn btn-danger">Xóa</button>
        </form>
        {{-- <a href="" class="btn btn-danger">Xóa</a> --}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection