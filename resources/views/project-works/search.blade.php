{{-- */ $breadcrumbs = [
    trans_choice('all.projects', 2) => route('projects.index'),
    "{$project->name}" => route('projects.show', $project->id),
    trans('all.p_bid') => route('projects.bid.works', $project->id),
    trans('all.search') => null
] /* --}}

@extends('layouts.project')

@section('content')

    <div class="ui raised segment">
        <form method="GET" action="{{ route('projects.bid.works', $project->id)}}" class="ui inline form">
            <div class="field">
                <label>{{ trans('all.select_type_order') }}</label>
                <flowtype-select></flowtype-select>
            </div>
            <button class="ui primary button" type="submit">{{ trans('all.search') }}</button>
        </form>
    </div>
@stop

