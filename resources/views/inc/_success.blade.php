@if (session('success'))
    <script>
        $(function() {

            @if (Session::has('success'))
                Swal.fire({
                    position: 'top-end',
                    toast: true,
                    showConfirmButton: false,
                    timer: 1500,
                    icon: 'success',
                    title: '{{ session('success') }}',
                })
            @endif
        });
    </script>
@endif
