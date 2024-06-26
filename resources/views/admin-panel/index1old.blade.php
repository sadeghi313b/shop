<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    the last css file is always a priority. 
            so don't change packages. only define your changes in last individual css files. -->
    <link rel="stylesheet" href="{{ asset('~node_modules/bootstrap/dist/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('~@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('~animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <title>dashboard</title>
</head>

<body>
    <!-- {{ dd('index view') }} -->
    <!--. ------------------------------- header -------------------------------- -->
    <div id="header"></div>

    <section class="body-container">
        <!--. -------------------------------- aside ---------------------------- -->
        <aside class="aside" id="sidebar">
            <section class="aside-header">
                <i class="fa fa-plus"></i>
                <span>فهرست</span>
                <i class="fas fa-minus"></i>
            </section>
            <section class="aside-main">
                <article>
                    <div class="toc-container">
                        <div class="toc1">
                            <span class="title">
                                <i class="fas fa-home"></i>
                                خانه
                            </span>
                        </div>
                    </div>
                </article>
                <article>
                    <h6>بخش محتوا</h6>
                    <div class="toc-container">
                        <div class="toc1">
                            <span class="title">
                                <i class="fa fa-list-alt"></i>
                                دسته ها
                            </span>
                        </div>
                    </div>
                    <div class="toc-container">
                        <a href="#" class="toc1" onclick="displayToggleNext(this)">
                            <span class="title">
                                <i class="fa fa-newspaper"></i>
                                نوشته ها
                            </span>
                            <span class="angel" title="dispalyToggle">
                                <i class="fas fa-angle-left"></i>
                            </span>
                        </a>
                        <ul href="#" class="d-none">
                            <a class="toc2">برگه ها</a>
                            <a class="toc2">مقالات و پست ها</a>
                            <a class="toc2">دوره ها و همایش ها</a>
                        </ul>
                    </div>
                </article>
                <article>
                    <h6>بخش کاربران</h6>
                    <div class="toc-container">
                        <a href="#" class="toc1" onclick="displayToggleNext(this)">
                            <span class="title">
                                <i class="fa fa-users"></i>
                                کاربران
                            </span>
                            <span class="angel" title="dispalyToggle">
                                <i class="fas fa-angle-left"></i>
                            </span>
                        </a>
                        <ul href="#" class="d-none">
                            <a class="toc2">ادمین</a>
                            <a class="toc2">اساتید</a>
                            <a class="toc2">دانشجویان</a>
                        </ul>
                    </div>
                </article>
        
                <article>
                    <h6>بخش تنظیمات</h6>
                    <div class="toc-container">
                        <a href="#" class="toc1" onclick="displayToggleNext(this)">
                            <span class="title">
                                <i class="fa fa-cogs"></i>
                                تنظیمات
                            </span>
                            <span class="angel" title="dispalyToggle">
                                <i class="fas fa-angle-left"></i>
                            </span>
                        </a>
                        <ul href="#" class="d-none">
                            <a class="toc2">منوی هدر</a>
                            <a class="toc2">منوی فوتر</a>
                        </ul>
                    </div>
                </article>
            </section>
            <section class="aside-footer">Sadeghi</section>
        </aside>
        
        <!--. ----------------------------------------------------------------------- -->
        <!--.                                 main                                    -->
        <!--. ----------------------------------------------------------------------- -->
        <main class="main">

            <section class="cards-container row">
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-Peru-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-DarkBlue-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-DarkGreen-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-DarkMagenta-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-DeepPink-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-MediumVioletRed-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-Olive-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>
                <!-- .each-card -->
                <article class="each-card-container col-12 col-md-6 col-lg-3 col-xxl-2">
                    <a href="#" class="each-card text-decoration-none bg-Teal-gradient rounded-3 text-white d-block">
                        <div class="card-body d-flex justify-content-around align-items-center">
                            <span class="card-body-info">
                                <h5>30,200 تومان</h5>
                                <p>سود خالص</p>
                            </span>
                            <span class="card-body-icon">
                                <i class="fas fa-line-chart"></i>
                            </span>
                        </div>
                        <hr>
                        <div class="card-footer d-flex justify-content-around">
                            <i class="fas fa-clock"></i>
                            <span class="card-footer-text small">به روز رسانی شده در 21:42 بعد از ظهر</span>
                        </div>
                    </a>
                </article>




            </section>
            <div class="mt-4">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام          
            </div>
        </main>
    </section>

    <!--. ------------------------------- footer -------------------------------- -->
    <div id="footer"></div>




    <!--. ---------------------------- java scripts ----------------------------- -->
    <script src="../assets/packages/jquery/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../assets/packages/bootstrap/node_modules/@popperjs/core/dist/cjs/popper.js"></script>
    <script src="../assets/packages/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/grid.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        $("#header").load("layouts/header.html");
        $("#footer").load("layouts/footer.html");
    </script>
</body>
</html>
