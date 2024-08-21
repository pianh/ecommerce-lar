@extends('layout/master')

@section('title')
Thêm mới loại sản phẩm
@endsection

@section('content')
<h1>Thêm mới loại sản phẩm</h1>
<form action="{{ route('loaisanpham.save') }}" name="frmCreate" id="frmCreate" method="post">
  @csrf
  <div>
    <label for="form-label">Tên LSP</label>
    <input type="text" name="lsp_ten" id="lsp_ten" class="form-control" />
  </div>
    <div>
    <label for="form-label">Mô tả LSP</label>
    <textarea type="text" name="lsp_mota" id="lsp_mota" class="form-control"></textarea>
  </div>
  <button class="btn btn-primary mt-3">Lưu dữ liệu</button>
</form>  
@endsection