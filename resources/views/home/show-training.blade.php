@extends('layouts.front')
@section('title', 'School')
@section('body')
    <!-- Page Banner Section Start -->
    <div class="page-banner bg-color-11">
        <div class="page-banner__wrapper">
            <div class="container">


            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->
    <!-- Tutor Course Top Info Start -->
    <div class="tutor-course-top-info section-padding-01 bg-color-11">
        <div class="container custom-container">

            <div class="row">
                <div class="col-lg-8">

                    <!-- Tutor Course Top Info Start -->
                    <div class="tutor-course-top-info__content">
                        <div class="tutor-course-top-info__badges">
                            <a class="badges-category" href="#">{{ $training->category->title }}</a>
                        </div>
                        <h1 class="tutor-course-top-info__title">{{ $training->title }}</h1>
                        <div class="tutor-course-top-info__meta">
                            <div class="tutor-course-top-info__meta-instructor">
                                <div class="instructor-avatar">
                                    <img src="{{ asset('frontend/images/instructor/instructor-01.jpg') }}" alt="Instructor"
                                        width="36" height="36">
                                </div>
                                <div class="instructor-name">{{ $training->user->name }}</div>
                            </div>
                            <div class="tutor-course-top-info__meta-update">Last Update December 1, 2020</div>
                        </div>
                        <div class="tutor-course-top-info__meta">
                            <div class="tutor-course-top-info__meta-rating">

                                <div class="rating-average"><strong>4.38</strong> /5</div>
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 90%;"></div>
                                </div>
                                <div class="rating-count">(8)</div>

                            </div>
                            <div class="tutor-course-top-info__meta-action"><i class="meta-icon fas fa-user-alt"></i> 0
                                already enrolled</div>
                        </div>
                    </div>
                    <!-- Tutor Course Top Info End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Tutor Course Top Info End -->

    <!-- Tutor Course Main content Start -->
    <div class="tutor-course-main-content section-padding-01 sticky-parent">
        <div class="container custom-container">

            <div class="row gy-10">
                <div class="col-lg-8">

                    <!-- Tutor Course Main Segment Start -->
                    <div class="tutor-course-main-segment">

                        <!-- Tutor Course Segment Start -->
                        <div class="tutor-course-segment">
                            <h4 class="tutor-course-segment__title">About This Course</h4>

                            <!-- Tutor Course Segment Content Wrapper Start -->
                            <div class="tutor-course-segment__content-wrap">
                                {{ $training->description }}
                            </div>
                            <!-- Tutor Course Segment Content Wrapper End -->


                        </div>
                        <!-- Tutor Course Segment End -->


                        <!-- Tutor Course Segment Start -->

                        <div class="tutor-course-segment">

                            <div class="tutor-course-segment__header">
                                <h4 class="tutor-course-segment__title">Curriculum</h4>

                                <div class="tutor-course-segment__lessons-duration">
                                    <span class="tutor-course-segment__lessons">4 Modules</span>
                                    <span class="tutor-course-segment__duration">15h 15m</span>
                                </div>
                            </div>

                            <div class="course-curriculum accordion">
                                @foreach ($training->modules as $module)
                                    <div class="accordion-item">
                                        <button class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $module->id }}"> <i class="tutor-icon"></i>
                                            {{ $module->name }}</button>
                                        <div id="collapse{{ $module->id }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionCourse">

                                            <div class="course-curriculum__lessons">
                                                <div class="course-curriculum__lesson">
                                                    <span class="course-curriculum__title">
                                                        {{ $module->description }}
                                                    </span>
                                                    <span class="course-curriculum__icon">
                                                        <i class="fas fa-lock-alt"></i>
                                                    </span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>



                        <!-- Tutor Course Segment Start -->
                        <div class="tutor-course-segment">
                            <h4 class="tutor-course-segment__title">Your Instructors</h4>

                            <div class="tutor-course-segment__instructor">
                                <div class="tutor-instructor">
                                    <div class="tutor-instructor__avatar">
                                        <img src="{{ asset('frontend/images/team/team-member-07.jpg') }}" alt="instructor"
                                            width="200" height="246">
                                    </div>
                                    <div class="tutor-instructor__instructor-info">
                                        <h4 class="tutor-instructor__name">Owen Christ</h4>
                                        <div class="tutor-instructor__ratings">
                                            <div class="rating-star">
                                                <div class="rating-label" style="width: 90%;"></div>
                                            </div>

                                            <div class="rating-average">
                                                <span class="rating-average__average">4.75</span>
                                                <span class="rating-average__total">/5</span>
                                            </div>
                                        </div>
                                        <div class="tutor-instructor__meta">
                                            <span><i class="fas fa-play-circle"></i> 42 Courses</span>
                                            <span><i class="fas fa-comment-alt"></i> 4 Reviews</span>
                                            <span><i class="fas fa-user"></i> 73 Students</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tutor Course Segment End -->


                    </div>
                    <!-- Tutor Course Main Segment End -->

                </div>
                <div class="col-lg-4">

                    <div class="sidebar-sticky">
                        <!-- Tutor Course Sidebar Start -->
                        <div class="tutor-course-sidebar">

                            <!-- Tutor Course Price Preview Start -->
                            <div class="tutor-course-price-preview">
                                <div class="tutor-course-price-preview__thumbnail">
                                    <div class="ratio ratio-16x9">
                                        <img src="{{ asset('images/trainings/' . $training->imageName) }}" alt="courses"
                                            width="330" height="221">
                                    </div>
                                </div>
                                <div class="tutor-course-price-preview__price">
                                    <div class="tutor-course-price">
                                        <span class="sale-price">${{ number_format($training->price) }}<span
                                                class="separator">.00</span></span>
                                    </div>
                                </div>
                                <div class="tutor-course-price-preview__meta">
                                    <ul class="tutor-course-meta-list">

                                        <li>
                                            <div class="label"><i class="fas fa-clock"></i> Duration </div>
                                            <div class="value">15.3 hours</div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="fas fa-play-circle"></i> Lectures </div>
                                            <div class="value">4 lectures</div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="fas fa-tag"></i> Subject </div>
                                            <div class="value"><a href="#">{{ $training->category->title }}</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="label"><i class="fas fa-globe"></i> Language </div>
                                            <div class="value">English</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tutor-course-price-preview__btn">
                                    <button class="btn btn-primary btn-hover-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#loginAndBuy"> <i class="fas fa-shopping-basket"></i> Apply now
                                    </button>
                                </div>

                            </div>
                            <!-- Tutor Course Price Preview End -->



                            <!-- Sidebar Widget Start -->
                            <div class="sidebar-widget">
                                <h3 class="sidebar-widget__title">Related Courses</h3>

                                <div class="sidebar-widget__course">
                                    @foreach ($related_courses as $item)
                                        <div class="sidebar-widget__course-item">
                                            <div class="sidebar-widget__course-thumbnail">
                                                <a href="{{ route('training', encrypt($item->id)) }}"><img
                                                        src="{{ asset('images/trainings/' . $item->imageName) }}"
                                                        alt="Courses" width="120" height="72"></a>
                                            </div>
                                            <div class="sidebar-widget__course-content">
                                                <h4 class="sidebar-widget__course-title"><a
                                                        href="{{ route('training', encrypt($item->id)) }}">{{ $item->title }}</a>
                                                </h4>
                                                <div class="sidebar-widget__course-price">
                                                    <span class="sale-price">${{ number_format($item->price) }}<span
                                                            class="separator">.00</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                            <!-- Sidebar Widget End -->

                        </div>
                        <!-- Tutor Course Sidebar End -->
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Tutor Course Main content End -->

    <!-- Log In Modal Start -->
    <div class="modal fade" id="loginAndBuy">
        <div class="modal-dialog modal-dialog-centered modal-login">

            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

                <!-- Modal Content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <p class="modal-description">Don't have an account yet? <button data-bs-toggle="modal"
                                data-bs-target="#registerModal">Sign up for free</button></p>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login_auth') }}">
                            @csrf
                            <div class="modal-form">
                                <label class="form-label">Username or email</label>
                                <input type="hidden" name="training_id" value="{{ $training->id }}">
                                <input type="text" class="form-control" name="email" placeholder="Your email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                                <div class="form-check">
                                    <input type="checkbox" id="rememberme">
                                    <label for="rememberme">Remember me</label>
                                </div>
                                <div class="text-end">
                                    <a class="modal-form__link" href="#">Forgot your password?</a>
                                </div>
                            </div>
                            <div class="modal-form">
                                <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Log
                                    In</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- Modal Content End -->

            </div>
            <!-- Modal Wrapper End -->

        </div>
    </div>
    <!-- Log In Modal End -->


    <!-- Log In Modal Start -->
    <div class="modal fade" id="registerModal">
        <div class="modal-dialog modal-dialog-centered modal-register">

            <!-- Modal Wrapper Start -->
            <div class="modal-wrapper">
                <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

                <!-- Modal Content Start -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up</h5>
                        <p class="modal-description">Already have an account? <button data-bs-toggle="modal" data-bs-target="#loginAndBuy">Log in</button></p>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('register_auth', $training->id) }}" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            <div class="row gy-2">
                                <div class="col-md-6">
                                    <label class="form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" value="{{ old('fname') }}"
                                        class="form-control" placeholder="First Name" required />
                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="lname" value="{{ old('lname') }}"
                                        class="form-control" placeholder="Last Name" required />
                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Your valid email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" placeholder="email@domain.com" required />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                    <div class="form-check mt-4">
                                        <input class="form-check-input"
                                            {{ old('gender', 'male') == 'male' ? 'checked' : '' }} type="radio"
                                            name="gender" id="male" value="male">
                                        <label class="form-check-label" for="male">Male</label> &nbsp;

                                        <input class="form-check-input" {{ old('gender') == 'female' ? 'checked' : '' }}
                                            type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Date Of Birth</label>
                                    <input type="date" name="dob" id="modalDoB" value="{{ old('dob') }}"
                                        class="form-control" max="{{ now()->toDateString() }}" required />
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Country</label>
                                    <select name="country" class="form-select" required>
                                        <option value="">Select</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->name }}"
                                                {{ old('country') == $country->name ? 'selected' : '' }}>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}"
                                        class="form-control" placeholder="Phone Number" required />
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">ID/Passport Doc</label>
                                    <input type="file" accept=".pdf,.png,.jpg" name="identity_doc"
                                        class="form-control" required />
                                    @error('identity_doc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label">Academic Doc</label>
                                    <input type="file" accept=".pdf,.png,.jpg" name="academic_doc"
                                        class="form-control" required />
                                    @error('academic_doc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-md-6">

                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Re-Enter Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="checkbox" id="privacy" name="privacy" required>
                                    <label for="privacy">Accept the Terms and Privacy Policy</label>
                                </div>
                                <div class="col-md-12">

                                    <button type="submit"
                                        class="btn btn-primary btn-hover-secondary w-100">Register</button>
                                </div>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
    <!-- Log In Modal End -->


@endsection
@section('js')
    <script>
        @if ($errors->any())
            var myModal = new bootstrap.Modal(document.getElementById('registerModal'), {
                keyboard: false
            })
            myModal.show()
        @endif
    </script>

@endsection
