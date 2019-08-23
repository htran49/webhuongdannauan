<aside class="menu-sidebar2">
        <div class="logo">
            <a href="#">
                    <img src="../../public/img/core-img/logo.png" alt="CoolAdmin"  width="100px"/>
            </a>
        </div>
        <div class="menu-sidebar2__content js-scrollbar1">
                @if (request()->session()->get('role')=='user')
            <div class="account2">
                <div class="image img-cir img-120">
                    <img src="../../public/img/{{$data[0]['anh']}}" />
                </div>
                <h4 class="name">{{$data[0]['hotenUser']}}</h4>
                <a href="#">Sign out</a>
            </div>
            @else
            <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="../../public/img/{{$data[0]['anh']}}" />
                    </div>
                    <h4 class="name">{{$data[0]['hotenUser']}}</h4>
                    <a href="/logout">Đăng xuất</a>
                </div>
            <nav class="navbar-sidebar2">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Danh mục loại công thức
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="/admin-danhmuc-danhsach">
                                    <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                            </li>
                            <li>
                                <a href="admin-danhmuc-them">
                                    <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                
                            </li>
                          
                        </ul>
                    </li>
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Danh mục nhóm công thức
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin-danhmuc1-danhsach">
                                        <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                                </li>
                                <li>
                                    <a href="/admin-danhmuc1-them">
                                        <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                       
                                </li>
                              
                            </ul>
                    </li>
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Công thức
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin-baiviet-danhsach">
                                        <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                                </li>
                                <li>
                                    <a href="/admin-baiviet-them">
                                        <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                      
                                </li>
                              
                            </ul>
                    </li>
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Danh mục blog
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin-danhmuc2-danhsach">
                                        <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                                </li>
                                <li>
                                    <a href="/admin-danhmuc2-them">
                                        <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                       
                                </li>
                              
                            </ul>
                    </li>
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Blog
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin-blog-danhsach">
                                        <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                                </li>
                                <li>
                                    <a href="admin-blog-them">
                                        <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                  
                                </li>
                              
                            </ul>
                    </li>
                  
                    <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Slide
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin-slide-danhsach">
                                        <i class="fas fa-tachometer-alt"></i>Danh sách</a>
                                </li>
                                <li>
                                    <a href="/admin-slide-them">
                                        <i class="fas fa-tachometer-alt"></i>Thêm </a>
                                    
                                </li>
                              
                            </ul>
                    </li>
                 
                </ul>
            </nav>
            @endif
        </div>
    </aside>