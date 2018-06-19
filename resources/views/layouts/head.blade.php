<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS -->

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<!-- Custom CSS -->
<link href="/css/styles.css" rel="stylesheet" type="text/css">
<!-- fullPage plugin by Alvaro Trigo CSS -->
<link href="/css/jquery.fullpage.min.css" rel="stylesheet" type="text/css">

<!-- JAVASCRIPTS -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- fullPage plugin by Alvaro Trigo CSS -->
<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/scrolloverflow.min.js"></script>
<!-- Drag N Move Extension -->
<script src="/js/fullpage.dragAndMove.min.js"></script>
<script src="/js/jquery.fullpage.extensions.min.js"></script>

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
            sectionsColor: ['#0a0a0a', '#f5f5f5', '#f5f5f5', '#f5f5f5'],
            scrollOverflow: true,
            verticalCentered:false,
        });
    });
</script>


<!-- <script src="/js/jquery.fullpage.min.js"></script> -->



<!-- Script for calculating days until kickstarterCountDown -->
<script>
$(function() {
    var countDownDate = new Date("July 31, 2018 23:59:59").getTime();
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
</script>

<!-- Hotjar Tracking Code for https://ownemit.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:796145,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>

<title>emit</title>