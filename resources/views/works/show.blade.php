@extends('layouts.general')

@section('title')
    設定 ｜ 工項管理 ｜ {{ $work->name }}
@stop

@section('sidebar')
    <a href="{{ route('workflows.index') }}" class="item">
        流程管理
    </a>

    <a href="{{ route('works.index') }}" class="active item">
        工項管理
    </a>
@stop

@section('breadcrumbs')
    <a href="{{ route('settings.index') }}" class="section">設定</a>

    <i class="right chevron icon divider"></i>

    <a href="{{ route('works.index') }}" class="section">工項管理</a>

    <i class="right chevron icon divider"></i>

    <div class="active section">{{ $work->name }}</div>
@stop

@section('content')

    <div id="work-item-list" data-work-id="{{ $work->id }}"></div>

@stop