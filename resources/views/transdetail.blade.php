@extends('layout')
@section('title', 'Transaction History')
@section('content-title', 'Transaction History')
@section('content')
<div class="col-md-10">
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="th">No.</th>
                <th class="th">Transaction ID</th>
                <th class="th">Item ID</th>
                <th class="th">Quantity</th>
                <th class="th">Subtotal</th>
            </tr>
        </thead>
        @forelse($transactionDetails as $transactionDetail)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transactionDetail->transaction->id }}</td> <!--Menampilkan Foreign key User-ID-->
                <td>{{ $transactionDetail->item->id}}</td>
                <td>{{ $transactionDetail->qty}}</td>
                <td>{{ $transactionDetail->subtotal}}</td>
            </tr>
        </tbody>
        @empty
        @endforelse
        
    </table>
    </div>
    </div class="col-md-4">
    
    @endsection