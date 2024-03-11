<!-- Navbar pills -->
<div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-sm-row mb-4">
        <li class="nav-item"><a class="nav-link {{ Request::routeIs('admin.student.profile.index') ? 'active' : '' }}" href="{{ route('admin.student.profile.index',$student->id) }}"><i class='ti-xs ti ti-user-check me-1'></i> General Info</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::routeIs('admin.student.profile.training')  ? 'active' : '' }}" href="{{ route('admin.student.profile.training', $student->id) }}"><i class='ti-xs ti ti-gavel me-1'></i> Trainings</a></li>
        {{-- <li class="nav-item"><a class="nav-link {{ Request::routeIs('user.meeting-view')  ? 'active' : '' }}" href="{{ route('user.meeting-view' ,$user_id) }}"><i class='ti-xs ti ti-layout-grid me-1'></i> R.B.A Meetings</a></li>
        <li class="nav-item"><a class="nav-link {{ in_array(Route::currentRouteName(), ['user.training-view','user.training-archive','user.training-extra']) ? 'active' : '' }}" href="{{ route('user.training-view' ,$user_id) }}"><i class='ti-xs ti ti-link me-1'></i> Legal Education</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::routeIs('user.probono-view')  ? 'active' : '' }}" href="{{ route('user.probono-view' ,$user_id) }}"><i class='ti-xs ti ti-gavel me-1'></i> Pro Bono Publico</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::routeIs('user.compliance-view') ? 'active' : '' }}" href="{{ route('user.compliance-view' ,$user_id) }}"><i class='ti-xs ti ti-gavel me-1'></i> Compliances</a></li> --}}
      </ul>
    </div>
  </div>
  <!--/ Navbar pills -->
