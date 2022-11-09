<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('admin-template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin-template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin-template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('admin-template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('admin-template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin-template/plugins/chart.js/Chart.min.js') }}"></script>


<!-- DataTables  & Plugins -->
<script src="{{ asset('admin-template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin-template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('admin-template/plugins/summernote/summernote-bs4.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin-template/dist/js/pages/dashboard2.js') }}"></script>

<!--datepicker-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- bs-custom-file-input -->
<script src="{{ asset('admin-template/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');


  title.addEventListener('change', function() {
    fetch('/dashboard/article/checkSlug?article_judul=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });   

    $(document).ready(function(){
      var date_input=$('input[name="birthdate"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
  </script>

  <script>
      $('#content').summernote();
  $('#description').summernote();
    </script>


  <script>
    $(function () {
        bsCustomFileInput.init();
      });

      $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });

var el = document.querySelector('input.number');
el.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;

  this.value = this.value.replace(/\D/g, '')
                         .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});

  </script>

<script>

    function imgPreview() {
    const image = document.querySelector('#photo_path');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    
    oFReader.onload = funtion(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    };
    }
    </script>

<script>

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('.img-preview').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
 </script>
    