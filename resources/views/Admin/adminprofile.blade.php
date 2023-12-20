﻿<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <title>Employee Profile - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		<link rel="stylesheet" href="assets/css/material.css">

		<!-- Datatable CSS -->
		<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Tagsinput CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		 
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                     <a href="admin-dashboard.html" class="logo">
						<img src="assets/img/logo.png" width="40" height="40" alt="Logo">
					</a>
					<a href="admin-dashboard.html" class="logo2">
						<img src="assets/img/logo2.png" width="40" height="40" alt="Logo">
					</a>
                </div>
				<!-- /Logo -->
				
				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>
				
				<!-- Header Title -->
                <div class="page-title-box">
					<h3>Dreamguy's Technologies</h3>
                </div>
				<!-- /Header Title -->
				
				<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa-solid fa-bars"></i></a>
				
				<!-- Header Menu -->
				<ul class="nav user-menu">
				
					<!-- Search -->
					<li class="nav-item">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa-solid fa-magnifying-glass"></i>
						   </a>
							<form action="search.html">
								<input class="form-control" type="text" placeholder="Search here">
								<button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
							</form>
						</div>
					</li>
					<!-- /Search -->
				
					<!-- Flag -->
					<li class="nav-item dropdown has-arrow flag-nav">
						<a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
							<img src="assets/img/flags/us.png" alt="Flag" height="20"> <span>English</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/us.png" alt="Flag" height="16"> English
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/fr.png" alt="Flag" height="16"> French
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/es.png" alt="Flag" height="16"> Spanish
							</a>
							<a href="javascript:void(0);" class="dropdown-item">
								<img src="assets/img/flags/de.png" alt="Flag" height="16"> German
							</a>
						</div>
					</li>
					<!-- /Flag -->
				
					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fa-regular fa-bell"></i> <span class="badge rounded-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="activities.html">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-03.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-06.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-17.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="activities.html">
											<div class="chat-block d-flex">
												<span class="avatar flex-shrink-0">
													<img src="assets/img/profiles/avatar-13.jpg" alt="User Image">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.html">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- Message Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="fa-regular fa-comment"></i> <span class="badge rounded-pill">8</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Messages</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-09.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Richard Miles </span>
													<span class="message-time">12:28 AM</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-02.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">John Doe</span>
													<span class="message-time">6 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-03.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Tarah Shropshire </span>
													<span class="message-time">5 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-05.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author">Mike Litorus</span>
													<span class="message-time">3 Mar</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="chat.html">
											<div class="list-item">
												<div class="list-left">
													<span class="avatar">
														<img src="assets/img/profiles/avatar-08.jpg" alt="User Image">
													</span>
												</div>
												<div class="list-body">
													<span class="message-author"> Catherine Manseau </span>
													<span class="message-time">27 Feb</span>
													<div class="clearfix"></div>
													<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="chat.html">View all Messages</a>
							</div>
						</div>
					</li>
					<!-- /Message Notifications -->

					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="User Image">
							<span class="status online"></span></span>
							<span>Admin</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="profile.html">My Profile</a>
							<a class="dropdown-item" href="settings.html">Settings</a>
							<a class="dropdown-item" href="index.html">Logout</a>
						</div>
					</li>
				</ul>
				<!-- /Header Menu -->
				
				<!-- Mobile Menu -->
				<div class="dropdown mobile-user-menu">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						<a class="dropdown-item" href="index.html">Logout</a>
					</div>
				</div>
				<!-- /Mobile Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<nav class="greedys sidebar-horizantal">
							<ul class="list-inline-item list-unstyled links">
								<li class="menu-title"> 
									<span>Main</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="admin-dashboard.html">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu">
											<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="outgoing-call.html">Outgoing Call</a></li>
												<li><a href="incoming-call.html">Incoming Call</a></li>
											</ul>
										</li>
										<li><a href="events.html">Calendar</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="inbox.html">Email</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Employees</span>
								</li>
								<li class="submenu">
									<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employees.html">All Employees</a></li>
										<li><a href="holidays.html">Holidays</a></li>
										<li><a href="leaves.html">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
										<li><a href="leaves-employee.html">Leaves (Employee)</a></li>
										<li><a href="leave-settings.html">Leave Settings</a></li>
										<li><a href="attendance.html">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
										<li><a href="departments.html">Departments</a></li>
										<li><a href="designations.html">Designations</a></li>
										<li><a href="timesheet.html">Timesheet</a></li>
										<li><a href="shift-scheduling.html">Shift & Schedule</a></li>
										<li><a href="overtime.html">Overtime</a></li>
									</ul>
								</li>
								<li> 
									<a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="projects.html">Projects</a></li>
										<li><a href="tasks.html">Tasks</a></li>
										<li><a href="task-board.html">Task Board</a></li>
									</ul>
								</li>
								<li> 
									<a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
								</li>
								<li> 
									<a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
								</li>
								<li class="menu-title"> 
									<span>HR</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="estimates.html">Estimates</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="payments.html">Payments</a></li>
										<li><a href="expenses.html">Expenses</a></li>
										<li><a href="provident-fund.html">Provident Fund</a></li>
										<li><a href="taxes.html">Taxes</a></li>
									</ul>
								</li>
							</ul>
							<button class="viewmoremenu">More Menu</button>
							<ul class="hidden-links hidden">
								<li class="submenu">
									<a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="budgets.html">Budgets</a></li>
										<li><a href="budget-expenses.html">Budget Expenses</a></li>
										<li><a href="budget-revenues.html">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="salary.html"> Employee Salary </a></li>
										<li><a href="salary-view.html"> Payslip </a></li>
										<li><a href="payroll-items.html"> Payroll Items </a></li>
									</ul>
								</li>
								<li> 
									<a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-reports.html"> Expense Report </a></li>
										<li><a href="invoice-reports.html"> Invoice Report </a></li>
										<li><a href="payments-reports.html"> Payments Report </a></li>
										<li><a href="project-reports.html"> Project Report </a></li>
										<li><a href="task-reports.html"> Task Report </a></li>
										<li><a href="user-reports.html"> User Report </a></li>
										<li><a href="employee-reports.html"> Employee Report </a></li>
										<li><a href="payslip-reports.html"> Payslip Report </a></li>
										<li><a href="attendance-reports.html"> Attendance Report </a></li>
										<li><a href="leave-reports.html"> Leave Report </a></li>
										<li><a href="daily-reports.html"> Daily Report </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Performance</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="performance-indicator.html"> Performance Indicator </a></li>
										<li><a href="performance.html"> Performance Review </a></li>
										<li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="goal-tracking.html"> Goal List </a></li>
										<li><a href="goal-type.html"> Goal Type </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="training.html"> Training List </a></li>
										<li><a href="trainers.html"> Trainers</a></li>
										<li><a href="training-type.html"> Training Type </a></li>
									</ul>
								</li>
								<li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
								<li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
								<li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
								<li class="menu-title"> 
									<span>Administration</span>
								</li>
								<li> 
									<a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="user-dashboard.html"> User Dasboard </a></li>
										<li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
										<li><a href="jobs.html"> Manage Jobs </a></li>
										<li><a href="manage-resumes.html"> Manage Resumes </a></li>
										<li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
										<li><a href="interview-questions.html"> Interview Questions </a></li>
										<li><a href="offer_approvals.html"> Offer Approvals </a></li>
										<li><a href="experiance-level.html"> Experience Level </a></li>
										<li><a href="candidates.html"> Candidates List </a></li>
										<li><a href="schedule-timing.html"> Schedule timing </a></li>
										<li><a href="apptitude-result.html"> Aptitude Results </a></li>
									</ul>
								</li>
								<li> 
									<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
								</li>
								<li> 
									<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
								</li>
								<li> 
									<a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
								</li>
								<li> 
									<a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
								</li>
								<li class="menu-title"> 
									<span>Pages</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="profile.html"> Employee Profile </a></li>
										<li><a href="client-profile.html"> Client Profile </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index.html"> Login </a></li>
										<li><a href="register.html"> Register </a></li>
										<li><a href="forgot-password.html"> Forgot Password </a></li>
										<li><a href="otp.html"> OTP </a></li>
										<li><a href="lock-screen.html"> Lock Screen </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.html">404 Error </a></li>
										<li><a href="error-500.html">500 Error </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
										<li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
										<li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="search.html"> Search </a></li>
										<li><a href="faq.html"> FAQ </a></li>
										<li><a href="terms.html"> Terms </a></li>
										<li><a href="privacy-policy.html"> Privacy Policy </a></li>
										<li><a href="blank-page.html"> Blank Page </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>UI Interface</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-get-pocket"></i> <span> Base UI </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="alerts.html">Alerts</a></li>                                    
										<li><a href="accordions.html">Accordions</a></li>
										<li><a href="avatar.html">Avatar</a></li> 
										<li><a href="badges.html">Badges</a></li>
										<li><a href="buttons.html">Buttons</a></li>   
										<li><a href="buttongroup.html">Button Group</a></li>                                  
										<li><a href="breadcrumbs.html">Breadcrumb</a></li>
										<li><a href="cards.html">Cards</a></li>
										<li><a href="carousel.html">Carousel</a></li>                                   
										<li><a href="dropdowns.html">Dropdowns</a></li>
										<li><a href="grid.html">Grid</a></li>
										<li><a href="images.html">Images</a></li>
										<li><a href="lightbox.html">Lightbox</a></li>
										<li><a href="media.html">Media</a></li>                              
										<li><a href="modal.html">Modals</a></li>
										<li><a href="offcanvas.html">Offcanvas</a></li>
										<li><a href="pagination.html">Pagination</a></li>
										<li><a href="popover.html">Popover</a></li>                                    
										<li><a href="progress.html">Progress Bars</a></li>
										<li><a href="placeholders.html">Placeholders</a></li>
										<li><a href="rangeslider.html">Range Slider</a></li>                                    
										<li><a href="spinners.html">Spinner</a></li>
										<li><a href="sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="tab.html">Tabs</a></li>
										<li><a href="toastr.html">Toasts</a></li>
										<li><a href="tooltip.html">Tooltip</a></li>
										<li><a href="typography.html">Typography</a></li>
										<li><a href="video.html">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-dropbox"></i> <span> Elements </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="ribbon.html">Ribbon</a></li>
										<li><a href="clipboard.html">Clipboard</a></li>
										<li><a href="drag-drop.html">Drag & Drop</a></li>
										<li><a href="rating.html">Rating</a></li>
										<li><a href="text-editor.html">Text Editor</a></li>
										<li><a href="counter.html">Counter</a></li>
										<li><a href="scrollbar.html">Scrollbar</a></li>
										<li><a href="notification.html">Notification</a></li>
										<li><a href="stickynote.html">Sticky Note</a></li>
										<li><a href="timeline.html">Timeline</a></li>
										<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
										<li><a href="form-wizard.html">Form Wizard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-chart-bar"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.html">Apex Charts</a></li>
										<li><a href="chart-js.html">Chart Js</a></li>
										<li><a href="chart-morris.html">Morris Charts</a></li>
										<li><a href="chart-flot.html">Flot Charts</a></li>
										<li><a href="chart-peity.html">Peity Charts</a></li>
										<li><a href="chart-c3.html">C3 Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-icons"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
										<li><a href="form-input-groups.html">Input Groups </a></li>
										<li><a href="form-horizontal.html">Horizontal Form </a></li>
										<li><a href="form-vertical.html"> Vertical Form </a></li>
										<li><a href="form-mask.html"> Form Mask </a></li>
										<li><a href="form-validation.html"> Form Validation </a></li>
										<li><a href="form-select2.html">Form Select2 </a></li>
										<li><a href="form-fileupload.html">File Upload </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.html">Basic Tables </a></li>
										<li><a href="data-tables.html">Data Table </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Extras</span>
								</li>
								<li> 
									<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
								</li>
								<li> 
									<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v3.4</span></a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
												<li class="submenu">
													<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3</a></li>
														<li><a href="javascript:void(0);">Level 3</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0);"> <span>Level 1</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
						<ul class="sidebar-vertical">
								<li class="menu-title"> 
									<span>Main</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="admin-dashboard.html">Admin Dashboard</a></li>
										<li><a href="employee-dashboard.html">Employee Dashboard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu">
											<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="outgoing-call.html">Outgoing Call</a></li>
												<li><a href="incoming-call.html">Incoming Call</a></li>
											</ul>
										</li>
										<li><a href="events.html">Calendar</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="inbox.html">Email</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Employees</span>
								</li>
								<li class="submenu">
									<a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="employees.html">All Employees</a></li>
										<li><a href="holidays.html">Holidays</a></li>
										<li><a href="leaves.html">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
										<li><a href="leaves-employee.html">Leaves (Employee)</a></li>
										<li><a href="leave-settings.html">Leave Settings</a></li>
										<li><a href="attendance.html">Attendance (Admin)</a></li>
										<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
										<li><a href="departments.html">Departments</a></li>
										<li><a href="designations.html">Designations</a></li>
										<li><a href="timesheet.html">Timesheet</a></li>
										<li><a href="shift-scheduling.html">Shift & Schedule</a></li>
										<li><a href="overtime.html">Overtime</a></li>
									</ul>
								</li>
								<li> 
									<a href="clients.html"><i class="la la-users"></i> <span>Clients</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="projects.html">Projects</a></li>
										<li><a href="tasks.html">Tasks</a></li>
										<li><a href="task-board.html">Task Board</a></li>
									</ul>
								</li>
								<li> 
									<a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
								</li>
								<li> 
									<a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
								</li>
								<li class="menu-title"> 
									<span>HR</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="estimates.html">Estimates</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="payments.html">Payments</a></li>
										<li><a href="expenses.html">Expenses</a></li>
										<li><a href="provident-fund.html">Provident Fund</a></li>
										<li><a href="taxes.html">Taxes</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="categories.html">Categories</a></li>
										<li><a href="budgets.html">Budgets</a></li>
										<li><a href="budget-expenses.html">Budget Expenses</a></li>
										<li><a href="budget-revenues.html">Budget Revenues</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="salary.html"> Employee Salary </a></li>
										<li><a href="salary-view.html"> Payslip </a></li>
										<li><a href="payroll-items.html"> Payroll Items </a></li>
									</ul>
								</li>
								<li> 
									<a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="expense-reports.html"> Expense Report </a></li>
										<li><a href="invoice-reports.html"> Invoice Report </a></li>
										<li><a href="payments-reports.html"> Payments Report </a></li>
										<li><a href="project-reports.html"> Project Report </a></li>
										<li><a href="task-reports.html"> Task Report </a></li>
										<li><a href="user-reports.html"> User Report </a></li>
										<li><a href="employee-reports.html"> Employee Report </a></li>
										<li><a href="payslip-reports.html"> Payslip Report </a></li>
										<li><a href="attendance-reports.html"> Attendance Report </a></li>
										<li><a href="leave-reports.html"> Leave Report </a></li>
										<li><a href="daily-reports.html"> Daily Report </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Performance</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="performance-indicator.html"> Performance Indicator </a></li>
										<li><a href="performance.html"> Performance Review </a></li>
										<li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="goal-tracking.html"> Goal List </a></li>
										<li><a href="goal-type.html"> Goal Type </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="training.html"> Training List </a></li>
										<li><a href="trainers.html"> Trainers</a></li>
										<li><a href="training-type.html"> Training Type </a></li>
									</ul>
								</li>
								<li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
								<li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
								<li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
								<li class="menu-title"> 
									<span>Administration</span>
								</li>
								<li> 
									<a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="user-dashboard.html"> User Dasboard </a></li>
										<li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
										<li><a href="jobs.html"> Manage Jobs </a></li>
										<li><a href="manage-resumes.html"> Manage Resumes </a></li>
										<li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
										<li><a href="interview-questions.html"> Interview Questions </a></li>
										<li><a href="offer_approvals.html"> Offer Approvals </a></li>
										<li><a href="experiance-level.html"> Experience Level </a></li>
										<li><a href="candidates.html"> Candidates List </a></li>
										<li><a href="schedule-timing.html"> Schedule timing </a></li>
										<li><a href="apptitude-result.html"> Aptitude Results </a></li>
									</ul>
								</li>
								<li> 
									<a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
								</li>
								<li> 
									<a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
								</li>
								<li> 
									<a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
								</li>
								<li> 
									<a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
								</li>
								<li class="menu-title"> 
									<span>Pages</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-user"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a class="active" href="profile.html"> Employee Profile </a></li>
										<li><a href="client-profile.html"> Client Profile </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-key"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index.html"> Login </a></li>
										<li><a href="register.html"> Register </a></li>
										<li><a href="forgot-password.html"> Forgot Password </a></li>
										<li><a href="otp.html"> OTP </a></li>
										<li><a href="lock-screen.html"> Lock Screen </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="error-404.html">404 Error </a></li>
										<li><a href="error-500.html">500 Error </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
										<li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
										<li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-columns"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="search.html"> Search </a></li>
										<li><a href="faq.html"> FAQ </a></li>
										<li><a href="terms.html"> Terms </a></li>
										<li><a href="privacy-policy.html"> Privacy Policy </a></li>
										<li><a href="blank-page.html"> Blank Page </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>UI Interface</span>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-get-pocket"></i> <span> Base UI </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="alerts.html">Alerts</a></li>                                    
										<li><a href="accordions.html">Accordions</a></li>
										<li><a href="avatar.html">Avatar</a></li> 
										<li><a href="badges.html">Badges</a></li>
										<li><a href="buttons.html">Buttons</a></li>   
										<li><a href="buttongroup.html">Button Group</a></li>                                  
										<li><a href="breadcrumbs.html">Breadcrumb</a></li>
										<li><a href="cards.html">Cards</a></li>
										<li><a href="carousel.html">Carousel</a></li>                                   
										<li><a href="dropdowns.html">Dropdowns</a></li>
										<li><a href="grid.html">Grid</a></li>
										<li><a href="images.html">Images</a></li>
										<li><a href="lightbox.html">Lightbox</a></li>
										<li><a href="media.html">Media</a></li>                              
										<li><a href="modal.html">Modals</a></li>
										<li><a href="offcanvas.html">Offcanvas</a></li>
										<li><a href="pagination.html">Pagination</a></li>
										<li><a href="popover.html">Popover</a></li>                                    
										<li><a href="progress.html">Progress Bars</a></li>
										<li><a href="placeholders.html">Placeholders</a></li>
										<li><a href="rangeslider.html">Range Slider</a></li>                                    
										<li><a href="spinners.html">Spinner</a></li>
										<li><a href="sweetalerts.html">Sweet Alerts</a></li>
										<li><a href="tab.html">Tabs</a></li>
										<li><a href="toastr.html">Toasts</a></li>
										<li><a href="tooltip.html">Tooltip</a></li>
										<li><a href="typography.html">Typography</a></li>
										<li><a href="video.html">Video</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-dropbox"></i> <span> Elements </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="ribbon.html">Ribbon</a></li>
										<li><a href="clipboard.html">Clipboard</a></li>
										<li><a href="drag-drop.html">Drag & Drop</a></li>
										<li><a href="rating.html">Rating</a></li>
										<li><a href="text-editor.html">Text Editor</a></li>
										<li><a href="counter.html">Counter</a></li>
										<li><a href="scrollbar.html">Scrollbar</a></li>
										<li><a href="notification.html">Notification</a></li>
										<li><a href="stickynote.html">Sticky Note</a></li>
										<li><a href="timeline.html">Timeline</a></li>
										<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
										<li><a href="form-wizard.html">Form Wizard</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-chart-bar"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="chart-apex.html">Apex Charts</a></li>
										<li><a href="chart-js.html">Chart Js</a></li>
										<li><a href="chart-morris.html">Morris Charts</a></li>
										<li><a href="chart-flot.html">Flot Charts</a></li>
										<li><a href="chart-peity.html">Peity Charts</a></li>
										<li><a href="chart-c3.html">C3 Charts</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-icons"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
										<li><a href="form-input-groups.html">Input Groups </a></li>
										<li><a href="form-horizontal.html">Horizontal Form </a></li>
										<li><a href="form-vertical.html"> Vertical Form </a></li>
										<li><a href="form-mask.html"> Form Mask </a></li>
										<li><a href="form-validation.html"> Form Validation </a></li>
										<li><a href="form-select2.html">Form Select2 </a></li>
										<li><a href="form-fileupload.html">File Upload </a></li>
									</ul>
								</li>
								<li class="submenu">
									<a href="#"><i class="la la-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="tables-basic.html">Basic Tables </a></li>
										<li><a href="data-tables.html">Data Table </a></li>
									</ul>
								</li>
								<li class="menu-title"> 
									<span>Extras</span>
								</li>
								<li> 
									<a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
								</li>
								<li> 
									<a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span class="badge badge-primary ms-auto">v3.4</span></a>
								</li>
								<li class="submenu">
									<a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
									<ul>
										<li class="submenu">
											<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
												<li class="submenu">
													<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 3</a></li>
														<li><a href="javascript:void(0);">Level 3</a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:void(0);"> <span>Level 1</span></a>
										</li>
									</ul>
								</li>
							</ul>
							
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Two Col Sidebar -->
			<div class="two-col-bar" id="two-col-bar">
				<div class="sidebar sidebar-twocol">
					<div class="sidebar-left slimscroll">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<a class="nav-link" id="v-pills-dashboard-tab" title="Dashboard" data-bs-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true">
								<span class="material-icons-outlined">
									home
								</span>
							</a>
							<a class="nav-link" id="v-pills-apps-tab" title="Apps" data-bs-toggle="pill" href="#v-pills-apps" role="tab" aria-controls="v-pills-apps" aria-selected="false">
								<span class="material-icons-outlined">
									dashboard
								</span>
							</a>
							<a class="nav-link" id="v-pills-employees-tab" title="Employees" data-bs-toggle="pill" href="#v-pills-employees" role="tab" aria-controls="v-pills-employees" aria-selected="false">
								<span class="material-icons-outlined">
									people
								</span>
							</a>
							<a class="nav-link" id="v-pills-clients-tab" title="Clients" data-bs-toggle="pill" href="#v-pills-clients" role="tab" aria-controls="v-pills-clients" aria-selected="false">
								<span class="material-icons-outlined">
									person
								</span>
							</a>
							<a class="nav-link" id="v-pills-projects-tab" title="Projects" data-bs-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">
								<span class="material-icons-outlined">
									topic
								</span>
							</a>
							<a class="nav-link" id="v-pills-leads-tab" title="Leads" data-bs-toggle="pill" href="#v-pills-leads" role="tab" aria-controls="v-pills-leads" aria-selected="false">
								<span class="material-icons-outlined">
									leaderboard
								</span>
							</a>
							<a class="nav-link" id="v-pills-tickets-tab" title="Tickets" data-bs-toggle="pill" href="#v-pills-tickets" role="tab" aria-controls="v-pills-tickets" aria-selected="false">
								<span class="material-icons-outlined">
									confirmation_number
								</span>
							</a>
							<a class="nav-link" id="v-pills-sales-tab" title="Sales" data-bs-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">
								<span class="material-icons-outlined">
									shopping_bag
								</span>
							</a>
							<a class="nav-link" id="v-pills-accounting-tab" title="Accounting" data-bs-toggle="pill" href="#v-pills-accounting" role="tab" aria-controls="v-pills-accounting" aria-selected="false">
								<span class="material-icons-outlined">
									account_balance_wallet
								</span>
							</a>
							<a class="nav-link" id="v-pills-payroll-tab" title="Payroll" data-bs-toggle="pill" href="#v-pills-payroll" role="tab" aria-controls="v-pills-payroll" aria-selected="false">
								<span class="material-icons-outlined">
									request_quote
								</span>
							</a>
						 
							<a class="nav-link" id="v-pills-policies-tab" title="Policies" data-bs-toggle="pill" href="#v-pills-policies" role="tab" aria-controls="v-pills-policies" aria-selected="false">
								<span class="material-icons-outlined">
									verified_user
								</span>
							</a>
							<a class="nav-link" id="v-pills-reports-tab" title="Reports" data-bs-toggle="pill" href="#v-pills-reports" role="tab" aria-controls="v-pills-reports" aria-selected="false">
								<span class="material-icons-outlined">
									report_gmailerrorred
								</span>
							</a>
							<a class="nav-link" id="v-pills-performance-tab" title="Performance" data-bs-toggle="pill" href="#v-pills-performance" role="tab" aria-controls="v-pills-performance" aria-selected="false">
								<span class="material-icons-outlined">
									shutter_speed
								</span>
							</a>
							<a class="nav-link" id="v-pills-goals-tab" title="Goals" data-bs-toggle="pill" href="#v-pills-goals" role="tab" aria-controls="v-pills-goals" aria-selected="false">
								<span class="material-icons-outlined">
									track_changes
								</span>
							</a>
							<a class="nav-link" id="v-pills-training-tab" title="Training" data-bs-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training" aria-selected="false">
								<span class="material-icons-outlined">
									checklist_rtl
								</span>
							</a>
							<a class="nav-link" id="v-pills-promotion-tab" title="Promotions" data-bs-toggle="pill" href="#v-pills-promotion" role="tab" aria-controls="v-pills-promotion" aria-selected="false">
								<span class="material-icons-outlined">
									auto_graph
								</span>
							</a>
							<a class="nav-link" id="v-pills-resignation-tab" title="Resignation" data-bs-toggle="pill" href="#v-pills-resignation" role="tab" aria-controls="v-pills-resignation" aria-selected="false">
								<span class="material-icons-outlined">
									do_not_disturb_alt
								</span>
							</a>
							<a class="nav-link" id="v-pills-termination-tab" title="Termination" data-bs-toggle="pill" href="#v-pills-termination" role="tab" aria-controls="v-pills-termination" aria-selected="false">
								<span class="material-icons-outlined">
									indeterminate_check_box
								</span>
							</a>
							<a class="nav-link" id="v-pills-assets-tab" title="Assets" data-bs-toggle="pill" href="#v-pills-assets" role="tab" aria-controls="v-pills-assets" aria-selected="false">
								<span class="material-icons-outlined">
									web_asset
								</span>
							</a>
							<a class="nav-link " id="v-pills-jobs-tab" title="Jobs" data-bs-toggle="pill" href="#v-pills-jobs" role="tab" aria-controls="v-pills-jobs" aria-selected="false">
								<span class="material-icons-outlined">
									work_outline
								</span>
							</a>
							<a class="nav-link" id="v-pills-knowledgebase-tab" title="Knowledgebase" data-bs-toggle="pill" href="#v-pills-knowledgebase" role="tab" aria-controls="v-pills-knowledgebase" aria-selected="false">
								<span class="material-icons-outlined">
									school
								</span>
							</a>
							<a class="nav-link" id="v-pills-activities-tab" title="Activities" data-bs-toggle="pill" href="#v-pills-activities" role="tab" aria-controls="v-pills-activities" aria-selected="false">
								<span class="material-icons-outlined">
									toggle_off
								</span>
							</a>
							<a class="nav-link" id="v-pills-users-tab" title="Users" data-bs-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">
								<span class="material-icons-outlined">
									group_add
								</span>
							</a>
							<a class="nav-link " id="v-pills-settings-tab" title="Settings" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
								<span class="material-icons-outlined">
									settings
								</span>
							</a>
							<a class="nav-link active" id="v-pills-profile-tab" title="Profile" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
								<span class="material-icons-outlined">
									manage_accounts
								</span>
							</a>
							<a class="nav-link" id="v-pills-authentication-tab" title="Authentication" data-bs-toggle="pill" href="#v-pills-authentication" role="tab" aria-controls="v-pills-authentication" aria-selected="false">
								<span class="material-icons-outlined">
									perm_contact_calendar
								</span>
							</a>
							<a class="nav-link" id="v-pills-errorpages-tab" title="Error Pages" data-bs-toggle="pill" href="#v-pills-errorpages" role="tab" aria-controls="v-pills-errorpages" aria-selected="false">
								<span class="material-icons-outlined">
									announcement
								</span>
							</a>
							<a class="nav-link" id="v-pills-subscriptions-tab" title="Subscriptions" data-bs-toggle="pill" href="#v-pills-subscriptions" role="tab" aria-controls="v-pills-subscriptions" aria-selected="false">
								<span class="material-icons-outlined">
									loyalty
								</span>
							</a>
							<a class="nav-link" id="v-pills-pages-tab" title="Pages" data-bs-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false">
								<span class="material-icons-outlined">
									layers
								</span>
							</a>
							<a class="nav-link" id="v-pills-baseui-tab" title="Base-UI" data-bs-toggle="pill" href="#v-pills-baseui" role="tab" aria-controls="v-pills-baseui" aria-selected="false">
								<span class="material-icons-outlined">
									foundation
								</span>
							</a>
							<a class="nav-link" id="v-pills-elements-tab" title="Elements" data-bs-toggle="pill" href="#v-pills-elements" role="tab" aria-controls="v-pills-elements" aria-selected="false">
								<span class="material-icons-outlined">
									bento
								</span>
							</a>
							<a class="nav-link" id="v-pills-charts-tab" title="Charts" data-bs-toggle="pill" href="#v-pills-charts" role="tab" aria-controls="v-pills-charts" aria-selected="false">
								<span class="material-icons-outlined">
									bar_chart
								</span>
							</a>
							<a class="nav-link" id="v-pills-icons-tab" title="Icons" data-bs-toggle="pill" href="#v-pills-icons" role="tab" aria-controls="v-pills-icons" aria-selected="false">
								<span class="material-icons-outlined">
									grading
								</span>
							</a>
							<a class="nav-link" id="v-pills-forms-tab" title="Forms" data-bs-toggle="pill" href="#v-pills-forms" role="tab" aria-controls="v-pills-forms" aria-selected="false">
								<span class="material-icons-outlined">
									view_day
								</span>
							</a>
							<a class="nav-link" id="v-pills-tables-tab" title="Tables" data-bs-toggle="pill" href="#v-pills-tables" role="tab" aria-controls="v-pills-tables" aria-selected="false">
								<span class="material-icons-outlined">
									table_rows
								</span>
							</a>
							<a class="nav-link" id="v-pills-documentation-tab" title="Documentation" data-bs-toggle="pill" href="#v-pills-documentation" role="tab" aria-controls="v-pills-documentation" aria-selected="false">
								<span class="material-icons-outlined">
									description
								</span>
							</a>
							<a class="nav-link" id="v-pills-changelog-tab" title="Changelog" data-bs-toggle="pill" href="#v-pills-changelog" role="tab" aria-controls="v-pills-changelog" aria-selected="false">
								<span class="material-icons-outlined">
									sync_alt
								</span>
							</a>
							<a class="nav-link" id="v-pills-multilevel-tab" title="Multilevel" data-bs-toggle="pill" href="#v-pills-multilevel" role="tab" aria-controls="v-pills-multilevel" aria-selected="false">
								<span class="material-icons-outlined">
									library_add_check
								</span>
							</a>
						</div>
					</div>
					
					<div class="sidebar-right">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
								<p>Dashboard</p>
								<ul>
									<li>
										<a href="admin-dashboard.html">Admin Dashboard</a>
									</li>
									<li>
										<a href="employee-dashboard.html">Employee Dashboard</a>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-apps" role="tabpanel" aria-labelledby="v-pills-apps-tab">
								<p>App</p>
								<ul>
									<li>
										<a href="chat.html">Chat</a>
									</li>
									<li class="sub-menu">
										<a href="#">Calls <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="voice-call.html">Voice Call</a></li>
											<li><a href="video-call.html">Video Call</a></li>
											<li><a href="outgoing-call.html">Outgoing Call</a></li>
											<li><a href="incoming-call.html">Incoming Call</a></li>
										</ul>
									</li>
									<li>
										<a href="calender.html">Calendar</a>
									</li>
									<li>
										<a href="contacts.html">Contacts</a>
									</li>
									<li>
										<a href="inbox.html">Email</a>
									</li>
									<li>
										<a href="file-manager.html">File Manager</a>
									</li>
								</ul>						
							</div>
							<div class="tab-pane fade" id="v-pills-employees" role="tabpanel" aria-labelledby="v-pills-employees-tab">
								<p>Employees</p>
								<ul>
									<li><a href="employees.html">All Employees</a></li>
									<li><a href="holidays.html">Holidays</a></li>
									<li><a href="leaves.html">Leaves (Admin) <span class="badge rounded-pill bg-primary float-end">1</span></a></li>
									<li><a href="leaves-employee.html">Leaves (Employee)</a></li>
									<li><a href="leave-settings.html">Leave Settings</a></li>
									<li><a href="attendance.html">Attendance (Admin)</a></li>
									<li><a href="attendance-employee.html">Attendance (Employee)</a></li>
									<li><a href="departments.html">Departments</a></li>
									<li><a href="designations.html">Designations</a></li>
									<li><a href="timesheet.html">Timesheet</a></li>
									<li><a href="shift-scheduling.html">Shift & Schedule</a></li>
									<li><a href="overtime.html">Overtime</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab">
								<p>Clients</p>
								<ul>
									<li><a href="clients.html">Clients</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">
								<p>Projects</p>
								<ul>
									<li><a href="projects.html">Projects</a></li>
									<li><a href="tasks.html">Tasks</a></li>
									<li><a href="task-board.html">Task Board</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-leads" role="tabpanel" aria-labelledby="v-pills-leads-tab">
								<p>Leads</p>
								<ul>
									<li><a href="leads.html">Leads</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-tickets" role="tabpanel" aria-labelledby="v-pills-tickets-tab">
								<p>Tickets</p>
								<ul>
									<li><a href="tickets.html">Tickets</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
								<p>Sales</p>
								<ul>
									<li><a href="estimates.html">Estimates</a></li>
									<li><a href="invoices.html">Invoices</a></li>
									<li><a href="payments.html">Payments</a></li>
									<li><a href="expenses.html">Expenses</a></li>
									<li><a href="provident-fund.html">Provident Fund</a></li>
									<li><a href="taxes.html">Taxes</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-accounting" role="tabpanel" aria-labelledby="v-pills-accounting-tab">
								<p>Accounting</p>
								<ul>
									<li><a href="categories.html">Categories</a></li>
									<li><a href="budgets.html">Budgets</a></li>
									<li><a href="budget-expenses.html">Budget Expenses</a></li>
									<li><a href="budget-revenues.html">Budget Revenues</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-payroll" role="tabpanel" aria-labelledby="v-pills-payroll-tab">
								<p>Payroll</p>
								<ul>
									<li><a href="salary.html"> Employee Salary </a></li>
									<li><a href="salary-view.html"> Payslip </a></li>
									<li><a href="payroll-items.html"> Payroll Items </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-policies" role="tabpanel" aria-labelledby="v-pills-policies-tab">
								<p>Policies</p>
								<ul>
									<li><a href="policies.html"> Policies </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-reports" role="tabpanel" aria-labelledby="v-pills-reports-tab">
								<p>Reports</p>
								<ul>
									<li><a href="expense-reports.html"> Expense Report </a></li>
									<li><a href="invoice-reports.html"> Invoice Report </a></li>
									<li><a href="payments-reports.html"> Payments Report </a></li>
									<li><a href="project-reports.html"> Project Report </a></li>
									<li><a href="task-reports.html"> Task Report </a></li>
									<li><a href="user-reports.html"> User Report </a></li>
									<li><a href="employee-reports.html"> Employee Report </a></li>
									<li><a href="payslip-reports.html"> Payslip Report </a></li>
									<li><a href="attendance-reports.html"> Attendance Report </a></li>
									<li><a href="leave-reports.html"> Leave Report </a></li>
									<li><a href="daily-reports.html"> Daily Report </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-performance" role="tabpanel" aria-labelledby="v-pills-performance-tab">
								<p>Performance</p>
								<ul>
									<li><a href="performance-indicator.html"> Performance Indicator </a></li>
									<li><a href="performance.html"> Performance Review </a></li>
									<li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-goals" role="tabpanel" aria-labelledby="v-pills-goals-tab">
								<p>Goals</p>
								<ul>
									<li><a href="goal-tracking.html"> Goal List </a></li>
									<li><a href="goal-type.html"> Goal Type </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab">
								<p>Training</p>
								<ul>
									<li><a href="training.html"> Training List </a></li>
									<li><a href="trainers.html"> Trainers</a></li>
									<li><a href="training-type.html"> Training Type </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-promotion" role="tabpanel" aria-labelledby="v-pills-promotion-tab">
								<p>Promotion</p>
								<ul>
									<li><a href="promotion.html"> Promotion </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-resignation" role="tabpanel" aria-labelledby="v-pills-resignation-tab">
								<p>Resignation</p>
								<ul>
									<li><a href="resignation.html"> Resignation </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-termination" role="tabpanel" aria-labelledby="v-pills-termination-tab">
								<p>Termination</p>
								<ul>
									<li><a href="termination.html"> Termination </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-assets" role="tabpanel" aria-labelledby="v-pills-assets-tab">
								<p>Assets</p>
								<ul>
									<li><a href="assets.html"> Assets </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-jobs" role="tabpanel" aria-labelledby="v-pills-jobs-tab">
								<p>Jobs</p>
								<ul>
									<li><a href="user-dashboard.html"> User Dasboard </a></li>
									<li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
									<li><a href="jobs.html"> Manage Jobs </a></li>
									<li><a href="job-applicants.html"> Applied Jobs </a></li>
									<li><a href="manage-resumes.html"> Manage Resumes </a></li>
									<li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
									<li><a href="interview-questions.html"> Interview Questions </a></li>
									<li><a href="offer_approvals.html"> Offer Approvals </a></li>
									<li><a href="experiance-level.html"> Experience Level </a></li>
									<li><a href="candidates.html"> Candidates List </a></li>
									<li><a href="schedule-timing.html"> Schedule timing </a></li>
									<li><a href="apptitude-result.html"> Aptitude Results </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-knowledgebase" role="tabpanel" aria-labelledby="v-pills-knowledgebase-tab">
								<p>Knowledgebase</p>
								<ul>
									<li><a href="knowledgebase.html"> Knowledgebase </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-activities" role="tabpanel" aria-labelledby="v-pills-activities-tab">
								<p>Activities</p>
								<ul>
									<li><a href="activities.html"> Activities </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-activities-tab">
								<p>Users</p>
								<ul>
									<li><a href="users.html"> Users </a></li>
								</ul>
							</div>
							<div class="tab-pane fade  " id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
								<p>Settings</p>
								<ul>
									<li><a href="settings.html"> Settings </a></li>
								</ul>
							</div>
							<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<p>Profile</p>
								<ul>
									<li><a href="profile.html" class="active"> Employee Profile </a></li>
									<li><a href="client-profile.html"> Client Profile </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-authentication" role="tabpanel" aria-labelledby="v-pills-authentication-tab">
								<p>Authentication</p>
								<ul>
									<li><a href="index.html"> Login </a></li>
									<li><a href="register.html"> Register </a></li>
									<li><a href="forgot-password.html"> Forgot Password </a></li>
									<li><a href="otp.html"> OTP </a></li>
									<li><a href="lock-screen.html"> Lock Screen </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-errorpages" role="tabpanel" aria-labelledby="v-pills-errorpages-tab">
								<p>Error Pages</p>
								<ul>
									<li><a href="error-404.html">404 Error </a></li>
									<li><a href="error-500.html">500 Error </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-subscriptions" role="tabpanel" aria-labelledby="v-pills-subscriptions-tab">
								<p>Subscriptions</p>
								<ul>
									<li><a href="subscriptions.html"> Subscriptions (Admin) </a></li>
									<li><a href="subscriptions-company.html"> Subscriptions (Company) </a></li>
									<li><a href="subscribed-companies.html"> Subscribed Companies</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
								<p>Pages</p>
								<ul>
									<li><a href="search.html"> Search </a></li>
									<li><a href="faq.html"> FAQ </a></li>
									<li><a href="terms.html"> Terms </a></li>
									<li><a href="privacy-policy.html"> Privacy Policy </a></li>
									<li><a href="blank-page.html"> Blank Page </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-baseui" role="tabpanel" aria-labelledby="v-pills-baseui-tab">
								<p>Base-UI</p>
								<ul>
									<li><a href="alerts.html">Alerts</a></li>                                    
									<li><a href="accordions.html">Accordions</a></li>
									<li><a href="avatar.html">Avatar</a></li> 
									<li><a href="badges.html">Badges</a></li>
									<li><a href="buttons.html">Buttons</a></li>   
									<li><a href="buttongroup.html">Button Group</a></li>                                  
									<li><a href="breadcrumbs.html">Breadcrumb</a></li>
									<li><a href="cards.html">Cards</a></li>
									<li><a href="carousel.html">Carousel</a></li>                                   
									<li><a href="dropdowns.html">Dropdowns</a></li>
									<li><a href="grid.html">Grid</a></li>
									<li><a href="images.html">Images</a></li>
									<li><a href="lightbox.html">Lightbox</a></li>
									<li><a href="media.html">Media</a></li>                              
									<li><a href="modal.html">Modals</a></li>
									<li><a href="offcanvas.html">Offcanvas</a></li>
									<li><a href="pagination.html">Pagination</a></li>
									<li><a href="popover.html">Popover</a></li>                                    
									<li><a href="progress.html">Progress Bars</a></li>
									<li><a href="placeholders.html">Placeholders</a></li>
									<li><a href="rangeslider.html">Range Slider</a></li>                                    
									<li><a href="spinners.html">Spinner</a></li>
									<li><a href="sweetalerts.html">Sweet Alerts</a></li>
									<li><a href="tab.html">Tabs</a></li>
									<li><a href="toastr.html">Toasts</a></li>
									<li><a href="tooltip.html">Tooltip</a></li>
									<li><a href="typography.html">Typography</a></li>
									<li><a href="video.html">Video</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-elements" role="tabpanel" aria-labelledby="v-pills-elements-tab">
								<p>Elements</p>
								<ul>
									<li><a href="ribbon.html">Ribbon</a></li>
									<li><a href="clipboard.html">Clipboard</a></li>
									<li><a href="drag-drop.html">Drag & Drop</a></li>
									<li><a href="rating.html">Rating</a></li>
									<li><a href="text-editor.html">Text Editor</a></li>
									<li><a href="counter.html">Counter</a></li>
									<li><a href="scrollbar.html">Scrollbar</a></li>
									<li><a href="notification.html">Notification</a></li>
									<li><a href="stickynote.html">Sticky Note</a></li>
									<li><a href="timeline.html">Timeline</a></li>
									<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
									<li><a href="form-wizard.html">Form Wizard</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-charts" role="tabpanel" aria-labelledby="v-pills-charts-tab">
								<p>Charts</p>
								<ul>
									<li><a href="chart-apex.html">Apex Charts</a></li>
									<li><a href="chart-js.html">Chart Js</a></li>
									<li><a href="chart-morris.html">Morris Charts</a></li>
									<li><a href="chart-flot.html">Flot Charts</a></li>
									<li><a href="chart-peity.html">Peity Charts</a></li>
									<li><a href="chart-c3.html">C3 Charts</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-icons" role="tabpanel" aria-labelledby="v-pills-icons-tab">
								<p>Icons</p>
								<ul>
									<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
									<li><a href="icon-feather.html">Feather Icons</a></li>
									<li><a href="icon-ionic.html">Ionic Icons</a></li>
									<li><a href="icon-material.html">Material Icons</a></li>
									<li><a href="icon-pe7.html">Pe7 Icons</a></li>
									<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
									<li><a href="icon-themify.html">Themify Icons</a></li>
									<li><a href="icon-weather.html">Weather Icons</a></li>
									<li><a href="icon-typicon.html">Typicon Icons</a></li>
									<li><a href="icon-flag.html">Flag Icons</a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-forms" role="tabpanel" aria-labelledby="v-pills-forms-tab">
								<p>Forms</p>
								<ul>
									<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
									<li><a href="form-input-groups.html">Input Groups </a></li>
									<li><a href="form-horizontal.html">Horizontal Form </a></li>
									<li><a href="form-vertical.html"> Vertical Form </a></li>
									<li><a href="form-mask.html"> Form Mask </a></li>
										<li><a href="form-validation.html"> Form Validation </a></li>
										<li><a href="form-select2.html">Form Select2 </a></li>
										<li><a href="form-fileupload.html">File Upload </a></li>
									</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-tables" role="tabpanel" aria-labelledby="v-pills-tables-tab">
								<p>Tables</p>
								<ul>
									<li><a href="tables-basic.html">Basic Tables </a></li>
									<li><a href="data-tables.html">Data Table </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-documentation" role="tabpanel" aria-labelledby="v-pills-documentation-tab">
								<p>Documentation</p>
								<ul>
									<li><a href="#">Documentation </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-changelog" role="tabpanel" aria-labelledby="v-pills-changelog-tab">
								<p>Change Log</p>
								<ul>
									<li><a href="#"><span>Change Log</span> <span class="badge badge-primary ms-auto">v3.4</span> </a></li>
								</ul>
							</div>
							<div class="tab-pane fade" id="v-pills-multilevel" role="tabpanel" aria-labelledby="v-pills-multilevel-tab">
								<p>Multi Level</p>
								<ul>
									<li class="sub-menu">
										<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
										<ul class="ms-3">
											<li class="sub-menu">
												<a href="javascript:void(0);">Level 1 <span class="menu-arrow"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 2</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
										</ul>
									</li>								
									<li><a href="javascript:void(0);">Level 2</a></li>
									<li><a href="javascript:void(0);">Level 3</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Two Col Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="#"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0 mb-0">John Doe</h3>
														<h6 class="text-muted">UI/UX Design Team</h6>
														<small class="text-muted">Web Designer</small>
														<div class="staff-id">Employee ID : FT-0001</div>
														<div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
														<div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<div class="title">Phone:</div>
															<div class="text"><a href="">9876543210</a></div>
														</li>
														<li>
															<div class="title">Email:</div>
															<div class="text"><a href=""><span class="__cf_email__" data-cfemail="18727770767c777d587d60797568747d367b7775">[email&#160;protected]</span></a></div>
														</li>
														<li>
															<div class="title">Birthday:</div>
															<div class="text">24th July</div>
														</li>
														<li>
															<div class="title">Address:</div>
															<div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
														</li>
														<li>
															<div class="title">Gender:</div>
															<div class="text">Male</div>
														</li>
														<li>
															<div class="title">Reports to:</div>
															<div class="text">
															   <div class="avatar-box">
																  <div class="avatar avatar-xs">
																	 <img src="assets/img/profiles/avatar-16.jpg" alt="User Image">
																  </div>
															   </div>
															   <a href="profile.html">
																	Jeffery Lalor
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa-solid fa-pencil"></i></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card tab-box">
						<div class="row user-tabs">
							<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a href="#emp_profile" data-bs-toggle="tab" class="nav-link active">Profile</a></li>
									<li class="nav-item"><a href="#emp_projects" data-bs-toggle="tab" class="nav-link">Projects</a></li>
									<li class="nav-item"><a href="#bank_statutory" data-bs-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
									<li class="nav-item"><a href="#emp_assets" data-bs-toggle="tab" class="nav-link">Assets</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="tab-content">
					
						<!-- Profile Info Tab -->
						<div id="emp_profile" class="pro-overview tab-pane fade show active">
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#personal_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
											<ul class="personal-info">
												<li>
													<div class="title">Passport No.</div>
													<div class="text">9876543210</div>
												</li>
												<li>
													<div class="title">Passport Exp Date.</div>
													<div class="text">9876543210</div>
												</li>
												<li>
													<div class="title">Tel</div>
													<div class="text"><a href="">9876543210</a></div>
												</li>
												<li>
													<div class="title">Nationality</div>
													<div class="text">Indian</div>
												</li>
												<li>
													<div class="title">Religion</div>
													<div class="text">Christian</div>
												</li>
												<li>
													<div class="title">Marital status</div>
													<div class="text">Married</div>
												</li>
												<li>
													<div class="title">Employment of spouse</div>
													<div class="text">No</div>
												</li>
												<li>
													<div class="title">No. of children</div>
													<div class="text">2</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal"><i class="fa-solid fa-pencil"></i></a></h3>
											<h5 class="section-title">Primary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">John Doe</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Father</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
											<hr>
											<h5 class="section-title">Secondary</h5>
											<ul class="personal-info">
												<li>
													<div class="title">Name</div>
													<div class="text">Karen Wills</div>
												</li>
												<li>
													<div class="title">Relationship</div>
													<div class="text">Brother</div>
												</li>
												<li>
													<div class="title">Phone </div>
													<div class="text">9876543210, 9876543210</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Bank information</h3>
											<ul class="personal-info">
												<li>
													<div class="title">Bank name</div>
													<div class="text">ICICI Bank</div>
												</li>
												<li>
													<div class="title">Bank account No.</div>
													<div class="text">159843014641</div>
												</li>
												<li>
													<div class="title">IFSC Code</div>
													<div class="text">ICI24504</div>
												</li>
												<li>
													<div class="title">PAN No</div>
													<div class="text">TC000Y56</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#family_info_modal"><i class="fa-solid fa-pencil"></i></a></h3>
											<div class="table-responsive">
												<table class="table table-nowrap">
													<thead>
														<tr>
															<th>Name</th>
															<th>Relationship</th>
															<th>Date of Birth</th>
															<th>Phone</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Leo</td>
															<td>Brother</td>
															<td>Feb 16th, 2019</td>
															<td>9876543210</td>
															<td class="text-end">
																<div class="dropdown dropdown-action">
																	<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
																		<a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
																	</div>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education_info"><i class="fa-solid fa-pencil"></i></a></h3>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">International College of Arts and Science (UG)</a>
																<div>Bsc Computer Science</div>
																<span class="time">2000 - 2003</span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">International College of Arts and Science (PG)</a>
																<div>Msc Computer Science</div>
																<span class="time">2000 - 2003</span>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex">
									<div class="card profile-box flex-fill">
										<div class="card-body">
											<h3 class="card-title">Experience <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience_info"><i class="fa-solid fa-pencil"></i></a></h3>
											<div class="experience-box">
												<ul class="experience-list">
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Zen Corporation</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Ron-tech</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
													<li>
														<div class="experience-user">
															<div class="before-circle"></div>
														</div>
														<div class="experience-content">
															<div class="timeline-content">
																<a href="#/" class="name">Web Designer at Dalt Technology</a>
																<span class="time">Jan 2013 - Present (5 years 2 months)</span>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Profile Info Tab -->
						
						<!-- Projects Tab -->
						<div class="tab-pane fade" id="emp_projects">
							<div class="row">
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
									<div class="card">
										<div class="card-body">
											<div class="dropdown profile-action">
												<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a data-bs-target="#edit_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
													<a data-bs-target="#delete_project" data-bs-toggle="modal" href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
												</div>
											</div>
											<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
											<small class="block text-ellipsis m-b-15">
												<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
												<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
											</small>
											<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
												typesetting industry. When an unknown printer took a galley of type and
												scrambled it...
											</p>
											<div class="pro-deadline m-b-15">
												<div class="sub-title">
													Deadline:
												</div>
												<div class="text-muted">
													17 Apr 2019
												</div>
											</div>
											<div class="project-members m-b-15">
												<div>Project Leader :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/profiles/avatar-16.jpg" alt="User Image"></a>
													</li>
												</ul>
											</div>
											<div class="project-members m-b-15">
												<div>Team :</div>
												<ul class="team-members">
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="assets/img/profiles/avatar-09.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="assets/img/profiles/avatar-10.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</div>
											<p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
											<div class="progress progress-xs mb-0">
												<div class="w-40" title="" data-bs-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Projects Tab -->
						
						<!-- Bank Statutory Tab -->
						<div class="tab-pane fade" id="bank_statutory">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title"> Basic Salary Information</h3>
									<form>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select salary basis type</option>
														<option>Hourly</option>
														<option>Daily</option>
														<option>Weekly</option>
														<option>Monthly</option>
													</select>
											   </div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
													<div class="input-group">
														<span class="input-group-text">$</span>
														<input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Payment type</label>
													<select class="select">
														<option>Select payment type</option>
														<option>Bank transfer</option>
														<option>Check</option>
														<option>Cash</option>
													</select>
											   </div>
											</div>
										</div>
										<hr>
										<h3 class="card-title"> PF Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF contribution</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee PF rate</label>
													<select class="select">
														<option>Select PF contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
										</div>
										
										<hr>
										<h3 class="card-title"> ESI Information</h3>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI contribution</label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Employee ESI rate</label>
													<select class="select">
														<option>Select ESI contribution</option>
														<option>Yes</option>
														<option>No</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select additional rate</option>
														<option>0%</option>
														<option>1%</option>
														<option>2%</option>
														<option>3%</option>
														<option>4%</option>
														<option>5%</option>
														<option>6%</option>
														<option>7%</option>
														<option>8%</option>
														<option>9%</option>
														<option>10%</option>
													</select>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="input-block mb-3">
													<label class="col-form-label">Total rate</label>
													<input type="text" class="form-control" placeholder="N/A" value="11%">
												</div>
											</div>
									   </div>
										
										<div class="submit-section">
											<button class="btn btn-primary submit-btn" type="submit">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- /Bank Statutory Tab -->
						
						<!-- Assets -->
						<div class="tab-pane fade" id="emp_assets">
							<div class="table-responsive table-newdatatable">
								<table class="table table-new custom-table mb-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Asset ID</th>
											<th>Assigned Date</th>
											<th>Assignee</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>
												<a href="assets-details.html" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 001</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage">
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>John Paul Raj</span>
													<p><span class="__cf_email__" data-cfemail="6b010403052b0f190e0a060c1e12181f0e080345080406">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>
												<a href="assets-details.html" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 002</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p><span class="__cf_email__" data-cfemail="394f5057565d174a795d4b5c58545e4c404a4d5c5a51175a5654">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>
												<a href="assets-details.html" class="table-imgname">
													<img src="assets/img/keyboard.png" class="me-2" alt="Keyboard Image">
													<span>Dell Keyboard</span>
												</a>
											</td>
											<td>AST - 003</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage" data-bs-toggle="modal" data-bs-target="#edit-asset">
													<img src="assets/img/profiles/avatar-03.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Harika </span>
													<p><span class="__cf_email__" data-cfemail="b2dad3c0dbd9d39cc4f2d6c0d7d3dfd5c7cbc1c6d7d1da9cd1dddf">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/mouse.png" class="me-2" alt="Mouse Image">
													<span>Logitech Mouse</span>
												</a>
											</td>
											<td>AST - 0024</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="assets-details.html" class="table-profileimage">
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="assets-details.html" class="table-name">
													<span>Mythili</span>
													<p><span class="__cf_email__" data-cfemail="1e73676a767772775e7a6c7b7f73796b676d6a7b7d76307d7173">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 005</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="assets-details.html" class="table-profileimage">
													<img src="assets/img/profiles/avatar-02.jpg" class="me-2" alt="User Image">
												</a>
												<a href="assets-details.html" class="table-name">
													<span>John Paul Raj</span>
													<p><span class="__cf_email__" data-cfemail="ed87828583ad899f888c808a98949e99888e85c38e8280">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>
												<a href="#" class="table-imgname">
													<img src="assets/img/laptop.png" class="me-2" alt="Laptop Image">
													<span>Laptop</span>
												</a>
											</td>
											<td>AST - 006</td>
											<td>22 Nov, 2022    10:32AM</td>
											<td class="table-namesplit">
												<a href="javascript:void(0);" class="table-profileimage">
													<img src="assets/img/profiles/avatar-05.jpg" class="me-2" alt="User Image">
												</a>
												<a href="javascript:void(0);" class="table-name">
													<span>Vinod Selvaraj</span>
													<p><span class="__cf_email__" data-cfemail="ed9b84838289c39ead899f888c808a98949e99888e85c38e8280">[email&#160;protected]</span></p>
												</a>
											</td>
											<td>
												<div class="table-actions d-flex">
													<a class="delete-table me-2" href="user-asset-details.html">
													   <img src="assets/img/icons/eye.svg" alt="Eye Icon">
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /Assets -->
						
					</div>
                </div>
				<!-- /Page Content -->
				
				<!-- Profile Modal -->
				<div id="profile_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Profile Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-12">
											<div class="profile-img-wrap edit-img">
												<img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
												<div class="fileupload btn">
													<span class="btn-text">edit</span>
													<input class="upload" type="file">
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">First Name</label>
														<input type="text" class="form-control" value="John">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Last Name</label>
														<input type="text" class="form-control" value="Doe">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Birth Date</label>
														<div class="cal-icon">
															<input class="form-control datetimepicker" type="text" value="05/06/1985">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Gender</label>
														<select class="select form-control">
															<option value="male selected">Male</option>
															<option value="female">Female</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="input-block mb-3">
												<label class="col-form-label">Address</label>
												<input type="text" class="form-control" value="4487 Snowbird Lane">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">State</label>
												<input type="text" class="form-control" value="New York">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Country</label>
												<input type="text" class="form-control" value="United States">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Pin Code</label>
												<input type="text" class="form-control" value="10523">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Phone Number</label>
												<input type="text" class="form-control" value="631-889-3206">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Department <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Department</option>
													<option>Web Development</option>
													<option>IT Management</option>
													<option>Marketing</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Designation <span class="text-danger">*</span></label>
												<select class="select">
													<option>Select Designation</option>
													<option>Web Designer</option>
													<option>Web Developer</option>
													<option>Android Developer</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Reports To <span class="text-danger">*</span></label>
												<select class="select">
													<option>-</option>
													<option>Wilmer Deluna</option>
													<option>Lesley Grauer</option>
													<option>Jeffery Lalor</option>
												</select>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Profile Modal -->
				
				<!-- Personal Info Modal -->
				<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Passport No</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Passport Expiry Date</label>
												<div class="cal-icon">
													<input class="form-control datetimepicker" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Tel</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Nationality <span class="text-danger">*</span></label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Religion</label>
												<div class="cal-icon">
													<input class="form-control" type="text">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Marital status <span class="text-danger">*</span></label>
												<select class="select form-control">
													<option>-</option>
													<option>Single</option>
													<option>Married</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">Employment of spouse</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="input-block mb-3">
												<label class="col-form-label">No. of children </label>
												<input class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal Info Modal -->
				
				<!-- Family Info Modal -->
				<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Family Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Name <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Date of birth <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3">
															<label class="col-form-label">Phone <span class="text-danger">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Family Info Modal -->
				
				<!-- Emergency Contact Modal -->
				<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Personal Information</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Primary Contact</h3>
											<div class="row">
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Name <span class="text-danger">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Relationship <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone <span class="text-danger">*</span></label>
														<input class="form-control" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="input-block mb-3">
														<label class="col-form-label">Phone 2</label>
														<input class="form-control" type="text">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Emergency Contact Modal -->
				
				<!-- Education Modal -->
				<div id="education_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title"> Education Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Oxford University" class="form-control floating">
															<label class="focus-label">Institution</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Computer Science" class="form-control floating">
															<label class="focus-label">Subject</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Starting Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<div class="cal-icon">
																<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
															</div>
															<label class="focus-label">Complete Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="BE Computer Science" class="form-control floating">
															<label class="focus-label">Degree</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus focused">
															<input type="text" value="Grade A" class="form-control floating">
															<label class="focus-label">Grade</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Education Modal -->
				
				<!-- Experience Modal -->
				<div id="experience_info" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Experience Informations</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-scroll">
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="Web Developer">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="card">
											<div class="card-body">
												<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa-regular fa-trash-can"></i></a></h3>
												<div class="row">
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="Digital Devlopment Inc">
															<label class="focus-label">Company Name</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="United States">
															<label class="focus-label">Location</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<input type="text" class="form-control floating" value="Web Developer">
															<label class="focus-label">Job Position</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
															</div>
															<label class="focus-label">Period From</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="input-block mb-3 form-focus">
															<div class="cal-icon">
																<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
															</div>
															<label class="focus-label">Period To</label>
														</div>
													</div>
												</div>
												<div class="add-more">
													<a href="javascript:void(0);"><i class="fa-solid fa-plus-circle"></i> Add More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="submit-section">
										<button class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Experience Modal -->
				
            </div>
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<div class="settings-icon"> 
			<span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas"><i class="las la-cog"></i></span> 
		</div> 
		<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas"> 
			<div class="sidebar-headerset">
				<div class="sidebar-headersets">
					<h2>Customizer</h2>
					<h3>Customize your overview Page layout</h3>
				</div>
				<div class="sidebar-headerclose">
					<a data-bs-dismiss="offcanvas" aria-label="Close"><img src="assets/img/close.png" alt="Close Icon"></a>
				</div>
			</div>
			<div class="offcanvas-body p-0"> 
				<div data-simplebar="" class="h-100"> 
					<div class="settings-mains"> 
						<div class="layout-head">
							<h5>Layout</h5>
							<h6>Choose your layout</h6>
						</div>
						<div class="row"> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
									<input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input"> 
									<label class="form-check-label avatar-md w-100" for="customizer-layout01"> 
										<img src="assets/img/vertical.png" alt="Layout Image">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Vertical</h5> 
							</div> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
								<input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input"> 
									<label class="form-check-label  avatar-md w-100" for="customizer-layout02"> 
										<img src="assets/img/horizontal.png" alt="Layout Image">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Horizontal</h5> 
							</div> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
									<input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input"> 
									<label class="form-check-label  avatar-md w-100" for="customizer-layout03"> 
										<img src="assets/img/two-col.png" alt="Layout Image">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Two Column</h5> 
								</div> 
							</div> 
							<div class="layout-head pt-3">
								<h5>Color Scheme</h5>
								<h6>Choose Light or Dark Scheme.</h6>
							</div>
							<div class="colorscheme-cardradio"> 
								<div class="row"> 
									<div class="col-4"> 
										<div class="form-check card-radio p-0"> 
											<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange"> 
											<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange"> 
												<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Orange</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light"> 
										<label class="form-check-label  avatar-md w-100" for="layout-mode-light"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Light</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio dark  p-0 "> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark"> 
										<label class="form-check-label avatar-md w-100 " for="layout-mode-dark"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Dark</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio blue  p-0 "> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue"> 
										<label class="form-check-label  avatar-md w-100" for="layout-mode-blue"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Blue</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio maroon p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon"> 
										<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Maroon</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio purple p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple"> 
										<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Purple</h5> 
								</div> 
							</div> 
						</div> 

						<div id="layout-width"> 
							<div class="layout-head pt-3">
								<h5>Layout Width</h5>
								<h6>Choose Fluid or Boxed layout.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid"> 
										<label class="form-check-label avatar-md w-100" for="layout-width-fluid"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Fluid</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check card-radio p-0 "> 
										<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed"> 
										<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed"> 
											<img src="assets/img/boxed.png" alt="Layout Image"> 
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Boxed</h5> 
								</div> 
							</div> 
						</div> 

						<div id="layout-position"> 
							<div class="layout-head pt-3">
								<h5>Layout Position</h5>
								<h6>Choose Fixed or Scrollable Layout Position.</h6>
							</div>
							<div class="btn-group bor-rad-50 overflow-hidden radio" role="group"> 
								<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed"> 
								<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label> 

								<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable"> 
								<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label> 
							</div> 
						</div> 
						<div class="layout-head pt-3">
							<h5>Topbar Color</h5>
							<h6>Choose Light or Dark Topbar Color.</h6>
						</div>
						<div class="row"> 
							<div class="col-4"> 
								<div class="form-check card-radio  p-0"> 
									<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light"> 
									<label class="form-check-label avatar-md w-100" for="topbar-color-light"> 
										<img src="assets/img/vertical.png" alt="Layout Image">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Light</h5> 
							</div> 
							<div class="col-4"> 
								<div class="form-check card-radio p-0"> 
									<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark"> 
									<label class="form-check-label  avatar-md w-100" for="topbar-color-dark"> 
										<img src="assets/img/dark.png" alt="Layout Image">
									</label> 
								</div> 
								<h5 class="fs-13 text-center mt-2">Dark</h5> 
							</div> 
						</div> 

						<div id="sidebar-size"> 
							<div class="layout-head pt-3">
								<h5>Sidebar Size</h5>
								<h6>Choose a size of Sidebar.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio  p-0 "> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-size-default"> 
											<img src="assets/img/vertical.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Default</h5> 
								</div> 

								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact"> 
											<img src="assets/img/compact.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Compact</h5> 
								</div> 

								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0 "> 
										<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover"> 
											<img src="assets/img/small-hover.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Small Hover View</h5> 
								</div> 
							</div> 
						</div> 

						<div id="sidebar-view"> 
							<div class="layout-head pt-3">
								<h5>Sidebar View</h5>
								<h6>Choose Default or Detached Sidebar view.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio  p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-view-default"> 
											<img src="assets/img/compact.png" alt="Layout Image">
										</label>
										</div> 
									<h5 class="fs-13 text-center mt-2">Default</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached"> 
											<img src="assets/img/detached.png" alt="Layout Image">
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Detached</h5> 
								</div> 
							</div> 
						</div> 
						<div id="sidebar-color"> 
							<div class="layout-head pt-3">
								<h5>Sidebar Color</h5>
								<h6>Choose a color of Sidebar.</h6>
							</div>
							<div class="row"> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-color-light"> 
											<span class="bg-light bg-sidebarcolor"></span>
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Light</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark"> 
										<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark"> 
											<span class="bg-darks bg-sidebarcolor"></span>
										</label> 
									</div> 
									<h5 class="fs-13 text-center mt-2">Dark</h5> 
								</div> 
								<div class="col-4"> 
									<div class="form-check sidebar-setting card-radio p-0"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient"> 
										<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient"> 
											<span class="bg-gradients bg-sidebarcolor"></span>
										</label>  
									</div> 
									<h5 class="fs-13 text-center mt-2">Gradient</h5> 
								</div>
								<div class="col-4 d-none"> 
									<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient"> 
										<span class="d-flex gap-1 h-100"> 
											<span class="flex-shrink-0"> 
												<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1"> 
													<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
													<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span> 
												</span> 
											</span> 
											<span class="flex-grow-1"> 
												<span class="d-flex h-100 flex-column"> 
													<span class="bg-light d-block p-1"></span> 
													<span class="bg-light d-block p-1 mt-auto"></span> 
												</span> 
											</span> 
										</span> 
									</button> 
									<h5 class="fs-13 text-center mt-2">Gradient</h5> 
								</div> 
							</div>
							<div class="collapse d-none" id="collapseBgGradient"> 
								<div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded"> 
									<div class="form-check sidebar-setting card-radio"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-1" value="gradient"> 
										<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient"> 
											<span class="avatar-title rounded-circle bg-vertical-gradient"></span> 
										</label> 
									</div> 
									<div class="form-check sidebar-setting card-radio"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2"> 
										<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2"> 
											<span class="avatar-title rounded-circle bg-vertical-gradient-2"></span> 
										</label> 
									</div> 
									<div class="form-check sidebar-setting card-radio"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3"> 
										<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3"> 
											<span class="avatar-title rounded-circle bg-vertical-gradient-3"></span> 
										</label> 
									</div> 
									<div class="form-check sidebar-setting card-radio"> 
										<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4"> 
										<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4"> 
											<span class="avatar-title rounded-circle bg-vertical-gradient-4"></span> 
										</label> 
									</div> 
								</div> 
							</div> 
						</div> 
					</div> 
				</div> 

			</div> 
			<div class="offcanvas-footer border-top p-3 text-center"> 
				<div class="row"> 
					<div class="col-6"> 
						<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button> 
					</div> 
					<div class="col-6"> 
						<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a> 
					</div> 
				</div> 
			</div> 
		</div> 

		<!-- jQuery -->
       <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

		<!-- Datatable JS -->
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap4.min.js"></script>
		
		<!-- Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

		 <!-- Theme Settings JS -->
		<script src="assets/js/layout.js"></script>
		<script src="assets/js/theme-settings.js"></script>
		<script src="assets/js/greedynav.js"></script>
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>