@extends('layout/master')

@section('title')
Sửa loại sản phẩm
@endsection

@section('content')
<h1>Sửa loại sản phẩm</h1>
<form action="{{ route('loaisanpham.update') }}" name="frmCreate" id="frmCreate" method="post">
  @csrf
  <input type="hidden" name="lsp_ma" value="{{ $editingRow->lsp_ma }}" />
  <div>
    <label for="form-label">Tên LSP</label>
    <input type="text" name="lsp_ten" id="lsp_ten" class="form-control" value="{{ $editingRow->lsp_ten }}" />
  </div>
    <div>
    <label for="form-label">Mô tả LSP</label>
    <textarea type="text" name="lsp_mota" id="lsp_mota" class="form-control">{{ $editingRow->lsp_mota }}</textarea>
  </div>
  <button class="btn btn-primary mt-3">Lưu dữ liệu</button>
</form>  
@endsection