<!-- display error  -->
@if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            Swal.fire({
                position: 'top-end',
                toast: true,
                showConfirmButton: false,
                showCloseButton: true,
                icon: 'success',
                title: '{{ $error }}',
            })
        @endforeach
@endif
