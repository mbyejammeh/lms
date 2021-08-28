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
      <li class="nav-item{{ $activePage == 'payment' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('payments.index') }}">
          <i class="material-icons">money</i>
            <p>{{ __('Payments') }}</p>
        </a>
      </li>      
      <li class="nav-item{{ $activePage == 'loan' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('loans.index') }}">
          <i class="material-icons">style</i>
            <p>{{ __('Loan') }}</p>
        </a>
      </li>      
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'loan' || $activePage == 'loan-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#loanManagement" aria-expanded="true">
          <i class="material-icons">build</i>
          <p>{{ __('Loans Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="loanManagement">
          <ul class="nav">
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
            <li class="nav-item{{ $activePage == 'type' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('types.index') }}">
                <i class="material-icons">style</i>
                  <p>{{ __('Loan Type') }}</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
    



      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#userManagement" aria-expanded="true">
          <i class="material-icons">person</i>
          <p>{{ __('Users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="userManagement">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
