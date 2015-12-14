<?php

Route::group(['prefix' => 'api/v1'], function () {
    resource('workflows', Workflows\WorkflowsController::class);
    resource('workflows.nodes', Workflows\NodesController::class);

    resource('mainflow-types', Support\MainflowTypesController::class);
    resource('mainflow-types.detailingflow-types', Support\DetailingflowTypesController::class);

    resource('cost-types', Support\CostTypesController::class);

    resource('units', Support\UnitsController::class);

    resource('works', Works\WorksController::class);
    resource('works.work-items', Works\WorkItemsController::class);
});

Route::group(['middleware' => 'csrftoken'], function () {
    get('settings', function () {
        return view('settings.index');
    })->name('settings.index');

    get('workflows/{workflow}/works', Workflows\WorkflowViewsController::class . '@works')->name('workflows.works');
    resource('workflows', Workflows\WorkflowViewsController::class);

    resource('projects', Projects\ProjectViewsController::class);

    get('works/{work}/workflow', Works\WorkViewsController::class . '@workflow')->name('works.workflow');
    get('works/{work}/work-items', Works\WorkViewsController::class . '@workItems')->name('works.work-items.index');
    resource('works', Works\WorkViewsController::class);
});
