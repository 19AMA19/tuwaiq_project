@extends('layouts.app') 

@section('content')

<div class="">

    <div class="row">
        <div class="container bg bg-info text-dark p-3">
            <div class="">
                <ul class="nav justify-content-center">
                    <li class="nav-item px-4">
                        <span class="bi bi-wallet2">اشتري بنظام الأقساط</span>
                    </li>
                    <li class="nav-item px-4">
                        <span class="bi bi-tags">نطابق أقل سعر </span>
                    </li>
                    <li class="nav-item px-4">
                        <span class="bi bi-shop">الاستلام من المعرض خلال ساعة</span>
                    </li>
                    <li class="nav-item px-4">
                        <span class="bi bi-truck" >توصيل مجاني للطلبات أكثر من 99 رس </span>
                    </li>
                  </ul>
            </div>
       </div>

        <div class="left col-lg-3 bg bg-dark text-white text-center" style="height: 90%">
            <h4 class="text-center pt-4">الأكثر مبيعًا خلال شهر يناير ٢٠٢٤</h4>
            <hr>
            <div class="align-items-center text-center justify-content-center mx-auto">
                    
                    <div class="overflow-auto">
                        <img src="assets/images/فاين.png" width="200">
                        <div class="card-body">
                            <p>مناديل</p>
                        </div>
                    </div>
             
                    <div class="">
                        <img src="assets/images/اطفال١.jpeg" width="180">
                        <div class="card-body">
                            <p>سيارة طفل عمر سنتين</p>
                        </div>
                    </div>


                    <div class="">
                        <img src="assets/images/معدات1.png" width="180">
                        <div class="card-body">
                            <p>دريل</p>
                        </div>
                    </div>
                    <div class="">
                        <img src="assets/images/بلاستيك3.jpeg" width="180">
                        <div class="card-body">
                            <p>كاسات بلاستيك</p>
                        </div>
                    </div>
        
            </div>
        </div>

        <div class="right col-lg-9">
            <div class="row text-center pt-3">        
                <h1>علامات تجارية معروفة</h1>
                
                @foreach ($data as $row)
                <div class="row d-flex align-items-center text-center justify-content-center mx-auto col-lg-3 col-md-6 m-2">
                    <a href="{{route('getItemsByGroup',['id'=>$row->id])}}"  style="text-decoration: none">
                    <div class="col">
                      <div class="card">
                        <img src="/assets/images/{{$row->ItemGroupImage}}" height="200px" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$row->ItemGroupName}}</h5>
                          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                      </div>  
                    </div>
                </a>
                  </div>
                @endforeach
            </div>
        </div>

       </div>

  


</div>


  
</div>

@endsection