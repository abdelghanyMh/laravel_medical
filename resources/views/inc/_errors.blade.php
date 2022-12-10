<!-- display error  -->
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <p class="login-box-msg">{{ $error }}</p>
        <script>
            Swal.fire({
                position: 'top-end',
                toast: true,
                showConfirmButton: false,
                showCloseButton: true,
                icon: 'error',
                title: ' {{ $error }}',
            })
        </script>
    @endforeach
@endif
