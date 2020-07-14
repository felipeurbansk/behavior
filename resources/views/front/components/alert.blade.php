<div class="alert alert-{{$type}}" role="alert">
    {{ $slot }}

    @isset($datetime)
        <br>
        <small>{{$datetime}}</small>
    @endisset
</div>
