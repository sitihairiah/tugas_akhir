@foreach(['success', 'warning', 'danger', 'primary', 'info'] as $status)
    @if(session($status))
        <div class="alert alert-{{$status}} alert-dismissable custom-{{$status}}-box" style="height: 80%">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p style="text-align: center; font-size: 220%">
                <strong> {{ session($status) }} </strong>
            </p>
        </div>
    @endif
@endforeach