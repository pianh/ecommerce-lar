@extends('layout/master');

@section('title')
Danh sách sản phẩm
@endsection

@section('content')
<h1>Danh sách sản phẩm</h1>
<a href="{{ route('sanpham.create') }}" class="btn btn-primary" >Thêm mới</a>
<table class="table table-bordered">
  <thead>
    <th>Mã SP</th>
    <th>Tên SP</th>
    <th>Giá SP</th>
    <th>Giá cũ SP</th>
    <th>Số lượng SP</th>
    <th>Loại sản phẩm</th>
    <th>Nhà sản xuất</th>
    <th>Hành động</th>
  </thead>
  <tbody>
    @foreach($dsSanPham as $sp)
    <tr>
      <td>{{ $sp->sp_ma }}</td>
      <td>{{ $sp->sp_ten }}</td>
      <td>{{ $sp->sp_gia }}</td>
      <td>{{ $sp->sp_giacu }}</td>
      <td>{{ $sp->sp_soluong }}</td>
      <td>{{ $sp->loaisanpham->lsp_ten }}</td>
      <td>{{ $sp->nhasanxuat->nsx_ten }}</td>
      <td>
        <a href="{{ route('sanpham.edit', ['sp_ma' => $sp->sp_ma ]) }}" class="btn btn-warning">Sửa</a>
        <form name="frmDelete" method="post" action="{{ route('sanpham.delete') }}">
          @csrf
          <input type="hidden" name="sp_ma" value="{{ $sp->sp_ma }}" />
          <button type="submit" class="btn btn-danger">Xóa</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection