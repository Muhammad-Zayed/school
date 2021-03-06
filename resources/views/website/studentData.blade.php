@extends('layouts.student')
@section('title')
	Data
@stop
@section('content')
	<!-- Start Nav Bar -->
	<section class="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="{{route('StudentInfo')}}"> <span>A+</span><span> School </span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href=""> Data <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tables
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="studentStudyTable.html">Study Table</a>
								<a class="dropdown-item" href="studentExamsTable.html">Exams Table</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Scores
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="studentTermScores.html">Term Scores</a>
								<a class="dropdown-item" href="studentGeneralScores.html">General Scores</a>
							</div>
						</li>

						@if(auth()->user()->role == 'parent')
							<li class="nav-item">
								<a class="nav-link" href="">Complaints and Suggestions</a>
							</li>
						@endif
						
						@if (auth()->user()->role == 'student')
							<li class="nav-item">
								<a class="nav-link hidde-exam" href="studentExam.html">Exam</a>
							</li>
						@endif


						<li class="nav-item active">
						<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    	document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</section>
	<!-- End Nav Bar -->
	<!-- Start Data Section -->
	<section class="data">
		<div class="card">
			<div class="card-body">
				<img src="{{asset('app/pics/parentAndStudent/avatar.png')}}" class="card-img-top" alt="avatar">
				<ul class="list-unstyled">
					<li> <i class="fas fa-pen"></i> <span>Name:	 {{auth()->user()->name}} </span></li>
					<li> <i class="fas fa-address-card"></i> <span>ID:	{{auth()->user()->id}} </span> </li>
					<li> <i class="fas fa-birthday-cake"></i> <span>Date Of Birth:	{{auth()->user()->dob}} </span></li>
					<li> <i class="fas fa-map-marker-alt"></i> <span>Address:	{{auth()->user()->address}} </span>   </li>	
					<li> <i class="fas fa-graduation-cap"></i> <span>Level:	{{auth()->user()->level}} </span></li>
					<li> <i class="fas fa-tint"></i> <span>Blood Type:	{{auth()->user()->blood_type}} </span> </li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Data Section -->
@stop