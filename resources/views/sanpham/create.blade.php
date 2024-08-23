@extends('layout/master')

@section('title')
Thêm mới sản phẩm
@endsection

@section('content')
<h1>Thêm mới sản phẩm</h1>
<form name="frmCreate" method="post" action="{{ route('sanpham.save') }}">
  @csrf
  <div>
    <label for="" class="form-label">Tên SP</label>
    <input type="text" name="sp_ten" class="form-control" />
  </div>
  <div>
    <label for="" class="form-label">Giá SP</label>
    <input type="text" name="sp_gia" class="form-control" />
  </div>
  <div>
    <label for="" class="form-label">Giá cũ SP</label>
    <input type="text" name="sp_giacu" class="form-control" />
  </div>
  <div>
    <label for="" class="form-label">Mô tả ngắn SP</label>
    <input type="text" name="sp_mota_ngan" class="form-control" />
  </div>
  <div>
    <label for="" class="form-label">Mô tả chi tiết SP</label>
    <textarea type="text" name="sp_mota_chitiet" class="form-control"></textarea>
  </div>
  <div>
    <label for="" class="form-label">Số lượng SP</label>
    <input type="text" name="sp_soluong" class="form-control" />
  </div>
  <div>
    <label for="" class="form-label">Loại SP</label>
    <select name="lsp_ma" class="form-select">
      @foreach($dsLoaisanpham as $lsp)
        <option value="{{ $lsp->lsp_ma }}">
          {{ $lsp->lsp_ten }}
        </option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="" class="form-label">Nhà sản xuất</label>
    <select name="nsx_ma" class="form-select">
      @foreach($dsNhasanxuat as $nsx)
        <option value="{{ $nsx->nsx_ma }}">
          {{ $nsx->nsx_ten }}
        </option>
      @endforeach
    </select>
  </div>
  <div>
    <label for="" class="form-label">Khuyến mãi</label>
    <select name="km_ma" class="form-select">
      <option value="">Mời bạn lựa chọn khuyến mãi</option>
      @foreach($dsKhuyenmai as $km)
        <option value="{{ $km->km_ma }}">
          {{ $km->km_ten}} - {{ $km->km_noidung}}
          (
            {{ Carbon\Carbon::parse($km->km_tungay)->format('d/m/Y') }}
            ~ {{ Carbon\Carbon::parse($km->km_denngay)->format('d/m/Y') }}
          )
          {{-- ({{ $km->km_tungay}} - {{ $km->km_denngay}}) --}}
        </option>
      @endforeach
    </select>
  </div>
  <button name="btnSave" type="submit" class="btn btn-primary mt-3">Lưu</button>
</form>
@endsection