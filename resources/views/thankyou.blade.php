@extends('layouts.master')

@section('content')
<!-- Content-->

<script type="text/javascript">
    fbq('track', 'CompleteRegistration');
</script>

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">
        <div class="d-none d-md-block mx-auto top-align full-width titleFont text-center titleSize blackText">THANK YOU</div>
        <div class="d-md-none mx-auto top-align full-width titleFont text-center titleSizeMobile blackText">THANK YOU</div>

        <div class="d-none d-md-block container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-center">

                    <b>Subscription confirmed.</b><br>
                    <a class="licenseLink faded" href="\">Return to website</a>
                     
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="d-md-none container-fluid">
            <div class="row full-width sectionContainerMobile largeBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText text-center">

                    <b>Subscription confirmed.</b><br>
                    <a class="licenseLink faded" href="\">Return to website</a>

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