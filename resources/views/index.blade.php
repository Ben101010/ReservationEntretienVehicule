<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:01:10 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Reservation et Entretient de véhicule</title>
	<meta name="description" content="Reservation et Entretient de véhicule." />
	<meta name="keywords" content="web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
    <link href="../vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">

    @livewireStyles
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper">
			<!-- Top Menu Items -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
				<a href="#">
                    <span style="font-size:2.5em;"> Réservation & Entretien de Véhicule</span>
                </a>
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Mon profile</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Paramètre</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="collapse navbar-search-overlap" id="site_navbar_search">
					<form role="search">
						<div class="form-group mb-0">
							<div class="input-search">
								<div class="input-group">
									<input type="text" id="overlay_search" name="overlay-search" class="form-control pl-30" placeholder="Search">
									<span class="input-group-addon pr-30">
									<a  href="javascript:void(0)" class="close-input-overlay" data-target="#site_navbar_search" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="fa fa-times"></i></a>
									</span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</nav>
			<!-- /Top Menu Items -->

			<!-- Left Sidebar Menu -->
			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">
					<li>
						<a  class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-picture mr-10"></i>Dashboard <span class="pull-right"><span class="label label-success mr-10">4</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="dashboard_dr" class="collapse collapse-level-1">
							<li>
								<a class="active" href="index.html">Analytical</a>
							</li>
							<li>
								<a href="index2.html">Demographic</a>
							</li>
							<li>
								<a href="index3.html">Project</a>
							</li>
							<li>
								<a href="index4.html">Classic</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><i class="icon-basket-loaded mr-10"></i>E-Commerce<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ecom_dr" class="collapse collapse-level-1">
							<li>
								<a href="e-commerce.html">Dashboard</a>
							</li>
							<li>
								<a href="product.html">Products</a>
							</li>
							<li>
								<a href="product-detail.html">Product Detail</a>
							</li>
							<li>
								<a href="add-products.html">Add Product</a>
							</li>
							<li>
								<a href="product-orders.html">Orders</a>
							</li>
							<li>
								<a href="product-cart.html">Cart</a>
							</li>
							<li>
								<a href="product-checkout.html">Checkout</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><i class="icon-grid mr-10"></i>Apps <span class="pull-right"><span class="label label-info mr-10">9</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="app_dr" class="collapse collapse-level-1">
							<li>
								<a href="chats.html">chats</a>
							</li>
							<li>
								<a href="calendar.html">calendar</a>
							</li>
							<li>
								<a href="weather.html">weather</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#email_dr">Email<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
								<ul id="email_dr" class="collapse">
									<li>
										<a href="inbox.html">inbox</a>
									</li>
									<li>
										<a href="inbox-detail.html">detail email</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#contact_dr">Contacts<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
								<ul id="contact_dr" class="collapse">
									<li>
										<a href="contact-list.html">list</a>
									</li>
									<li>
										<a href="contact-card.html">cards</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="file-manager.html">File Manager</a>
							</li>
							<li>
								<a href="todo-tasklist.html">To Do/Tasklist</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><i class="icon-vector mr-10"></i>UI Elements<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="ui_dr" class="collapse collapse-level-1">
							<li>
								<a href="panels-wells.html">Panels & Wells</a>
							</li>
							<li>
								<a href="modals.html">Modals</a>
							</li>
							<li>
								<a href="sweetalert.html">Sweet Alerts</a>
							</li>
							<li>
								<a href="notifications.html">notifications</a>
							</li>
							<li>
								<a href="typography.html">Typography</a>
							</li>
							<li>
								<a href="buttons.html">Buttons</a>
							</li>
							<li>
								<a href="accordion-toggle.html">Accordion / Toggles</a>
							</li>
							<li>
								<a href="tabs.html">Tabs</a>
							</li>
							<li>
								<a href="progressbars.html">Progress bars</a>
							</li>
							<li>
								<a href="skills-counter.html">Skills & Counters</a>
							</li>
							<li>
								<a href="pricing.html">Pricing Tables</a>
							</li>
							<li>
								<a href="nestable.html">Nestables</a>
							</li>
							<li>
								<a href="dorpdown.html">Dropdowns</a>
							</li>
							<li>
								<a href="bootstrap-treeview.html">Tree View</a>
							</li>
							<li>
								<a href="carousel.html">Carousel</a>
							</li>
							<li>
								<a href="range-slider.html">Range Slider</a>
							</li>
							<li>
								<a href="grid-styles.html">Grid</a>
							</li>
							<li>
								<a href="bootstrap-ui.html">Bootstrap UI</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><i class=" icon-flag mr-10"></i>Forms<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="form_dr" class="collapse collapse-level-1">
							<li>
								<a href="form-element.html">Basic Forms</a>
							</li>
							<li>
								<a href="form-layout.html">form Layout</a>
							</li>
							<li>
								<a href="form-advanced.html">Form Advanced</a>
							</li>
							<li>
								<a href="form-mask.html">Form Mask</a>
							</li>
							<li>
								<a href="form-picker.html">Form Picker</a>
							</li>
							<li>
								<a href="form-validation.html">form Validation</a>
							</li>
							<li>
								<a href="form-wizard.html">Form Wizard</a>
							</li>
							<li>
								<a href="form-x-editable.html">X-Editable</a>
							</li>
							<li>
								<a href="cropperjs.html">Cropperjs</a>
							</li>
							<li>
								<a href="form-file-upload.html">File Upload</a>
							</li>
							<li>
								<a href="dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="bootstrap-wysihtml5.html">Bootstrap Wysihtml5</a>
							</li>
							<li>
								<a href="tinymce-wysihtml5.html">Tinymce Wysihtml5</a>
							</li>
							<li>
								<a href="summernote-wysihtml5.html">summernote</a>
							</li>
							<li>
								<a href="typeahead-js.html">typeahead</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><i class="icon-graph mr-10"></i>Charts <span class="pull-right"><span class="label label-primary mr-10">7</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="chart_dr" class="collapse collapse-level-1">
							<li>
								<a href="flot-chart.html">Flot Chart</a>
							</li>
							<li>
								<a href="morris-chart.html">Morris Chart</a>
							</li>
							<li>
								<a href="chart.js.html">chartjs</a>
							</li>
							<li>
								<a href="chartist.html">chartist</a>
							</li>
							<li>
								<a href="easy-pie-chart.html">Easy Pie Chart</a>
							</li>
							<li>
								<a href="sparkline.html">Sparkline</a>
							</li>
							<li>
								<a href="peity-chart.html">Peity Chart</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><i class="icon-list mr-10"></i>Tables<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="table_dr" class="collapse collapse-level-1">
							<li>
								<a href="basic-table.html">Basic Table</a>
							</li>
							<li>
								<a href="bootstrap-table.html">Bootstrap Table</a>
							</li>
							<li>
								<a href="data-table.html">Data Table</a>
							</li>
							<li>
								<a  href="export-table.html"><span class="pull-right"><span class="label label-warning">New</span></span>Export Table</a>
							</li>
							<li>
								<a  href="responsive-data-table.html"><span class="pull-right"><span class="label label-warning">New</span></span>RSPV DataTable</a>
							</li>
							<li>
								<a href="responsive-table.html">Responsive Table</a>
							</li>
							<li>
								<a href="editable-table.html">Editable Table</a>
							</li>
							<li>
								<a href="foo-table.html">Foo Table</a>
							</li>
							<li>
								<a href="jsgrid-table.html">Jsgrid Table</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="widgets.html"><i class="icon-drawar mr-10"></i>widgets</a>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><i class="icon-options mr-10"></i>Icons<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="icon_dr" class="collapse collapse-level-1">
							<li>
								<a href="fontawesome.html">Fontawesome</a>
							</li>
							<li>
								<a href="themify.html">Themify</a>
							</li>
							<li>
								<a href="linea-icon.html">Linea</a>
							</li>
							<li>
								<a href="simple-line-icons.html">Simple Line</a>
							</li>
							<li>
								<a href="pe-icon-7.html">Pe-icon-7</a>
							</li>
							<li>
								<a href="glyphicons.html">Glyphicons</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><i class="icon-layers mr-10"></i>Special Pages<span class="pull-right"><span class="label label-danger mr-10">12</span><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="pages_dr" class="collapse collapse-level-1">
							<li>
								<a href="blank.html">Blank Page</a>
							</li>
							<li>
								<a href="login.html">Login Page</a>
							</li>
							<li>
								<a href="signup.html">Register</a>
							</li>
							<li>
								<a href="forgot-password.html">Recover Password</a>
							</li>
							<li>
								<a href="reset-password.html">reset Password</a>
							</li>
							<li>
								<a href="locked.html">Lock Screen</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
								<ul id="invoice_dr" class="collapse">
									<li>
										<a href="invoice.html">Invoice</a>
									</li>
									<li>
										<a href="invoice-archive.html">Invoice Archive</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="404.html">Error 404</a>
							</li>
							<li>
								<a href="500.html">Error 500</a>
							</li>
							<li>
								<a href="gallery.html">Gallery</a>
							</li>
							<li>
								<a href="timeline.html">Timeline</a>
							</li>
							<li>
								<a href="faq.html">FAQ</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#maps_dr"><i class="icon-map mr-10"></i>maps<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="maps_dr" class="collapse collapse-level-1">
							<li>
								<a href="vector-map.html">Vector Map</a>
							</li>
							<li>
								<a href="google-map.html">Google Map</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="documentation.html"><i class="icon-doc mr-10"></i>documentation</a>
					</li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv1"><i class="icon-arrow-down-circle mr-10"></i>Dropdown leavel 1<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
						<ul id="dropdown_dr_lv1" class="collapse collapse-level-1">
							<li>
								<a href="#">Dropdown Item</a>
							</li>
							<li>
								<a href="#">Dropdown Item</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2">Dropdown leavel 2<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
								<ul id="dropdown_dr_lv2" class="collapse collapse-level-2">
									<li>
										<a href="#">Dropdown Item</a>
									</li>
									<li>
										<a href="#">Dropdown Item</a>
									</li>
									<li>
										<a href="#">Dropdown Item</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /Left Sidebar Menu -->

			<!-- Right Sidebar Menu -->
			<div class="fixed-sidebar-right">
				<ul class="right-sidebar nicescroll-bar">
					<li>
						<div  class="tab-struct custom-tab-1">
							<ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
							</ul>
							<div class="tab-content" id="right_sidebar_content">
								<div  id="chat_tab" class="tab-pane fade active in" role="tabpanel">
									<div class="chat-cmplt-wrap">
										<div class="chat-box-wrap">
											<form role="search">
												<div class="input-group mb-15">
													<input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
													<span class="input-group-btn">
													<button type="button" class="btn  btn-default"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
											<ul class="chat-list-wrap">
												<li class="chat-list">
													<div class="chat-body">
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status away"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user1.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">1pm</span>
																</div>
																<div class="status offline"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user2.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user3.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
														<a  href="javascript:void(0)">
															<div class="chat-data">
																<img class="user-img img-circle"  src="dist/img/user4.png" alt="user"/>
																<div class="user-data">
																	<span class="name block capitalize-font">ryan gosling</span>
																	<span class="time block txt-grey">2pm</span>
																</div>
																<div class="status online"></div>
																<div class="clearfix"></div>
															</div>
														</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="recent-chat-box-wrap">
											<div class="panel panel-success card-view">
												<div class="panel-heading mb-20">
													<a class="goto-chat-list txt-light" href="javascript:void(0);"><i class="ti-angle-left"></i></a>
													<div class="text-center">
														<h6 class="panel-title txt-light">Alan Gilchrist</h6>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="panel-wrapper collapse in">
													<div class="panel-body">
														<div class="chat-content">
															<ul>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left">A forest is a large area of land covered with trees
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="self">
																	<div class="self-msg-wrap">
																		<div class="msg block pull-right"> Provide ecosystem...
																			<div class="msg-per-detail mt-5">
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
																<li class="friend">
																	<div class="friend-msg-wrap">
																		<img class="user-img img-circle block pull-left"  src="dist/img/user.png" alt="user"/>
																		<div class="msg pull-left"> Account for 75% of the gross primary productivity of them Earth's biosphere
																			<div class="msg-per-detail mt-5">
																				<span class="msg-per-name pr-5 txt-success">ryan</span>
																				<span class="msg-time txt-grey">2:30pm</span>
																			</div>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="input-group">
															<div class="input-group-btn">
																<div class="dropup">
																	<button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-smile-o"></i></button>
																	<ul class="dropdown-menu dropdown-menu-right">
																		<li><a href="javascript:void(0)">Action</a></li>
																		<li><a href="javascript:void(0)">Another action</a></li>
																		<li class="divider"></li>
																		<li><a href="javascript:void(0)">Separated link</a></li>
																	</ul>
																</div>
															</div>

															<input type="text" id="input_msg_send" name="send-msg" class="form-control" placeholder="Type something">
															<div class="input-group-btn">
																<div class="fileupload btn  btn-default"><i class="fa fa-paperclip"></i>
																	<input type="file" class="upload">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div id="messages_tab" class="tab-pane fade" role="tabpanel">
									<div class="message-box-wrap">
										<div class="streamline message-box">
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">12/10/16</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user1.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">2pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user2.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user3.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
											<hr/>
											<div class="sl-item">
												<div class="sl-avatar avatar avatar-sm avatar-circle">
													<img class="img-responsive img-circle" src="dist/img/user4.png" alt="avatar"/>
												</div>
												<div class="sl-content">
													<a href="javascript:void(0)" class="inline-block capitalize-font  mb-5 pull-left">Sandy Doe</a>
													<span class="inline-block font-12 mb-5 pull-right">1pm</span>
													<div class="clearfix"></div>
													<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div  id="todo_tab" class="tab-pane fade" role="tabpanel">
									<div class="todo-box-wrap">
										<!-- Todo-List -->
										<ul class="todo-list">
											<li class="todo-item">
												<div class="checkbox checkbox-default">
													<input type="checkbox" id="checkbox01"/>
													<label for="checkbox01">Record The First Episode Of HTML Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-pink">
													<input type="checkbox" id="checkbox02"/>
													<label for="checkbox02">Prepare The Conference Schedule</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-warning">
													<input type="checkbox" id="checkbox03" checked/>
													<label for="checkbox03">Decide The Live Discussion Time</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-success">
													<input type="checkbox" id="checkbox04" checked/>
													<label for="checkbox04">Prepare For The Next Project</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-danger">
													<input type="checkbox" id="checkbox05" checked/>
													<label for="checkbox05">Finish Up AngularJs Tutorial</label>
												</div>
											</li>
											<li class="todo-item">
												<div class="checkbox checkbox-purple">
													<input type="checkbox" id="checkbox06" checked/>
													<label for="checkbox06">Finish Infinity Project</label>
												</div>
											</li>
										</ul>
										<!-- /Todo-List -->
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<!-- /Right Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">

				<!-- Title -->
				<div class="row heading-bg  bg-red">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-light">analytical</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>dashboard</span></a></li>
							<li class="active"><span>analytical</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Conversion Rate</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="sm-graph-box">
										<div class="row">
											<div class="col-xs-6">
												<div id="sparkline_1"></div>
											</div>
											<div class="col-xs-6">
												<div class="counter-wrap text-right">
													<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">23</span><span>%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Total Visits</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="sm-graph-box">
											<div class="row">
												<div class="col-xs-6">
													<div id="sparkline_2"></div>
												</div>
												<div class="col-xs-6">
													<div class="counter-wrap text-right">
														<span class="counter-cap"><i class="fa  fa-level-up txt-success"></i></span><span class="counter">12</span><span>m</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">downloads</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="sm-graph-box">
											<div class="row">
												<div class="col-xs-6">
													<div id="sparkline_6"></div>
												</div>
												<div class="col-xs-6">
													<div class="counter-wrap text-right">
														<span class="counter-cap"><i class="fa  fa-level-down txt-danger"></i></span><span class="counter">1122</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

					</div>
					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-share mr-10"></i>Visits Conversion</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<canvas id="chart_1" height="417"></canvas>
								</div>
                            </div>
                        </div>
					</div>
				</div>
				<!-- /Row -->

				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary card-view">
							<div class="panel-heading mb-20">
								<div class="pull-left">
									<h6 class="panel-title txt-light">top countries</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table  class="table  top-countries" >
												<tbody>
													<tr>
														<td>
															<img src="dist/img/country/gb.svg" alt="user_img">
														</td>
														<td>
															United Kingdom
														</td>
														<td>
															$50
														</td>
													</tr>
													<tr>
														<td>
															<img src="dist/img/country/my.svg" alt="user_img">
														</td>
														<td>
															Malaysia
														</td>
														<td>
															$20
														</td>
													</tr>
													<tr>
														<td>
															<img src="dist/img/country/au.svg" alt="user_img">
														</td>
														<td>
															Australia
														</td>
														<td>
															$5
														</td>
													</tr>

													<tr>
														<td>
															<img src="dist/img/country/us.svg" alt="user_img">
														</td>
														<td>
															United States
														</td>
														<td>
															$5
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-pie-chart mr-10"></i>Impressions</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<canvas id="chart_6" height="280"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-clock mr-10"></i>Average Position</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="morris_extra_line_chart" class="morris-chart" style="height:280px;"></div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Row -->
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-green">
										<div class="row ma-0">
											<div class="col-xs-5 text-center pa-0 icon-wrap-left">
												<i class="icon-diamond txt-light"></i>
											</div>
											<div class="col-xs-7 text-center data-wrap-right">
												<h6 class="txt-light">monthly sales</h6>
												<span class="txt-light counter counter-anim">45678</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="weather_3" class="panel panel-default card-view pa-0 weather-info">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="row ma-0">
										<div class="col-xs-6 pa-0">
											<div class="left-block-wrap pa-30">
												<p class="block nowday"></p>
												<span class="block nowdate"></span>
												<div class="left-block  mt-15"></div>
											</div>
										</div>
										<div class="col-xs-6 pa-0">
											<div class="right-block-wrap pa-30">
												<div class="right-block"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">statement table</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview" id="statement">
												<thead>
													<tr>
														<th>date</th>
														<th>Order ID</th>
														<th>type</th>
														<th>Details</th>
														<th>price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>10-7-2016</td>
														<td>#85457898</td>
														<td>
															<span class="label label-primary font-weight-100">fee</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457897</td>
														<td>
															<span class="label label-danger font-weight-100">refund</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457896</td>
														<td>
															<span class="label label-primary font-weight-100">fee</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
													<tr>
														<td>10-7-2016</td>
														<td>#85457895</td>
														<td>
															<span class="label label-info font-weight-100">support</span>
														</td>
														<td>
															Author Fee for included support sale IVIP13444036
														</td>
														<td>$20</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Row -->
			</div>
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-5">
						<a href="index.html" class="brand mr-30"><img src="dist/img/logo-sm.png" alt="logo"/></a>
						<ul class="footer-link nav navbar-nav">
							<li class="logo-footer"><a href="#">help</a></li>
							<li class="logo-footer"><a href="#">terms</a></li>
							<li class="logo-footer"><a href="#">privacy</a></li>
						</ul>
					</div>
					<div class="col-sm-7 text-right">
						<p>2016 &copy; Kenny. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>

	<!-- simpleWeather JavaScript -->
	<script src="../vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="../vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="dist/js/simpleweather-data.js"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="../vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="../vendors/bower_components/Counter-Up/jquery.counterup.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>

	<!-- Sparkline JavaScript -->
	<script src="../vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

	<!-- ChartJS JavaScript -->
	<script src="../vendors/chart.js/Chart.min.js"></script>

	<!-- Morris Charts JavaScript -->
    <script src="../vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="../vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="dist/js/morris-data.js"></script>

	<script src="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>

    @livewireScripts

</body>


<!-- Mirrored from hencework.com/theme/kenny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 15:04:45 GMT -->
</html>