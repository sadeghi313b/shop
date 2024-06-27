<header class="header d-block d-md-flex">
    <!-- ----------------------------------------------------------------------- -->
    <!--                           side section (Logo)                           -->
    <!-- ----------------------------------------------------------------------- -->
    <aside class="header-side">
        <section class="d-flex justify-content-between flex-row-reverse px-2">
            <!--. toggle icon --><!-- fa-toggle-on | fa-toggle-off -->
            <span class="d-none d-md-inline">
                <i class="fas fa-toggle-on fa-lg pointer" title="show | hide : sidebar"
                    onclick="toggleDisplay(this, 'sidebar', 'fa-toggle-on', 'fa-toggle-off')">
                </i>
            </span>    
            <!--. Logo: png -->
            <span>
                <img src="{{ asset('admin-panel/images/logo/rectangle/logo-white-png.png') }}" alt="" class="logo">
            </span>   
            <!--. hamburger menu: next section -->
            <span class="d-md-none"><i class="fas fa-bars pointer"></i></span>                  
        </section>
    </aside>

    <!-- ----------------------------------------------------------------------- -->
    <!--                              main section                               -->
    <!-- ----------------------------------------------------------------------- -->
    <main class="header-main">
        <section class="d-flex align-items-center justify-content-between">
            <!-- ------------------------------ article 1 ------------------------------ -->
            <article>
                <!--. Search -->
                <span class="ms-4">
                    <!-- search expanded area -->
                    <span class="search-area" hidden id="search-area">
                        <i class="search-icon fas fa-times pointer"></i>
                        <input type="text" class="search-input" >
                        <i class="fas fa-search pointer"></i>
                    </span>
                    <!-- search single icon -->
                    <i class="fas fa-search d-none d-md-inline pointer px-1" id="search-single-icon"></i>
                </span>
                
                <!--. full screen -->
                <span class="pointer p-1 d-none  d-md-inline">
                    <i class="fas fa-expand" title="full screen"></i>
                    <i class="fas fa-compress d-none"></i>
                </span>
            </article>
            <!-- ------------------------------ article 2 ------------------------------ -->
            <article>

                <!--. notifications -->
                <span class="notification-container hovered-dropdown-container">
                    <!--* single icon -->
                    <span class="hovered-dropdown-trigger">
                        <sup class="badge bg-danger rounded-circle">3</sup>
                        <i class="fa-regular fa-bell pointer"></i>
                    </span>
                    <!--* modal box -->
                    <!-- <dialog open> -->
                    <dialog class="notification-modal hovered-dropdown-content p-1">
                        <hgroup class=" lh-lg">
                            <span class="ms-2">نوتیفیکیشن</span>
                            <span class="me-2 badge bg-danger float-end">جدید</span>
                        </hgroup>
                        <ul class="list-group">
                            @for ($i=1;$i<=5;$i++)
                            <li class="list-group-item list-group-item-action mb-1"  style="padding: 3px;">
                                <div class="card-image-aside">
                                    <img src="{{ asset('admin-panel/images/users/avatar1.png') }}" alt="avatar" class="rounded-circle avatar">
                                    <data class="small"> 
                                        <h5 class="small">علیرضا</h5>
                                        <time class="float-end">1403/03/02 16:48</time>
                                        <div class="small">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </div>
                                    </data>
                                </div>
                            </li>
                            @endfor
                        </ul>
                    </dialog>
                </span>

                <!--. comments -->
                <span class="notification-container hovered-dropdown-container">
                    <!--* single icon -->
                    <span class="hovered-dropdown-trigger ms-3 ms-md-5">
                        <sup class="badge bg-danger rounded-circle">3</sup>
                        <i class="far fa-comment-alt pointer"></i>
                    </span>
                    <!--* modal box -->
                    <dialog class="notification-modal hovered-dropdown-content p-1">
                        <hgroup class="lh-lg my-4 mx-2 bb">
                            <input type="text" placeholder="جستجو ..." class="form-control form-control-sm">
                        </hgroup>
                        <ul class="list-group">
                            @for ($i=1;$i<=15;$i++)
                            <li class="list-group-item list-group-item-action mb-1"  style="padding: 3px;">
                                <div class="card-image-aside">
                                    <img src="{{ asset('admin-panel/images/users/avatar1.png') }}" alt="avatar" class="rounded-circle avatar">
                                    <data class="small"> 
                                        <h5 class="small">علیرضا</h5>
                                        <time class="float-end">1403/03/02 16:48</time>
                                        <div class="small">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که </div>
                                    </data>
                                </div>
                            </li>
                            @endfor
                        </ul>
                    </dialog>
                </span>
                
                <!--. user area -->
                <span class="notification-container hovered-dropdown-container">
                    <!--* single icon -->
                    <span class="hovered-dropdown-trigger ms-3 ms-md-5">
                        <img src="{{ asset('admin-panel/images/users/avatar1.png') }}" alt="avatar" class="rounded-circle avatar-xsmall">
                        <span class="small">سید علیرضا مجتبایی نسب</span>
                        <i class="fas fa-angle-down me-3 pointer"></i>
                    </span>
                    <!--* modal box -->
                    <dialog class="hovered-dropdown-content border-0 rounded-2 bg-body-secondary p-2" 
                            style="width: 13rem; position:absolute; top:1.5rem; left: 0px !important;">
                        <div class="list-group lh-1">
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center p-0">
                                <i class="fas fa-cog p-2"></i>
                                تنظیمات
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center p-0">
                                <i class="fas fa-user p-2"></i>
                                کاربر
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center p-0">
                                <i class="far fa-envelope p-2"></i>
                                پیام ها
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center p-0">
                                <i class="fas fa-lock p-2"></i>
                                قفل صفحه
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center p-0">
                                <i class="fas fa-sign-out-alt p-2"></i>
                                خروج
                            </a>
                        </div>
                    </dialog>
                </span>


                <span class="temp"></span>
                
            </article>
            <!-- ---------------------------- end of article 2 ---------------------------- -->
        </section>
    </main>
</header>




