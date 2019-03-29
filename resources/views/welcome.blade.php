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

    <div class="section black-bg">
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
            <div class="full-width titleFont text-center titleSize whiteText">
                <div>Own time.</div>
                <div>Own emit.</div>
            </div>
        </div>
        <div class="row mobile-vhmax">
            <div class="col-md-6 flex-center">
                <span id="frontPageAnimatedText" class="transform-hozcenter d-none d-md-block whiteText"></span>
                <span id="frontPageAnimatedTextMobile" class="transform-hozcenter d-md-none whiteText"></span>
                <img src="/images/rightfacing_countdown_blank.png" class="img-fluid flex-center" alt="Responsive image">
            </div>           
            <div  class="col-md-5 d-none d-md-block">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="sublineSize whiteText">Own time.</div>
                        <div class="sublineSize whiteText">Own emit.</div>
                        <div class="navBarSize whiteText miniBotPad">Change your perspective on time.</div>
                        <button 
                            class="white-btn btn whiteBorder blackText setLength snipcart-add-item"
                            data-item-id="1"
                            data-item-name="emit smartwatch 2.0"
                            data-item-price="119"
                            data-item-url="https://ownemit.com/"
                            data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                Buy Now
                        </button>
                        <button class="black-btn btn whiteBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                    </div>
                </div>
            </div>
<!--             <div class="d-none d-md-block full-width text-center bottom-align">
                <div class="full-width titleFont text-center navBarSize whiteText"> 
                    <div><a href="kickstarter">Preorder now!</a></div>
                </div>
            </div> -->
        </div>
        <div class="d-none d-md-block mx-auto top-align full-width titleFont text-center navBarSize whiteText full-width navBar">
            <div class="row full-width">
                <div class="col-2 mx-auto"><a href="#why">WHY?</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#features">FEATURES</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#mission">MISSION</a></div>
                <div class="col-1 mx-auto">|</div>
                <div class="col-2 mx-auto"><a href="#patrons">PATRONS</a></div>
            </div>            
        </div>
        <div class="d-md-none bottom-align full-width titleFont text-center navBarSize whiteText full-width">
            <div class="miniBotPad">
                <button 
                    class="white-btn btn whiteBorder blackText setLength snipcart-add-item"
                    data-item-id="1"
                    data-item-name="emit smartwatch 2.0"
                    data-item-price="119"
                    data-item-url="https://ownemit.com/"
                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                        Buy Now
                </button>
                <button class="black-btn btn whiteBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
            </div>
            <div class="row full-width flex-center ">
                <span ><a href="#why">WHY?</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#features">FEATURES</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#mission">MISSION</a></span>
                <span class="lrPad"> | </span>
                <span ><a href="#patrons">PATRONS</a></span>
            </div>
