<!doctype html>
<html lang="en">

<head>

@include('layouts.head')

</head>

<!-- FullPage JS setup -->
<script>
    $(document).ready(function() {
        $('#fullpage').fullpage({
            loopBottom: true,
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,
            navigation: true,
            navigationPosition: 'right',
            showActiveTooltip: true,
            dragAndMove: true,
            fadingEffectKey: b3duZW1pdC5jb21fbGJwWkhKaFowRnVaRTF2ZG1VPTJ0cA==,
            sectionsColor: ['#0a0a0a', '#f5f5f5', '#0a0a0a', '#f5f5f5'],
        });
    });
</script>

<body>

    @yield('content')


</body>
</html>
