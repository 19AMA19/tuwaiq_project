@extends('layouts.app') @section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h1 class="text-center p-3">Edit Group Name</h1>
                <div class="card-body">

                    <form
                    class="col-md-12"
                    action="{{ route('updateGroup') }}"
                    method="post">
                    @csrf
                    <div class="col-md-12 p-4">
                        <label for="group-name">Edit Name</label>
                        <input class="form-control" id="group-name" name="ItemGroupName" value="{{$item -> ItemGroupName}}" type="text" required/>
                        <input type="hidden" name="id" value="{{$item -> id}}">
                        <br/>
                    </div>
    
                    <div class="col-md-12 pb-4 text-center">
                        <div class="col">
                            <button class="btn btn-primary col-md-6" type="submit">
                                Update
                            </button>
                        </div>
                    </div>

                    @if(session()->has('success'))
                    <script>
                    Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Updated Successfully",
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
                </form>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
