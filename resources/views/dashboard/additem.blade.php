@extends('layouts.dashboard') @section('content')

<div class="container d-flex justify-content-center">
    <div class="row container col-md-12">
        <div class="col d-flex justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <h1 class="text-center">Add New Item</h1>
                    <form
                    class="col-md-12"
                    action="{{ route('addItem') }}"
                    method="post">
                    @csrf
                    <div class="container p-4">
                        <input class="form-control col" name="ItemName" type="text" placeholder="Name" required/>
                        <input class="form-control col" name="ItemPrice" type="text" placeholder="Price" required/>
                        <input class="form-control col" name="Quantity" type="text" placeholder="Quantity" required/>
                        <input class="form-control col" name="Color" type="text" placeholder="Color" required/>
                        <input class="form-control col" name="ItemGroupId" type="text" placeholder="ItemGroupId" required/>
                        <br/>
                    </div>
    
                    <div class="col-md-12 pb-4 text-center">
                        <div class="col">
                            <button class="btn btn-primary col-md-6" type="submit">
                                Add
                            </button>
                        </div>
                    </div>

                    @if(session()->has('success'))
                    <script>
                    Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Your work has been saved",
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
        <br>
        <div class=" container  d-flex justify-content-center pt-4">
            <table class="table table-striped table-hover text-center ">
                <thead class="bg bg-dark">
                    <tr>
                        <th class="col-md-1">ID</th>
                        <th class="col-md-3">Item</th>
                        <th class="col-md-3">Quantity</th>
                        <th class="col-md-3">Group</th>
                        <th class="col-md-3">Edit</th>
                        <th class="col-md-3">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ItemName }}</td>
                        <td>{{ $item->Quantity }}</td>
                        <td>{{ $item->ItemGroupId }}</td>

                        <td>
                            <a href="" class="btn btn-primary btn-sm text-center">Edit</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</div>


@endsection
