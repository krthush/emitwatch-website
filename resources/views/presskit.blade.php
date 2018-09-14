@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">

        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">PRESS KIT</div>

        <div class="container-fluid miniTopPad">
            <div class="row full-width sectionContainer mediumBottomPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 generalFont blackText text-center">
                    <div class="mediumSize">
                        <b>Media Kit</b><br>                        
                    </div>
                    <div class="generalSize">
                        <a class="licenseLink faded" href="https://1drv.ms/b/s!AgYYSjzpoQzmihvsnncAhx6oIfep" target="_blank">Download - OneDrive</a>    
                    </div>                     
                </div>
                <div class="col-sm-4 generalFont blackText text-center">
                    <div class="mediumSize">
                        <b>High-Res Images</b><br>                        
                    </div>
                    <div class="generalSize">
                        <a class="licenseLink faded" href="https://1drv.ms/f/s!AgYYSjzpoQzmmRL07tWHCg5MSDel" target="_blank">Download - OneDrive</a>    
                    </div>                     
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