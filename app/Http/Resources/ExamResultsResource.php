<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamResultsResource extends JsonResource
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
            'total_marks' => (int) $this->total_marks,
            'answers' => json_decode($this->questions_answers, true),
            'status' => $this->status,
            'question_marks' => (int) Question::where('training_id', $this->training_id)->sum('marks')
        ];
    }
}
