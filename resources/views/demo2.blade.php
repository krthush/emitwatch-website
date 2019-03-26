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
                    <a class="" href="#" onclick="home_click()">
                        <img class="sideBarButton active" src="/images/home.png">
                    </a>
                </li>
                <li class="nav-item my-3">
                    <a class="" href="#" onclick="insights_click()">
                        <img class="sideBarButton" src="/images/insights.png">
                    </a>
                </li>
                <li class="nav-item my-3" onclick="adherence_predicted_click()">
                    <a class="" href="#">
                        <img class="sideBarButton" src="/images/trending.png">
                    </a>
                </li>
                <li class="nav-item my-3" onclick="adherence_optimized_click()">
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

            <img id="mainDemoImage" class="full-width" src="/images/website demo/week overview specific segment cropped.png">  
    </div>

</div>

<script type="text/javascript">
function home_click() {
    window.location.replace("http://emit.test/analytics/demo");
}
function insights_click() {
    document.getElementById("mainDemoImage").src = "/images/website demo/week summary cropped.png";
}
function adherence_predicted_click() {
    document.getElementById("mainDemoImage").src = "/images/website demo/week adherence predicted cropped.png";
}
function adherence_optimized_click() {
    document.getElementById("mainDemoImage").src = "/images/website demo/week adherence optimized cropped.png";
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