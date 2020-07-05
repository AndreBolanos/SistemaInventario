@extends('layout.layout')

@section('content')
<div class="container-fluid">
<div class="row">
  <span id="menuB" onclick="openNav()">
    <i class="fas fa-bars"></i>
    <h4 style="display: inline-block;margin-left:2px;">
      Menu
    </h4>
  </span>
</div>
<h2>Sidenav Push Example</h2>
  <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>

</div>
@endsection
