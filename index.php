<!doctype html>
<html ng-app="app" ng-cloak>
<?php require 'includes/header.php' ?>

<body ng-controller="index">
	<div id="headerbar">
	
		<div class="contentwrap">
			<div class="container-fluid">
			
				<div class="row">
				
					<div class="col-sm-12">
					
						<img src="images/headerlogo.svg" alt="Logo" />
						
						
						<nav id="mobilemenu">
				
							<div class="dropdown">
							  <button id="mobilemenubutton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bars" aria-hidden="true"></i>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="mobilemenubutton" style="border-radius: inherit;">
								<li><a class="aimofprojectlink">Aim Of Project</a></li>
								<li><a class="projectlifecyclelink">Project Lifecycle and Implementation Plan</a></li>
								<li><a class="estimatorapplink">Estimator APP</a></li>
								<li><a class="peoplemodulelink">People Module</a></li>
								<li><a class="schedulemodulelink">Schedule Module</a></li>
								<li><a class="jobsprojectsmodulelink">Jobs / Projects Module</a></li>
								<li><a class="invoicingmodulelink">Invoicing Module</a></li>
								<li><a class="stockassetsmodulelink">Stock / Assets Module</a></li>
								<li><a class="reportingmodulelink">Reporting Module</a></li>
                                  <li><a class="dashboardslink">Gatekeeper</a></li>
                                  <li><a class="dashboardslink">Dashboards</a></li>
								<li><a class="futureprojectscalabilitylink">Future Project Scalability</a></li>
								<li><a class="coneofsilencesecuritylink">The Cone of Silence - Security</a></li>
								<li><a class="theneedforspeedlink">The Need For Speed</a></li>
								<li><a class="thedayaftertomorrowlink">The Day After Tomorrow</a></li>
								<li><a class="theperfecthostlink">The Perfect Host</a></li>
								<li><a class="deliveryestimatelink">Delivery Estimate</a></li>
								<li><a class="thirdpartycontentlink">Third Party Content</a></li>
								<li><a class="pricinglink">Show Me The Money</a></li>
								<li><a class="proposalacceptancelink">Let's Create Awesomeness!</a></li>						
							
							  </ul>
							</div>

						</nav>
						
						<div class="clear"></div>
					
					</div>
				
				</div><!-- .row -->
			
			</div><!--.container-fluid -->
		</div>
	
	
	</div><!-- #headerbar -->
	
	

	<div id="splashcover">
		
		
		
		<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/jRDH8KI3I3o?rel=0&showinfo=0&controls=0&autoplay=1&loop=1' frameborder='0' allowfullscreen></iframe></div>

		
	
	
		<div id="splashoverlay">
		
			<div class="contentwrap">
				
				<div class="container-fluid">
					
					<div class="row">
					
						<div class="col-sm-12">

                            <h1 class="companytitle">{{comtitle}}</h1><span ng-show="isclose"><input ng-model="comtitle" ng-change="updateDatabaseComTtitle(comtitle)" ng-model-options="{debounce: 1000}" type="text"> </input></span><span><a href="#" ng-click="showEditor()"><i class="fa fa-pencil-square-o" aria-hidden="true" ng-model="togglename"></i>{{togglename}}</a> </span>
							<div class="clear"></div>
                            <h2 class="projecttitle">{{title}}</h2><span ng-show="isclose"><input ng-model="title" ng-change="updateProjectTitle(title)" ng-model-options="{debounce: 1000}" type="text"> </input> <a href="#" ng-click="showEditor()"><i class="fa fa-pencil-square-o" aria-hidden="true" ng-model="togglename"></i>{{togglename}}</a></span>
							<table class="splashtable table">
								<tr class="noborder">
									<td class="col-sm-2">Prepared By:{{"  "+ auth}}<span ng-show="isclose"><input style="color:black" ng-model="auth" ng-change="updateDatabaseAuthorName(auth)" ng-model-options="{debounce: 1000}" type="text"> </input><a href="#" ng-click="showEditor()"><i class="fa fa-pencil-square-o" aria-hidden="true" ng-model="togglename"></i>{{togglename}}</a></span></td>
									<td></td>
								</tr>
								<tr class="noborder">
									<td class="col-sm-4">Document ID:{{"  "+ doc_id}}<span ng-show="isclose"><input style="color:black" ng-model="doc_id" ng-change="updateDatabaseDocID(doc_id)" ng-model-options="{debounce: 1000}" type="text"> </input><a href="#" ng-click="showEditor()"><i class="fa fa-pencil-square-o" aria-hidden="true" ng-model="togglename"></i>{{togglename}}</a></span></td>
                                </tr>
                                <tr>
                                    <td></td>
                                </tr>


								<tr class="noborder">
									<td class="col-sm-2">Revision: {{"  "+rev_number}} <span ng-show="isclose"><input style="color:black" ng-model="rev_number" ng-change="updateRevNum(rev_number)" ng-model-options="{debounce: 1000}" type="text"> </input><a href="#" ng-click="showEditor()"><i class="fa fa-pencil-square-o" aria-hidden="true" ng-model="togglename"></i>{{togglename}}</a></span></td>
									<td></td>
								</tr>
								<tr class="noborder">
									<td class="col-sm-4">Date<span> <div class="dropdown"><a class="dropdown-toggle" id="dropdown" role="button" data-toggle="dropdown"data-target=".dropdown" href="#"> <div class="input-group"> <input type="text" id="date" name="date" class="form-control" data-ng-model="data.date"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <datetimepicker   style="color:black" data-ng-model="data.date" data-datetimepicker-config="{ dropdownSelector: '#dropdown' }"></datetimepicker>
                <!-- <datetimepicker data-ng-model="data.date"></datetimepicker>-->
                                    </ul></span></td>
								</tr>
							</table>
								
							
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</div><!-- #splashoverlay -->
		
	
	</div><!-- #splashcover -->
	
	
	
	
	<div id="mobilesplashcover">
	
	
	<div id="splashoverlay">
		
			<div class="contentwrap">
				
				<div class="container-fluid">
					
					<div class="row">
					
						<div class="col-sm-12">

                            <h1 class="companytitle">[Company Name]</h1>
                            <div class="clear"></div>
                            <h2 class="projecttitle">Bin Tracking and Work Flow Business Management System</h2>

                            <table class="splashtable table">
                                <tr class="noborder">
                                    <td class="col-sm-2">Prepared By:</td>
                                    <td>Michael Krome</td>
                                </tr>
                                <tr class="noborder">
                                    <td class="col-sm-2">Document ID:</td>
                                    <td>RECYC29052017</td>
                                </tr>
                                <tr class="noborder">
                                    <td class="col-sm-2">Revision:</td>
                                    <td>1</td>
                                </tr>
                                <tr class="noborder">
                                    <td class="col-sm-2">Date</td>
                                    <td>30/05/2017</td>
                                </tr>
                            </table>
								
							
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</div><!-- #splashoverlay -->
	
	
	</div>
	
	
	
	
	<div id="tableofcontents" class="paddingtop80 paddingbottom80 whitebg">
	
		
	
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				<h2 class="sectionheading">Ahoy!</h2>
				
				<p>Hi Alan and Sharon,</p>

				<p>Thank you for considering OnePoint Software Solutions. Please find below a summary of our solutions according to requirements discussed in our recent meeting with you.  This is a very simplified overview but you can be sure that we have listened to your needs and required outcomes.  We will work with you to deliver a customised solution that will add real value to your business. Once we are engaged, we produce detailed Process maps and Design walk throughs for your approval so you know what you are expecting when development is complete.</p>
				
				</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	
	<div id="missionstatement"  class="paddingtop80 paddingbottom80 lightgreyg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
					
					<h2 class="sectionheading">Our Mission</h2>
					
					<p>To create innovative solutions that <strong>WOW</strong> our clients by providing systems to improve their business.</p>
					
				</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php require "modules/toc/tableofcontents.php"; ?>


    <?php require "modules/aim/aim.php"; ?>

	
	
	
	
	
	
	
	
	
	
	<div id="projectlifecycle" class="paddingtop80 paddingbottom80 whitebg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				
				<h2 class="sectionheading">Project Lifecycle &amp; Implementation Plan</h2>
				
				
					<p>We always work with you every step of the way, going back and forth as required, to ensure that the solution provided is the solution that fits your business model. We take time and extra care in the planning, analysis and design stage to ensure a speedy and seamless development process.</p>   

					<p class="paddingbottom40">Prior to commencement of any development, our clients sign off on detailed process maps and design screen walk throughs to ensure they receive what they expect.  And after development, if there are any faults (bugs) in what we’ve built, we fix it!</p>

				
				
				<img src="images/project-lifecycle.png" alt="Project Lifecycle" />

				
				
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .contentwrap -->
	</div><!-- #projectlifecycle -->
	
	
	
	
	
	

	
	
	
	
	
	
	<!-- PEOPLE MODULE -->
	<div id="peoplemodule" class="paddingtop80 paddingbottom80 whitebg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				<h2 class="sectionheading">People Module</h2>
				
					<p>Create and manage Users (unlimited users) ie Employees, Customers, Contractors, Suppliers.  Store relevant contact information and Access this information throughout the system.</p>
					<p>Customers can have multiple sites, and each site contains site-specific contact information and asset details. </p>
					
					
					
					
					<div class="featurestep stepred">
						<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-2 col-sm-3 iconcol">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>

							<div class="col-md-10 col-sm-9 contentcol">
								<h3>Employees</h3>
								<ul>
									<li>Identification: Personal, Work, Address, Emergency Contact and Password Details</li>
									<li>Sites: (requires Jobs Module) Assigned Sites</li>
									<li>Schedule: (requires Scheduling Module) Calendar view and upcoming bookings</li>
									<li>Equipment: Issued Equipment</li>
									<li>Timesheets: (requires GateKeepr Module)</li>
									<li>Leave: Leave requests and details</li>
									<li>Skills: Qualifications and skills documents</li>
									<li>Communications: Communication Log</li>
									<li>Documentation: Document upload and storage</li>
									<li>Evaluations: Evaluation details</li>
								</ul>
							</div>
						
						</div><!-- .row -->
						</div>
					</div><!-- . featurestep -->
					
					
					
					
					
					<div class="featurestep stepgreen">
						<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-2 col-sm-3 iconcol">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>

							<div class="col-md-10 col-sm-9 contentcol">
								<h3>Customers</h3>
								<ul>
									<li>Stats: a handy dashboard to view important customer stats including Tasks/Reminders, Current Jobs, Proposals Issued and Job Status. Also inlcudes handy short cuts to Add jobs, proposals and invoices</li>
									<li>Identification: Customer / Company details, Primary contact, Company social media and Comments</li>
									<li>Contacts: Add various contacts and view communication history</li>
									<li>Sites: Add various sites with relevant details including address and contact details</li>
									<li>Documentation: Document upload and storage</li>
									<li>Jobs: (requires Jobs Module) View summary of Customer's Jobs and Add new Jobs</li>
								</ul>
							</div>
						
						</div><!-- .row -->
						</div>
					</div><!-- . featurestep -->
					
					
					
					
					
					<div class="featurestep steppurple">
						<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-2 col-sm-3 iconcol">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>

							<div class="col-md-10 col-sm-9 contentcol">
								<h3>Contractors</h3>
								<ul>
									<li>Identification: Personal, address and payment details</li>
									<li>Insurances: Add various insurance details</li>
									<li>Sites: (requires Jobs Module) Assigned Sites</li>
									<li>Schedule: (requires Scheduling Module) Calendar view and upcoming bookings</li>
									<li>Equipment: Issued Equipment</li>
									<li>Timesheets: (requires GateKeepr Module)</li>
									<li>Comminications: Communication Log</li>
									<li>Documentation: Document upload and storage</li>
								</ul>
							</div>
						
						</div><!-- .row -->
						</div>
					</div><!-- . featurestep -->
					
					
					
					
					
					
					<div class="featurestep stepblue">
						<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-2 col-sm-3 iconcol">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>

							<div class="col-md-10 col-sm-9 contentcol">
								<h3>Suppliers</h3>
								<ul>
									<li>Identification: Supplier details and summary of products provided</li>
									<li>Contacts: Add various supplier contacts and viw communication history</li>
									<li>Documentation: Document upload and storage</li>
								</ul>
							</div>
						
						</div><!-- .row -->
						</div>
					</div><!-- . featurestep -->
					
					
					
					
					
					

					
					
					
				
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .contentwrap -->
	</div><!-- #peoplemodule -->








    <!-- SCHEDULE MODULE -->
	<div id="schedulemodule" class="paddingtop80 paddingbottom80 lightgreyg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				<h2 class="sectionheading">Schedule Module</h2>
				
				
				
					<p>The scheduling module allows for advanced scheduling features throughout the system. It provides a visual Calendar view of scheduled events relevant to the section it is displayed in and such features as drag and drop inside the calendar. When linked with the <strong>Asset Module</strong>, it will provide access to recurring schedules and maintenance cycles for your company assets, and assets on customer's sites.</p>
				
				
				
				<div class="featurestep stepred">
					<div class="container-fluid">
					<div class="row">

						<div class="col-md-2 col-sm-3 iconcol">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</div>

						<div class="col-md-10 col-sm-9 contentcol">
							<h3>Calendar</h3>
							<ul>
								<li>A visal calendar view of all events and users</li>
								<li>Filter by event</li>
								<li>Filter by user (eg. Employee, Contractor)</li>
								<li>Month, week and day view</li>
							</ul>
						</div>

					</div><!-- .row -->
					</div>
				</div><!-- . featurestep -->
				
				
				
				
				
				<div class="featurestep stepgreen">
					<div class="container-fluid">
					<div class="row">

						<div class="col-md-2 col-sm-3 iconcol">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</div>

						<div class="col-md-10 col-sm-9 contentcol">
							<h3>List</h3>
							<ul>
								<li>A detailed list view of scheduled events</li>
								<li>Day list or week list</li>
							</ul>
						</div>

					</div><!-- .row -->
					</div>
				</div><!-- . featurestep -->
				
				
				
				<div class="featurestep steppurple">
					<div class="container-fluid">
					<div class="row">

						<div class="col-md-2 col-sm-3 iconcol">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</div>

						<div class="col-md-10 col-sm-9 contentcol">
							<h3>Timeline</h3>
							<ul>
								<li>A historical, visual, timeline of events and logs and System usage</li>
							</ul>
						</div>

					</div><!-- .row -->
					</div>
				</div><!-- . featurestep -->
				
				
				
				
				
				
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .contentwrap -->
	</div><!-- #schedulemodule -->







    <!-- PROJECTS MODULE -->
    <?php require 'modules/projectsmodel.php'; ?>
    <!-- Projects Module End -->
    <!--<ng-view></ng-view> -->
	<?php require 'modules/invoice/invoice.php'; ?>
    <?php require 'modules/gatekeeper.php'; ?>
    <?php require 'modules/dashboard.php'; ?>
	
	<div id="productimages" class="paddingtop80 paddingbottom80 bluebg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
					<img src="images/onepoint-dashboards.png" alt="Dashboards" />
					
					<img class="margintop40" src="images/onepoint-allstars.png" alt="Allstars" />
				
				</div>
				</div>
			</div>
		</div>
	</div

    <?php require 'modules/scalability.php'; ?>
    <?php require 'modules/coneofsilence.php'; ?>
    <?php require 'modules/theneedforspeed.php'; ?>
	
	<div id="thedayaftertomorrow" class="paddingtop80 paddingbottom80 lightgreyg">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				<h2 class="sectionheading">The Day After Tomorrow</h2>
				
					<p>Life in the cloud is mostly all rainbows and sunshine, but sometimes the fluffy white clouds can turn into menacing storms. Luckily OnePoint has developed multiple strategies for dealing with disasters. Our servers are hosted and replicated across multiple zones in Australia. If there is a problem in one zone, the other zones will automatically pick up the traffic without any interruption to the service. Once the problem has been fixed, the zone comes back into play seamlessly.</p>

					<p>If data sovereignty laws don't apply, then we can also replicate your site across the world. In the unlikely event of a catastrophe taking the whole country offline (such as an earthquake, flood, or a Bruce Willis movie), the site will still be available.</p>

					<p>During our most recent DR drills (held in January 2017) we simulated a complete server failure. Our technicians were alerted immediately and were able to restore all services onto a new server in less time it takes Kim Kardashian to post a selfie.</p>
				
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .contentwrap -->
	</div><!-- #thedayaftertomorrow -->
	
	
	
	
	
	
	
	
	
	
	
	<?php require 'modules/theperfecthost.php'; ?>

    <?php require 'modules/deliveryestimate.php'; ?>

    <?php require "modules/thirdpartycontent.php"; ?>
    <?php require "modules/pricing.php"; ?>
	
	
	
	
	
	
	
	
	<div id="proposalacceptance" class="paddingtop80 paddingbottom0 whitebg" style="border-bottom: none !important">
		<div class="contentwrap">
			<div class="container-fluid">
				<div class="row">
				<div class="col-sm-12">
				
				<h2 class="sectionheading">Let's Create Awesomeness!</h2>
					
					<p>To accept this proposal, please sign and date below;</p>
					
					<div class="row">
					
						<div class="col-sm-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" type="text" ng-model="TheName">
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label>Date</label>
								<input class="form-control datepicker" type="text" ng-model="TheDate">
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label>Position</label>
								<input class="form-control" type="text" ng-model="ThePosition">
							</div>
						</div>
					
					</div><!-- .row -->
					
					<div class="row">
						
						<div class="col-sm-12">
							<div class="form-group paddingbottom20">
								<label>Acceptance</label>
								<div class="input-group accepttext">
								<input type="checkbox" name="vehicle" value="Accepted" class="paddingright10" ng-model="TheAceptance"> I have read the proposal document and wish to proceed.
								</div>
							</div>
						</div>
					
					</div><!-- .row -->
					
					
					<p>We look forward to working with [Company Name] and if you have any questions or comments please feel free to contact OnePoint Software via email or phone our office on (07) 3444 0045.</p>
					
					
					
					<div id="offerexpires" class="paddingbottom60 paddingtop40">
						<h3><i class="fa fa-clock-o" aria-hidden="true"></i></h3>
						<div id="offerexpirydate"></div>
						<div class="clear"></div>
					</div><!-- #offerexpires -->
					
					
					
					<!-- YYYY / MM / DD -->
					
					<script type="text/javascript">
					  $("#offerexpirydate")
					  .countdown("2017/06/30", function(event) {
						$(this).text(
						  event.strftime('%D days %H:%M:%S')
						);
					  });
					</script>
					
					
					<div class="clear"></div>


                    <div class="alert alert-success alert-dismissible" role="alert" ng-if="showAcceptAlert == 'true'">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Thanks!</strong> We'll be in contact soon to get your project moving forward.
                    </div>

                    <div class="alert alert-danger alert-dismissible" role="alert" ng-if="showRejectAlert == 'true'">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>D'oh!</strong> We're sorry that this wasn't what you were looking for. We'll give you a call to see what we can do for you.
                    </div>

                    <div class="clear"></div>
					
					<div class="row">
						
						<div class="col-sm-4">
							<button class="btn btn-block btn-lg btn-success" ng-click="acceptProposal(TheName, TheDate, ThePosition, estimatorApp)"><span class="glyphicon glyphicon-ok"></span> Accept Proposal</button>
						</div>
						
						
						<div class="col-sm-4">
							<button class="btn btn-block btn-lg btn-info" data-toggle="modal" data-target="#feedbackmodal"><i class="fa fa-comment" aria-hidden="true"></i> Feedback</button>
						</div>
						
						
						<div class="col-sm-4">
							<button class="btn btn-block btn-lg btn-danger" ng-click="rejectProposal(TheName, TheDate, ThePosition, estimatorApp)"><span class="glyphicon glyphicon-remove"></span> Reject Proposal</button>
						</div>
						
						
					
					</div>
					
					
					
					
					
					
					<img class="marginbottom0 margintop80 footercartoon"  src="images/homepage-cartoon-images-2017.png" alt="Cartoon" />
					
					
					
				</div><!-- .col-sm-12 -->
				</div><!-- .row -->
			</div><!-- .container-fluid -->
		</div><!-- .contentwrap -->
	</div><!-- #proposalacceptance -->
	
	
	
	
	
	<div id="copy">
	
		<p>© 2017 OnePoint Software Solutions - Gate 2, 113 Cobalt Street Carole Park, QLD 4300</p>
	
	</div>

<!-- Feedback Modal -->
<div class="modal fade" id="feedbackmodal" tabindex="-1" role="dialog" aria-labelledby="feedbackmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Proposal Feedback</h4>
      </div>
      <div class="modal-body">
		  <p>Please provide feedback below</p>
     		<div class="form-group">
				<label>Proposal Feedback</label>
				<textarea class="form-control" rows="8" ng-model="feedback"></textarea>
		  	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block btn-lg" ng-click="sendFeedback(feedback)"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Feedback</button>
      </div>
    </div>
  </div>
</div>

<!-- Date Picker ------------------------>
<script src="js/angular-datepicker.js"></script>

</body>

<?php require 'includes/footer.php';?>
</html>

<!--<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    });
</script>-->
