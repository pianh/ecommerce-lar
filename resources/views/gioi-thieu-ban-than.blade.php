@extends('layout/master')
@section('content')
  <h1>Giới thiệu bản thân</h1>
@endsection
@section('title')
Giới thiệu bản thân
@endsection

@if($gioitinh ==1)
<h1>Giới thiệu bản thân</h1>
@else
<h1 style="color:pink">Giới thiệu bản thân</h1>
@endif


@for($i = 0; $i < 10; $i++)
  <span>{{ $i }}</span>
@endfor

<table border="1">
  <thead>
    <th>Mã SV</th>
    <th>Họ tên SV</th>
  </thead>
  <tbody>
    @foreach($danhsachsv as $sv)
    <tr>
      <td>{{ $sv['sv_ma'] }}</td>
      <td><?= $sv['sv_hoten'] ?></td>
    </tr>
    @endforeach
  </tbody>
</table>

@if($dangnhap == true)
  <ul>
  <li>Điểm trung bình: {{ $dtb }}</li>
  <li>Họ tên:
    <span style="color: red">{{ $hoten }}</span>
  </li>
  </ul>
@else
  Vui lòng đăng nhập để xem thông tin cá nhân
@endif

<?php 
$j =0;
?>
@while ($j < 10)
  <p>Giá trị {{ $j }}</p>
  <?php $j++ ?>
@endwhile