@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">

        <div class="mx-auto top-align full-width titleFont text-center titleSize whiteText">emit  |  time</div>

        <div class="slide">

            <div class="layer flex-center">
                <div class="flex-center full-height full-width text-center">
                    <div class="titleFont">
                        <div class="subTitleSize whiteText">ME2 Design Week First Hand-In</div>
                        <div class="sublineSize whiteText"><span id="eventCountDown" ></span></div>
                        <div class="subTitleSize whiteText"><span id="eventCountDownSubline" ></span></div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="bringToFront mx-auto bottom-align full-width titleFont text-center mediumSize whiteText"><a href="https://www.indiegogo.com/projects/emit-world-s-first-productivity-smartwatch/#/">Stay on top of deadlines with emit</a></div>

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
            sectionsColor: ['#0a0a0a'],
            anchors: ['mission'],
            scrollOverflow: true,
            verticalCentered:false,
            licenseKey:'OPEN-SOURCE-GPLV3-LICENSE',
        });
    });
</script>

<!-- Script for calculating days until eventCountDown -->
<script>
$(function() {

    // Blank string
    var string = "";

    var countDownDate = new Date("February 8, 2019 18:00:00").getTime();
    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Makes sure time is in format of hh:mm:ss
    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}

    if (days >= 1) {
        // Display the result in the element with id="eventCountDown"
        document.getElementById("eventCountDown").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        document.getElementById("eventCountDownSubline").innerHTML = days + " Days";

    } else {
        // Display the result in the element with id="eventCountDown"
        document.getElementById("eventCountDown").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        document.getElementById("eventCountDownSubline").innerHTML = "";

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("eventCountDown").innerHTML = "DUE!";
            document.getElementById("eventCountDownSubline").innerHTML = "";
        }
    }

    // function to repeat every second
    window.setInterval(function(){

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Makes sure time is in format of hh:mm:ss
        if (hours   < 10) {hours   = "0"+hours;}
        if (minutes < 10) {minutes = "0"+minutes;}
        if (seconds < 10) {seconds = "0"+seconds;}

        // Display the result in the element with id="eventCountDown"
        document.getElementById("eventCountDown").innerHTML = string.concat(hours, ":", minutes, ":", seconds);
        // document.getElementById("eventCountDownMobile").innerHTML = string.concat(hours, ":", minutes, ":", seconds);

        // If the count down is finished, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("eventCountDown").innerHTML = "DUE!";
            // document.getElementById("eventCountDownMobile").innerHTML = "DUE!";
        }

    }, 1000);
});
</script>

@endsection