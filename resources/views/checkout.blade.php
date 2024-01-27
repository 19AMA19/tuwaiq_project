@extends('layouts.app') @section('content')

<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <h1 class="text-center pb-4">سلة التسوق</h1>
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">

            <div class="row">

              <div class="col-lg-7">
                <h1 class="mb-3"> أكمل التسوق</h1>
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                    
                    <h4 class="mb-0">لديك  {{$data->count()}} منتجات في السلة</h4>
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
                      <div style="width: 80px;">
                        <h5 class="mb-0">{{$row->ItemPrice}} ريال</h5>
                      </div>
                      <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            
              @endforeach
       

              </div>


              <div class="col-lg-5">

                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h2 class="mb-0">تفاصيل البطاقة الائتمانية</h2>
                    </div>

                <h3>نوع البطاقة</h3>

                    <form class="mt-4">
                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name" />
                        <label class="form-label" for="typeName">اسم حامل البطاقة</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                        <label class="form-label" for="typeText">رقم البطاقة</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="text" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">تاريخ الإنتهاء</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">رمز الأمان</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">الإجمالي الفرعي</p>
                      <p class="mb-2">{{$total}} ريال</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">الضريبة ١٥٪</p>
                      <p class="mb-2">{{$tax}} ريال</p>
                    </div>

                    <div class="d-flex justify-content-between">
                      <p class="mb-2">رسوم الشحن والخدمات</p>
                      <p class="mb-2">{{$shipping}} ريال</p>
                    </div>
              
                    <br>
                    <div class="d-flex justify-content-between mb-4">
                      <h3 class="mb-2">السعر الإجمالي</h3>
                      <h3 class="mb-2">{{$total + $shipping + $tax}} ريال</h3>
                    </div>

                      <a href="{{route('ConfirmOrder', ['Quantity' => $total, 'TotalPrice' => $total, 'CustomerId' => auth()->user()->id, 'Status' => 'Pending' ])}}" type="button" class="btn btn-warning btn-block btn-lg justify-content-center align-items-center">
                      <div class="d-flex justify-content-between">
                        <span>تأكيد عملية الدفع</i></span>
                      </div>
                    </a>

                  </div>
                </div>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>









@endsection