<!--             <div class="full-width titleFont text-center sublineSizeMobile whiteText">
                <div><a href="kickstarter">Buy on Kickstarter!</a></div>
            </div>  -->            
        </div>
    </div>

    <div class="section black-bg fullscreenVideoSection">

        <a class="d-none d-md-block" href="#home">
            <img class="homeButton inverted" src="/images/home-01.png">
        </a>

        <div class="slide">
            <video class="fullscreenVideo" loop muted data-autoplay>
                <source src="/images/morning.mp4" type="video/mp4">
            </video>

            <div class="layer flex-center">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="sublineSize whiteText">Always on time.<br class="d-md-none"> Everywhere.</div>
                        <div>
                            <button 
                                class="white-btn btn whiteBorder blackText setLength lrPadButton snipcart-add-item"
                                data-item-id="1"
                                data-item-name="emit smartwatch 2.0"
                                data-item-price="119"
                                data-item-url="https://ownemit.com/"
                                data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                    Buy Now
                            </button>
                            <button class="black-btn btn whiteBorder whiteText setLength lrPadButton"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="slide">
            <video class="fullscreenVideo" loop muted data-autoplay id="workVideo">
                <source src="/images/work.mp4" type="video/mp4">
            </video>

            <div class="layer flex-center">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="sublineSize whiteText"><span id="workVideoText">Plan ahead.</span></div>
                        <div>
                            <button 
                                class="white-btn btn whiteBorder blackText setLength lrPadButton snipcart-add-item"
                                data-item-id="1"
                                data-item-name="emit smartwatch 2.0"
                                data-item-price="119"
                                data-item-url="https://ownemit.com/"
                                data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                    Buy Now
                            </button>
                            <button class="black-btn btn whiteBorder whiteText setLength lrPadButton"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                        </div>     
                    </div>
                </div> 
            </div>
        </div>

        <div class="slide">
            <video class="fullscreenVideo" loop muted data-autoplay>
                <source src="/images/gym.mp4" type="video/mp4">
            </video>

            <div class="layer flex-center">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="sublineSize whiteText">Motivation.<br class="d-md-none"> Keep going.</div>
                        <div>
                            <button 
                                class="white-btn btn whiteBorder blackText setLength lrPadButton snipcart-add-item"
                                data-item-id="1"
                                data-item-name="emit smartwatch 2.0"
                                data-item-price="119"
                                data-item-url="https://ownemit.com/"
                                data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                    Buy Now
                            </button>
                            <button class="black-btn btn whiteBorder whiteText setLength lrPadButton"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="slide">
            <video class="fullscreenVideo" loop muted data-autoplay>
                <source src="/images/holiday.mp4" type="video/mp4">
            </video>

            <div class="layer flex-center">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="sublineSize whiteText">Aspire.<br class="d-md-none"> Then go further.</div>
                        <div>
                            <button 
                                class="white-btn btn whiteBorder blackText setLength lrPadButton snipcart-add-item"
                                data-item-id="1"
                                data-item-name="emit smartwatch 2.0"
                                data-item-price="119"
                                data-item-url="https://ownemit.com/"
                                data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                    Buy Now
                            </button>
                            <button class="black-btn btn whiteBorder whiteText setLength lrPadButton"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </div>

    <div class="section white-bg">

        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">FEATURES</div>

        <a class="d-none d-md-block" href="#home">
            <img class="homeButton" src="/images/home-01.png">
        </a>

        <div class="container-fluid">
            <div class="row full-width">

                <!-- content to be placed inside <body>…</body> -->
                <div class="d-none d-md-block mx-auto sectionContainer featureButtonContainer">
                    <a id="dayNightBtn" class="featureButtonLink" ><img class="featureButton" src="/images/dayNight-01.png"></a>
                    <a id="calendarBtn" class="featureButtonLink" ><img class="featureButton" src="/images/calendar-01.png"></a>
                    <a id="timerBtn" class="featureButtonLink" ><img class="featureButton" src="/images/timer-01.png"></a>
                    <a id="progressBtn" class="featureButtonLink" ><img class="featureButton" src="/images/progress-01.png"></a>
                    <a id="timeBtn" class="featureButtonLink" ><img class="featureButton" src="/images/time-01.png"></a>
                    <a id="healthBtn" class="featureButtonLink" ><img class="featureButton" src="/images/health-01.png"></a>
                    <a id="smartphoneBtn" class="featureButtonLink" ><img class="featureButton" src="/images/smartphone-01.png"></a>
                </div>

                <!-- Spacing for mobile -->
                <div class="d-md-none full-width sectionContainer"></div>                    

            </div>

            <div class="row full-height"> 

                <div class="col-md-2"></div> 
                <div class="col-md-4 flex-center">
                    <div id="dayNightImg" class="text-center">
                        <div id="dayNightAnimatedTextDaily" class="whiteText transform-center">
                            <span id="dayNightAnimatedText" class="featureAnimatedText">00:00:00</span>
                        </div>
                        <div id="dayNightAnimatedTextCalendar" class="whiteText transform-center">
                            <span id="dayNightAnimatedTextTop" class="featureAnimatedTextSmall">Work Meeting</span><br>
                            <span id="dayNightAnimatedTextMiddle" class="featureAnimatedText">03:10:00</span><br>
                            <span class="featureAnimatedTextSmall"></span><br>
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <div id="calendarImg" class="text-center">
                        <div class="whiteText transform-center">
                            <span id="calendarAnimatedTextTop" class="featureAnimatedTextSmall w3-animate-right">Report Due</span><br>
                            <span id="calendarAnimatedTextMiddle" class="featureAnimatedText w3-animate-right">1 Day</span><br>
                            <span id="calendarAnimatedTextBottom" class="featureAnimatedTextSmall w3-animate-right">3 Hours</span><br>
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <div id="timerImg">
                        <div class="whiteText transform-center">
                            <span id="timerAnimatedTextMiddle" class="featureAnimatedText">09:59</span>
                        </div>
                        <div class="transform-center full-width">
                            <img id="timerImgStart" src="/images/timerImgStartBlank.png" class="featureImg img-fluid w3-animate-right" alt="Responsive image">
                            <img id="timerImgStop" src="/images/timerImgStopBlank.png" class="featureImg img-fluid" alt="Responsive image">
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <div id="progressImg" class="text-center">
                        <div class="whiteText transform-center">
                            <span id="progressAnimatedTextTop" class="featureAnimatedTextSmall w3-animate-right">01/01/2018</span><br>
                            <span id="progressAnimatedTextMiddle" class="featureAnimatedText w3-animate-right">Eat Healthy</span><br>
                            <span id="progressAnimatedTextBottom" class="featureAnimatedTextSmall w3-animate-right">31/12/2018</span><br>
                        </div>
                        <div class="transform-center full-width">
                            <img id="progressImgPie" src="/images/progressImgPie.png" class="featureImg img-fluid" alt="Responsive image">
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <div id="timeImg">
                        <div class="whiteText transform-center">
                            <span id="timeText" class="featureAnimatedText w3-animate-right">00:00:00</span>
                        </div>
                        <div class="transform-center full-width">
                            <img src="/images/timeImgBlank.png" class="featureImg img-fluid w3-animate-right" alt="Responsive image">
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <div id="healthImg">
                        <div class="transform-center full-width">
                            <img src="/images/healthImgBlank.png" class="featureImg img-fluid w3-animate-right" alt="Responsive image">
                        </div>
                        <img src="/images/watch.png" class="featureImg img-fluid" alt="Responsive image">
                    </div>
                    <img id="smartphoneImg" src="/images/smartphoneImg.png" class="featureImg img-fluid" alt="Responsive image">
                </div>

                <!-- Spacing for mobile -->
                <div class="d-md-none row full-width featureMobileMargin">
                    <div class="mx-auto">
                        <a id="dayNightBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/dayNight-01.png"></a>
                        <a id="calendarBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/calendar-01.png"></a>
                        <a id="timerBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/timer-01.png"></a>
                        <a id="progressBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/progress-01.png"></a>
                    </div>
                </div>
                <div class="d-md-none row full-width">
                    <div class="mx-auto">
                        <a id="timeBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/time-01.png"></a>
                        <a id="healthBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/health-01.png"></a>
                        <a id="smartphoneBtnMobile" class="featureButtonLink" ><img class="featureButton" src="/images/smartphone-01.png"></a>
                    </div>
                </div>

                <div class="col-md-4">

                    <!-- Spacing for mobile -->
                    <div class="d-md-none full-width featureMobileMargin"></div>

                    <div id="dayNightTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Day/Night Cycle</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Shows countdown to start and end of day.</p>
                            <p>Tap to effortlessly see the next immediate event on your schedule.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>  
                        </div>
                    </div>
                    <div id="calendarTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Calendar Events</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Multiple countdowns to most important events / goals / look-forwards.</p>
                            <p>Customise countdowns to last from seconds to years.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                    <div id="smartphoneTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Sync from phone</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Simply select an event on your phone calendar and emit syncs automatically via Bluetooth.</p>
                            <p>Works with variety of calendars including google, microsoft, etc.</p>
                            <p>Compatible with iOS and Android.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                    <div id="timerTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Multiple Timers</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Ability to create many timers.</p>
                            <p>Easy timing of countdowns such as breaks, meetings, excercises, etc.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                    <div id="progressTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">See progress</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Set start and end time of a task.</p>
                            <p>Intuitive representation of your progress.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                    <div id="timeTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Standard time</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>Shows current time, if needed.</p>
                            <p>Battery Life lasts up to 2+ days per charge.</p>
                            <p>Magnetic pin charging (2 hours).</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                    <div id="healthTxt" class="full-width">
                        <div class="titleFont subTitleSize blackText">Fitness Tracking</div>
                        <div class="generalFont mediumSize blackText">
                            <br>
                            <p>See daily footsteps as well as your heartrate.</p>
                            <div class="text-center miniTopPad">
                                <button 
                                    class="white-btn btn blackBorder blackText setLength snipcart-add-item"
                                    data-item-id="1"
                                    data-item-name="emit smartwatch 2.0"
                                    data-item-price="119"
                                    data-item-url="https://ownemit.com/"
                                    data-item-description="A productivity smartwatch dedicated to improving your mindset on time. emit shows you countdowns to your most important events, tasks and goals.">
                                        Buy Now
                                </button>
                                <button class="black-btn btn blackBorder whiteText setLength"  data-toggle="modal" data-target="#videoModal">Play Video</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div> 
            </div>

        </div>

        <!-- Spacing for mobile -->
        <div class="d-md-none full-width largeBottomPad"></div>

    </div>

    <div class="section white-bg">
        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">MISSION</div>

        <a class="d-none d-md-block" href="#home">
            <img class="homeButton" src="/images/home-01.png">
        </a>

        <div class="container-fluid">
            <div class="row full-width sectionContainer">
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
                        <a class="licenseLink" href="licenses">Licenses</a>
                    </div>

                    <div class="faded">
                        <a class="licenseLink" href="presskit">Presskit</a>
                    </div>

                    <div class="row iconContainer">

                        <a href="https://www.instagram.com/emitwatch/">
                            <img class="icon" src="/images/insta_logo.png">
                        </a>
                        <a href="https://www.facebook.com/ownemit/">
                            <img class="icon" src="/images/fb_logo.png">
                        </a>
                        <a href="https://twitter.com/emitwatch">
                            <img class="icon" src="/images/twitter_logo.png">
                        </a>

