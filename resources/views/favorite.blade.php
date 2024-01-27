@extends('layouts.app') @section('content')

<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <h1 class="text-center pb-4">مفضلتي</h1>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-12">
                <h1 class="mb-3"> أكمل التسوق</h1>
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    
                    <h4 class="mb-0">لديك {{$data->count()}} منتجات في سلة المفضلة</h4>
                  </div>
                </div>

              

              @foreach ($data as $row)

              <div class="card mb-3">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="/assets/images/{{$row->Image}}"
                          class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5>{{$row->ItemName}}</h5>
                        <p class="small mb-0"></p>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center">
                      <div style="width: 120px;">
                        <a class="bi bi-pencil-square text-warning" style="font-size: 30px;"></a>
                        <a class="bi bi-trash" style="font-size: 30px; color:red"></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            
              @endforeach
       

              </div>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>









@endsection
