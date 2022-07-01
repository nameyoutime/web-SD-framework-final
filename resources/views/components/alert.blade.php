{{--<div class="alert alert-{{ $type }}">--}}
{{--    {{ $message }}--}}
{{--</div>--}}
<div class="alert alert-{{$type}} alert-dismissible fade show" role="alert"
     style="
    position:fixed;
    top: 0px;
    right: 0px;
    width: 10vw;
    z-index:9999;">
    <strong>{{$message}}!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
