@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.employeeLeaf.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-leaves.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.id') }}
                        </th>
                        <td>
                            {{ $employeedata->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.employee') }}
                        </th>
                        <td>
                            {{ $employeedata->employee->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.leave') }}
                        </th>
                        <td>
                            {{ $employeedata->leave_type ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.start_date') }}
                        </th>
                        <td>
                            {{ $employeedata->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.end_date') }}
                        </th>
                        <td>
                            {{ $employeedata->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.line_manager_approval') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLeaf::LINE_MANAGER_APPROVAL_RADIO[$employeedata->line_manager_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.hr_approval') }}
                        </th>
                        <td>
                            {{ App\Models\EmployeeLeaf::HR_APPROVAL_RADIO[$employeedata->hr_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.employeeLeaf.fields.leave_reason') }}
                        </th>
                        <td>
                            {{ $employeedata->leave_reason ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.employee-leaves.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
