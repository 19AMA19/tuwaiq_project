@extends('layouts.dashboard') @section('content')

<h1 class="text-center">Add New Group For Items</h1>
<div class="col d-flex justify-content-center">
    <div class="card col-md-6">
        <div class="card-body">
            <form
            class="col-md-12"
            action="{{ route('addGroup') }}"
            method="post">
            @csrf
            <div class="col-md-12 p-4">
                <label for="group-name">اسم المجموعة الجديدة</label>
                <input class="form-control" id="group-name" name="ItemGroupName" type="text" required/>
                <br>
                <label for="group-name">إضافة الصورة</label>
                <input class="form-control" id="group-name" name="ItemGroupImage" type="file" required/>
                <br/>
            </div>

            <div class="col-md-12 pb-4 text-center">
                <div class="col">
                    <button class="btn btn-primary col-md-6" type="submit">
                        إضافة
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

<div class=" container  d-flex justify-content-center pt-4">
    <table class="table table-striped table-hover text-center ">
        <thead class="bg bg-dark">
            <tr>
                <th class="col-md-1">ID</th>
                <th class="col-md-3">Name</th>
                <th class="col-md-3">Edit</th>
                <th class="col-md-3">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{ $item-> id }}</td>
                <td>{{ $item-> ItemGroupName }}</td>
                <td>
                    <a href="{{route('editGroup', ['id'=> $item->id ]) }}" class="btn btn-primary btn-sm text-center">Edit</a>
                </td>
                <td>
                    <a href=" {{route('deleteGroup', ['id'=> $item->id ]) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection
