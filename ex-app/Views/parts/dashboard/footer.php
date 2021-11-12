</div>
<!-- END wrapper -->
<!-- jQuery  -->
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

<style>
    .dropdown-toggle::after {
        display: none;
    }
</style>

<script>
    $(document).ready(function() {
        $('#memListTable').DataTable({
            // Processing indicator
            "processing": true,
            // DataTables server-side processing mode
            "serverSide": true,
            // Initial no order.
            "order": [],
            // Load data from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('admin/test'); ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties
            "columnDefs": [{
                "targets": [0],
                "orderable": false
            }]
        });
    });
</script>

<?php $uri = service('uri');
if ($uri->getSegment(2) == 'settings') : ?>
    <script>
        var editor = CodeMirror.fromTextArea(document.getElementById('ace_editor'), {
            lineNumbers: true,
            styleActiveLine: true,
            matchBrackets: true,
            mode: "css",
            lineWrapping: true,
            autofocus: true,
            // theme: darcular,
        });
    </script>
<?php endif ?>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/61844cb76bb0760a49412e2e/1fjmcnbov';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 20px;
        left: 20px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
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