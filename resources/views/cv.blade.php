<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="اصغر منصوریان">
    <meta name="description" content="رزومه">
    <meta name="description" content="رزومه اصغر منصوریان">    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>اصغر منصوریان</title>
    <!-- === Bootstrap=== -->
    <link href="{{URL::to('css/cv/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- === Fonts=== -->
    <link href="{{asset('fonts/cv/fonts/cssc8ca.css?family=Roboto:100,300,400,500,700,900')}}" rel="stylesheet">
    <!-- === animate === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/animate.min.css')}}">
    <!-- === slick slider === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/slick.css')}}">
    <!-- === ico font === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/icofont.css')}}">
    <!-- === bar filler=== -->
    <link rel="stylesheet" href="{{asset('css/cv/css/barfiller.css')}}">
    <!-- === magnific  === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/magnific-popup.css')}}">
    <!-- === slick nav === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/slicknav.min.css')}}">
    <!-- === Main css === -->
    <link rel="stylesheet" href="{{asset('css/cv/main.css')}}">
    <!-- === responsive css === -->
    <link rel="stylesheet" href="{{asset('css/cv/css/responsive.css')}}">
     
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .img_portfolio{
            height: 150px;
            width: 100%;
        }
        #loader{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            width: 50%;
            display: none
        }
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        </style>
</head>

<body>
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                preloader area
==========+/+/+/+/+/+/+/+/+/=========
-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two" style="left:20px;"></div>
                <div class="object" id="object_three" style="left:40px;"></div>
                <div class="object" id="object_four" style="left:60px;"></div>
                <div class="object" id="object_five" style="left:80px;"></div>
            </div>
        </div>
    </div>
    <!--=========end preloader=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                Hero area
==========+/+/+/+/+/+/+/+/+/=========
-->

    <div class="hero_area" id="about" >
        <!--=========header_area=========-->
        <header class="header_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <!--=========logo=========-->
                        <div class="logo">
                            <!-- <a href="#">
                                <img src="img/logo.png" alt="logo">
                            </a> -->
                        </div>
                        <!--=========end logo=========-->
                    </div>
                    <div dir="rtl" class="col-sm-9 text-right col-xs-6">
                        <!--=========end menu bar=========-->
                        <div class="menu_bar">
                            <nav class="">
                                <ul class="main_menu">
                                    <li class="active"><a href="#about"> درباره ی من </a></li>
                                    <li><a href="#resume">مهارت ها</a></li>
                                    <!-- <li><a href="#service">Service</a></li> -->
                                    <li><a href="#portfolio">نمونه کارها</a></li>
                                    <!-- <li><a href="#blog">Blog</a> </li> -->
                                    <li><a href="#contact">تماس</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--=========end end menu bar=========-->
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </header>
        <!--=========end header_area=========-->
        <!--=========welcome_area=========-->
        <div class="welcome_area">
            <div class="container">
                <div class="welcome_wraper wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="w_img_slide">
                                <!--========= single img1=========-->
                                <div class="single_slide"><img src="{{asset('img/cv/img/me.jpg')}}" alt=""></div>
                                <!--=========end single img1 =========-->
                                <!--========= single img2=========-->
                              
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="w_content_slide">
                                <!--=========e single slider content =========-->
                                <div class="single_c_slider">
                                    <div class="w_content text-right" >
                                        <h1><span>با نام و یاد خدا</span> <br> </h1>
                                        <span>.سلام خدمت شما دوستان من اصغر منصوریان هستم</span>
                                        <p>ساکن استان آذربایجان شرقی شهر تبریز  </p>
                                        <p>متولد سال ۱۳۷۴</p>
                                        <p>مدرک کارشناسی نرم افزار</p>
                                        <p style="direction:rtl">  بکند با زبان php و فریم ورک لاراول کار کردم.</p>
                                        <p>.به کد نویسی مخصوصا کد نویسی تمیز و خوانا اهمیت میدم و علاقه ی زیادی دارم</p>
                                        <p>.دوست دارم تو تیمهای بزرگ و با افراد بیشتر کد نویسی کنم تا هر چه بیشتر و بهتر یاد بگیرم</p>
                                        <!-- <div class="w-btn">
                                           <a href="#" class="w_btn2">Download Resume</a>
                                        </div> -->
                                    </div>
                                </div>
                                <!--=========e end single slider content =========-->
                                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========end welcome_area=========-->
    </div>
    <!--=========end hero_area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                about area
==========+/+/+/+/+/+/+/+/+/=========
-->

    <!--=========end about_area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                skill area
