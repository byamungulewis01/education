@extends('layouts.student')
@section('title', 'My Profile')
@section('body')
    <div class="container">
        <h4 class="dashboard-title">My Profile</h4>

        <!-- Dashboard Profile Start -->
        <div class="dashboard-profile">

            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Registration Date</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->created_at->format('D d M Y, h:i:s a') }}
                    </p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Reg Number</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->regnumber }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">First Name</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->fname }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Last Name</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->lname }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Email</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->email }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Gender</div>
                <div class="dashboard-profile__content">
                    <p>{{ ucfirst($student->gender) }}</p>
                </div>
            </div>

            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Phone Number</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->phone }}</p>
                </div>
            </div>
            <div class="dashboard-profile__item">
                <div class="dashboard-profile__heading">Country</div>
                <div class="dashboard-profile__content">
                    <p>{{ $student->country }}</p>
                </div>
            </div>


        </div>
        <!-- Dashboard Profile End -->
    </div>
@endsection
