@if(is_array($entity))
    <a href="{{ route( $route . ".edit", $entity) }}" class="btn btn-sm btn-secondary me-1">
        <i class="fas fa-pencil me-2"></i>{{ __('varenyky::labels.edit') }}
    </a>

    <form action="{{ route( $route . ".destroy", $entity) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt me-2"></i>{{ __('lvarenyky::abels.delete') }}</button>
</form>
@else
    <a href="{{ route( $route . ".edit", $entity->id) }}" class="btn btn-sm btn-secondary me-1">
        <i class="fas fa-pencil me-2"></i>{{ __('varenyky::labels.edit') }}
    </a>

    <form action="{{ route( $route . ".destroy", $entity->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt me-2"></i>{{ __('varenyky::labels.delete') }}</button>
    </form>
@endif
