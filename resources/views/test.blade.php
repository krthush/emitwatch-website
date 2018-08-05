@extends('layouts.master')

@section('content')
<!-- Content-->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal modal-wide fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
            <div class="row full-width">
                <div class="col-1"></div>
                <div class="col-10">
                    <video id="desktopVideo" controls class="containedVideo">
                        <source src="/images/movieLarge.mp4" type="video/mp4">
                    </video>
                    <div class="full-width"></div>
                </div>
                <div class="col-1">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  // when .modal-wide opened, set content-body height based on browser height; 200 is appx height of modal padding, modal title and button bar

  $(".modal-wide").on("show.bs.modal", function() {
    var height = $(window).height() - 200;
    $(this).find(".modal-body").css("max-height", height);
  });
</script>

@endsection