@extends('layouts.front')
@section('title', 'My Trainings')
@section('body')
    <!-- Fun facts: Start -->
    <section class="section-py landing-fun-facts mt-3">
        <div class="container">
            <div class="card bg-light">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Trainings List

                    </h5>
                </div>

                <div class="card-datatable table-responsive">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col">Training</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($trainings as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="font-weight-bold">{{ $item->training->title }}</td>
                                    <td>{{ $item->training->price }} $ </td>
                                    <td>
                                        @if ($item->training->status == 'active')
                                            <span class="badge bg-primary">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('student.training_exam_show', $item->training->id) }}"
                                            class="btn btn-sm btn-info">Exam</a>
                                        <a href="{{ route('student.trainingShow', $item->training->id) }}"
                                            class="text-body"><i class="ti ti-eye ti-sm mx-1"></i></a>

                                    </td>
                                </tr>
                            @empty
                            <tr>
                            <td class="text-center" colspan="6">
                                No Training Data Available
                            </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->
@endsection
