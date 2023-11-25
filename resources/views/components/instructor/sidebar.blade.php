 <ul class="menu-inner py-1">
     <!-- Apps & Pages -->
     <li class="menu-header small text-uppercase">
         <span class="menu-header-text">Pages</span>
     </li>
     <!-- Dashboard -->
     <li class="menu-item {{ Request::routeIs('instructor.index') ? 'active' : '' }}">
         <a href="{{ route('instructor.index') }}" class="menu-link">
             <i class="menu-icon tf-icons ti ti-smart-home"></i>
             <div data-i18n="Dashboard">Dashboard</div>
         </a>
     </li>


     <li class="menu-item {{ Request::routeIs(['instructor.trainings','instructor.training.show']) ? 'active' : '' }}">
         <a href="{{ route('instructor.trainings') }}" class="menu-link">
             <i class="menu-icon tf-icons ti ti-link"></i>
             <div data-i18n="Trainings">Trainings</div>
         </a>
     </li>

     <li class="menu-item {{ Request::routeIs('instructor.students') ? 'active' : '' }}">
         <a href="{{ route('instructor.students') }}" class="menu-link">
             <i class="menu-icon tf-icons ti ti-user"></i>
             <div data-i18n="Students">Students</div>
         </a>
     </li>


 </ul>
