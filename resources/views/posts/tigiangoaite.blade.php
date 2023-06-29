@extends('layout.trangchu')
@section('content')
<h1>Exchange Rates</h1>

    <p>Updated at: {{ $dateTime }}</p>

    <table>
        <thead>
            <tr>
                <th>Currency Code</th>
                <th>Currency Name</th>
                <th>Buy</th>
                <th>Transfer</th>
                <th>Sell</th>
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
@endsection