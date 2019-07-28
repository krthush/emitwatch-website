@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad">

    <div class="section">

        <div class="container-fluid">
            <div class="row full-width miniTopPad">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 generalFont generalSize blackText">

                <h1>INSTRUCTIONS</h1>
                <p>Updated as of 15 June 2019</p>
                <ol>
                <li>Charge emit for 2 hours</li>
                <li>Press and hold power button (on side of watch) for 5 seconds to switch watch on.</li>
                <li>Emit has 3 screen levels (top: battery level and normal time ; middle: countdowns ; bottom: myemit and Bluetooth options, etc.)</li>
                <li>Scroll to bottom level and swipe the Bluetooth symbol to go to power symbol, and swipe again to go to Android symbol. If you have an iPhone, tap the Android symbol to switch to iOS mode. Otherwise stay in Android mode. </li>
                            
                </ol>

               <p><strong><em>For Android users:</em></strong></p>
               
               <ol>
                <li>Make sure Bluetooth symbol is turned on (white), and download emit watch app from PlayStore. In the app, select “find my emit” on the top left of the home page. The app will start looking for Bluetooth devices, and click on “emit” when it appears. </li>
                <li>Any change you now make to the countdowns on the phone app will reflect on the emit watch by Bluetooth syncing. </li>
                         
                </ol>
               
                <p><strong><em>For iOS users:</em></strong></p>

                <ol>
                <li>Make sure Wifi symbol (in the bottom level of emit watch) is turned on (white) and download the emit watch app from AppStore.</li>
                <li>Click on “Sync” on the phone app, and then after making all desired changes click "sync now" again so the watch reflects the phone app countdowns. </li>
                         
                </ol>
               
               <p>Please contact team@ownemit.com for any further help. </p>
               
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</div>

@endsection
