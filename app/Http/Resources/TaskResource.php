<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'task_name' => $this->task_name,
            'completed' => (boolean)$this->completed,
            'created_at' => date('Y-m-d @ h:i a', strtotime($this->created_at)),
            'updated_at' => date('Y-m-d @ h:i a', strtotime($this->updated_at)),
        ];
    }
}
