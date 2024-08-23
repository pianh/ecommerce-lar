@extends('layout/master')

@section('title')
Sửa sản phẩm
@endsection

@section('content')
<h1>Sửa sản phẩm</h1>
<form name="frmEdit" method="post" action="{{ route('sanpham.update') }}">
  @csrf
  <input type="hidden" name="sp_ma" value="{{$editingRow->sp_ma}}" />
  <div>
    <label for="" class="form-label">Tên SP</label>
    <input type="text" name="sp_ten" class="form-control" value="{{$editingRow->sp_ten}}" />
  </div>
  <div>
    <label for="" class="form-label">Giá SP</label>
    <input type="text" name="sp_gia" class="form-control" value="{{$editingRow->sp_gia}}" />
  </div>
  <div>
    <label for="" class="form-label">Giá cũ SP</label>
    <input type="text" name="sp_giacu" class="form-control" value="{{$editingRow->sp_giacu}}" />
  </div>
  <div>
    <label for="" class="form-label">Mô tả ngắn SP</label>
    <input type="text" name="sp_mota_ngan" class="form-control" value="{{$editingRow->sp_giacu}}" />
  </div>
  <div>
    <label for="" class="form-label">Mô tả chi tiết SP</label>
    <textarea type="text" name="sp_mota_chitiet" class="form-control">{{$editingRow->sp_mota_chitiet}}</textarea>
  </div>
  <div>
    <label for="" class="form-label">Số lượng SP</label>
    <input type="text" name="sp_soluong" class="form-control" value="{{$editingRow->sp_soluong}}" />
  </div>
  <div>
    <label for="" class="form-label">Loại SP</label>
    <select name="lsp_ma" class="form-select">
      @foreach($dsLoaisanpham as $lsp)
        @if($editingRow->lsp_ma == $lsp->lsp_ma )
          <option value="{{ $lsp->lsp_ma }}" selected>
            {{ $lsp->lsp_ten }}
          </option>
        @else
          <option value="{{ $lsp->lsp_ma }}">
            {{ $lsp->lsp_ten }}
          </option>
        @endif
      @endforeach
    </select>
  </div>
  <div>
    <label for="" class="form-label">Nhà sản xuất</label>
    <select name="nsx_ma" class="form-select">
      @foreach($dsNhasanxuat as $nsx)
        @if($editingRow->nsx_ma == $nsx->nsx_ma )
          <option value="{{ $nsx->nsx_ma }}" selected>
            {{ $nsx->nsx_ten }}
          </option>
        @else
          <option value="{{ $nsx->nsx_ma }}">
            {{ $nsx->nsx_ten }}
          </option>
        @endif
      @endforeach
    </select>
  </div>
  <div>
    <label for="" class="form-label">Khuyến mãi</label>
    <select name="km_ma" class="form-select">
      <option value="">Mời bạn lựa chọn khuyến mãi</option>
      @foreach($dsKhuyenmai as $km)
        @if($editingRow->km_ma == $km->km_ma )
          <option value="{{ $km->km_ma }}" selected>
            {{ $km->km_ten}} - {{ $km->km_noidung}}
            (
              {{ Carbon\Carbon::parse($km->km_tungay)->format('d/m/Y') }}
              ~ {{ Carbon\Carbon::parse($km->km_denngay)->format('d/m/Y') }}
            )
            {{-- ({{ $km->km_tungay}} - {{ $km->km_denngay}}) --}}
          </option>
        @else
          <option value="{{ $km->km_ma }}">
            {{ $km->km_ten}} - {{ $km->km_noidung}}
            (
              {{ Carbon\Carbon::parse($km->km_tungay)->format('d/m/Y') }}
              ~ {{ Carbon\Carbon::parse($km->km_denngay)->format('d/m/Y') }}
            )
            {{-- ({{ $km->km_tungay}} - {{ $km->km_denngay}}) --}}
          </option>
        @endif
      @endforeach
    </select>
  </div>
  <button name="btnSave" type="submit" class="btn btn-primary mt-3">Lưu</button>
</form>
@endsection