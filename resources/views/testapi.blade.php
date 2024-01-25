@extends('layouts.app') 

@section('content')

<div class="container row">

    @foreach ($data as $row )

    <div class="card col-lg-3">
        <div class="card-body p-3">
            <h6>{{$row['title']}}</h6>
            {{-- <h1>{{$row['name']}}</h1>
            <h3>{{$row['type']}}</h3> --}}
            <img src="{{$row['thumbnailUrl']}}" alt="" srcset="">
        </div>
    </div>
    @endforeach
    

</div>











@endsection