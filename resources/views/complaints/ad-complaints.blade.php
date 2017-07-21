<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Complaints</title>
</head>

<body>
	<nav>
		<div class="nav-wrapper blue-grey darken-4">
			<a href="#" class="brand-logo right">Logo</a>
			<!--
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				 <li><a href="#">Sass</a></li>
				
			</ul>-->
			
		</div>
	</nav>

	<div class="row" style="margin-bottom: 0px;">
		<!-- Sidebar  -->
		<div class="col s12 m4 l2" style="padding: 0px;">
			<ul class="collapsible " style="margin:0px; height: 90vh;" data-collapsible="accordion">
				<li>
					<a class="collapsible-header" href="{{route('homeadmin')}}">Home</a>
				</li>
				<li>
					<a class="collapsible-header" href="{{route('statistic')}}">Statistic</a>
				</li>
				<li>
					<a class="collapsible-header" href="{{route('viewcomplaint')}}">Complaint</a>
				</li>
				<li>
					<a class="collapsible-header" href="#">Categories<i class="material-icons right">keyboard_arrow_down</i></a>
					<div class="collapsible-body" style="padding: 1rem 1rem 1rem 2rem;">
						<a href="{{route('createkategori')}}"><i class="material-icons">add_circle_outline</i>New Category</a>
					</div>
					<div class="collapsible-body" style="padding: 1rem 1rem 1rem 2rem;">
						<a href="{{route('editkategori')}}"><i class="material-icons">create</i>Edit Category</a>
					</div>
				</li>
				<li>
					<a class="collapsible-header" href="{{ route('logout') }}"
					   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" >
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</div>
		<!-- Content -->
		<div class="col s12 m8 l10" style="height: 90vh;">
			<h4>All Complaints</h4>
			<table class="highlight">
		        <thead>
		          	<tr>
		              	<th>No</th>
		              	<th>Date</th>
		              	<th>Category</th>
		              	<th>Description</th>
		              	<th>Status</th>
		          	</tr>
		        </thead>

		        <tbody>
		          	<tr>
		            	<td>1</td>
		            	<td>20-07-2017</td>
		            	<td>Category 1</td>
		            	<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
		            	<td>Answered</td>
		          	</tr>
		          	<tr>
		            	<td>2</td>
		            	<td>20-07-2017</td>
		            	<td>Category 1</td>
		            	<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
		            	<td>Answered</td>
		          	</tr>
		          	<tr>
		            	<td>3</td>
		            	<td>20-07-2017</td>
		            	<td>Category 1</td>
		            	<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
		            	<td>Answered</td>
		          	</tr>
		        </tbody>
		    </table>
		</div>
	</div>

	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>