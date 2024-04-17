<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/dashboard/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/dashboard/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/dashboard/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('js/dashboard/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/dashboard/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/dashboard/js/demo/chart-pie-demo.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('js/dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/dashboard/vendor/demo/datatables-demo.js') }}"></script>


{{-- CK Editor --}}
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    function previewImages($fileImage, $ImagePreview){
        const images  = document.querySelector($fileImage);
        const preview = document.querySelector($ImagePreview);
        preview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(images.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src = oFREvent.target.result;
        }
    }

    function previewImage(){
        const images  = document.querySelector('#images');
        const preview = document.querySelector('.imagePreview');
        preview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(images.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src = oFREvent.target.result;
        }
    }
    function previewFile(){
        const file    = document.querySelector('#files');
        const preview = document.querySelector('.filePreview');
        preview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(file.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src = '/images/logo-layanan/ppid.jpg';
        }
    }
    function previewFilePengumuman(){
        const file    = document.querySelector('#files');
        const preview = document.querySelector('.filePreview');
        preview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(file.files[0]);
        ofReader.onload = function(oFREvent){
            preview.src = '/images/logo-layanan/pengumuman.jpg';
        }
    }
</script>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> --}}