==========+/+/+/+/+/+/+/+/+/=========
-->
    <div class="skill_area spb" id="resume" dir="rtl">
        <div class="container" >
            <div class="row" >
                <div class="col-md-12">
                    <!--=========skill section title content =========-->
                    <div class="section_title">
                        <h1>مهارت ها</h1>
                    </div>
                    <!--=========end skill section title content =========-->
                </div>
            </div>
            <div class=" skill_wraper" >
                <div class="row">
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>HTML & CSS</h4>
                            </div>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span  class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 sm">
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>JavaScript</h4>
                            </div>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="50"></span>
                            </div>
                        </div>
                        <!--=========end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>Php & mysql</h4>
                            </div>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="60"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>Sqllite</h4>
                            </div>
                            <div id="bar4" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="40"></span>
                            </div>
                        </div>
                        <!--=========end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>jquery</h4>
                            </div>
                            <div id="bar5" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="50"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>laravel</h4>
                            </div>
                            <div id="bar6" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="50"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>react</h4>
                            </div>
                            <div id="bar7" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="20"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>react-native</h4>
                            </div>
                            <div id="bar8" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="20"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                    <div class="col-sm-6 sm">
                        <!--========= single_skills=========-->
                        <div class="single_skill">
                            <div class="skill_title">
                                <h4>Git</h4>
                            </div>
                            <div id="bar9" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="40"></span>
                            </div>
                        </div>
                        <!--========= end single_skills=========-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========end skill_area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                service area
==========+/+/+/+/+/+/+/+/+/=========
-->
    <!--=========end serviece wraper=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                hobby area
==========+/+/+/+/+/+/+/+/+/=========
-->

    <div class="portfolio_area sp" id="portfolio" style="padding-bottom: 0">
        <div class="container" dir="rtl">
            <div class="row">
                <div class="col-md-12">
                    <!--========= section title=========-->
                    <div class="section_title text-right">
                        <h1>نمونه کارها</h1>
                    </div>
                    <!--========= end section title=========-->
                </div>
            </div>
            <div class="portfolio_wraper wow fadeInUp" >
                    <!--                <div class="col-md-1">-->
                    <!--========= portfolio_menu =========-->
                    <!-- <div class="portfolio_menu col-md-1">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            <li data-filter=".Daesign">Ui Daesign</li>
                            <li data-filter=".Website">Website</li>
                            <li data-filter=".Apps">Apps</li>
                        </ul>
                    </div> -->
                    <!--=========end portfolio_menu =========-->
                    <!--                </div>-->
                    <!--========= portfolio_items =========-->
                    <div class="col-md-12 portfolio_items">
                        <div class="row">
                            <!--========= single portfolio =========-->
                            <div class="col-md-5 col-sm-4 Daesign Website single_portfolio width-one">
                                <a href="{{asset('img/cv/img/golbarg.png')}}" class="portfolio_img">
                                    <img class="img_portfolio" src="{{asset('img/cv/img/golbarg.png')}}" alt="">
                                </a>
                                <a href="https://www.golbargprint.com" target="_blank">مشاهده</a>
                            </div>
                            <div class="col-md-5 col-sm-4 Daesign Website single_portfolio width-one">
                                <a href="{{asset('img/cv/img/ana.png')}}" class="portfolio_img">
                                    <img class="img_portfolio" src="{{asset('img/cv/img/ana.png')}}" alt="">
                                </a>
                                <a href="http://www.analanguage.ir/" target="_blank">مشاهده</a>
                            </div>                    
                            <!--<div class="col-md-3 col-sm-4 Daesign Website single_portfolio width-one">
                                <a href="{{asset('img/cv/img/portal.png')}}" class="portfolio_img">
                                    <img class="img_portfolio" src="{{asset('img/cv/img/portal.png')}}" alt="">
                                </a>
                                <a href="http://www.portalagahi.com/" target="_blank">مشاهده</a>

                            </div>
                            <!--========= end single portfolio =========-->
                           
                            <!--=========end single portfolio =========-->
                                                    <!--=========  end portfolio_items =========-->
                </div>
            </div>
        </div>
    </div>
    <!--========= end portfolio  area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                blog area
==========+/+/+/+/+/+/+/+/+/=========
-->

    <!--=========end blog_area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                contect area
