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

        <div class="d-md-none full-width mx-auto top-align">
            <div class="full-width titleFont text-center titleSizeMobile whiteText">
                <div>Own time.</div>
                <div>Own emit.</div>
            </div>
        </div>
        <div class="row full-height">
            <div class="col-md-6 flex-center">
                <span id="time" class="transform-center d-none d-md-block whiteText"></span>
                <span id="time_small_screen" class="transform-center d-md-none whiteText"></span>
                <img src="/images/rightfacing_countdown_blank.png" class="img-fluid flex-center" alt="Responsive image">
            </div>           
            <div  class="col-md-5 d-none d-md-block frontPageText">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont sublineSize whiteText">
                        <div>Own time.</div>
                        <div>Own emit.</div>    
                    </div>
                </div>

                <div class="full-width text-center bottom-align">
                    <!-- <div class="full-width titleFont text-center sublineSize whiteText"> 
                        <div>Kickstarter Launch: </div>
                        <div><span id="kickstarterCountDown"></span></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="d-md-none full-width text-center bottom-align">
            <!-- <div class="full-width titleFont text-center sublineSizeMobile whiteText">
                <div>Kickstarter Launch: </div>
                <div><span id="kickstarterCountDownMobile"></span></div>
            </div> -->
        </div>
        <div class="d-none d-md-block mx-auto top-align full-width titleFont text-center navBarSize whiteText full-width navBar">
            <div class="row full-width">
                <div class="col-2 mx-auto"><a href="#video">VIDEO</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#features">FEATURES</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#signup">SIGN-UP</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#mission">MISSION</a></div>
            </div>            
        </div>
        <div class="d-md-none bottom-align full-width titleFont text-center navBarSizeMobile whiteText full-width">
            <div class="row full-width flex-center">
                <span ><a href="#video">VIDEO</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#features">FEATURES</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#signup">SIGN-UP</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#mission">MISSION</a></span>
            </div>              
        </div>
    </div>

    <div class="section">
        <div class="d-none d-md-block top-align full-width titleFont text-center titleSize whiteText">VIDEO</div>
        <div class="d-md-none top-align full-width titleFont text-center titleSizeMobile whiteText">VIDEO</div>
        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer">
                <div class="col-1"></div>
                <div class="col-10">
                    <video id="desktopVideo" controls class="videoLarge">
                        <source src="/images/movieLarge.mp4" type="video/mp4">
                    </video>
                    <!-- Prevent accidental scrolling -->
                    <div class="full-width largeBottomPad"></div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
        <div class="d-md-none container-fluid zeroPad">
            <video id="mobileVideo" controls class="sectionContainerMobile videoSmall">
                <source src="/images/movieSmall.mp4" type="video/mp4">
            </video>
        </div>
    </div>


    <div class="section">
        <div class="d-none d-md-block top-align full-width titleFont text-center titleSize blackText">FEATURES</div>
        <div class="d-md-none top-align full-width titleFont text-center titleSizeMobile blackText">FEATURES</div>

        <div class="container-fluid">
            <div class="row full-width">

                <!-- content to be placed inside <body>…</body> -->
                <div class="d-none d-md-block mx-auto sectionContainer featureButtonContainer">
                    <a href='#' id="daynightBtn" class="featureButtonLink" ><img class="featureButton" src="/images/daynight-01.png"></a>
                    <a href='#' id="calendarBtn" class="featureButtonLink" ><img class="featureButton" src="/images/calendar-01.png"></a>
                    <a href='#' id="smartphoneBtn" class="featureButtonLink" ><img class="featureButton" src="/images/smartphone-01.png"></a>
                    <a href='#' id="timerBtn" class="featureButtonLink" ><img class="featureButton" src="/images/timer-01.png"></a>
                    <a href='#' id="progressBtn" class="featureButtonLink" ><img class="featureButton" src="/images/progress-01.png"></a>
                    <a href='#' id="timeBtn" class="featureButtonLink" ><img class="featureButton" src="/images/time-01.png"></a>
                    <a href='#' id="batteryBtn" class="featureButtonLink" ><img class="featureButton" src="/images/battery-01.png"></a>
                </div>

                <!-- Spacing for mobile -->
                <div class="d-md-none full-width sectionContainerMobile"></div>                    

            </div>

            <div class="row full-height"> 

                <div class="col-md-2"></div> 
                <div class="col-md-4 flex-center">
                    <img id="daynightImg" src="/images/daynightImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="calendarImg" src="/images/calendarImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="smartphoneImg" src="/images/smartphoneImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="timerImg" src="/images/timerImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="progressImg" src="/images/progressImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="timeImg" src="/images/timeImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                    <img id="batteryImg" src="/images/timeImg.png" class="featureImg img-fluid flex-center" alt="Responsive image">
                </div>

                <!-- Spacing for mobile -->
                <div class="d-md-none row full-width featureMobileMargin">
                    <div class="mx-auto">
                        <a href='#' id="daynightBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/daynight-01.png"></a>
                        <a href='#' id="calendarBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/calendar-01.png"></a>
                        <a href='#' id="smartphoneBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/smartphone-01.png"></a>
                        <a href='#' id="timerBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/timer-01.png"></a>
                    </div>
                </div>
                <div class="d-md-none row full-width">
                    <div class="mx-auto">
                        <a href='#' id="progressBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/progress-01.png"></a>
                        <a href='#' id="timeBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/time-01.png"></a>
                        <a href='#' id="batteryBtnMobile" class="featureButtonLinkMobile" ><img class="featureButtonMobile" src="/images/battery-01.png"></a>
                    </div>
                </div>
                     
                <div class="col-md-4">

                    <!-- Spacing for mobile -->
                    <div class="d-md-none full-width featureMobileMargin"></div>

                    <div id="daynightTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Day/Night Cycle</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>A different way of looking at time. In reverse.</p>
                            <p>Shows a countdown to start and end of day.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Day/Night Cycle</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>A different way of looking at time. In reverse.</p>
                            <p>Shows a countdown to start and end of day.</p>
                        </div>
                    </div>
                    <div id="calendarTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Calendar Events</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Multiple countdowns to most important events / goals / look-forwards.</p>
                            <p>Customise countdowns to last from seconds to years.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Calendar Events</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Multiple countdowns to most important events / goals / look-forwards.</p>
                            <p>Customise countdowns to last from seconds to years.</p>
                        </div>
                    </div>
                    <div id="smartphoneTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Sync from phone</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Simply select an event on your phone calendar and emit syncs automatically via Bluetooth.</p>
                            <p>Works with variety of calendars including google, microsoft, etc.</p>
                            <p>Compatible with iOS and Android.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Sync from phone</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Simply select an event on your phone calendar and emit syncs automatically via Bluetooth.</p>
                            <p>Works with variety of calendars including google, microsoft, etc.</p>
                            <p>Compatible with iOS and Android.</p>
                        </div>
                    </div>
                    <div id="timerTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Multiple Timers</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Ability to create many timers.</p>
                            <p>Easy timing of countdowns such as breaks, meetings, excercises, etc.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Multiple Timers</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Ability to create many timers.</p>
                            <p>Easy timing of countdowns such as breaks, meetings, excercises, etc.</p>
                        </div>
                    </div>
                    <div id="progressTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">See progress</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Set start and end time of a task.</p>
                            <p>Intuitive representation of your progress.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">See progress</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Set start and end time of a task.</p>
                            <p>Intuitive representation of your progress.</p>
                        </div>
                    </div>
                    <div id="timeTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Standard time</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Shows current time, if needed.</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Standard time</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Shows current time, if needed.</p>
                        </div>
                    </div>
                    <div id="batteryTxt" class="full-width">
                        <div class="d-none d-md-block titleFont subTitleSize blackText">Long Battery Life</div>
                        <div class="d-none d-md-block generalFont mediumSize blackText">
                            <br>
                            <p>Lasts up to 2 days per charge.</p>
                            <p>Magnetic pin charging (2 hours).</p>
                        </div>
                        <div class="d-md-none titleFont subTitleSizeMobile blackText">Long Battery Life</div>
                        <div class="d-md-none generalFont mediumSizeMobile blackText">
                            <br>
                            <p>Lasts up to 2 days per charge.</p>
                            <p>Magnetic pin charging (2 hours).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div> 
            </div>

        </div>



