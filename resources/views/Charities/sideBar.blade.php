<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
    <div class="dashboard-navbar overlio-top">

        <div class="d-user-avater">
            <img src="https://play-lh.googleusercontent.com/i1x5gScRfbjeWsATdiZZf2WIXXEYoYe5OGXfQ_CFPoRF3F1kE4fFV7s1RVtsiGRGee8" class="img-fluid rounded" alt="">
            <h4>{{$charity->name}}</h4>
            <span>المملكة العربية السعودية</span>
        </div>

        <div class="d-navigation">
            <ul id="metismenu">
                <li><a href="{{route('charity.profile')}}">ملف الجمعية <i class="ti-user"></i></a></li>
                <li><a href="{{route('charity.messages')}}">الرسائل <i class="ti-email"></i></a></li>
                <li><a href="#">المشاريع  <i class="ti-layout-cta-btn-right"></i></a></li>
                <li><a href="{{route('charity.logout')}}">تسجيل الخروج <i class="ti-power-off"></i> </a></li>
            </ul>
        </div>

    </div>
</div>