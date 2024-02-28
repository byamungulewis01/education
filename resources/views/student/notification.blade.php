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
                            <h4>All Notifications</h4>
                            <p>All Notifications from your Instructor</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Instructor Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Training Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($trainings as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->training->user->name }}</td>
                                                <td>{{ $item->training->user->email }}</td>
                                                <td>{{ $item->training->user->phone }}</td>
                                                <td>
                                                    {{ $item->training->title }}
                                                </td>
                                                <td>
                                                    @if (auth()->guard('student')->user()->status == 'approved')
                                                        <a href="{{ route('student.chat', $item->training_id) }}"
                                                            class="pro-edit">Chat</a>
                                                    @endauth
                                            </td>
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
