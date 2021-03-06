{{-- */ $breadcrumbs = [
    trans('all.settings') => route('settings.index'),
    trans('all.m_checklists') => route('checklists.index'),
    trans('all.create') => null
] /* --}}

@extends('layouts.settings')

@section('content')
    <div class="ui raised segment">
        <form action="{{ route('checklists.store') }}" method="POST" class="ui form">
            {{ csrf_field() }}

            <div class="field">
                <label>{{ trans('all.name') }}</label>
                <input type="text" name="name">
            </div>

            <div class="field">
                <label>{{ trans('all.set_workflows') }}&nbsp;{{ trans('all.or') }}&nbsp;<a href="{{ route('workflows.create') }}">{{ trans('all.create_workflow') }}</a></label>
                <workflow-select default-value="{{ request()->query('workflow_id') }}"></workflow-select>
            </div>

            <button class="ui primary button" type="submit">{{ trans('all.create') }}</button>
            <a href="{{ route('checklists.index') }}" class="ui primary button">{{ trans('all.back') }}</a>
        </form>
    </div>
@stop
