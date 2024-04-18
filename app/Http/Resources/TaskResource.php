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
            'created_at' => date('h:i a m/d/Y', strtotime($this->created_at)),
            'updated_at' => date('h:i a m/d/Y', strtotime($this->updated_at)),
        ];
    }
}
