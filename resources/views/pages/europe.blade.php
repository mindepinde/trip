@extends('layouts.continents')
@section('carousel')
    <header>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                              <img src="img/world/pineapple-day-at-beach12.jpg" alt="">
                              <div class="carousel-caption">
                                  <h1>Carousel in a container</h1>
                                  <p>This is a demo for the Bootstrap Carousel Guide.</p>
                              </div>
                          </div>
                          <div class="item">
                              <img src="img/world/pineapple-day-at-beach15.jpg" alt="">
                          </div>
                          <div class="item">
                              <img src="img/world/pineapple-day-at-beach2.jpg" alt="">
                          </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
    </header>
@endsection
@section('content')
    <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Country</h1>
          </div>
          <div class="panel-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="panel-footer">

          </div>
        </div>
    </div>


@endsection