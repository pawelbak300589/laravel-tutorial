@if($errors->any())
    <ul class="collection">
        @foreach($errors->all() as $error)
            <li class="collection-item red accent-4 white-text">{{ $error }}</li>
        @endforeach
    </ul>
@endif
