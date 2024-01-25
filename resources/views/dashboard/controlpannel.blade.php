@extends('layouts.dashboard') @section('content')

<h1 class="text-center">Items Information</h1>
<div class="card text-center">
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Item Name</th>
                <th>Group Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Color</th>
            </tr>
            </thead>
            <tbody>
                @if($data!=null)
                @foreach ($data as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->ItemName}}</td>
                    <td>{{$row->ItemGroupName}}</td>
                    <td>{{$row->ItemPrice}}</td>
                    <td>{{$row->Quantity}}</td>
                    <td>{{$row->Color}}</td>
                    <td></td>
                </tr>
                @endforeach
                @endif

            </tbody>
        </table>

    </div>
</div>



@endsection
