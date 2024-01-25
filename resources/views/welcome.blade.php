@extends('layouts.app') 

@section('content')





<div class="container">
        

    <h1 class="alert alert-success text-center">Welcome to my Web Applicaton</h1>

    <div class="row text-center">
        
        @foreach ($data as $row)
        <div class="col-lg-4 col-md-6 row d-flex align-items-center text-center justify-content-center mx-auto">
                <a href="{{route('getItemsByGroup',['id'=>$row->id])}}"  style="text-decoration: none">
            <div class="card p-5 m-2" style="width: 150px highet:150px">
                <div class="card-body">
                 <h3>{{$row->ItemGroupName}}</h3>
                </div>
            </div>
        </a>
        </div>
        @endforeach
    </div>
</div>

@endsection