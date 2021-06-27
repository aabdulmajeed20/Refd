<div class="header header-transparent dark-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="{{URL::to('src/img/logo.png')}}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu">
                        
                            <li class="active"><a href="#">الرئيسية</a></li>
                            <li><a href="#about">عن المنصة</a></li>
                            <li><a href="#process">آلية العمل </a></li>
                            <li><a href="#stat">الاحصائيات </a></li>
                            <li><a href="#projects">المشاريع </a></li>
                            <li><a href="#contact">تواصل معنا </a></li>						
                        </ul>
                        
                        <ul class="nav-menu nav-menu-social align-to-right">
                            
                            <li>
                                <a href="{{route('showRegister')}}" >
                                    سجل الآن
                                </a>
                            </li>
                            <li class="add-listing dark-bg light">
                                <a href="{{route('endowment.showLogin')}}" >
                                     <i class="ti-user mr-1"></i> دخول الأوقاف
                                </a>
                            </li>
                            <li class="add-listing dark-bg">
                                <a href="{{route('charity.showLogin')}}" >
                                     <i class="ti-user mr-1"></i> دخول الجمعيات
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>