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
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>\
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>

<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
    $("#users_table").ready(function() {
        $("#users_table").DataTable({
            responsive: true
        })
    });
    $("#patients_table").ready(function() {
        $("#patients_table").DataTable({
            responsive: true
        })
    });
    $("#orientationLtrs_table").ready(function() {
        $("#orientationLtrs_table").DataTable({
            responsive: true
        })
    });
    $("#scans_info").ready(function() {
        $("#scans_info").DataTable({
            responsive: true
        })
    });
    $("#prescriptions_table").ready(function() {
        $("#prescriptions_table").DataTable({
            responsive: true
        })
    });
    $("#appointment_table").ready(function() {
        $("#appointment_table").DataTable({
            responsive: true
        })
    });

    //Date time picker
    $('#dob').datetimepicker({
        format: 'L'
    });

    //Date time picker
    $('#appointmentdate').datetimepicker({
        format: 'L'
    });

    //start_time picker
    $('#start_time').datetimepicker({
        format: 'LT'
    })

    //end_time picker
    $('#end_time').datetimepicker({
        format: 'LT'
    })

    // inputmsk Code start (__-__)
    $('[data-mask]').inputmask()



    $(document).ready(function() {

        const token = "{{ csrf_token() }}"
        // Populate Select2 with AJAX data

        // 1. get the patients whose name and last names match the query provided
        $('.select2-patient-ajax').select2({

            ajax: {
                url: "{{ route('patients.findByQuery') }}",
                type: 'post',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        _token: token,
                        queryTerm: params.term,
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    }
                },
                cache: true
            }
        });

        // 2. get the doctors whose name and last names match the query provided
        $('.select2-doctor-ajax').select2({

            ajax: {
                url: "{{ route('users.findByQuery') }}",
                type: 'post',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        _token: token,
                        queryTerm: params.term,
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    }
                },
                // cache: true
            }
        });

    });
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

<!-- only include _errors subview if there is errors-->
@includeWhen($errors->any(), 'inc._errors')

{{-- sucess msg --}}
<!--TODO: check if I m working (sucess msg is displayed after successful add of a user)-->
@includeWhen(session('success'), 'inc._success')