<!--                         <a href="https://emitwatch.myshopify.com/">
                            <img class="icon" src="/images/cart.png">
                        </a> -->

                    </div>

                    <img src="/images/team.jpg" class="teamImg" alt="Responsive image">
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <div class="section black-bg">
        <div class="mx-auto top-align full-width titleFont text-center titleSize whiteText">PATRONS</div>

        <a class="d-none d-md-block" href="#home">
            <img class="homeButton inverted" src="/images/home-01.png">
        </a>

        <div class="container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont mediumSize whiteText text-center">

                    @include('backers')
                     
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>


</div>

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content signupContent">
      <div class="modal-header signupHeader">
        <div class="modal-title titleFont subTitleSize blackText text-center" id="exampleModalLongTitle">You're Not Going to Want to Miss Out on This!</div>
      </div>
      <div class="modal-body generalFont generalSize blackText text-center">
                We are <b> on Kickstarter.com</b>! Enter your email for more information.
      </div>
      <div class="modal-footer signupFooter">
        <div class="row full-width">
            <div class="col-2"></div>
            <div class="col-8">
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
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3c3af586825828c2e88762ca9_456cecaf08" tabindex="-1" value="">
                        </div>
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" class="email-form form-control generalFont" id="mce-EMAIL" placeholder="Email Address" required>
                        </div>
                    </div>

                            <div class="input-group-append miniTopPad flex-center">
                                <input type="submit" value="Keep me updated" name="subscribe" id="mc-embedded-subscribe" class="btn email-btn generalFont">
                            </div>
                </form>
                </div>

                <!--End mc_embed_signup-->
            </div>
            <div class="col-2"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal modal-wide fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered videoDialog" role="document">
    <div class="modal-content videoContent">
      <div class="modal-body">
            <div class="row full-width">
                <div class="col-12 relative-position zeroPad">
                    <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="desktopVideo" controls class="containedVideo">
                        <source src="/images/movieLarge.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
      </div>
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
            showActiveTooltip: true,
            // dragAndMove: false,
            // dragAndMoveKey: 'b3duZW1pdC5jb21fbGJwWkhKaFowRnVaRTF2ZG1VPTJ0cA==',
            // sectionsColor: ['#0a0a0a', '#0a0a0a', '#f5f5f5', '#f5f5f5', '#f5f5f5', '#0a0a0a'],
            // sectionsColor: ['#0a0a0a', '#0a0a0a', '#f5f5f5', '#f5f5f5', '#0a0a0a'],
            // anchors: ['home', 'video', 'features', 'signup', 'mission', 'patrons'],
            anchors: ['home', 'why', 'features', 'mission', 'patrons'],
            scrollOverflow: true,
            verticalCentered:false,
            licenseKey:'OPEN-SOURCE-GPLV3-LICENSE',
        });
        
        // $(".white-btn").click(function() {
        //     //disabling scrolling
        //       $.fn.fullpage.setAllowScrolling(false);
        //       $.fn.fullpage.setKeyboardScrolling(false);
        // });

    });
