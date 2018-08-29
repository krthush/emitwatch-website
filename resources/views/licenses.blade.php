@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">
        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">LICENSES</div>

        <a class="d-none d-md-block" href="/">
            <img class="homeButton" src="/images/home-01.png">
        </a>

        <div class="container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-justify">

                    <b>Licenses:</b> <br>
                    day and night by Nerea Martínez Orduña from the Noun Project <br>
                    Smartphone by Naveen from the Noun Project <br>
                    timer by Adrien Coquet from the Noun Project <br>
                    Watch by Manasa from the Noun Project <br>
                    Calendar by Storm Icons from the Noun Project <br>
                    Battery by Gregor Cresnar from the Noun Project <br>
                    timer by Anusha Narvekar from the Noun Project <br>
                    Time by arjuazka from the Noun Project <br>
                    shopping by Adrien Coquet from the Noun Project <br>
                    Home by gatot supriyadi from the Noun Project <br>
                    Heart by Gregor Cresnar from the Noun Project <br>
                    steps by Tobias Strohbach from the Noun Project <br>
                    <a class="licenseLink" href="https://www.youtube.com/watch?v=LHFXQ7Y2cos&index=5&list=PLESp7SFlcw7zHMdBttXsvWSQ1_Hi5Bt59&t=0s">Morning Walk</a> by Jonny Easton <br>
                     
                </div>
                <div class="col-sm-2"></div>
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
            sectionsColor: ['#f5f5f5'],
            anchors: ['mission'],
            scrollOverflow: true,
            verticalCentered:false,
            licenseKey:'OPEN-SOURCE-GPLV3-LICENSE',
        });
    });
</script>

@endsection