<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('CSRLS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
            <span class="sidebar-mini"> <i class="material-icons">person</i> </span>
            <span class="sidebar-normal">{{ __('User profile') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'borrower' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('borrowers.index') }}">
          <i class="material-icons">paid</i>
            <p>{{ __('Borrowers') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'guarantor' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('guarantors.index') }}">
          <i class="material-icons">people_alt</i>
            <p>{{ __('Guarantors') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">money</i>
            <p>{{ __('Payments') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'type' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('types.index') }}">
          <i class="material-icons">style</i>
            <p>{{ __('Loan Type') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'loan' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('loans.index') }}">
          <i class="material-icons">style</i>
            <p>{{ __('Loans') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'retrieve' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('grades.index') }}">
          <i class="material-icons">pin</i>
            <p>{{ __('Grades') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'designation' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('designations.index') }}">
          <i class="material-icons">pin</i>
            <p>{{ __('Designation') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