</script>

<!-- Scripts for snipcart -->
<script type="text/javascript">
    $(document).ready(function() {
        Snipcart.api.cart.currency('gbp');
    });
</script>

<!-- Pop up script -->
<script type="text/javascript">
    $(document).ready(function() {
        if (window.location.href == "https://ownemit.com/?pop" || window.location.href == "http://emit.test/?pop") {
            $('#signupModal').modal('show');
        }
    });
</script>

<!-- N.B. This does NOT work for on the go screen size change -->
<script type="text/javascript">
  $('#videoModal').on('shown.bs.modal', function () {
        $('#desktopVideo')[0].play();
        fbq('track', 'ViewContent');
  });

  $('#videoModal').on('hidden.bs.modal', function () {
        $('#desktopVideo')[0].pause();
  });
</script>

<!-- Script for calculating days until kickstarterCountDown -->
<!-- <script>
$(function() {
    var countDownDate = new Date("October 22, 2018 23:59:59").getTime();
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

<!-- JS for FrontPage Daily CountDown & Features JS for Daily CountDown -->
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
    document.getElementById("frontPageAnimatedText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
    document.getElementById("frontPageAnimatedTextMobile").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
    document.getElementById("dayNightAnimatedText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

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
        document.getElementById("frontPageAnimatedText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        document.getElementById("frontPageAnimatedTextMobile").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        document.getElementById("dayNightAnimatedText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

    }, 1000);

</script>

<!-- JS for Work Video Hours CountDown -->
<script type="text/javascript">

// Get the video element with id="workVideo"
var vid = document.getElementById("workVideo");

// Assign an ontimeupdate event to the video element, and execute a function if the current playback position has changed
vid.ontimeupdate = function() {textChangeFunction()};

function textChangeFunction() {
    if (vid.currentTime <= 4) {
        document.getElementById("workVideoText").innerHTML = "Plan ahead.";
    } else if (vid.currentTime <= 5) {
        document.getElementById("workVideoText").innerHTML = "Report due: 8 hours";
    } else if (vid.currentTime <= 6) {
        document.getElementById("workVideoText").innerHTML = "Report due: 7 hours";  
    } else if (vid.currentTime <= 7) {
        document.getElementById("workVideoText").innerHTML = "Report due: 6 hours";  
    } else if (vid.currentTime <= 8) {
        document.getElementById("workVideoText").innerHTML = "Report due: 5 hours";  
    } else if (vid.currentTime <= 9) {
        document.getElementById("workVideoText").innerHTML = "Report due: 4 hours";  
    } else {
        document.getElementById("workVideoText").innerHTML = "Achieve more.";  
    }
}

</script>


<!-- jQuery for features page -->
<script type="text/javascript">

    $(document).ready(function(){

        // Initial hide of all img + txt except dayNight
        $("#calendarImg").hide();
        $("#smartphoneImg").hide();
        $("#timerImg").hide();
        $("#progressImg").hide();
        $("#timeImg").hide();
        $("#healthImg").hide();

        $("#calendarTxt").hide();
        $("#smartphoneTxt").hide();
        $("#timerTxt").hide();
        $("#progressTxt").hide();
        $("#timeTxt").hide();
        $("#healthTxt").hide();

        document.getElementById("dayNightBtn").style.filter = "brightness(70%)";
        document.getElementById("dayNightBtnMobile").style.filter = "brightness(70%)";

        // Check for mouseover for Desktop
        $('.featureButtonLink').on('click mouseover', function () {

            // Hides all txt/imgs
            hideAll();

            // $(this).find('img').fadeTo(500, 0.5);
            document.getElementById(this.id).style.filter = "brightness(70%)";

            // Check for which button is being hovered on
            // TODO: this can be made more neat?
            if (this.id == "dayNightBtn") {
                $("#dayNightImg").show();
                $("#dayNightTxt").show();
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
            } else if (this.id == "healthBtn") {
                $("#healthImg").show();
                $("#healthTxt").show();
            } else if (this.id == "dayNightBtnMobile") {
                $("#dayNightImg").show();
                $("#dayNightTxt").show();
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
            } else if (this.id == "healthBtnMobile") {
                $("#healthImg").show();
                $("#healthTxt").show();
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
        $("#dayNightImg").hide();
        $("#calendarImg").hide();
        $("#smartphoneImg").hide();
        $("#timerImg").hide();
        $("#progressImg").hide();
        $("#timeImg").hide();
        $("#healthImg").hide();

        // Hide all text
        $("#dayNightTxt").hide();
        $("#calendarTxt").hide();
        $("#smartphoneTxt").hide();
        $("#timerTxt").hide();
        $("#progressTxt").hide();
        $("#timeTxt").hide();
        $("#healthTxt").hide();

        // Reset all buttons
        document.getElementById("dayNightBtn").style.filter = "brightness(100%)";
        document.getElementById("calendarBtn").style.filter = "brightness(100%)";
        document.getElementById("smartphoneBtn").style.filter = "brightness(100%)";
        document.getElementById("timerBtn").style.filter = "brightness(100%)";
        document.getElementById("progressBtn").style.filter = "brightness(100%)";
        document.getElementById("timeBtn").style.filter = "brightness(100%)";
        document.getElementById("healthBtn").style.filter = "brightness(100%)";

        document.getElementById("dayNightBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("calendarBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("smartphoneBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("timerBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("progressBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("timeBtnMobile").style.filter = "brightness(100%)";
        document.getElementById("healthBtnMobile").style.filter = "brightness(100%)";

    }

</script>

<!-- Features jQuery for DayNight page -->
<script type="text/javascript">

    var dayNight = true;
    var dayNightTimeout = null;
    var dayNightInterval = null;

    $(document).ready(function(){

        // Hide calendar, Show dayNight 
        $("#dayNightAnimatedTextCalendar").hide(); 
        $("#dayNightAnimatedTextDaily").show();

        // Setup for a basic countdown timer for to Meeting
        var duration = 11400;
        setInterval(function () {
            duration--;
            document.getElementById('dayNightAnimatedTextMiddle').innerHTML = formatTime(duration);
        }, 1000);

        // Makes dayNight fade in and out with Meeting
        dayNightInterval = setInterval(function () {
            if (dayNight) {
                $("#dayNightAnimatedTextDaily").fadeOut(400);
                $("#dayNightAnimatedTextCalendar").fadeIn(400);
            } else {
                $("#dayNightAnimatedTextCalendar").fadeOut(400);
                $("#dayNightAnimatedTextDaily").fadeIn(400);
            }
            dayNight=!dayNight;
        }, 3000);


        // Reset Interval when mouseover happens
        $('.featureButtonLink').on('click mouseover', function () {

            // Clear timers
            clearInterval(dayNightTimeout);
            clearInterval(dayNightInterval);

            if (this.id == "dayNightBtn" || this.id == "dayNightBtnMobile") {

                setTimeout(function () {
                    document.getElementById("dayNightAnimatedTextMiddle").classList.remove("w3-animate-right");
                    document.getElementById("dayNightAnimatedText").classList.remove("w3-animate-right");
                    document.getElementById("dayNightAnimatedTextTop").classList.remove("w3-animate-right");
                }, 500);

                dayNightTimeout = setTimeout(function () {
                    
                    $("#dayNightAnimatedTextDaily").fadeOut(400);
                    $("#dayNightAnimatedTextCalendar").fadeIn(400);

                    // Makes dayNight fade in and out with Meeting
                    dayNightInterval = setInterval(function () {
                        if (dayNight) {
                            $("#dayNightAnimatedTextDaily").fadeOut(400);
                            $("#dayNightAnimatedTextCalendar").fadeIn(400);
                        } else {
                            $("#dayNightAnimatedTextCalendar").fadeOut(400);
                            $("#dayNightAnimatedTextDaily").fadeIn(400);
                        }
                        dayNight=!dayNight;
                    }, 3000);

                }, 1000);

            } else {
                document.getElementById("dayNightAnimatedTextMiddle").classList.add("w3-animate-right");
                document.getElementById("dayNightAnimatedText").classList.add("w3-animate-right");
                document.getElementById("dayNightAnimatedTextTop").classList.add("w3-animate-right");
            }

        });

    });

    function formatTime(seconds) {
        var h = Math.floor(seconds / 3600),
            m = Math.floor(seconds / 60) % 60,
            s = seconds % 60;
        if (h < 10) h = "0" + h;
        if (m < 10) m = "0" + m;
        if (s < 10) s = "0" + s;
        return h + ":" + m + ":" + s;
    }

</script>

<!-- Features jQuery for Calendar page -->
<script type="text/javascript">

    $(document).ready(function(){

        count = 0;
        wordsArrayTop = ["Date Night", "Exams", "Report Due"];
        wordsArrayMiddle = ["3 Days", "1 Month", "1 Day"];
        wordsArrayBottom = ["7 Hours", "3 Days", "3 Hours"];

        var calendarInterval = null;

        $('.featureButtonLink').on('click mouseover', function () {

            // Clear timer
            clearInterval(calendarInterval);

            if (this.id == "calendarBtn" || this.id == "calendarBtnMobile") {

                calendarInterval  =  setInterval(function () {

                    count++;

                    $("#calendarAnimatedTextTop").hide(1);
                    $("#calendarAnimatedTextTop").text(wordsArrayTop[count % wordsArrayTop.length]).show(1);

                    $("#calendarAnimatedTextMiddle").hide(1);
                    $("#calendarAnimatedTextMiddle").text(wordsArrayMiddle[count % wordsArrayTop.length]).show(1);

                    $("#calendarAnimatedTextBottom").hide(1);
                    $("#calendarAnimatedTextBottom").text(wordsArrayBottom[count % wordsArrayTop.length]).show(1);

                }, 2000);

            }

        });

    });

</script>

<!-- Features JS for Timer -->
<script type="text/javascript">

    var timerTimeout = null;
    var timerInterval = null;

    $(document).ready(function(){

        $('.featureButtonLink').on('click mouseover', function () {

            // Clear timers
            clearInterval(timerTimeout);
            clearInterval(timerInterval);

            if (this.id == "timerBtn" || this.id == "timerBtnMobile") {

                // Hide stop image + text, Show timer start 
                $("#timerImgStop").hide();
                $("#timerAnimatedTextMiddle").hide(); 
                $("#timerImgStart").show();

                // Reset timer before starting 'animation'
                $('#timerAnimatedTextMiddle').text('09:59');

                timerTimeout = setTimeout(function () {

                    $("#timerImgStart").hide();
                    $("#timerImgStop").show();
                    $("#timerAnimatedTextMiddle").show();

                    // Setup for a basic jquery countdown timer (non function) with global setInteval
                    duration = 598;
                    var timer = duration, minutes, seconds;
                    timerInterval  = setInterval(function () {

                        minutes = parseInt(timer / 60, 10);
                        seconds = parseInt(timer % 60, 10);

                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        $('#timerAnimatedTextMiddle').text(minutes + ":" + seconds);

                        if (--timer < 0) {
                            timer = duration;
                        }

                    }, 1000);

                }, 1000);

            }

        });

    });

</script>

<!-- Features JS for Progress -->
<script type="text/javascript">

    var progressTimeout = null;
    var progressInterval = null;

    $(document).ready(function(){

        $('.featureButtonLink').on('click mouseover', function () {

            // Clear timer
            clearInterval(progressTimeout);
            clearInterval(progressInterval);

            if (this.id == "progressBtn" || this.id == "progressBtnMobile") {

                // Hide stop image + text, Show timer start 
                $("#progressImgPie").hide();
                $("#progressAnimatedTextTop").show();
                $("#progressAnimatedTextMiddle").show();
                $("#progressAnimatedTextBottom").show();

                setTimeout(function () {
                    document.getElementById("progressAnimatedTextTop").classList.remove("w3-animate-right");
                    document.getElementById("progressAnimatedTextMiddle").classList.remove("w3-animate-right");
                    document.getElementById("progressAnimatedTextBottom").classList.remove("w3-animate-right");
                }, 500);

                progressTimeout = setTimeout(function () {

                    var progress = true;
                    
                    $("#progressAnimatedTextTop").fadeOut(400);
                    $("#progressAnimatedTextMiddle").fadeOut(400);
                    $("#progressAnimatedTextBottom").fadeOut(400);
                    $("#progressImgPie").fadeIn(400);

                    progressInterval = setInterval(function () {
                        if (progress) {
                            $("#progressImgPie").fadeOut(400);
                            $("#progressAnimatedTextTop").fadeIn(400);
                            $("#progressAnimatedTextMiddle").fadeIn(400);
                            $("#progressAnimatedTextBottom").fadeIn(400);
                        } else {
                            $("#progressAnimatedTextTop").fadeOut(400);
                            $("#progressAnimatedTextMiddle").fadeOut(400);
                            $("#progressAnimatedTextBottom").fadeOut(400);
                            $("#progressImgPie").fadeIn(400);
                        }
                        progress=!progress;
                    }, 3000);

                }, 1000);

            } else {
                document.getElementById("progressAnimatedTextTop").classList.add("w3-animate-right");
                document.getElementById("progressAnimatedTextMiddle").classList.add("w3-animate-right");
                document.getElementById("progressAnimatedTextBottom").classList.add("w3-animate-right");
            }

        });
    });
    
</script>

<!-- Features JS for Time -->
<script type="text/javascript">

    // Blank string
    var string = "";
    // Initial call
    // Get date today, the subtract to get time to 24:00:00 (theoretical midnight)
    var now = new Date();
    var seconds = now.getSeconds();
    var minutes = now.getMinutes();
    var hours = now.getHours();

    // Makes sure time is in format of hh:mm:ss
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}

    // Write time in hh:mm:ss format to element with #time
    document.getElementById("timeText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

    // function to repeat every second
    window.setInterval(function(){

        var now = new Date();
        var seconds = now.getSeconds();
        var minutes = now.getMinutes();
        var hours = now.getHours();

        // makes sure time is in format of hh:mm:ss
        if (hours   < 10) {hours   = "0"+hours;}
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}

        // write time in hh:mm:ss format to element with #time
        document.getElementById("timeText").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

    }, 1000);

</script>

@endsection
