@extends('layouts.front')
@section('title', 'My Trainings')
@section('body')
    <!-- Fun facts: Start -->
    <section class="section-py landing-fun-facts mt-3">
        <div class="container">
            <div class="card">

                <div class="row mb-3">
                    <!-- Invoice -->
                    <div class="col-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h4 class="fw-semibold mb-2">{{ $training->title }} </h4>
                                <p>{{ $training->description }}</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-4 h-100">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Component

                                </h4>


                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($components as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td><a class="text-info" target="blank"
                                                            href="{{ asset('files/components/' . $item->fileUrl) }}">Component</a>
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No data found</td>
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Exam Questions</h4>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($questions as $item)
                                <div class="col-lg-6">
                                    <h5 class="text-light fw-medium">{{ $item->title }}</h5>
                                    <div class="demo-inline-spacing mt-3">
                                      <div class="list-group">
                                        <label class="list-group-item">
                                          <input class="form-check-input me-1" type="radio" name="question{{ $item->id }}" value="">
                                          {{ $item->choice_one }}
                                        </label>
                                        <label class="list-group-item">
                                          <input class="form-check-input me-1" type="radio" name="question{{ $item->id }}" value="">
                                          {{ $item->choice_two }}
                                        </label>
                                        @if ($item->choice_three)
                                        <label class="list-group-item">
                                          <input class="form-check-input me-1" type="radio" name="question{{ $item->id }}" value="">
                                          Tart tiramisu cake
                                        </label>
                                        @endif
                                        @if ($item->choice_four)
                                        <label class="list-group-item">
                                          <input class="form-check-input me-1" type="radio" name="question{{ $item->id }}" value="">
                                          Bonbon toffee muffin
                                        </label>
                                        @endif
                                      </div>
                                    </div>
                                  </div>

                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Fun facts: End -->
@endsection
