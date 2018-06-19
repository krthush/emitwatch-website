@extends('layouts.fullPage')

@section('content')
<!-- Content-->

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <ul style="list-style: none;">
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">
        <div class="d-md-none full-width top-center-align">
            <div class="titleFont titleSizeMobile whiteText">
                <div>Own time.</div>
                <div>Own emit.</div>
            </div>
        </div>
        <div class="row full-height">
            <div class="col-md-6 flex-center">
                <img src="/images/rightfacing_countdown_comp.png" class="img-fluid flex-center" alt="Responsive image">
            </div>           
            <div class="col-md-5 d-none d-md-block frontPageText">
                <div class="full-width vertical-center-align">
                    <div class="full-width titleFont titleSize whiteText">
                        <div>Own time.</div>
                        <div>Own emit.</div>    
                    </div>
                </div>

                <div class="full-width bottom-center-align">
                    <div class="full-width titleFont sublineSize whiteText"> 
                        <div>Kickstarter Launch: </div>
                        <div><span id="kickstarterCountDown"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-none full-width bottom-center-align">
            <div class="titleFont sublineSizeMobile whiteText">
                <div>Kickstarter Launch: </div>
                <div><span id="kickstarterCountDownMobile"></span></div>
            </div>
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
        <div class="d-none d-md-block top-center-align titleFont titleSize blackText">PROGRESS</div>
        <div class="d-md-none top-center-align titleFont titleSizeMobile blackText">PROGRESS</div>

        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 generalFont mediumSize blackText">

                    <p>We are currently working on our prototypes and will be fund-raising on Kickstarter.</p>

                    <p>The Kickstarter campaign launches on 31/07/18.</p>

                    <p>You can contact us at <a href="mailto:ownemit@gmail.com">ownemit@gmail.com</a>, and we'll get back to you as soon as possible.</p>

                    <p>To keep up-to-date with more information on emit and the Kickstarter campaign, please register your email.</p>

                    <div class="row email-bar">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            
                            <form  method="POST" action="{{ route('subscribe') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                  <input name="email" type="email" class="email-form form-control" placeholder="Please enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button class="email-btn btn" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <img src="/images/sideup_life_comp.png" class="bottomImage img-fluid" alt="Responsive image">
            </div>   
        </div>
        <div class="d-md-none container-fluid">
            <div class="row full-width sectionContainerMobile">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 generalFont mediumSizeMobile blackText">

                    <p>We are currently working on our prototypes and will be fund-raising on Kickstarter.</p>

                    <p>The Kickstarter campaign launches on 31/07/18.</p>

                    <p>You can contact us at <a href="mailto:ownemit@gmail.com">ownemit@gmail.com</a>, and we'll get back to you as soon as possible.</p>

                    <p>To keep up-to-date with more information on emit and the Kickstarter campaign, please register your email.</p>

                    <div class="row email-bar">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            
                            <form  method="POST" action="{{ route('subscribe') }}">
                                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                  <input name="email" type="email" class="email-form form-control" placeholder="Please enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button class="email-btn btn" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
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

                </div>
                <div class="col-sm-2"></div>  
            </div>
        </div>
        <div class="d-md-none container-fluid">
            <div class="row full-width sectionContainerMobile">
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
        </div>
    </div>
</div>