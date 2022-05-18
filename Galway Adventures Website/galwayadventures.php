<!-- GALWAY ADVENTURES WEBSITE -->

<!-- HTML DOCTYPE DECLARATION -->
<!doctype html>
<html lang="en">

<!-- BOOTSTRAP 5 TEMPLATE-->

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		
	<!-- CSS -->

	<style>
		
		/* This sets the bootstrap navbar header to the blue colour theme */
		
			.modal-header {
			background-color: #5881A3;
			color: white;
			}
		
		/* This sets all primary buttons to the blue colour theme */
		
			.btn-primary {
			background-color: #5881A3;
			}
		
		/* This sets the column titles to the blue colour theme */
		
			th {
			color: #5881A3;
			}
		
		/* This sets the carousel control buttons to the desired size and blue colour theme */
		
			.carousel-control-prev-icon,
			.carousel-control-next-icon {
			  height: 50px;
			  width: 50px;
			  background-size: 100%, 100%;
			  background-image: none;
			}
		
			.carousel-control-next-icon:after
			{
			  content: '>';
			  font-size: 55px;
			  color: #5881A3;
			}
		
			.carousel-control-prev-icon:after {
			  content: '<';
			  font-size: 55px;
			  color: #5881A3;
			}
		
	</style>

<!-- START OF WEBSITE CONTENT-->
	
    <!-- PAGE TITLE -->
	<head> <title>Galway Adventures</title></head>
	<body>

	<!-- HEADER -->
		
		<!-- Bootstrap Navbar -->
		<nav class="navbar navbar-expand-lg" style="background-color: #5881A3;">
		<div class="container-fluid">
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		
			<!-- Left Aligned Navbar Content -->
			<ul class="navbar-nav d-flex align-items-center">
			
				<!-- Logo Displayed In Navbar-->
				<a class="navbar-brand" > <img src="images/Logos/navlogo.png" alt="" width="100" height="50"> </a>
			  
				<!-- Tours Option : Dropdown Menu -->
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle fw-light"" style="color:white;" href="#" id="toursDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Adventures</a>
				
					<!-- Dropdown Menu Options -->
					<ul class="dropdown-menu" aria-labelledby="toursDropdownMenuLink">
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#tour1Modal">National Park Hiking</a></li>
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#tour2Modal">Sea Cave Kayaking</a></li>
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#tour3Modal">Galway Hooker Sailing</a></li>
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#tour4Modal">Connemara Climbing</a></li>
					</ul>
					
				</li>
				
				<!-- Meet The Team Option : Dropdown Menu -->
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle fw-light"" style="color:white;" href="#" id="meetTheTeamDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meet The Team</a>
				
					<!-- Dropdown Menu Options -->
					<ul class="dropdown-menu" aria-labelledby="meetTheTeamDropdownMenuLink">
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#teamMember1Modal">Cillian</a></li>
						<li><a class="dropdown-item d-flex justify-content-center fw-light"" href="#" data-bs-toggle="modal" data-bs-target="#teamMember2Modal">Sean</a></li>
					</ul>
					
				</li>
				
				<!-- Prices Option-->
				<li class="nav-item"> <a class="nav-link fw-light"" style="color:white;" data-bs-toggle="modal" href="#" data-bs-target="#pricesModal" >Prices</a> </li>
				
				
				<!-- Book Option-->
				<li class="nav-item"> <a class="nav-link fw-light"" style="color:white;" onclick="openBookModal()" href="#" >Book</a> </li>
				
				<!-- Contact Us Option-->
				<li class="nav-item"> <a class="nav-link fw-light"" style="color:white;" data-bs-toggle="modal" href="#" data-bs-target="#contactUsModal">Contact Us</a> </li>
			
			</ul>
			
			<!-- Right Aligned Navbar Content-->
			<ul class="navbar-nav ms-auto text-center d-flex align-items-center">
			
				<!-- Currently Logged In (Content Changes Depending On User Logged In) -->
				<span class="navbar-text fw-light"" style="color:white;" id="currentlyLoggedIn"></span>
				
				<!--Login / Logout Option (Set To Login By Default) -->
				<b class="nav-link" id="loginLogoutOption" style="color:white; cursor: pointer;" onclick="loginLogoutOption()">Login</b>
				
				<!--Bookings Option (Set To Hidden Untill Logged In) -->
				<a class="nav-link fw-light"" id="bookingsOption" style="color:white; visibility:hidden"   href="#" onclick="openBookings()" >Bookings</a>
				
				<!-- Logo Displayed In Navbar To Center Right Aligned Text-->
				<a class="navbar-brand" > <img src="images/Logos/navlogo.png" alt="" width="1" height="50"> </a>
			
			<ul>
			
		</div>
		</div>
		</nav>
		
	<!-- FUNCTIONAL MODALS -->

			<!-- LOGIN MODAL -->
				<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				
					<!-- Modal Content -->
					<div class="modal-content">
					
						<!-- Modal Title -->
						<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Login</h5> </div>
						
							<!-- Modal Body -->
							<div class="modal-body">
							
								<!-- Login Input Section -->
								<form>
									<!-- Username Input -->
									<div class="mb-3"><input type="text" class="form-control" id="username" placeholder="Username"></div>
									<!-- Password Input -->
									<div class="mb-3"><input type="password" class="form-control" id="password" placeholder="Password"></div>
									<!-- Reset Inputs Button -->
									<div class="modal-footer"><input type="reset" class="btn btn-secondary" value="Reset">
								</form>
								
								<!-- Submit Login Button - Calls Login Function, Closes Login Modal & Opens Login Confirmation Modal-->
								<button type="button" class="btn btn-primary" onclick="loginButton()" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginConfirmationModal" >Login</button>
								</div>
								
							</div>
					
					</div>
				
				</div>
				</div>
					
			<!-- LOGIN CONFIRMATION MODAL -->
			<div class="modal fade" id="loginConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title - Content Changes Depending On Successfull / Unsuccessfull Login -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" id="loginConfirmationTitle"></h5> </div>
					
					<!-- Modal Message - Content Changes Depending On Successfull / Unsuccessfull Login -->
					<div class="modal-body d-flex justify-content-center fw-light"" id="loginConfirmationMessage"></div>

					<!-- Modal Footer -->
					<div class="modal-footer">
							
						<!-- Login Again Button - Closes curent modal and reopens login modal (only displayed if login unsuccessfull) -->
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal" id="reopenLoginModal">Login</button>
						
					</div>
					
				</div>
				
			</div>
			</div>
			
			<!-- LOGOUT MODAL -->
			<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Titel -->
					<div class="modal-header d-flex justify-content-center "> <h5 class="modal-title fw-light" >Logout</h5> </div>
						
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light"" >Are you sure you want to logout?</div>
						
					<!-- Modal Footer -->
					<div class="modal-footer">
					
						<!-- Confirm Logout Button -->
						<button type="button" class="btn btn-primary" onclick="logout()" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#logoutConfirmationModal" id="logoutModalButton">Logout</button>
						
					</div>
					
					
				</div>
				
			</div>
			</div>
			
			<!-- LOGOUT CONFIRMATION MODAL -->
			<div class="modal fade" id="logoutConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Logout Confirmation</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light"" >You have successfully logged out.</div>
					
					<!-- Modal Footer : Empty Footer For Appearance Only-->
					<div class="modal-footer">
						
					</div>

				</div>
				
			</div>
			</div>
			
			<!-- PRICES MODAL -->
		
				<div class="modal fade" id="pricesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
					
						<!-- Modal Content -->
						<div class="modal-content">
						
							<!-- Modal Title -->
							<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Prices</h5> </div>
							
							<!-- Modal Body : Prices Information Is Retrieved From Databaa & Displayed In Table-->
							<div class="modal-body" >
							
								<div
									
									<!-- Connect To Database Via PHP -->
									
										<?php

											// Create a Database Connection
												$dbhost = "localhost";
												$dbuser = "root";
												$dbpassword = "";
												$dbname = "g00283381";
												$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
											
											// Test If Connection Occoured
												if(mysqli_connect_errno()){
													die("DB connection failed: " .
														mysqli_connect_error() .
															" (" . mysqli_connect_errno() . ")"
															);
												}

												if (!$connection)
													{
														die('Could not connect: ' . mysqli_error());
													}
										
											// Perform Database Query
												$sql = "SELECT * FROM rates";
											
												$result = mysqli_query($connection,$sql);
											
											// Return Data
												echo "<table class='table text-center'>
												<tr class='fw-ligth'>
												<th class='fw-light'>Adventure</th>
												<th class='fw-light'>Per Person </th>
												</tr>";
												
												while($row = mysqli_fetch_array($result))
												{
													echo "<tr>";
													echo "<td class='fw-light'>" . $row['Tour'] . "</td>";
													echo "<td class='fw-light'>" . $row['Rate'] . " Euro</td>";
													echo "</tr>";
												}
												
												echo "</table>";
												
											// Release Returned Data 
												mysqli_free_result($result);

											//5.  Close database connection
												mysqli_close($connection);
											
										?>
								
								</div>
			
							</div>
							
							<!-- Modal Footer : Empty Footer For Appearance Only-->
								<div class="modal-footer">
									
								</div>

						</div>

					</div>
						
				</div>
			
			<!-- BOOK MODAL -->
			<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				
				<!-- Modal Content -->
				<div class="modal-content">
					
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Book An Adventure</h5> </div>
						
						<!-- Modal Body -->
						<div class="modal-body">
						
							<!-- Book Form (On Submission Call JS Function To Place Booking-->
							<form onsubmit="event.preventDefault(); placeBooking()">
							
								<!-- Tour Input -->
								<div><select id="bookTour" class="form-control">
								
									<!-- Tour Options -->
									<option value="Tour" >Adventure</option>
									<option value="National Park Hiking">National Park Hiking</option>
									<option value="Sea Cave Kayaking">Sea Cave Kayaking</option>
									<option value="Galway Hooker Sailing">Galway Hooker Sailing</option>
									<option value="Connemara Climbing">Connemara Climbing</option>
								
								required></select></div>
								<br>
								
								<!-- Persons Input -->
								<div><select id="bookPersons" class="form-control">
								
									<!-- Persons Options -->
									<option value="Persons" >Persons</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								
								required></select></div>
								<br>
								
								<!-- Month Input -->
								<div><select id="bookMonth" class="form-control">
								
									<!-- Month Options -->
									<option value="Month" >Month</option>
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								
								required></select></div>
								<br>
					
								<!-- Modal Footer : Display Availability & Cost-->
								<div class="modal-footer d-flex justify-content-between fw-light">
								
									<div id="displayAvailability"></div>
									<div id="displayCost"></div>
								
								</div>
									
									
								<!-- Modal Footer : Check Availability Button & Book Button-->
								<div class="modal-footer d-flex justify-content-between">
								
									<button class="btn btn-secondary" type="button"  onclick="checkAvailability()" >Check Availability</button>
									<button class="btn btn-primary me-2" id="bookButton" style=visibility:hidden type="submit"  >Book</button>
								
								</div>
						
							</form>	
								
						</div> 		
				</div>	
			</div>	
			</div>
			
			<!-- BOOKINGS UPDATED MODAL -->
			<div class="modal fade" id="bookingsUpdatedModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Thank You!</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light;" >We have updated your bookings.</div>
					
					<!-- Modal Footer : Empty Footer For Appearance Only-->
					<div class="modal-footer">
						
					</div>

				</div>
				
			</div>
			</div>
			
			<!-- YOU ARE NOT LOGGED IN MODAL -->
			<div class="modal fade" id="youAreNotLoggedInModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >You Are Not Logged In</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light" >You must log in to proceed.</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
							
						<!-- Login Button - Closes Curent Modal and Opens Login Modal -->
						<button type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#loginModal" >Login</button>
						
					</div>
					
				</div>
				
			</div>
			</div>
			
			<!-- CONTACT US MODAL-->
			<div class="modal fade" id="contactUsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				
				<!-- Modal Content -->
				<div class="modal-content">
					
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Contact Us</h5> </div>
						
						<!-- Modal Body -->
						<div class="modal-body">
						
							<!-- Contact Us Form (On Submission Call JS Function To Open Contact Us Confirmation Modal-->
							<form onsubmit="event.preventDefault(); contactUsConfirmation()">
							
								<!-- Name Input -->
								<div class="mb-3"> <input type="text" class="form-control" id="contactUsName" placeholder="Name" required> </div>
								
								<!-- Email Input -->
								<div class="mb-3"> <input type="email" class="form-control" id="contactUsEmail" placeholder="Email" required> </div>
								
								<!-- Message Input -->
								<textarea class="form-control" rows="5" id="contactUsMessage" placeholder="Message" required></textarea>
								
									<!-- Modal Footer -->
									<div class="modal-footer">
									
										<!-- Reset Form Inputs Button -->
										<input type="reset" class="btn btn-secondary" value="Reset">
					
										<!-- Submit Form Button -->
										<button class="btn btn-primary" type="submit"  >Submit</button>
										
									</div> 
							
							</form>
							
						</div>
					
				</div>
				
			</div>
			</div>
			
			<!-- CONTACT US CONFIRMATION MODAL -->
			<div class="modal fade" id="contactUsConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Thank You!</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light" >We've recieved your message. We will be in touch shortly.</div>
					
					<!-- Modal Footer : Empty Footer For Appearance Only-->
					<div class="modal-footer">
						
					</div>

				</div>
				
			</div>
			</div>
			
			<!-- BOOKINGS MODAL -->
			<div class="modal fade" id="bookingsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Bookings</h5> </div>
					
					<!-- Modal Body -->
					<div class="modal-body d-flex justify-content-center fw-light" >
					
					<!-- Bookings Items -->
					<div id="bookingsItems"></div>
					<br>
					
					</div>
					
					<!-- Modal Footer : Bookings Total-->
					<div class="modal-footer">
					
						<!-- Bookings Total Display -->
						<div id="bookingsTotalDisplay"></div>
						
					</div>
					
					<!-- Modal Footer : Empty Bookings Button & Checkout Button -->
					<div class="modal-footer d-flex justify-content-between">
					
						<!-- Empty Bookings Button -->
						<button type="button" id="emptyBookingsButton" class="btn btn-outline-success me-2" style=visibility:hidden data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#emptyBookingsConfirmationModal">Empty Bookings</button>
						
						<!-- Checkout Button -->
						<button type="button" id="checkoutButton" class="btn btn-primary" style=visibility:hidden data-bs-dismiss="modal" onclick="openCheckoutModal()" >Checkout</button>
						
					</div>

				</div>
				
			</div>
			</div>
			
			<!-- EMPTY BOOKINGS CONFIRMATION MODAL -->
			<div class="modal fade" id="emptyBookingsConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Are You Sure?</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light" >Do you want to empty your bookings?</div>
					
					<!-- Modal Footer -->
					<div class="modal-footer">
					
						<!-- Empty Bookings Confirm Button -->
						<button type="button" class="btn btn-primary" onclick="emptyBookings()" data-bs-dismiss="modal" >Empty</button>
						
					</div>

				</div>
				
			</div>
			</div>
			
			<!-- CHECKOUT MODAL -->
				<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				
					<!-- Modal Content -->
					<div class="modal-content">
					
						<!-- Modal Title -->
						<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Checkout</h5> </div>
						
							<!-- Modal Body -->
							<div class="modal-body">
							
								<!-- Card Input Section-->
								
								<form onsubmit="event.preventDefault(); paynowButton()">
								
										<!-- Card Type Input -->
										<div class="mb-3"><select type="text" class="form-control" id="cardType" required>
										
											<option value="" disabled selected>Card</option>
											<option value="Visa">Visa</option>
											<option value="Visa Debit">Visa Debit</option>
											<option value="MasterCard">Mastercard</option>
											<option value="MasterCard Debit">Mastercard Debit</option>
										
										</select>
										</div>
							
										<!-- Card Number Input (Must Be Length 16) -->
										<div class="mb-3"><input type="password" class="form-control" id="cardNumber" placeholder="Card Number" pattern=".{16,16}" oninvalid="this.setCustomValidity('Card number must be 16 digits.')" oninput="this.setCustomValidity('')" required></div>

										<!-- CVV Input (Must Be Length 3) -->
										<div class="mb-3"><input type="password" class="form-control" id="cvvNumber" placeholder="CVV" pattern=".{3,3}" oninvalid="this.setCustomValidity('CVV number must be 3 digits.')" oninput="this.setCustomValidity('')" required></div>
									
								<!-- Modal Footer : Total Cost -->
								<div class="modal-footer">
								<div <h5 class="modal-title" id="checkoutTotalCost" >Total : 0 Euros</h5> </div>
								</div>
							
								<!-- Modal Footer : Buttons -->
								<div class="modal-footer">
								
								<!-- Reset Inputs Button -->
								<input type="reset" class="btn btn-secondary" value="Reset">
								
								<!-- Pay Now Button - Emptys Bookings, Closes Pay Now Modal & Opens Order Recieved Confirmation Modal-->
									<button type="submit" class="btn btn-primary"  >Pay Now</button>
								
								</form>
								</div>
							</div>		
					</div>
				</div>
				</div>
				
				<!-- ORDER RECIEVED CONFIRMATION MODAL -->
			<div class="modal fade" id="orderRecievedConfirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			
				<!-- Modal Content -->
				<div class="modal-content">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >You Order Is Complete</h5> </div>
					
					<!-- Modal Message -->
					<div class="modal-body d-flex justify-content-center fw-light" >You will recieve a confirmation email shortly.</div>
					
					<!-- Modal Footer : Empty Footer For Appearance Only-->
					<div class="modal-footer">
						
					</div>

				</div>
				
			</div>
			</div>
			
<!-- CONTENT MODALS -->

	<!-- TOURS CONTENT -->
	
		<!-- NATIONAL PARK HIKING MODAL -->
		<div class="modal fade" id="tour1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Adventure</h5> </div>
					<br>
					
					<!-- Carousel -->
					
						<div id="myCarousel1" class="carousel slide " data-bs-ride="carousel">
							
								<!-- Controls -->
								<div class="carousel-indicators">
								<button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
								<button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
								<button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
								</div>
								
								<!-- Images -->
								<div class="carousel-inner">
								
									<!-- Image 1 -->
									<div class="carousel-item active">
									<img class="rounded mx-auto d-block" width= 70% src="images/Hiking/hiking1.png" alt="First slide">

									<!-- Image 2 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Hiking/hiking2.png" alt="First slide">
									
									<!-- Image 3 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Hiking/hiking3.png" alt="First slide"></div>
								 
								</div>
								
								<!-- Buttons -->
								<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
						
						</div><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Connemara National Park</h3>
						<p class="text-left fw-light" >
						Whether you want to challenge yourself with a mountain hike or meander through beautiful boglands the Wild Atlantic Way Route has it all. Covering 2,957 hectares the park offers a variety of terrain including woodlands, grass heaths and hills. The opportunities to explore here are endless as are the varieties of flora and fauna that can be seen. A variety of routes can be taken allowing us to offer a tailored approach making this hiking package suitable for all ages and fitness levels. Just let us know your requirements!
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
	
		<!-- SEA CAVE KAYAKING MODAL -->
		
		<div class="modal fade" id="tour2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Adventure</h5> </div>
					<br>
					
					<!-- Carousel -->
					
						<div id="myCarousel2" class="carousel slide " data-bs-ride="carousel">
							
								<!-- Controls -->
								<div class="carousel-indicators">
								<button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
								<button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
								<button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
								</div>
								
								<!-- Images -->
								<div class="carousel-inner">
								
									<!-- Image 1 -->
									<div class="carousel-item active">
									<img class="rounded mx-auto d-block" width= 70% src="images/Kayaking/kayaking1.png" alt="First slide">

									<!-- Image 2 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Kayaking/kayaking2.png" alt="First slide">
									
									<!-- Image 3 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Kayaking/kayaking3.png" alt="First slide"></div>
								 
								</div>
								
								<!-- Buttons -->
								<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
						
						</div><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Sea Cave Kayaking</h3>
						<p class="text-left fw-light" >
						Fancy taking yourself to the otherworldly Aran Islands or maybe you would rather glide along one of the many inland lakes of Galway? If this sounds good, then kayaking may be the adventure you’ve been dreaming of. We will meet you at the paddle venue with all the gear needed for a safe kayaking experience. Our guide Sean will lead the journey and offer local knowledge on the landscape and lore of Galway.
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
		
		<!-- GALWAY HOOKER SAILING MODAL -->
		
		<div class="modal fade" id="tour3Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Adventure</h5> </div>
					<br>
					
					<!-- Carousel -->
					
						<div id="myCarousel3" class="carousel slide " data-bs-ride="carousel">
							
								<!-- Controls -->
								<div class="carousel-indicators">
								<button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
								<button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
								<button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
								</div>
								
								<!-- Images -->
								<div class="carousel-inner">
								
									<!-- Image 1 -->
									<div class="carousel-item active">
									<img class="rounded mx-auto d-block" width= 70% src="images/Sailing/sailing1.png" alt="First slide">

									<!-- Image 2 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Sailing/sailing2.png" alt="First slide">
									
									<!-- Image 3 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Sailing/sailing3.png" alt="First slide"></div>
								 
								</div>
								
								<!-- Buttons -->
								<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden"></span>
								</button>
						
						</div><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Galway Hooker Sailing</h3>
						<p class="text-left fw-light" >
						The best way to explore Galway Bay is in the distinctive Galway Hooker. Having inspired songs, a festival and a craft brewery these boats offer a sea experience like no other. We will start in Kinvara Bay and head out into the open sea to explore the rugged Connemara coastline. Sean will be on board throughout the sailing experience to instruct and guide you allowing a fun and safe journey. The serene yet exhilarating adventure will have you hooked on the Galway hookers!
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
		
		<!-- CONNEMARA CLIMBING MODAL -->
		
		<div class="modal fade" id="tour4Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Adventure</h5> </div>
					<br>
					
					<!-- Carousel -->
					
						<div id="myCarousel4" class="carousel slide " data-bs-ride="carousel">
							
								<!-- Controls -->
								<div class="carousel-indicators">
								<button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
								<button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
								<button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
								</div>
								
								<!-- Images -->
								<div class="carousel-inner">
								
									<!-- Image 1 -->
									<div class="carousel-item active">
									<img class="rounded mx-auto d-block" width= 70% src="images/Climbing/climbing1.png" alt="First slide">

									<!-- Image 2 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Climbing/climbing2.png" alt="First slide">
									
									<!-- Image 3 -->
									</div><div class="carousel-item"><img class="rounded mx-auto d-block" width= 70% src="images/Climbing/climbing3.png" alt="First slide"></div>
								 
								</div>
								
								<!-- Buttons -->
								<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel4" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" ></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#myCarousel4" data-bs-slide="next">
								<span class="carousel-control-next-icon" ></span>
								</button>
						
						</div><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Connemara Climbing</h3>
						<p class="text-left fw-light" >
						If you want to get to know Connemara, there is no better way than by scaling its rugged rocks and hugging its craggy cliff faces. Our expert instructor Cillian will make sure you have a safe but exhilarating climbing experience. Cillian can take total beginners or rock-hard climbing enthusiasts, but a good level of physical fitness is required for any of the climbs. If you think you’re up for it, then get ready to get captivated by Connemara!
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
		
		
	<!-- MEET THE TEAM CONTENT -->
	
		<!-- CILLIAN MODAL -->
		
		<div class="modal fade" id="teamMember1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Meet The Team</h5> </div>
					<br>
					
					<!-- Modal Image -->
					<img src="images/Team/Cillian.png" class="rounded mx-auto d-block" width= 70% alt="Responsive image"><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Cillian</h3>
						<p class="text-left fw-light" >
						Originally from Galway, I started climbing at the age of fifteen and have never looked back. I have travelled extensively around Europe both teaching climbing and pursing my own goals in mountaineering. I returned to Ireland in 2016 after completing a successful expedition up Everest with a close group I spent several years training and teaching with. I returned to Galway and revisited many of my old favourite spots. I met Sean shortly afterwards and we knew immediately that we shared the same love for the outdoors and the Galway landscape. We set up Galway Adventures in 2018 and have enjoyed every minute of it. I mainly look after the climbing and mountaineering tours however both myself and Sean are fully licensed and insured to lead all tours we offer.
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
		
		<!-- SEAN MODAL -->
		
		<div class="modal fade" id="teamMember2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			
				<!-- Modal Content -->
				<div class="modal-content d-flex justify-content-center">
				
					<!-- Modal Title -->
					<div class="modal-header d-flex justify-content-center"> <h5 class="modal-title fw-light" >Meet The Team</h5> </div>
					<br>
					
					<!-- Modal Image -->
					<img src="images/Team/Sean.png" class="rounded mx-auto d-block" width= 70% alt="Responsive image"><br>
					
					<!-- Modal Text -->
					
						<div class="container w-75">
						<h3 class="text-center fw-light">Sean</h3>
						<p class="text-left fw-light" >
						I was born in Cork and have been going out on the water as long as I can remember. I became involved in competitive sailing at the age of twelve and by the time I was sixteen knew this was what I wanted to do with my life. I have sailed every size and type of both you can imagine while travelling Europe as a sailing instructor for over ten years. When I met Cillian we both had the same idea of setting up a company leading outdoor trips around Galway. We set up Galway Adventures in 2018 and so far has been a great success. I mainly look after the sailing and kayaking tours however both myself and Sean are fully licensed and insured to lead all tours we offer.
						</p><br><br>
						</div>

				</div>

			</div>
				
		</div>
		
		
<!-- HOME PAGE CONTENT -->

	<!-- Home Page Image (Loaded At Random) -->
	
				<!-- Home Page Image -->
				<div id=homepageImage></div>
						
					<!-- Load Image At Random (Javascript) -->
							
							<script>
							
							// Declare Array Of Homepage Images	
								var homeArray = new Array();
								homeArray[0] = "<img class='rounded mx-auto d-block' width= 80% src='images/Home Page/homepage1.png'>";
								homeArray[1] = "<img class='rounded mx-auto d-block' width= 80% src='images/Home Page/homepage2.png'>";
								homeArray[2] = "<img class='rounded mx-auto d-block' width= 80% src='images/Home Page/homepage3.png'>";
								
							// Generate Random Number (0 - 2)
								var randomNumber = Math.floor((Math.random() * 3) + 0);
								
							// Set Home Page Image To Image From Array Based On Random Number
								document.getElementById("homepageImage").innerHTML = homeArray[randomNumber];
								
							</script>
							
	<!-- About Us Home Page Grid (2 x 2) -->
					
						
						<div class="container">
						<div class="row no-gutters row-cols-2">
						
							<!-- Top Left Grid -->
							<div class="col no-gutters">
							<img class="mx-auto d-block" width= 105% src="images/Home Page/grid1.png">
							</div>
							
							<!-- Top Right Grid-->
							<div class="col no-gutters">
							<div class="container">
							<h1 class="text-left display-4">Galway Adventures</h1>
							<p class="fw-light">Feel the splash of wild Atlantic waves, walk the lofty twelve Bens, look at the open fields of Connemara and discover the medieval secrets of the City of Tribes. We are your guides to Galway. Plan your trip with us now.</p>
							</div>
							</div>
							
							<!-- Bootom Left Grid -->
							<div class="col no-gutters">
							<div class="container">
							<h1 class="text-left display-4">About Us</h1>
							<p class="fw-light">Wanting to showcase the stunning scenery and variety of landscapes in Galway we formed Galway Adventures in  2018 to act as a gateway for people looking to explore all the amazing outdoor experiences on offer here. Whether you’re looking for a splash in a kayak or a trek up the Twelve Bens, we’ve got you covered. Our experienced guides will tailor your trip to suit your interests and your fitness levels. Our aim is to inspire an interest in the outdoors and to spark a connection with gorgeous Galway.</p>
							</div>
							</div>
							
							<!-- Bottom Right Grid -->
							<div class="col no-gutters">
							<img class="mx-auto d-block" width= 105% src="images/Home Page/grid2.png">
							</div>
							
						</div>
						</div>
						<br>
							
							
							
	<!-- Testimonials Carousel-->	

							<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
							
							<!-- Controls -->
							<div class="carousel-indicators">
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
							<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
							</div>
							
							<!-- Testominal Quotes -->
							<div class="carousel-inner">
							
								<!-- Quotes 1 -->
								<div class="carousel-item">
								<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5881A3"></rect></svg>
								<div class="container">
								<div class="carousel-caption">
								<blockquote class="blockquote text-center">
								<p class="mb-0"><em>“Thanks so much to both Sean and Cillian, we had such an amazing time out on the water”</em></p>
								<p class="mb-0">- Emma</p>
								</footer>
								</blockquote>
								</div>
								</div>
								</div>
							  
							  <!-- Quote 2 -->
							  
							  <div class="carousel-item active">
								<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5881A3"></rect></svg>
								<div class="container">
								<div class="carousel-caption">
								<blockquote class="blockquote text-center">
								<p class="mb-0"><em>“You will be in safe hands with Cillian. He is an absolute professional”.</em></p>
								<p class="mb-0">- David</p>
								</footer>
								</blockquote>
								</div>
								</div>
								</div>
							  
							  <!-- Quote 3 -->
							  
							  <div class="carousel-item">
								<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#5881A3"></rect></svg>
								<div class="container">
								<div class="carousel-caption">
								<blockquote class="blockquote text-center">
								<p class="mb-0"><em>“I thought I would never be able to actually climb, but the guys are so calm and reassuring that by the end of the day I felt very confident. Couldn’t recommend more.”</em></p>
								<p class="mb-0">- Sarah</p>
								</footer>
								</blockquote>
								</div>
								</div>
								</div>
							
							<!-- Buttons -->
							<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span ><h2><</h2></span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span ><h2>></h2></span>
							</button>
							</div>
	
	
	
	<!-- Bottom of Page Tourism Logos -->
	<img class="rounded mx-auto d-block" width= 80% src="images/Logos/tourism.png">

<!-- END OF WEBSITE CONTENT -->		
	</body>

<!--JAVASCRIPT-->

	<script>
	
	// GLOBAL VARIABLES
	
		// LoggedIn : Record If User Logged In (Logged Out By Default)
		var loggedIn = false;
		
		// bookingsItems : This Variable Dislays The Current Bookings In The Bookings Modal (Bookings Empty As Default Message)
		var bookingsItems = "There are currently no bookings.";
		
		// bookingsTotal : This Variable Stores The Current Bookings Total Cost
		var bookingsTotal = 0;
		
		// tourCost : This Variable Stores The Cost Of The Tour To be Added To Bookings
		var tourCost = 0;
	
	// FUNCTIONS
	
			// LOGIN / LOGOUT OPTION FUNCTION : This function checks if user is logged in or logged out and opens the correct modal
			
				function loginLogoutOption() {
				
					// If user is logged out then login modal is opened
					if (loggedIn == false) {
					var displayModal = new bootstrap.Modal(document.getElementById('loginModal'))
					displayModal.show()
					}
					
					// If user is logged in the logout modal is opened
					if (loggedIn == true) {
					var displayModal = new bootstrap.Modal(document.getElementById('logoutModal'))
					displayModal.show()
					}
				
				}
	
			// LOGIN BUTTON FUNCTION-->
			
				function loginButton() {
				
					// Gets Username and Password Entered
					var usernameentered = document.getElementById("username").value;
					var passwordentered = document.getElementById("password").value;

					// Checks If Username and Password Correct
					if (usernameentered == "user" && passwordentered == "password") 
					
						// If Correct
						
							{
							// Changes Content of Login Confimation Modal To Successfull
							document.getElementById("loginConfirmationTitle").innerHTML = "Login Confirmation";
							document.getElementById("loginConfirmationMessage").innerHTML = "Welcome back " + usernameentered + "! You have successfully logged in.";
							
							// Changes Curently Logged In To Display Username
							document.getElementById("currentlyLoggedIn").innerHTML = usernameentered;
							
							// Hides Modal Option Button To Attempt Login Again
							document.getElementById("reopenLoginModal").style.visibility = 'hidden';
				
							// Changes Header Bookings Option To Visible
							document.getElementById("bookingsOption").style.visibility = 'visible';
							
							// Record That User Has Logged In
							loggedIn = true;
							
							// Changes Header Login/Logout Option to Logout
							document.getElementById("loginLogoutOption").innerHTML = "Logout";
							
							}
						
					else 
						
							// If Incorrect
							
							{
							
							// Changes Content of Login Confimation Modal To Unsuccessfull
							document.getElementById("loginConfirmationMessage").innerHTML = "The username or password you entered is incorrect.";
							document.getElementById("loginConfirmationTitle").innerHTML = "Login Unsuccessfull";
							
							// Shows Modal Option Button To Attempt Login Again
							document.getElementById("reopenLoginModal").style.visibility = 'visible';
							}

				}
				
				// LOGOUT BUTTON FUNCTION
			
					function logout() {
					
						// Changes Currently Logged In To Blank
						document.getElementById("currentlyLoggedIn").innerHTML= "";
						
						// Changes Header Bookings Option To Hidden
						document.getElementById("bookingsOption").style.visibility = 'hidden';
							
						// Empty Bookings
						emptyBookings();

						// Record That User Has Logged Out
						loggedIn = false;
						
						// Changes Header Login / Logout Option To Login
						document.getElementById("loginLogoutOption").innerHTML = "Login";

					}
					
				// CONTACT US CONFIRMATION FUNCTION : This function Opens the Contact Us Confirmation Modal & Closes The Contact Us Modal
				
				function contactUsConfirmation() {
				
					// Opens Contact Us Confirmation Modal
					var displayModal = new bootstrap.Modal(document.getElementById('contactUsConfirmationModal'))
					displayModal.show()
					
					// Closes Contact Us Modal
					var closeModal = document.getElementById('contactUsModal');
					var modal = bootstrap.Modal.getInstance(closeModal)
					modal.hide();
				
				}
				
				// Open Bookings Function : This Function Opens Bookings Modal & Sets Contents To Global Variables
				
				function openBookings() {
				
					// Set Bookings Contents To Global Variable
					
						// Set Bookings Items
						document.getElementById("bookingsItems").innerHTML= bookingsItems;
						
						// Set Bookings Total Display
						document.getElementById("bookingsTotalDisplay").innerHTML= "Total : " + bookingsTotal +" Euro";
				
					// Open Bookings Modal
					var displayModal = new bootstrap.Modal(document.getElementById('bookingsModal'))
					displayModal.show()
					
					}
				
				// Empty Bookings Function : This Function Sets All Bookings Global Variables Back To Default Values
				
				function emptyBookings() {
					
					// Set bookingsItems To Default String
					bookingsItems = "There are currently no bookings.";
						
					// Set Bookings Total To Default Value
					bookingsTotal = 0;
					
					// Set Checkout Button & Empty Bookings To Hidden
					document.getElementById("checkoutButton").style.visibility = 'hidden';
					document.getElementById("emptyBookingsButton").style.visibility = 'hidden';
				
				}
				
				// Open Book Modal Function : This Function Checks If The User Is Logged In Before Opening The Book Modal
				
				function openBookModal() {
				
					// Check If User Is Logged In
					if (loggedIn == true) {
					
						// Reset Book Modal To Default Values
						document.getElementById("bookTour").value = 'Tour';
						document.getElementById("bookPersons").value = 'Persons';
						document.getElementById("bookMonth").value = 'Month';
						document.getElementById("displayAvailability").innerHTML = "";
						document.getElementById("displayCost").innerHTML = "";
						document.getElementById("bookButton").style.visibility = 'hidden';
		
						// Open Book Modal
						var displayModal = new bootstrap.Modal(document.getElementById('bookModal'))
						displayModal.show()
					}
					
					else {
					
						// Prompt User To Login : Open You Are Not Logged In Modal
						var displayModal = new bootstrap.Modal(document.getElementById('youAreNotLoggedInModal'))
						displayModal.show()
					
					}
				
				}
				
				// CHECK AVAILABILITY FUNCTION : This function Checks Cost of Booking
				
				function checkAvailability() {
				
					// Get Form Input Information From Book Modal
					var bookTour = document.getElementById("bookTour").value;
					var bookPersons = document.getElementById("bookPersons").value;
					var bookMonth = document.getElementById("bookMonth").value;
					
					// Define Variable For Tour Cost Calculation
						var tourRate = 0;
						var monthRate = 0;
						var personRate = 0;
						var rateSelected = 0;
						
					// Check If Options Selected Correctly
					
						// If Any Options Were Not Selected Display "You Must Select All Options" Message
						
							if (bookTour == "Tour" || bookMonth == "Month" || bookPersons == "Persons") {
							document.getElementById("displayAvailability").innerHTML = "You must select all options.";
							}
						
						// Else Calculate Tour Cost Then Display Cost & Book Button
						
							else {
							
							// Determine Rates Based On Options Selected
							
								// Determine tourRate
										
										if (bookTour == "National Park Hiking"){
										tourRate = 25;
										}
										
										if (bookTour == "Sea Cave Kayaking"){
										tourRate = 35;
										}
										
										if (bookTour == "Galway Hooker Sailing"){
										tourRate = 45;
										}
										
										if (bookTour == "Connemara Climbing"){
										tourRate = 30;
										}
										
									
						// Calcualte Tour Cost Based On Rates (Round Up To Nearest Integer)
							tourCost = tourRate * parseInt(document.getElementById("bookPersons").value);
							tourCost = Math.ceil(tourCost);
						
						// Change Display Availability To Show Description of Availability
							document.getElementById("displayAvailability").innerHTML = bookTour +  " (" +bookMonth +  " x" + bookPersons +") : AVAILABLE";
									
						// Change Display Cost To Show Cost & Display Book Button
							document.getElementById("displayCost").innerHTML = tourCost + " Euro";
							document.getElementById("bookButton").style.visibility = 'visible';
							
							}
		
				}
				
				// PLACE BOOKING FUNCTION : This function Updates Bookings Variables, Closes The Book Modal & Opens The Bookings Updated Modal
				
				function placeBooking() {
				
					// Get Form Input Information From Book Modal
					var bookTour = document.getElementById("bookTour").value;
					var bookPersons = document.getElementById("bookPersons").value;
					var bookMonth = document.getElementById("bookMonth").value;
					var bookingToAdd = bookTour + " in " + bookMonth + " ( x" + bookPersons + " Persons ) - " + tourCost + " Euro";
					
					<!-- Update Bookings Information
					
						// Update bookingsItem
						if (bookingsItems == "There are currently no bookings.") {
						
							// If this is the first booking
							bookingsItems = bookingToAdd;
							}
							
							// This is an additional booking
							else {
							bookingsItems = bookingsItems + "<br>" + bookingToAdd;
							}
							
						// Update Total Cost
						bookingsTotal = bookingsTotal + tourCost;
						
					// Set Checkout Button & Empty Bookings Button To Visible
					document.getElementById("checkoutButton").style.visibility = 'visible';
					document.getElementById("emptyBookingsButton").style.visibility = 'visible';
		
					// Closes Book Modal
					var closeModal = document.getElementById('bookModal');
					var modal = bootstrap.Modal.getInstance(closeModal)
					modal.hide();
					
					// Open Booking Updated Modal
					var displayModal = new bootstrap.Modal(document.getElementById('bookingsUpdatedModal'))
					displayModal.show()
				
				}
				
				// OPEN CHECKOUT MODAL FUNCTION : This Function Sets The Total Cost For Checkout & Opens The Checkout Modal
				
				function openCheckoutModal() {
				
					// Set Total Cost
					document.getElementById("checkoutTotalCost").innerHTML = "Total : " + bookingsTotal + " Euro";
					
					// Open Checkout Modal
					var displayModal = new bootstrap.Modal(document.getElementById('checkoutModal'))
					displayModal.show()
					
				}

				// PAY NOW BUTTON FUNCTION - Emptys Bookings, Closes Pay Now Modal & Opens Order Recieved Confirmation Modal
				
				function paynowButton() {
				
					// Closes Checkout Modal
					var closeModal = document.getElementById('checkoutModal');
					var modal = bootstrap.Modal.getInstance(closeModal)
					modal.hide();
					
					// Opens Order Recieved Confirmation Modal
					var displayModal = new bootstrap.Modal(document.getElementById('orderRecievedConfirmationModal'))
					displayModal.show()
				
					// Emptys Bookings
					emptyBookings();
				
				}
				

	</script>
  
</html>