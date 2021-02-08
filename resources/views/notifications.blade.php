@if ($message = Session::get('success'))
    <div class="modal fade" tabindex="-1" id="myModalAlertSuccess">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contacto</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>{{ $message }}</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-about" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myModalAlertSuccess').modal('show');
        });
    </script>
@endif