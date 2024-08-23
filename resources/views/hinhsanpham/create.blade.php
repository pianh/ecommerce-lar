@extends('layout/master')

@section('title')
Thêm mới hình sản phẩm
@endsection

@section('content')
<h1>Thêm mới hình sản phẩm</h1>


<form action="{{ route("hinhsanpham.save") }}" method="post" name="frmCreate" enctype="multipart/form-data">
  @csrf
  <div>
    <label for="">Sản phẩm</label>
    <select name="sp_ma" id="sp_ma" class="form-control">
      @foreach($dsSanpham as $sp)
        <option value="{{ $sp->sp_ma }}">
          {{ $sp->sp_ten }} [{{ number_format($sp->sp_gia, 0, '.', ',' )}}]
        </option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="">Hình minh họa</label>
    <input type="file" name="hsp_tentaptin" class="form-control" />
  </div>
  <button name="btnSave" type="submit" class="btn btn-primary mt-3">Lưu</button>

</form>

@endsection