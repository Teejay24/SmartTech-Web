@extends('layouts.admin')

@section('content')
    <div class="container ">
      <div class="row py-5">


          <div class="col-md-6">
            <a href="{{ route('election.home') }}">
              <div class="card-counter success" style="height: 11rem;">
                <i class="fa fa-ticket" ></i>
                <span class="count-numbers">{{ $total_contestants }}</span>
                <span class="count-name" ><h3>Contestants</h3></span>
              </div>
            </a>
          </div>

          <div class="col-md-6" >
            <a href="{{ route('user.home') }}">
              <div class="card-counter success" style="height: 11rem;">
                  <i class="fa fa-database"></i>
                  <span class="count-numbers">{{ $total_voters }}</span>
                  <span class="count-name"><h3>Voters</h3></span>
              </div>
            </a>
          </div>

          <div class="col-md-6 py-3">
            <a href="{{ route('election.home') }}">
            <div class="card-counter info" style="height: 11rem;">
                <i class="fa fa-users"></i>
                <span class="count-numbers">{{ $total_election }}</span>
                <span class="count-name"><h3>Election</h3></span>
            </div>
            </a>
        </div>
        <div class="col-md-6 py-3">
            <a href="">


              <div class="card-counter primary" style="height: 11rem;">
                  <i class="fa fa-users"></i>
                  <span class="count-numbers">{{ $total_votes }}</span>
                  <span class="count-name"><h3>Votes</h3></span>
              </div>
            </a>
          </div>
    </div>
     @endsection
