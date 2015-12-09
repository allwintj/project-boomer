<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    protected $fillable = [];

    public function nodes()
    {
        return $this->hasMany(WorkflowNode::class);
    }
}