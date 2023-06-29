@extends('layout.trangchu')
@section('content')
<div class="container">
<h1>Tỷ giá ngoại tệ Vietcombank hôm nay</h1>

    <p>Updated at: {{ $dateTime }}</p>

    <table>
        <thead>
            <tr>
                <th>MÃ NGOẠI T</th>
                <th>TÊN NGOẠI TỆ</th>
                <th>MUA</th>
                <th>CHUYỂN KHOẢN</th>
                <th>BÁN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exrates as $exrate)
                <tr>
                    <td>{{ $exrate['currencyCode'] }}</td>
                    <td>{{ $exrate['currencyName'] }}</td>
                    <td>{{ $exrate['buy'] }}</td>
                    <td>{{ $exrate['transfer'] }}</td>
                    <td>{{ $exrate['sell'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection