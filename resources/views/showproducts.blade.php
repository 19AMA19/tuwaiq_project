@extends('layouts.app') @section('content')
<div class="container ">
        
    <div class="row align-items-center text-center justify-content-center mx-auto">
        @foreach ($data as $row)
        <div class="card col-md-3 m-3">
            <div class="card-body">
                <img src="/assets/images/{{$row->Image}}" width="250px" height="250px" alt="" srcset="">
                <h2>{{$row -> ItemName}}</h2>
                <h1>{{$row -> ItemPrice}} SAR</h1>
                <a href="{{route('AddToCart',['id'=>$row->id])}}" class="btn btn-success">Add To Cart</a>
            </div>
        </div>
        @if(session()->has('success'))
        <script>
        Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Added To Cart",
        showConfirmButton: false,
        timer: 1500
        });
        </script>
        @endif @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @endforeach
    </div>
</div>

@endsection
