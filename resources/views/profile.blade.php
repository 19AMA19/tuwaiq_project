@extends('layouts.app') @section('content')

<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-8 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                  alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                <h5>{{ auth()->user()->name }}</h5>
                <p>Web Designer</p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>معلوماتي</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>البريد الإلكتروني</h6>
                      <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>رقم الجوال</h6>
                      <p class="text-muted">{{ auth()->user()->phone }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>العنوان</h6>
                      <p class="text-muted">{{ auth()->user()->address}}</p>
                    </div>
                  </div>
                  <h6>طلباتي</h6>
                  <hr class="mt-0 mb-4">
          
                  @foreach ($data as $row)
                  
                  <div class="card p-2 m-2 d-flex ">
                    <br>

                    <div class=" d-flex">
                      <p id="item" class="btn btn-info">{{$row -> id}}</p>
                      <br>

                      @if($row-> Status == "Pending")
                      <div class="mx-3">
                        <h3>حالة الطلب</h3>
                        <p class="btn btn-warning" style="width: 100px">قيد المعالجة</p>
                      </div>
                      @elseif($row-> Status == "Confirmed")
                      <div class="mx-3">
                        <h3>حالة الطلب</h3>
                        <p class="btn btn-success" style="width: 100px">مكتمل</p>
                      </div>
                      @endif

                      <div class="mx-3">
                        <h3> تاريخ الطلب</h3>
                        <p class="" style="width: 190px">{{$row -> createdAt}}</p>
                      </div>

                    <img id="qr" src="/assets/images/qr.png" class="img-fluid rounded-3" alt="Shopping item" style="width: 70px; height: 70px;">

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
