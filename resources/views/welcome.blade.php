@extends('layouts.master')

@section('content')
<!-- Content-->

<!-- FB Like Plugin -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1846656882296386&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-block">
                <ul style="list-style: none;">
                    @foreach ($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="d-md-none full-width top-center-align">
            <div class="titleFont titleSizeMobile whiteText">
                <div>Own time.</div>
                <div>Own emit.</div>
            </div>
        </div>
        <div class="row full-height">
            <div class="col-md-6 flex-center">
                <span id="time" class="center-align d-none d-md-block whiteText"></span>
                <span id="time_small_screen" class="center-align d-md-none whiteText"></span>
                <img src="/images/rightfacing_countdown_blank.png" class="img-fluid flex-center" alt="Responsive image">
            </div>           
            <div class="col-md-5 d-none d-md-block frontPageText">
                <div class="full-width vertical-center-align">
                    <div class="full-width titleFont titleSize whiteText">
                        <div>Own time.</div>
                        <div>Own emit.</div>    
                    </div>
                </div>

                <div class="full-width bottom-center-align">
                    <!-- <div class="full-width titleFont sublineSize whiteText"> 
                        <div>Kickstarter Launch: </div>
                        <div><span id="kickstarterCountDown"></span></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="d-md-none full-width bottom-center-align">
            <!-- <div class="titleFont sublineSizeMobile whiteText">
                <div>Kickstarter Launch: </div>
                <div><span id="kickstarterCountDownMobile"></span></div>
            </div> -->
        </div>
        <div class="d-none d-md-block top-center-align titleFont navBarSize whiteText full-width navBar">
            <div class="row full-width navBar">
                <div class="col-2 col-offset-1"><a href="#video">VIDEO</a></div>
                <div class="col-1"><a href="#features">|</a></div>
                <div class="col-2"><a href="#features">FEATURES</a></div>
                <div class="col-1"><a href="#features">|</a></div>
                <div class="col-2"><a href="#signup">SIGN-UP</a></div>
                <div class="col-1"><a href="#features">|</a></div>
                <div class="col-2"><a href="#mission">MISSION</a></div>
            </div>            
        </div>
        <div class="d-md-none bottom-center-align titleFont navBarSizeMobile whiteText full-width">
            <div class="row full-width">
                <span><a href="#video">VIDEO</a></span>
                <span><a href="#features"> | </a></span>
                <span><a href="#features">FEATURES</a></span>
                <span><a href="#features"> | </a></span>
                <span><a href="#signup">SIGN-UP</a></span>
                <span><a href="#features"> | </a></span>
                <span><a href="#mission">MISSION</a></span>
            </div>              
        </div>
    </div>

    <div class="section">
        <div class="d-none d-md-block top-center-align titleFont titleSize whiteText">VIDEO</div>
        <div class="d-md-none top-center-align titleFont titleSizeMobile whiteText">VIDEO</div>
        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer">
                <div class="col-12">
                    <video controls class="videoLarge center-align">
                        <source src="/images/movieLarge.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <div class="d-md-none container-fluid zeroPad">
            <video controls class="sectionContainerMobile videoSmall center-align">
                <source src="/images/movieSmall.mp4" type="video/mp4">
            </video>
        </div>
    </div>


    <div class="section">
        <div class="d-none d-md-block top-center-align titleFont titleSize blackText">FEATURES</div>
        <div class="d-md-none top-center-align titleFont titleSizeMobile blackText">FEATURES</div>

        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer">
                <div class="col-md-1"></div>
                <div class="col-md-5 generalFont mediumSize blackText">
                    <ul class="listMargin" style="list-style-type:square">
                      <li>A different way of looking at time. In reverse.</li>
                      <li>Shows a countdown to start and end of day.</li>
                      <li>Multiple countdowns to most important events/goals/look-forwards.</li>
                      <li>Customise countdowns to last from seconds to years.</li>
                      <li>Simply select an event on your phone calendar and emit syncs automatically.</li>
                      <li>Shows current time, if needed.</li>
                      <li>Minimal and distinct design.</li>
                    </ul>       
                </div>
                <div class="col-md-5">
                    <img src="/images/rightfacing_emit_comp.png" class="img-fluid flex-center" alt="Responsive image">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="d-md-none container-fluid zeroPad">
            <div class="row full-width sectionContainerMobile">
                <div class="col-md-1"></div>
                <div class="col-md-5 generalFont mediumSizeMobile blackText">
                    <ul class="listMarginMobile" style="list-style-type:square">
                      <li>A different way of looking at time. In reverse.</li>
                      <li>Shows a countdown to start and end of day.</li>
                      <li>Multiple countdowns to most important events/goals/look-forwards.</li>
                      <li>Customise countdowns to last from seconds to years.</li>
                      <li>Simply select an event on your phone calendar and emit syncs automatically.</li>
                      <li>Shows current time, if needed.</li>
                      <li>Minimal and distinct design.</li>
                    </ul>       
                </div>
                <div class="col-md-5">
                    <img src="/images/rightfacing_emit_comp.png" class="img-fluid flex-center" alt="Responsive image">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="d-none d-md-block top-center-align titleFont titleSize blackText">SIGN-UP</div>
        <div class="d-md-none top-center-align titleFont titleSizeMobile blackText">SIGN-UP</div>

        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 generalFont mediumSize blackText">

                    <p>We are currently working on our prototypes and will be fund-raising on Kickstarter (August 2018).</p>

<!--                     <p>You can contact us at <a href="mailto:ownemit@gmail.com">ownemit@gmail.com</a> or +447472508476, and we'll get back to you as soon as possible.</p> -->

                    <p>Sign up and follow us to keep up-to-date with more information on emit and the Kickstarter campaign: </p>

                    <div class="row email-bar">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">

                            <!-- Begin MailChimp Signup Form -->

                            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                            <style type="text/css">
                                #mc_embed_signup{background:#f5f5f5; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                            </style>
                            <div id="mc_embed_signup">
                            <form action="https://ownemit.us18.list-manage.com/subscribe/post?u=3c3af586825828c2e88762ca9&amp;id=456cecaf08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                
                                <input type="email" value="" name="EMAIL" class="email-form form-control" id="mce-EMAIL" placeholder="Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_456cecaf08" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="email-btn btn"></div>
                                </div>
                            </form>
                            </div>

                            <!--End mc_embed_signup-->
                            
<!--                             <form  method="POST" action="{{ route('subscribe') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                  <input name="email" type="email" class="email-form form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button class="email-btn btn" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                  </div>
                                </div>
                            </form> -->

                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    
<!--                     <div class="fb-like" data-href="https://www.facebook.com/ownemit/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div> -->

                    <div class="row iconContainer">
                        <a href="https://www.instagram.com/emitwatch/">
                            <img class="icon" src="/images/insta_logo.png">
                        </a>
                        <a href="https://www.facebook.com/ownemit/">
                            <img class="icon" src="/images/fb_logo.png">
                        </a>
                        <a href="https://www.snapchat.com/add/emitwatch">
                            <img class="icon" src="/images/snap_logo.png">
                        </a>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>
            <img src="/images/sideup_life_comp.png" class="bottomImage img-fluid" alt="Responsive image">  
        </div>
        <div class="d-md-none container-fluid">
            <div class="row full-width sectionContainerMobile mediumBottomPad">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 generalFont mediumSizeMobile blackText">

                    <p>We are currently working on our prototypes and will be fund-raising on Kickstarter (August 2018).</p>

<!--                     <p>You can contact us at <a href="mailto:ownemit@gmail.com">ownemit@gmail.com</a> or +447472508476, and we'll get back to you as soon as possible.</p> -->

                    <p>Sign up and follow us to keep up-to-date with more information on emit and the Kickstarter campaign: </p>

                    <div class="row email-bar">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">

                            <!-- Begin MailChimp Signup Form -->

                            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                            <style type="text/css">
                                #mc_embed_signup{background:#f5f5f5; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                                /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                            </style>
                            <div id="mc_embed_signup">
                            <form action="https://ownemit.us18.list-manage.com/subscribe/post?u=3c3af586825828c2e88762ca9&amp;id=456cecaf08" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                
                                <input type="email" value="" name="EMAIL" class="email-form form-control" id="mce-EMAIL" placeholder="Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_456cecaf08" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="email-btn btn"></div>
                                </div>
                            </form>
                            </div>

                            <!--End mc_embed_signup-->


                            
<!--                             <form  method="POST" action="{{ route('subscribe') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                  <input name="email" type="email" class="email-form form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button class="email-btn btn" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                  </div>
                                </div>
                            </form> -->


                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    
<!--                     <div class="fb-like" data-href="https://www.facebook.com/ownemit/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div> -->

                    <div class="row iconContainer">
                        <a href="https://www.instagram.com/emitwatch/">
                            <img class="icon" src="/images/insta_logo.png">
                        </a>
                        <a href="https://www.facebook.com/ownemit/">
                            <img class="icon" src="/images/fb_logo.png">
                        </a>
                        <a href="https://www.snapchat.com/add/emitwatch">
                            <img class="icon" src="/images/snap_logo.png">
                        </a>
                    </div>

                </div>
                <div class="col-lg-2"></div>
            </div>   
            <img src="/images/sideup_life_comp.png" class="bottomImage img-fluid" alt="Responsive image">
        </div>
    </div>

    <div class="section">
        <div class="d-none d-md-block top-center-align titleFont titleSize blackText">MISSION</div>
        <div class="d-md-none top-center-align titleFont titleSizeMobile blackText">MISSION</div>

        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-justify">

                    <p>
                        Time is our most precious resource. It flows constantly and irreversibly regardless of how we use it. We believe you can achieve your goals and live a more fulfilling life if you take control of your own time rather than succumb to it.
                    </p>

                    <p>    
                        emit aims to improve how you look at time. Viewing time as a countdown to your most important events of the day, week, year or even life, will make you much more aware of how you really spend your time. We believe you will be more conscientious in choosing the things that matter most and be better equipped to achieve them. emit is made for realistic optimists - people who truly believe they can accomplish their big dreams and passions, if they pour their heart and soul into it.  emit represents the pioneering spirit in us, which doesn't conform to the status quo and is always looking at the world from new perspectives. It enables you to design your life, rather than sleepwalk through it.
                    </p>

                    <p>
                        We are engineering students from Imperial College London who were looking for a tool to better manage our time. Watches, for centuries, have shown time as moving forwards. We realised that people could better perceive the value of time if shown as the remaining amount they had for their next event, or to the end of their day, instead of as an absolute value that is common for all. We set out to challenge the conventional way of looking at time.  Our mission is to help people accomplish their most important goals, whether it is related to family, friends, health, career or hobbies - by proactively allocating appropriate amounts of time to each of them.
                    </p>

                    <p>
                        Own time. Own emit.
                    </p>

<!--                     <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4"><img src="/images/teamphoto.png" class="img-fluid" alt="Responsive image"></div>
                        <div class="col-4"></div>
                    </div> -->  
                </div>
                <div class="col-sm-2"></div>
            </div>
            <img src="/images/teamphoto.png" class="bottomImage img-fluid" alt="Responsive image">
        </div>
        <div class="d-md-none container-fluid">
            <div class="row full-width sectionContainerMobile largeBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-justify">

                    <p>
                        Time is our most precious resource. It flows constantly and irreversibly regardless of how we use it. We believe you can achieve your goals and live a more fulfilling life if you take control of your own time rather than succumb to it.
                    </p>

                    <p>    
                        emit aims to improve how you look at time. Viewing time as a countdown to your most important events of the day, week, year or even life, will make you much more aware of how you really spend your time. We believe you will be more conscientious in choosing the things that matter most and be better equipped to achieve them. emit is made for realistic optimists - people who truly believe they can accomplish their big dreams and passions, if they pour their heart and soul into it.  emit represents the pioneering spirit in us, which doesn't conform to the status quo and is always looking at the world from new perspectives. It enables you to design your life, rather than sleepwalk through it.
                    </p>

                    <p>
                        We are engineering students from Imperial College London who were looking for a tool to better manage our time. Watches, for centuries, have shown time as moving forwards. We realised that people could better perceive the value of time if shown as the remaining amount they had for their next event, or to the end of their day, instead of as an absolute value that is common for all. We set out to challenge the conventional way of looking at time.  Our mission is to help people accomplish their most important goals, whether it is related to family, friends, health, career or hobbies - by proactively allocating appropriate amounts of time to each of them.
                    </p>

                    <p>
                        Own time. Own emit.
                    </p>

                </div>
                <div class="col-sm-2"></div>
            </div>
            <img src="/images/teamphoto.png" class="bottomImage img-fluid" alt="Responsive image"> 
        </div>
    </div>
</div>

<!-- FullPage JS setup -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            navigation: true,
            navigationPosition: 'right',
            showActiveTooltip: true,
            dragAndMove: false,
            dragAndMoveKey: 'b3duZW1pdC5jb21fbGJwWkhKaFowRnVaRTF2ZG1VPTJ0cA==',
            sectionsColor: ['#0a0a0a', '#0a0a0a', '#f5f5f5', '#f5f5f5', '#f5f5f5'],
            anchors: ['home', 'video', 'features', 'signup', 'mission'],
            scrollOverflow: true,
            verticalCentered:false,
        });
    });
