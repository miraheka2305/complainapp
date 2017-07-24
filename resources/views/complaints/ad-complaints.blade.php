@extends('layouts.admin')

@section('title', 'Complaints')

@section('content')
	<div class="row valign-wrapper">
		<!-- Title -->
		<div class="col l2">
			<h4>Complaints</h4>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col l1 grey-text text-darken-3">
			Filter by: 
		</div>		
		<div class="input-field col l3">
		    <select>
		      	<option value="" disabled selected>Choose your option</option>
		      	<option value="1">Low</option>
		      	<option value="2">Mid</option>
		      	<option value="3">High</option>
		    </select>
		    <label>Priority</label>
		</div>
		<div class="input-field col l3">
		    <select>
		      	<option value="" disabled selected>Choose your option</option>
		      	<option value="1">New</option>
		      	<option value="2">On Review</option>
		      	<option value="3">Answered</option>
		    </select>
		    <label>Status</label>
		</div>
		<div class="input-field col l3">
		    <select>
		      	<option value="" disabled selected>Choose your option</option>
		      	<option value="1">Category 1</option>
		      	<option value="2">Category 2</option>
		      	<option value="3">Category 3</option>
		    </select>
		    <label>Category</label>
		</div>
	</div>
	<!-- Complaints Table -->
	<div class="row table-container">
		<table class="striped highlight responsive-table">
			<thead>
			  	<tr>
					<th>No</th>
					<th>Date</th>
					<th>Category</th>
					<th>Priority</th>
					<th>Description</th>
					<th>Status</th>
			  	</tr>
			</thead>

			<tbody>
				<tr id="1">
			  		<div class="modal-trigger" href="#complaint1">
			  			<td>1</td>
						<td>DD-MM-YYYY</td>
						<td>Kategori 1</td>
						<td>High</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
						<td><span class="badge red darken-2 white-text"><b>New</b></span></td>
			  		</div>
			  		<div id="complaint1" class="modal modal-fixed-footer">
			  			<div class="modal-content">
			  				<div class="row red lighten-4">
			  					<div class="col l7">
			  						<div class="row red lighten-4">
			  							<h5>Complaint Message</h5>
				  						<p>
				  						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			  						</div>
			  						
			  					</div>
			  					<div class="col l5 light-blue lighten-4">
			  						<br>
			  						<div class="row">
			  							
			  							From: User 1
			  							Date: DD-MM-YYYY<br>
		  								Category: Kategori 1<br>
		  								Priority: High<br>
				  						<span class="badge red darken-2 white-text" ><b>New</b></span>
			  						</div>
			  						<br>
			  						<!-- <div class="row">
			  							<a class="waves-effect waves-light btn">Change On Review</a>
			  						</div> -->
			  						<br>
			  					</div>
			  				</div>
			  				<div class="row amber lighten-4 valign-wrapper">
	  							<div class="input-field col l7" style="margin-left: 0px;">
						          	<i class="material-icons prefix">mode_edit</i>
						          	<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
						          	<label for="icon_prefix2">Answer</label>
						        </div>
						        <!-- <div class="col 5">
						        	<button class="btn waves-effect waves-light" type="submit" name="action">
										<i class="material-icons left">reply</i>Reply
									</button>
						        </div> -->
	  						</div>
			  			</div>
				  		<div class="modal-footer">
				  			<a class="modal-action modal-close waves-effect waves-red darken-2 btn-flat" type="submit" name="action">
								<i class="material-icons left">reply</i>Reply
							</a>
				  			<a href="#!" class="modal-action modal-close waves-effect waves-red darken-2 btn-flat">On Review</a>
							<a href="#!" class="modal-action modal-close waves-effect waves-red darken-2 btn-flat">
								<i class="material-icons left">close</i>Close
							</a>

						</div>
			  		</div>
			  	</tr>
			  	<tr id="2">
			  		<div class="modal-trigger" href="#complaint2">
			  			<td>2</td>
						<td>DD-MM-YYYY</td>
						<td>Kategori 2</td>
						<td>High</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
						<td><span class="badge green darken-3 white-text"><b>Answered</b></span></td>
			  		</div>
			  		<div id="complaint2" class="modal modal-fixed-footer">
			  			<div class="modal-content">
			  				<div class="row red lighten-4">
			  					<div class="col l7">
			  						<div class="row red lighten-4">
			  							<h5>Complaint Message</h5>
				  						<p>
				  						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			  						</div>
			  						
			  					</div>
			  					<div class="col l5 light-blue lighten-4">
			  						<br>
			  						<div class="row">
			  							
			  							From: User 2
			  							Date: DD-MM-YYYY<br>
		  								Category: Kategori 2<br>
		  								Priority: High<br>
				  						<span class="badge green darken-3 white-text" ><b>Answered</b></span>
			  						</div>
			  						<br>
			  						<!-- <div class="row">
			  							<a class="waves-effect waves-light btn disabled">Change On Review</a>
			  						</div> -->
			  						<br>
			  					</div>
			  				</div>
			  				<div class="row amber lighten-4 valign-wrapper">
			  				
	  							<div class="input-field col l7" style="margin-left: 0px;">
						          	<i class="material-icons prefix">mode_edit</i>
						          	<textarea id="icon_prefix2" class="materialize-textarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						          	</textarea>
						          	<label for="icon_prefix2">Answer</label>
						        </div>
						        <!-- <div class="col 5">
						        	<button class="btn waves-effect waves-light disabled" type="submit" name="action">
										<i class="material-icons left">reply</i>Reply
									</button>
						        </div> -->
						    
	  						</div>
			  			</div>
				  		<div class="modal-footer">
				  			<a class="modal-action modal-close waves-effect waves-red darken-2 btn-flat disabled" type="submit" name="action">
								<i class="material-icons left">reply</i>Reply
							</a>
				  			<a class="modal-action modal-close waves-effect waves-red darken-2 btn-flat disabled">On Review</a>
							<a href="#!" class="modal-action modal-close waves-effect waves-red darken-2 btn-flat">
								<i class="material-icons left">close</i>Close
							</a>
						</div>
			  		</div>
			  	</tr>
			  	<tr id="3">
			  		<div class="modal-trigger" href="#complaint3">
			  			<td>3</td>
						<td>DD-MM-YYYY</td>
						<td>Kategori 3</td>
						<td>High</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</td>
						<td><span class="badge amber white-text"><b>On Review</b></span></td>
			  		</div>
			  		<div id="complaint3" class="modal modal-fixed-footer">
			  			<div class="modal-content">
			  				<div class="row red lighten-4">
			  					<div class="col l7">
			  						<div class="row red lighten-4">
			  							<h5>Complaint Message</h5>
				  						<p>
				  						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			  						</div>
			  						
			  					</div>
			  					<div class="col l5 light-blue lighten-4">
			  						<br>
			  						<div class="row">
			  							
			  							From: User 1
			  							Date: DD-MM-YYYY<br>
		  								Category: Kategori 3<br>
		  								Priority: High<br>
				  						<span class="badge amber white-text" ><b>On Review</b></span>
			  						</div>
			  						<br>
			  						<!-- <div class="row">
			  							<a class="waves-effect waves-light btn disabled">Change On Review</a>
			  						</div> -->
			  						<br>
			  					</div>
			  				</div>
			  				<div class="row amber lighten-4 valign-wrapper">
	  							<div class="input-field col l7" style="margin-left: 0px;">
						          	<i class="material-icons prefix">mode_edit</i>
						          	<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
						          	<label for="icon_prefix2">Answer</label>
						        </div>
						        <!-- <div class="col 5">
						        	<button class="btn waves-effect waves-light" type="submit" name="action">
										<i class="material-icons left">reply</i>Reply
									</button>
						        </div> -->
	  						</div>
			  			</div>
				  		<div class="modal-footer">
				  			<a class="modal-action modal-close waves-effect waves-red darken-2 btn-flat" type="submit" name="action">
								<i class="material-icons left">reply</i>Reply
							</a>
							<a class="modal-action modal-close waves-effect waves-red darken-2 btn-flat disabled">On Review</a>
							<a href="#!" class="modal-action modal-close waves-effect waves-red darken-2 btn-flat">
								<i class="material-icons left">close</i>Close
							</a>
						</div>
			  		</div>
			  	</tr>
			</tbody>
		</table>
	</div>

	

