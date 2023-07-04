@can($viewGate)
    <a class="btn btn-xs btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
        {{ trans('global.view') }}
    </a>
@endcan
@if($row->hr_approval == 'Pending' || $row->hr_approval == 'Unapproved')
@can($editGate)
    <a class="btn btn-xs btn-info" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
        {{ trans('global.edit') }}
    </a>
@endcan
@elseif($row->hr_approval == 'Approved')
@can($editGate)
    <a class="btn btn-xs btn-info" href="#">
        {{ trans('global.edit') }}
    </a>
@endcan
@endif
