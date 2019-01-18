@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad" id="fullpage">

    <div class="section">

        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">RESOURCES</div>

        <div class="container-fluid miniTopPad">
            <div class="row full-width sectionContainer">
                <div class="col-sm-4 mx-auto generalFont blackText text-center">
                    <div class="mediumSize">
                        <b>Media Kit</b><br>                        
                    </div>
                    <div class="generalSize">
                        <a class="licenseLink faded" href="https://1drv.ms/b/s!AgYYSjzpoQzmihvsnncAhx6oIfep" target="_blank">Download - OneDrive</a>    
                    </div>                     
                </div>
            </div>
            <div class="row full-width sectionContainer">
                <div class="col-sm-4 mx-auto generalFont blackText text-center">
                    <div class="mediumSize">
                        <b>Images</b><br>                        
                    </div>
                    <div class="generalSize">
                        <a class="licenseLink faded" href="https://1drv.ms/f/s!AgYYSjzpoQzmmRL07tWHCg5MSDel" target="_blank">Download - OneDrive</a>    
                    </div>                     
                </div>
            </div>
            <div class="row full-width sectionContainer">
                <div class="col-sm-4 mx-auto generalFont blackText text-center">
                    <div class="mediumSize">
                        <b>Pitch Deck</b><br>                        
                    </div>
                    <div class="generalSize">
                        <a class="licenseLink faded" href="https://1drv.ms/b/s!AgYYSjzpoQzmpFmd4SGe5giBO8b_" target="_blank">Download - OneDrive</a>    
                    </div>                     
                </div>
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