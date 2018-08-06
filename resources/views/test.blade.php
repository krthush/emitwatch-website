@extends('layouts.master')

@section('content')
<!-- Content-->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#videoModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal modal-wide fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
            <div class="row full-width">
                <div class="col-12">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <video id="desktopVideo" controls class="containedVideo">
                        <source src="/images/movieLarge.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#videoModal').on('shown.bs.modal', function () {
    $('#desktopVideo')[0].play();
  })
  $('#videoModal').on('hidden.bs.modal', function () {
    $('#desktopVideo')[0].pause();
  });
</script>

@endsection