@endsection

<!--
<!DOCTYPE html>
<html>
<head> --> 
	<!--Import Google Icon Font--> <!--
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<!--Import materialize.css--> <!--
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->

	<!--Let browser know website is optimized for mobile--> <!--
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Complaints</title>
</head> -->
<!--
<body>
	<nav>
		<div class="nav-wrapper blue-grey darken-4">
			<a href="#" class="brand-logo right">Logo</a> -->
			<!--
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				 <li><a href="#">Sass</a></li>
				
			</ul>-->
			<!--
		</div>
	</nav>

	<div class="row" style="margin-bottom: 0px;"> -->
		<!-- Sidebar  --> <!--
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
					<a class="collapsible-header" href="{{route('regisfreelancer')}}">Freelancer</a>
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
		</div> -->
		<!-- Content --> <!--
		<div class="col s12 m8 l10" style="height: 90vh;">
			<h4>All Complaints</h4>
			<div class="row">
				<div class="input-field col s3">
				    <select name="category">
				      	<option value="" disabled selected>Choose your option</option>
				      	<option value="1">Category 1</option>
				      	<option value="2">Category 2</option>
				      	<option value="3">Category 3</option>
				    </select>
				    <label>Category</label>
				</div>
			</div>
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
-->
	<!--Import jQuery before materialize.js--> <!--
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$(document).ready(function() {
		    $('select').material_select();
		});
	</script>
</body>
</html> -->