@extends('layouts.master')

@section('content')
<!-- Content-->

<div class="container-fluid zeroPad" id="fullpage">

    <div class="col-sm-4 mx-auto generalFont blackText text-center">

        <legend>Live Demo</legend>
        <!-- Chart One -->
        <div class="chart-navigator clearfix" id="chart-navigator-1">
            <div class="btn-group" id="pie-navigator">
                <a href="#" class="btn" id="btnRoot" title="Go back to root" rel="tooltip"><i class="icon-double-angle-left"></i></a>
                <a href="#" class="btn" id="btnLevelUp" title="Go up one level" rel="tooltip"><i class="icon-angle-left"></i></a>
            </div>
            <ul class="breadcrumb"></ul>
        </div>
        <div class="row-fluid">
          <div class="span6">
            <div id="hierarchical-pie-demo-1" class="hierarchical-pie"></div>
          </div>
          <div class="span6 pt-4">
            <div id="pie-chart-legend-1">
                <table class="table table-condensed table-legend">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Category</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <script id="rowTemplate" type="text/template">
                    <td class="color-cell">
                        <span class="cat-color" style="background: @{{color}};"></span>
                    </td>
                    <td>
                    @{{#isDirect}}
                        <span title="Directly in this category" rel="tooltip"><i class="icon-info"></i></span>
                    @{{/isDirect}}
                    @{{name}}
                    </td>
                    <td class="cost">@{{time}}</td>
                </script>

            </div>
          </div>
        </div>

    </div>
</div>

<!-- d3-hierarchical-pie setup -->
<script src="/js/d3.min.js"></script>
<script src="/js/mustache.js"></script>
<script src="/js/hierarchical-pie.js"></script>

<script type="text/javascript">
  // Chart 1
  $(function() {
    var holder = $('#hierarchical-pie-demo-1');
    holder.empty();

    $.getJSON('/sample-data-2.json', function(data) {
      new HierarchicalPie({
        chartId : '#hierarchical-pie-demo-1',
        data : data,
        legendContainer : '#pie-chart-legend-1',
        navigation      : '#chart-navigator-1'
      });
    });

    window.prettyPrint && prettyPrint();
  });

</script>

<!-- FullPage JS setup -->
<!-- <script type="text/javascript">
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
</script> -->

@endsection