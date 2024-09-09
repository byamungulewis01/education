<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamQuestionResource extends JsonResource
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
            'title' => $this->title,
            'type' => is_numeric($this->answers) ? 'radio' : 'checkbox',
            'choices' => explode('//next//', $this->choices),
            'answers' => $this->answers,
            'marks' => $this->marks,
        ];
    }
}
