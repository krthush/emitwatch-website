<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<!-- Custom CSS -->
<link href="/css/styles.css" rel="stylesheet" type="text/css">

<!-- fullPage plugin by Alvaro Trigo CSS -->
<link href="/css/jquery.fullpage.min.css" rel="stylesheet" type="text/css">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<!-- fullPage plugin by Alvaro Trigo CSS -->
<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
<script src="/js/jquery.fullpage.min.js"></script>

<!-- Drag N Move Extension -->
<script src="/js/fullpage.dragAndMove.min.js"></script>
<script src="/js/jquery.fullpage.extensions.min.js"></script>

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

    // If the count down is finished, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("kickstarterCountDown").innerHTML = "EXPIRED";
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