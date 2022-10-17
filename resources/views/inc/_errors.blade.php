<!-- display error  -->
@if ($errors->any())
    <div class="flash-error">
        <b>there are some errors in your submission:</b>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
