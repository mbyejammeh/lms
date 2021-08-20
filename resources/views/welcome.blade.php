@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-9 col-md-8">
          <h1 class="text-white text-center">{{ __('Personal Management Office (PMO)') }}</h1>
          <h1 class="text-white text-center">{{ __('Civil Service Revolving Loan Scheme (CSRLS).') }}</h1>
      </div>
  </div>
</div>
@endsection
