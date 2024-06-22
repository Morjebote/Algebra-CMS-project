@if ($errors->any())
    <div class="alert alert-danger m-3 d-flex align-items-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
