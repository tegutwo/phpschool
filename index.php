<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/style/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="app">

	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="#">
					<i class="ph-browsers"></i>
					<span>Dashboard</span>
				</a>
				<a href="#">
					<i class="ph-check-square"></i>
					<span>Appointments</span>
				</a>
				<a href="#">
					<i class="ph-swap"></i>
					<span>Tickets</span>
				</a>
			</nav>
			<footer class="footer">
				<h1>Ticket Based<small>©</small></h1>
				<nav class="navigation">
				<a href="#">
					<i class="ph-browsers"></i>
					<span>Log Out</span>
				</a>
			</nav>
			</footer>
		</div>
		<div class="dashboard-secondary-navbar">
	<div>
	<div class="infographics">
		<div class="card_square" style="background-color: var(--c-olive-500);">
			<small>Issues Solved</small>
			<h1>13</h1>
		</div>
		<div class="card_rectange" >
			<div class="card_square" style="background-color: var(--c-blue-400);">
			<small>Appointments Attended</small>
			<h1>10</h1>
			</div>
			<div class="card_square" style="background-color: var(--c-red-400);">
			<small>Appointment Missed</small>
			<h1>2</h1>
			</div>
		</div>
		<div class="card_square" style="background-color: var(--c-white);">
			<small></small>
			<small>Active Appointments</small>
			<h1>0</h1>
		</div>
	</div>
	<h1>History</h1>
	<div class="dashboard-secondary-navbar-navigation">
		<div class="tabs">
			<a href="#" class="active">
				Tickets
			</a>
			<a href="#" >
				Appointment
				<!-- Date Time title attended -->
			</a>
			<!-- <a href="#">
				Feedback

			</a> -->
		</div>

	</div>
	<div class="data">
	<div class="transfers">
					<div class="transfer">	
						<dl class="transfer-details">
							<div>
								<dt>30 Jan 2024</dt>
								<dd>Date Raised</dd>
							</div>
							<div>
								<dt>Payment Issue</dt>
								<dd>Category</dd>
							</div>
							<div>
								<dt>Fee Not Reflecting in Portal</dt>
								<dd>Details</dd>
							</div>
						</dl>
						<div class="transfer-number" style="color:green;">
							Open
						</div>
					</div>
					<div class="transfer">	
						<dl class="transfer-details">
							<div>
								<dt>28 Jan 2024</dt>
								<dd>Date Raised</dd>
							</div>
							<div>
								<dt>Portal Issue</dt>
								<dd>Category</dd>
							</div>
							<div>
								<dt>Units not Reflecting</dt>
								<dd>Details</dd>
							</div>
						</dl>
						<div class="transfer-number" style="color:red;">
							Closed
						</div>
					</div>
					<div class="transfer">	
						<dl class="transfer-details">
							<div>
								<dt>19 Dec 2023</dt>
								<dd>Date Raised</dd>
							</div>
							<div>
								<dt>Exam Card</dt>
								<dd>Category</dd>
							</div>
							<div>
								<dt>Unable to download Exam card</dt>
								<dd>Details</dd>
							</div>
						</dl>
						<div class="transfer-number" style="color:red;">
							Closed
						</div>
					</div>
					
				</div>
	</div>
	</div>
	
</div>
	</div>
</div>
</body>
</html>