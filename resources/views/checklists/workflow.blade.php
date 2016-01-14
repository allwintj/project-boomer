{{-- */ $breadcrumbs = [
    trans('all.settings') => route('settings.index'),
    trans_choice('all.checklists', 2) => route('checklists.index'),
    "{$checklist->name}" => null
] /* --}}

@extends('layouts.settings')

@section('content')

    <div class="ui secondary pointing menu">
        <a href="{{ route('checklists.show', $checklist->id) }}" class="item">{{ $checklist->name }}</a>
        <a href="{{ route('checklists.workflow', $checklist->id) }}" class="active item">{{ trans_choice('all.workflows', 2) }}</a>
        <a href="{{ route('checklists.works', $checklist->id) }}" class="item">{{ trans_choice('all.works', 2) }}</a>
    </div>

    <div id="workflow-node-list" data-workflow-id="{{ $checklist->workflow->id }}"><!-- React Component --></div>
@stop