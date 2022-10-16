<!-- display error  -->
@if ($errors->any())
    <div class="alert alert-danger alert-block" id="error">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
