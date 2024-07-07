@props([
    'edithref', 
    'deletehref',
    'viewhref',
])

<div class="d-flex flex-wrap justify-content-end align-items-sm-center gap-1">
    @if (!empty($edithref))
    <a href="{{ $edithref }}" class="btn btn-success btn-sm maxh-1o5rem minw-5rem">
        <i class="fa fa-edit"></i>
        edit
    </a>
    @endif
    @if (!empty($deletehref))
    <a href="{{ $deletehref }}" class="btn btn-danger btn-sm maxh-1o5rem minw-5rem">
        <i class="fa fa-trash-alt"></i>
        delete
    </a>
    @endif
    @if (!empty($viewhref))
        <a href="{{ $viewhref }}" class="btn btn-primary btn-sm maxh-1o5rem minw-5rem">
            <i class="fa fa-eye"></i>
            delete
        </a>
    @endif
</div>