@extends('layouts.master')

@section('content')
<!-- Content-->

<script type="text/javascript">
    fbq('track', 'CompleteRegistration');
</script>

<div class="container-fluid zeroPad">

    <div class="section">
        <div class="mx-auto top-align full-width titleFont text-center titleSize blackText">THANK YOU</div>

        <div class="container-fluid">
            <div class="row full-width sectionContainer mediumBottomPad">
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

@endsection