==========+/+/+/+/+/+/+/+/+/=========
-->
    <div class="contact_area sp text-right" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--========= section title=========-->
                    <div class="section_title">
                        <h1 class="text-right">
                            تماس
                        </h1>
                    </div>
                    <!--========= end section title=========-->
                </div>
            </div>
            <!--=========  contact_wraper=========-->
                <div class="row">
                    <div class="col-sm-6">
                        <!--=========  contact_form=========-->
                        <div class="contact_form text-">
                        <img src="{{asset('img/cv/img/loader.gif')}}" id="loader">
                        <form class="right"  onsubmit="sendContent(event)" method="POST">
                            @csrf
                                <input class="text-right" id="name" required name="name" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('این فیلد نباید خالی باشد.')" required type="text" placeholder="نام">
                                @error('name')
                                <span>{{$message}}</span>
                                @enderror
                                <input class="text-right" id="email" required name="email" oninput="this.setCustomValidity('')" oninvalid="this.setCustomValidity('ایمیل معتبر وارد کنید.')" type="email" placeholder="ایمیل">
                                @error('email')
                                <span>{{$message}}</span>
                                @enderror
                                <textarea class="text-right" id="description" name="description" placeholder="متن"></textarea>
                                @error('description')
                                <span>{{$message}}</span>
                                @enderror
                                <div class="w-btn">
                                    <button type="submit" id="submitButton" class="btn btn-success">ارسال</a>
                                </div>
                            </form>
                        </div>
                        <!--========= end contact_form=========-->
                    </div>
                    
                    <div class="col-sm-6">
                        <!--=========  contact_address=========-->
                        <div class="contact_address">
                            <ul >
                                <li><a href="tell:+989146610775">+98 914 66 10 775  <i class="icofont icofont-ui-call "></i></a></li>
                                <li><a href="mailto:mansourian2018@gmail.com">mansourian2018@gmail.com   <i class="icofont icofont-envelope"></i></a></li>
                                <li><a>آذربایجان شرقی تبریز    <i class="icofont icofont-location-pin"></i></a></li>
                            </ul>
                        </div>
                        <!--========= end  contact_address=========-->
                    </div>
                </div>
            
            <!--========end contact wraper=========-->
        </div>
    </div>
    <!--=========  end contact_area=========-->
    <!--
==========+/+/+/+/+/+/+/+/+/=========
                copyright area
==========+/+/+/+/+/+/+/+/+/=========
-->
    <footer class="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!--=========  copyright_text=========-->
                    <div class="copyright_text">
                        <p>Copyright 2019 © Asghar Mansourian</p>
                    </div>
                    <!--=========  end copyright_text=========-->
                </div>
                <div class="col-sm-6 text-right">
                    <!--=========  social links=========-->
                    <ul class="footer_social">
                        <li><a href="https://twitter.com/mansourian_20" target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/mansourian_20"><i class="icofont icofont-social-instagram"></i></a></li>
                        <li><a target="_blank" href="https://www.telegram.org/mansourian_20"><i class="icofont icofont-social-telegram"></i></a></li>
                    </ul>
                    <!--========= end social links=========-->
                </div>
            </div>
        </div>
    </footer>
    <!--========= end copyright area=========-->
    <!-- === jqyery === -->
    <script src="{{asset('js/cv/js/jsjquery-1.12.4.min.js')}}"></script>
    <!-- === bootsrap-min === -->
    <script src="{{asset('js/cv/js/bootstrap.min.js')}}"></script>
    <!-- === slick slider === -->
    <script src="{{asset('js/cv/js/slick.min.js')}}"></script>
    <!-- === slick nav  === -->
    <script src="{{asset('js/cv/js/jquery.slicknav.min.js')}}"></script>
    <!-- === waypoint  === -->
    <script src="{{asset('js/cv/js/waypoint.js')}}"></script>
    <!-- === bar filler   === -->
    <script src="{{asset('js/cv/js/jquery.barfiller.js')}}"></script>
    <!-- ===  isotope   === -->
    <script src="{{asset('js/cv/js/isotope.js')}}"></script>
    <!-- ===  googlemap  === -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <!-- ===  one page nav  === -->
    <script src="{{asset('js/cv/js/jquery.nav.js')}}"></script>
    <!-- ===  magnific   === -->
    <script src="{{asset('js/cv/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- === active js === -->
    <script src="{{asset('js/cv/js/active.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
</body>
@if(session()->has('success'))
<script>
    alert('{{session()->get('success')}}');
</script>
@endif
<script>
    $(document).ready(function(){
$(".col-sm-6").attr('style','float:right');
$('ul li a i').attr('style','right:0');

});
function sendContent(event){
    event.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    var description = $('#description').val();
    var token = $('input[name=_token]').val();
    $('#loader').css('display','block');
    $('#submitButton').prop('disabled', true);
    $.ajax({
        url:"{{route('content')}}",
        type: "POST",
        headers: {
                    'X-CSRF-Token': token 
               },
        data:{'name':name,'email':email,'description':description},
        success:function(success){
            $('#loader').css('display','none');
            $('#submitButton').prop('disabled', false);
            sweetAlert("success",".با موفقیت ارسال شد","success");
        },
        error:function(error){
            $('#submitButton').prop('disabled', false);
            $('#loader').css('display','none');
            if(error.status == 419){
                $('#loader').css('display','none');
                var error = JSON.parse(error.responseText);  
                var errorMessage ='';
                for(i in  error.message){
                    errorMessage = errorMessage + error.message[i] +'\n';
                }
                sweetAlert("error",errorMessage,"error");
            }
            else{
                sweetAlert("error",".مشکلی رخ داده است لطفا دوباره تلاش کنید","error");
                //window.location.href=window.location.href;
            }
            }
    });
}
</script>
</html>