<!--         <div class="d-md-none container-fluid zeroPad">
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
        </div> -->


    </div>

    <div class="section">
        <div class="d-none d-md-block mx-auto top-align full-width titleFont text-center titleSize blackText">SIGN-UP</div>
        <div class="d-md-none mx-auto top-align full-width titleFont text-center titleSizeMobile blackText">SIGN-UP</div>

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
                                
                                <input type="email" value="" name="EMAIL" class="email-form form-control generalFont" id="mce-EMAIL" placeholder="Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_456cecaf08" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="email-btn btn generalFont"></div>
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
                                
                                <input type="email" value="" name="EMAIL" class="email-form form-control generalFont" id="mce-EMAIL" placeholder="Email Address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_456cecaf08" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="email-btn btn generalFont"></div>
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
        <div class="d-none d-md-block mx-auto top-align full-width titleFont text-center titleSize blackText">MISSION</div>
        <div class="d-md-none mx-auto top-align full-width titleFont text-center titleSizeMobile blackText">MISSION</div>

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

                    <div class="faded">
                        <b>Licenses:</b> <br>
                        day and night by Nerea Martínez Orduña from the Noun Project <br>
                        Smartphone by Naveen from the Noun Project <br>
                        timer by Adrien Coquet from the Noun Project <br>
                        Watch by Manasa from the Noun Project <br>
                        Calendar by Storm Icons from the Noun Project <br>
                        Battery by Gregor Cresnar from the Noun Project <br>
                        timer by Anusha Narvekar from the Noun Project <br>
                        Time by arjuazka from the Noun Project <br>
                        <a class="licenseLink" href="https://www.youtube.com/watch?v=LHFXQ7Y2cos&index=5&list=PLESp7SFlcw7zHMdBttXsvWSQ1_Hi5Bt59&t=0s">Morning Walk</a> by Jonny Easton <br>
                    </div>

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

                    <div class="faded">
                        <b>Licenses:</b> <br>
                        day and night by Nerea Martínez Orduña from the Noun Project <br>
                        Smartphone by Naveen from the Noun Project <br>
                        timer by Adrien Coquet from the Noun Project <br>
                        Watch by Manasa from the Noun Project <br>
                        Calendar by Storm Icons from the Noun Project <br>
                        Battery by Gregor Cresnar from the Noun Project <br>
                        timer by Anusha Narvekar from the Noun Project <br>
                        Time by arjuazka from the Noun Project <br>
                        <a class="licenseLink" href="https://www.youtube.com/watch?v=LHFXQ7Y2cos&index=5&list=PLESp7SFlcw7zHMdBttXsvWSQ1_Hi5Bt59&t=0s">Morning Walk</a> by Jonny Easton <br>
                    </div>

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

        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);

        $('#fullpage').fullpage({
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            showActiveTooltip: true,
            dragAndMove: false,
            dragAndMoveKey: 'b3duZW1pdC5jb21fbGJwWkhKaFowRnVaRTF2ZG1VPTJ0cA==',
            sectionsColor: ['#0a0a0a', '#0a0a0a', '#f5f5f5', '#f5f5f5', '#f5f5f5'],
            anchors: ['home', 'video', 'features', 'signup', 'mission'],
            scrollOverflow: true,
            verticalCentered:false,

            // Autoplay video fix
            afterLoad: function(origin, destination, direction){
                if (destination==2) {
                    if (w >= 768) {
                        var vid = document.getElementById("desktopVideo");
                        vid.play();
                    } else {
                        var vid = document.getElementById("mobileVideo");
                        vid.play(); 
                    }
                }
            },

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


<!-- jQuery for features page -->
<script type="text/javascript">
    $(document).ready(function(){

        // Initial hide of all img + txt except daynight
        $("#calendarImg").hide();
        $("#smartphoneImg").hide();
        $("#timerImg").hide();
        $("#progressImg").hide();
        $("#timeImg").hide();
        $("#batteryImg").hide();

        $("#calendarTxt").hide();
        $("#smartphoneTxt").hide();
        $("#timerTxt").hide();
        $("#progressTxt").hide();
        $("#timeTxt").hide();
        $("#batteryTxt").hide();

        // Check for mouseover for Desktop
        $(".featureButtonLink").mouseover(function(){

            // $(this).find('img').fadeTo(500, 0.5);

            // Hides all txt/imgs
            hideAll();

            // Check for which button is being hovered on
            // TODO: this can be made more neat?
            if (this.id == "daynightBtn") {
                $("#daynightImg").show();
                $("#daynightTxt").show();
            } else if (this.id == "calendarBtn") {
                $("#calendarImg").show();
                $("#calendarTxt").show();
            } else if (this.id == "smartphoneBtn") {
                $("#smartphoneImg").show();
                $("#smartphoneTxt").show();
            } else if (this.id == "timerBtn") {
                $("#timerImg").show();
                $("#timerTxt").show();
            } else if (this.id == "progressBtn") {
                $("#progressImg").show();
                $("#progressTxt").show();
            } else if (this.id == "timeBtn") {
                $("#timeImg").show();
                $("#timeTxt").show();
            } else if (this.id == "batteryBtn") {
                $("#batteryImg").show();
                $("#batteryTxt").show();
            } else {
                // Bug Catch
                $("#calendarImg").show();
                $("#calendarTxt").show();
            }

        });

        // Check for mouseover for Mobile
        $(".featureButtonLinkMobile").mouseover(function(){

            // $(this).find('img').fadeTo(500, 0.5);

            // Hides all txt/imgs
            hideAll();

            // Check for which button is being hovered on
            // TODO: this can be made more neat?
            if (this.id == "daynightBtnMobile") {
                $("#daynightImg").show();
                $("#daynightTxt").show();
            } else if (this.id == "calendarBtnMobile") {
                $("#calendarImg").show();
                $("#calendarTxt").show();
            } else if (this.id == "smartphoneBtnMobile") {
                $("#smartphoneImg").show();
                $("#smartphoneTxt").show();
            } else if (this.id == "timerBtnMobile") {
                $("#timerImg").show();
                $("#timerTxt").show();
            } else if (this.id == "progressBtnMobile") {
                $("#progressImg").show();
                $("#progressTxt").show();
            } else if (this.id == "timeBtnMobile") {
                $("#timeImg").show();
                $("#timeTxt").show();
            } else if (this.id == "batteryBtnMobile") {
                $("#batteryImg").show();
                $("#batteryTxt").show();
            } else {
                // Bug Catch
                $("#calendarImg").show();
                $("#calendarTxt").show();
            }

        });



    });

    // Hides all txt/imgs
    function hideAll() {

        // Hide all imgs
        $("#daynightImg").hide();
        $("#calendarImg").hide();
        $("#smartphoneImg").hide();
        $("#timerImg").hide();
        $("#progressImg").hide();
        $("#timeImg").hide();
        $("#batteryImg").hide();

        // Hide all text
        $("#daynightTxt").hide();
        $("#calendarTxt").hide();
        $("#smartphoneTxt").hide();
        $("#timerTxt").hide();
        $("#progressTxt").hide();
        $("#timeTxt").hide();
        $("#batteryTxt").hide();

    }

</script>

@endsection
