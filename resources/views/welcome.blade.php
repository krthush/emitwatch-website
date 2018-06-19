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

<script>
// Set the date we're counting down to
var countDownDate = new Date("July 31, 2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

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

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("kickstarterCountDown").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">
        <div class="row">
            <div class="col-sm-6">                
                <div class="flex-center position-ref full-height">
                    <img src="/images/rightfacing_countdown_comp.png" class="flex-center img-fluid" alt="Responsive image">
                </div>
            </div>           
            <div class="col-sm-5 frontPageText">
                <div class="vertical-align">
                    <div class="textContainer">
                        <div class="taglineText whiteText">Own time.</div>
                        <div class="taglineText whiteText">Own emit.</div>    
                    </div>
                </div>

                <div class="bottom-align">
                    <div class="textContainer"> 
                        <div class="sublineText whiteText">
                            Kickstarter Launch:
                        </div>
                        <div class="sublineText whiteText">
                            <span id="kickstarterCountDown"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="headText blackText">FEATURES</div>
        <div class="row sectionContainter">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 mediumText">
                <ul style="list-style-type:square">
                  <li>A different way of looking at time. In reverse.</li>
                  <li>Shows a countdown to start and end of day.</li>
                  <li>Multiple countdowns to most important events/goals/look-forwards.</li>
                  <li>Customise countdowns to last from seconds to years.</li>
                  <li>Simply select an event on your phone calendar and emit syncs automatically.</li>
                  <li>Shows current time, if needed.</li>
                  <li>Minimal and distinct design.</li>
                </ul>       
            </div>
            <div class="col-lg-5">
                <div class="position-ref full-height">
                    <img src="/images/rightfacing_emit_comp.png" class="flex-center img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

    <div class="section">
        <div class="headText blackText">PROGRESS</div>
        <div class="row sectionContainter">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 mediumText blackText">

                <p>We are currently working on our prototypes and will be fund-raising on Kickstarter.</p>

                <p>The Kickstarter campaign launches on 31/07/18.</p>

                <p>To keep up-to-date with more information on emit and the Kickstarter campaign, please register your email.</p>

                <div class="row" id="email-bar">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        
                        <form  method="POST" action="{{ route('subscribe') }}">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                              <input name="email" type="email" id="email-form" class="form-control" placeholder="Please enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button id="email-btn" class="btn" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <p>You can contact us at <a href="mailto:ownemit@gmail.com">ownemit@gmail.com</a>, and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-sm-2"></div>
        </div>   
        <img src="/images/sideup_life_comp.png" class="img-fluid bottomImage" alt="Responsive image"> 
    </div>

    <div class="section">
        <div class="headText blackText">MISSION</div>
        <div class="row sectionContainter">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 generalText text-justify">
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
