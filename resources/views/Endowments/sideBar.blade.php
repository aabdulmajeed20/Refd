<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
    <div class="dashboard-navbar overlio-top">

        <div class="d-user-avater">
            <img src="https://nama-sa.com/wp-content/uploads/2020/12/log-1024x724.png"
                class="img-fluid rounded" alt="">
            <h4>{{$endowment->name}}</h4>
            <span>المملكة العربية السعودية</span>
        </div>

        <div class="d-navigation">
            <ul id="metismenu">
                <li class="active"><a href="{{route('endowment.dashboard')}}">لوحة التحكم <i
                            class="ti-dashboard"></i></a></li>
                <li><a href="#">الملف الشخصي <i class="ti-user"></i></a></li>
                <li><a href="{{route('endowment.messages')}}">الرسائل <i class="ti-email"></i></a></li>
                {{-- <li>
                    <a href="{{route('endowment.bookmarks')}}" aria-expanded="false">المحفوظات <i class="ti-bookmark-alt"></i></a>
                </li> --}}
                <li>
                    <a href="javascript:void(0);" class="has-arrow" aria-expanded="false">المشاريع
                        <i class="fa fa-briefcase"></i></a>
                    <ul>
                        <li><a href="{{route('endowment.selectedProjects')}}">المشاريع المختارة</a></li>
                        <li><a href="{{route('endowment.inProgressProjects')}}">المشاريع قيد الدعم</a></li>
                        <li><a href="{{route('endowment.donatedProjects')}}">المشاريع المدعومة</a></li>
                    </ul>
                </li>
                <li><a href="{{route('endowment.logout')}}">تسجيل الخروج<i class="ti-power-off"></i></a></li>
            </ul>
        </div>
    </div>
</div>