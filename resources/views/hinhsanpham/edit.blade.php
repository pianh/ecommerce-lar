@extends('layout/master')

@section('title')
Sửa hình sản phẩm
@endsection

@section('content')
<h1>Sửa hình sản phẩm</h1>


<form action="{{ route("hinhsanpham.update") }}" method="post" name="frmEdit" enctype="multipart/form-data">
  @csrf
    <input type="hidden" name="hsp_ma" value="{{ $hinhSanphamCu->hsp_ma }}">
  <div>
    <label for="">Sản phẩm</label>
    <select name="sp_ma" id="sp_ma" class="form-control">
      @foreach($dsSanpham as $sp)
        @if($hinhSanphamCu->sp_ma == $sp->sp_ma)
          <option value="{{ $sp->sp_ma }}" selected>
            {{ $sp->sp_ten }} [{{ number_format($sp->sp_gia, 0, '.', ',' )}}]
          </option>
        @else
          <option value="{{ $sp->sp_ma }}">
            {{ $sp->sp_ten }} [{{ number_format($sp->sp_gia, 0, '.', ',' )}}]
          </option>
        @endif
      @endforeach
    </select>
  </div>
  <div>
    <label for="">Hình minh họa</label>
    <div class="preview-img-container">
      <img src="/storage/uploads/{{ $hinhSanphamCu->hsp_tentaptin }}" alt="" class="review-img" />
    </div>
    <input type="file" name="hsp_tentaptin" class="form-control" />
  </div>
  <button name="btnSave" type="submit" class="btn btn-primary mt-3">Lưu</button>

</form>

@endsection