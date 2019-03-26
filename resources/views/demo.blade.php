@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="full-height sideBarContent">

    <nav class="navbar navbar-expand-md navbar-dark fixed-left flex-center">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExampleDefault" style="">
            <ul class="navbar-nav" id="sideBarButtonList">
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton active" src="/images/home.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/insights.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/trending.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/target.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/report.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/add_person.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/settings.png">
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row full-height full-width flex-center">

            <img id="mainDemoImage" class="full-width" src="/images/website demo/week overview cropped base.png" usemap="#Map">

            <map name="Map" id="Map">
                <area shape="rect" coords="329,500,461,550" onmouseover="work__1_in()" onmouseout="map_out()" onclick="social_media_1_click()"/>
                <area shape="rect" coords="329,556,461,548" onmouseover="social_media_1_in()" onmouseout="map_out()" onclick="social_media_1_click()"/>
                <area shape="rect" coords="328,581,460,557" onmouseover="work_1_in()" onmouseout="map_out()" />
                <area shape="rect" coords="329,587,460,580" onmouseover="social_media_2_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,611,460,587" onmouseover="work_2_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,619,460,610" onmouseover="social_media_3_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,627,459,619" onmouseover="work_3_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,644,460,626" onmouseover="meeting_1_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,845,460,644" onmouseover="personal_1_in()" onmouseout="map_out()" />
                <area shape="rect" coords="328,870,460,845" onmouseover="sleep_1_in()" onmouseout="map_out()" />
            </map>    
    </div>

</div>

<script type="text/javascript">
function map_out() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped base.png";
}
function work__1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped work -1.png";
}
function social_media_1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped social media 1.png";
}
function work_1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped work 1.png";
}
function social_media_2_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped social media 2.png";
}
function work_2_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped work 2.png";
}
function social_media_3_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped social media 3.png";
}
function work_3_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped work 3.png";
}
function meeting_1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped meeting 1.png";
}
function personal_1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped personal 1.png";
}
function sleep_1_in() {
  document.getElementById("mainDemoImage").src = "/images/website demo/week overview cropped sleep 1.png";
}
function social_media_1_click() {
    window.location.replace("http://emit.test/analytics/demo2");
}
</script>

<script type="text/javascript">
    // Get the container element
    var btnContainer = document.getElementById("sideBarButtonList");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("sideBarButton");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
</script>

@endsection