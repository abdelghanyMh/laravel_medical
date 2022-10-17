<!-- Admin lte Timepicker depondaces-->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script>
    $(document).ready(function() {
        // code to read selected table row cell data (values).
        // $(".btnSelect").on('click', function() {
        //     var currentRow = $(this).closest("tr");
        //     var nom = currentRow.find("td:eq(0)").html();
        //     var lastname = currentRow.find("td:eq(1)").html();
        //     var username = currentRow.find("td:eq(2)").html();
        //     var pwd = currentRow.find("td:eq(3)").html();
        //     var mail = currentRow.find("td:eq(4)").html();
        //     var specialty = currentRow.find("td:eq(5)").html();
        //     var id = currentRow.find("td:eq(6)").html();
        //     //  populate input field  of the model form  with the data of the selcted row 
        //     $("#id").val(id);
        //     $("#nomUpdate").val(nom);
        //     $("#nomDelete").val(nom);
        //     $("#lastnameUpdate").val(lastname);
        //     $("#lastnameDelete").val(lastname);
        //     $("#usernameUpdate").val(username);
        //     $("#usernameDelete").val(username);
        //     $("#pwd").val(pwd);
        //     $("#mail").val(mail);
        //     $("#specialty").val(specialty);
        // });
    });
</script>
<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    })
</script>
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    // patientAddToTable();
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    $(function() {


        var table = $('#example1').DataTable();

        $(".btnSelect").on('click', function() {
            $currentRow = $(this).closest("tr");
            var [name, lastname, username, email, specialty, ...ignore] = table.row($currentRow).data()
            console.table(name, lastname, username, email, specialty);
            $("#nomUpdate").val(name);
            $("#nomDelete").val(name);
            $("#lastnameUpdate").val(lastname);
            $("#lastnameDelete").val(lastname);
            $("#usernameUpdate").val(username);
            $("#usernameDelete").val(username);
            $("#email").val(email);
            $("#specialty").val(specialty);
        })


    });
</script>
