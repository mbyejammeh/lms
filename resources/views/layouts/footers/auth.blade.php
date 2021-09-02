<footer class="footer">
  <div class="container-fluid">
    <div class="copyright float-center">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, Developed by <a href="https://www.moici.gov.gm" target="_blank">Government</a> Application Developer Team.
    </div>
  </div>
</footer>

@push('scripts')
<script>
$(document).ready( function () {
  $('#myTable').DataTable();
} );
  </script>
@endpush