</script>

<!-- Script for calculating days until kickstarterCountDown -->
<!-- <script>
$(function() {
    var countDownDate = new Date("August 1, 2018 23:59:59").getTime();
    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="kickstarterCountDown"
    document.getElementById("kickstarterCountDown").innerHTML = days + " Days";
    document.getElementById("kickstarterCountDownMobile").innerHTML = days + " Days";

    // If the count down is finished, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("kickstarterCountDown").innerHTML = "BEGUN!";
        document.getElementById("kickstarterCountDownMobile").innerHTML = "BEGUN!";
    }
});
</script> -->

<!-- JS for Daily CountDown -->
<script type="text/javascript">

    // Blank string
    var string = "";
    // Initial call
    // Get date today, the subtract to get time to 24:00:00 (theoretical midnight)
    var now = new Date();
    var seconds = 59-now.getSeconds();
    var minutes = 59-now.getMinutes();
    var hours = 23-now.getHours();

    // Makes sure time is in format of hh:mm:ss
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}

    // Write time in hh:mm:ss format to element with #time
    document.getElementById("time").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
    document.getElementById("time_small_screen").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

    // function to repeat every second
    window.setInterval(function(){

        var now = new Date();
        var seconds = 59-now.getSeconds();
        var minutes = 59-now.getMinutes();
        var hours = 23-now.getHours();

        // makes sure time is in format of hh:mm:ss
        if (hours   < 10) {hours   = "0"+hours;}
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}

        // write time in hh:mm:ss format to element with #time
        document.getElementById("time").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        document.getElementById("time_small_screen").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

    }, 1000);

    function msToTime(s) {

        var ms = s % 1000;
        s = (s - ms) / 1000;
        var secs = s % 60;
        s = (s - secs) / 60;
        var mins = s % 60;
        var hrs = (s - mins) / 60;

        return hrs + ':' + mins + ':' + secs + '.' + ms;
    }

</script>

@endsection
