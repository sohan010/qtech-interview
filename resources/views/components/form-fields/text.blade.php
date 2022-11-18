
<div class="col-lg-{{$col ?? 6}}">
    <div class="form-group {{$groupClass ?? ''}}">
        <label for="">{{$label ?? ''}}</label>
        <input type="text" class="form-control {{$class ?? ''}}" name="{{$name}}" value="{{$value ?? ''}}" placeholder="{{$placeholder ?? __('Enter data')}}">
    </div>
</div>
