<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <style>

            html, body {
              background: url(/images/background.jpg) no-repeat center center fixed; 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 15vw;
                font-family:calibri; 
                color: black;
                -webkit-box-reflect: below -12.5vw -webkit-gradient(linear, right top, right bottom, from(transparent), color-stop(40%, transparent), to(rgba(255, 255, 255, 0.2)));
            }

            .container-fluid {
                padding: 0px;
            }

            #input-bar {
                margin-top: -4vw;
            }

            #input-bar_small_screen {
                margin-top: 6vh;
            }

        </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- fullPage plugin by Alvaro Trigo CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/jquery.fullpage.css" />

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- fullPage plugin by Alvaro Trigo CSS -->
    <!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/vendors/scrolloverflow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.6/jquery.fullpage.js"></script>

    <!-- Responsive Bootstrap Toolkit -->
    <script src="/js/bootstrap-toolkit.js"></script>

    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors:['firstPage', 'secondPage'],
                loopBottom: true,
                keyboardScrolling: true,
                animateAnchor: true,
                recordHistory: true,
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['Watch', 'Subscribe'],
            });
        });
    </script>

    <title>emit</title>

</head>
<body>
    <div class="container-fluid d-none d-lg-block d-xl-block">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <div class="flex-center position-ref full-height">
                    <img src="/images/watch.png" id="image" class="flex-center img-fluid" alt="Responsive image">
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="flex-center position-ref full-height">
                    <div class="content">

                        <div class="title" id="time"></div>

                        <div class="row" id="input-bar">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form  method="POST" action="{{ route('subscribe') }}">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                      <input name="email" type="email" class="form-control" placeholder="Please enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                      </div>
                                    </div>
                                </form>
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
                            </div>
                            <!-- This is a test for githubs -->
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <div class="container-fluid d-lg-none d-xl-none" id="fullpage">
        <div class="row section" data-anchor="slide1">
            <div class="col">
                <div class="flex-center position-ref full-height">
                    <img src="/images/watch.png" id="image" class="flex-center img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="row section" data-anchor="slide2">
            <div class="col">
                <div class="flex-center position-ref full-height">
                    <div class="content">

                        <div class="title" id="time_small_screen"></div>

                        <div class="row" id="input-bar_small_screen">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form  method="POST" action="{{ route('subscribe') }}">
                                    {{ csrf_field() }}
                                    <div class="input-group mb-3">
                                      <input name="email" type="email" class="form-control" placeholder="Please enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">Subscribe</button>
                                      </div>
                                    </div>
                                </form>
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
                            </div>
                            <!-- This is a test for githubs -->
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
    </div>

    <script>
        // Wrap everything in an IIFE
        (function($, viewport){

             // Execute only after document has fully loaded
            $(document).ready(function() {
                if( viewport.is('xl') ) {
                    document.getElementById("fp-nav").style.display = "none";
                } else if ( viewport.is('lg') ) {
                    document.getElementById("fp-nav").style.display = "none";
                } else if ( viewport.is('md') ) {
                    document.getElementById("fp-nav").style.display = "block";
                } else if ( viewport.is('sm') ) {
                    document.getElementById("fp-nav").style.display = "block";
                } else if ( viewport.is('xm') ) {
                    document.getElementById("fp-nav").style.display = "block";
                }
            });

            // Execute code each time window size changes
            $(window).resize(
                viewport.changed(function() {
                    if( viewport.is('xl') ) {
                        document.getElementById("fp-nav").style.display = "none";
                    } else if ( viewport.is('lg') ) {
                        document.getElementById("fp-nav").style.display = "none";
                    } else if ( viewport.is('md') ) {
                        document.getElementById("fp-nav").style.display = "block";
                    } else if ( viewport.is('sm') ) {
                        document.getElementById("fp-nav").style.display = "block";
                    } else if ( viewport.is('xm') ) {
                        document.getElementById("fp-nav").style.display = "block";
                    }
                })
            );

        })(jQuery, ResponsiveBootstrapToolkit);        
    </script>

    <script type="text/javascript">
        // blank string
        var string = "";
        // initial call
        // get date today, the subtract to get time to 24:00:00 (theoretical midnight)
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

</body>
</html>