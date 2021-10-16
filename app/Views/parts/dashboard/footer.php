</div>
<!-- END wrapper -->
<!-- jQuery  -->
<script src="<?= base_url('dashboard/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('dashboard/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('dashboard/js/metismenu.min.js') ?>"></script>
<script src="<?= base_url('dashboard/js/jquery.slimscroll.js') ?>"></script>
<script src="<?= base_url('dashboard/js/waves.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/apexcharts.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/bootstrap-datepicker.min.js') ?>"></script>
<!--Morris Chart-->
<script src="<?= base_url('dashboard/plugins/morris.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/raphael.min.js') ?>"></script>
<!-- <script src="<?= base_url('dashboard/pages/dashboard.init.js') ?>"></script> -->
<!-- Javascripts for datatables -->
<!-- Required datatable js -->
<script src="<?= base_url('dashboard/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Buttons examples -->
<script src="<?= base_url('dashboard/datatables/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/jszip.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/buttons.colVis.min.js') ?>"></script>
<!-- Sweet-Alert  -->
<script src="<?= base_url('dashboard/plugins/sweetalert2.min.js') ?>"></script>
<!-- Responsive examples -->
<script src="<?= base_url('dashboard/datatables/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('dashboard/datatables/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('dashboard/plugins/ace.js') ?>"></script>
<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
<script>
    var editor = CodeMirror.fromTextArea(document.getElementById('ace_editor'), {
        lineNumbers: true,
        styleActiveLine: true,
        matchBrackets: true,
        mode: "htmlmixed",
        lineWrapping: true,
        autofocus: true,
        // theme: darcular,
    });
</script>

<script>
    $('#theModal').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget);
        var modal = $(this);
        modal.find('.modal-body').load(button.data("remote"));

    });
</script>
<!-- Datatable init js -->
<script>
    $('#table').DataTable();
    $(document).ready(function() {
        let table = $('.table').DataTable({
            lengthChange: true,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
        })
        table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    });
</script>
<!--Summernote js-->
<script src="<?= base_url('dashboard/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- Dropzone js -->
<script src="<?= base_url('dashboard/plugins/dropzone/dist/dropzone.js') ?>"></script>
<script>
    jQuery(document).ready(function() {
        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
<!-- App js -->
<script src="<?= base_url('dashboard/js/app.js') ?>"></script>
<?php if (session()->get('error')) : ?>
    <script>
        swal({
            title: 'sorry!',
            text: "<?= session()->get('error') ?>",
            type: 'error',
        })
    </script>
<?php elseif (session()->get('success')) : ?>
    <script>
        swal({
            title: 'Good job!',
            text: '<?= session()->get("success") ?>',
            type: 'success',
        })
    </script>
<?php endif ?>
</body>

</html>