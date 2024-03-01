@extends('layouts.front')
@section('title', 'My Training')
@section('body')
    <!--SECTION START-->
    <section>
        @include('student.navbar')
        <div class="stu-db">
            <div class="container pg-inn">
                @include('student.sidebar')

                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-cour-stat">
                            <h4>All Trainings</h4>
                            <p>All Trainings you have enroll</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Training Name</th>
                                            <th>Price</th>
                                            <th>Join Date</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($trainings as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->training->title }}</td>
                                                <td>{{ $item->training->price }}</td>
                                                <td>{{ $item->created_at->format('Y , M d') }}</td>
                                                <td>
                                                    @if ($item->is_payed)
                                                        <span class="pro-user-act">Paid</span>
                                                    @else
                                                        <span class="pro-bg-act">Not Paid</span>
                                                    @endif
                                                </td>
                                                <td> @if (auth()->guard('student')->user()->status == 'approved')<a href="{{ route('student.training_show', $item->training_id) }}"
                                                        class="pro-edit">view</a>@endif</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
@endsection
