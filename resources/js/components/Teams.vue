<template>
<div>
      <div class="main-heading-bar">
         <img src="" class="unity mr-2 mb-1" width="14" />
         <div class="dropdown d-inline-block">
            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <h2>{{unitData.unit_name}}
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
               </h2>
            </a>
            <div class="dropdown-menu dropdownMenuButton" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="#" @click="editUnitModal"><i class="fas fa-pencil-alt" style="margin-right: 5px;"></i> <span style="font-family: 'Spartan', sans-serif;">Edit unit details</span></a>
               <a class="dropdown-item" href="#" @click="duplicateModal"><i class="fas fa-copy" style="margin-right: 5px;"></i> <span style="font-family: 'Spartan', sans-serif;">Duplicate</span></a>
               <a class="dropdown-item" href="javascript::void(0);" onclick="event.preventDefault();
                        document.getElementById('export-csv').submit();">
                  <i class="fas fa-print" style="margin-right: 5px;"></i> <span style="font-family: 'Spartan', sans-serif;">Export CSV</span>
               </a>
               <a class="dropdown-item" href="#"><i class="fas fa-print" style="margin-right: 5px;"></i> <span style="font-family: 'Spartan', sans-serif;">Export PDF</span></a>
               <a class="dropdown-item" @click="deleteProduct" href="#" style="color:#d7525c;"><i class="fas fa-trash" style="margin-right: 5px;"></i> <span style="font-family: 'Spartan', sans-serif;">Delete</span></a>


            
            
            </div>
         </div>
         <i class="far fa-star mx-1" aria-hidden="true"></i>
         <a href="#" class="h6"><i class="fa fa-circle text-success" aria-hidden="true"></i> On Track</a>
      </div> 


      <div class="contents sectionsec">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
               <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Overview</a>
               </li>
               <li class="nav-item" role="presentation">
               <a class="nav-link active" id="team-tab" data-toggle="tab" href="#team" role="tab" aria-controls="team" aria-selected="true">Teams</a>
               </li>
               <li class="nav-item" role="presentation">
               <a class="nav-link" id="Teammates-tab" data-toggle="tab" href="#Teammates" role="tab" aria-controls="Teammates" aria-selected="false">Teammates</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               

               <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="container-fluid">
							<div class="row">

								<div class="col-xl-6 col-md-6">
									<div class="row d-flex justify-content-between align-items-center px-lg-4 py-lg-3 px-3 py-2">
										<div class="col-xl-6 col-md-6">
											<div class="card-box"> 
												<div class="widget-chart-1">
													  
													<div class="widget-detail-1 text-center">
														<h6 class="font-weight-normal pt-2 mb-1"> 2 </h6>
														<p class="text-muted mb-1">Planners</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-6 col-md-6">
											<div class="card-box"> 
												<div class="widget-chart-1"> 
													<div class="widget-detail-1 text-center">
														<h6 class="font-weight-normal pt-2 mb-1"> 10 </h6>
														<p class="text-muted mb-1">Collaborators</p>
													</div>
												</div>
											</div> 
										</div>
									</div> 
									
									<div class="table-responsive">
                                        <table class="table mb-0 table-card">
                                            <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th><a href="#" class="h7"><i class="fa fa-circle text-success" aria-hidden="true"></i> On Track</a></th>
                                                <th><a href="#" class="h7"><i class="fa fa-circle text-warning" aria-hidden="true"></i> At Risk</a></th>
                                                <th><a href="#" class="h7"><i class="fa fa-circle text-danger" aria-hidden="true"></i> Off Track</a></th>
                                                <th><a href="#" class="h7">En Total</a></th>
                                            </tr>
                                            </thead>
                                            <tbody  class="cardbx">
                                            <tr>
                                                <th scope="row">Teams</th>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>0</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Goals</th>
                                                <td>3</td>
                                                <td>5</td>
                                                <td>0</td>
                                                <td>9</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div> 
									
									<div class="d-flex justify-content-between py-lg-3 px-3 py-2 mt-3">
										<div>
											<h6><b>Latest Update</b></h6>
										</div>
										<div>
										  <button type="button" class="btn btn-primary">Update Status</button>
										</div> 
									</div>
									
									<div class="py-lg-3">
										<div class="col-xl-12 col-md-12">
											<div class="card-box card-with-border"> 
												<h6 class="header-title mt-0 mb-4"><b>The unit was created</b></h6>
												<div class="mb-4">
													<span class="badge badge-warning badge-pill">DG</span>
														<a href="#">Direccion General</a> 
														<span class="small-10">22 Mar</span>
												</div>
												
												<div class="widget-chart-1"> 
													<div class="widget-detail-1">
														<div class="text-left mb-4">
															<p class="text-muted font-13">
																<strong>Status :</strong> 
																<span class="ml-2">
																	<span class="badge badge-warning badge-pill">DG</span>
																	<a href="#">Direccion General</a> 
																</span>
															</p>

															<p class="text-muted font-13"><strong>Owner :</strong><span class="ml-2"><a href="#" class="h7"><i class="fa fa-circle text-success" aria-hidden="true"></i> On Track</a></span></p> 

														</div>
														<div class="text-left mb-4">
															<h4 class="header-title mt-0 mb-4">Summary</h4>
															<p class="text-muted font-13">The unit is ready to perform</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="py-lg-3">
										<div class="col-xl-12 col-md-12">
											<div class="header-title mt-0 mb-4">
												<strong>The unit was created</strong> 
												<a href="#" class="h7">View all</a>  
											</div>
											
											<div class="mb-4">
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-success" aria-hidden="true"></i> </a>
												</span>
												
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												<span class="mr-4">
													<a href="#" class="h7"><i class="fa fa-circle text-disabled" aria-hidden="true"></i> </a>
												</span>
												 
											</div>
										</div>
									</div>
									  
								</div> 

								<div class="col-xl-6 col-md-6"> 
									 
									<div class="side-options-overlay collapse show  w-100" id="profilelist" style="">
										<div class="card card-outline-secondary h-100 border-0"> 
											<div class="card-body">
												<div class="mb-3">
													<h6><b>About this unit</b></h6>
												</div>
											   <form autocomplete="off" class="form" role="form">
												  <div class="form-group row ml-3">
													 <label class="col-lg-4 col-form-label form-control-label">Assginee</label>
													 <div class="col-lg-8 d-inline-block">
														<i class="fa fa-users to" aria-hidden="true"></i> Altas Transporte
													 </div>
												  </div>
												  <div class="form-group row ml-4">
													 <p class="col-form-label form-control-label">Add more details to unit</p> 
												  </div>
												  <hr>
													<div class="mb-3">
														<h6><span class="mr-2"><i class="fa fa-th to" aria-hidden="true"></i></span><b>Purpose</b></h6> 
														<span class="small-12 mt-5 ml-4">Add more details ...</span>
													</div>
													<hr>
													<div class="mb-3">
														<h6><span class="mr-2"><i class="fa fa-th to" aria-hidden="true"></i></span><b>Values</b></h6> 
														<span class="small-12 mt-5 ml-4">Add more details ...</span>
													</div>
													<hr>
													<div class="mb-3">
														<h6><span class="mr-2"><i class="fa fa-th to" aria-hidden="true"></i></span><b>Value proposition</b></h6> 
														<span class="small-12 mt-5 ml-4">Add more details ...</span>
													</div>
													<div>
													  <button type="button" class="btn btn-default-cs">+</button>
													</div> 
											   </form>
											</div>
											<div class="card-footer mt-auto p-0">
											  <ul class="text-center">
												<li><small>Predo Valdes create the team 6 days ago</small></li>
												<li><small>Predo Valdes added jose Luisas Planner 6 days ago</small></li>
												<li class="myreply text-right"><small>Hola Equipo!</small></li>
											  </ul>
											  <form class="sharebox">
												<div class="d-flex">
												  
													<label for="attach" class="my-auto mr-2"><i class="fas fa-paperclip h2 m-0 text-primary"></i></label>
													<input type="file" name="attach" id="attach">
												  
												  <input type="text" name="question" id="question" class="form-control" placeholder="Ask a question or post an update...">
												  <button class="btn btn-primary p-2 rounded-circle"><i class="fas fa-paper-plane"></i></button>
												</div>
											  </form>
											</div>

										</div>
									</div> 
								</div> 
							</div> 
                  </div>
					</div>



               <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
               <div class="d-flex justify-content-between align-items-center px-lg-4 py-lg-3 px-3 py-2">
                  <div>
                  <button type="button" class="btn btn-primary"  @click="newModal"><span>+ </span>Add Team</button>
                  </div>
                  <div>
                  <a href="#" class="mr-3"><i class="mdi mdi-progress-check"></i> All Teams</a>
                  <a href="#" class="mr-3"><i class="mdi mdi-filter-variant"></i> Filter</a>
                  <a href="#" class="mr-3"><i class="mdi mdi-sort"></i> Sort</a>
                  <a href="#" class="mr-3"><i class="mdi mdi-settings-outline"></i> Customize</a>
                  </div>
               </div>
               <div class="table-responsive">
                  <table class="table table-hover">
                  <thead>
                     <tr>
                        <th colspan="2" class="border-right" width="40%">Team name</th>
                        <th class="border-right">Plaanner</th>
                        <th class="border-right">Collaborators</th>
                        <th class="border-right">Assignee</th>
                        <th><i class="fa fa-plus" aria-hidden="true"></i></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr v-for="team in teams.data" :key="team.id">
                        <td colspan="2" class="tablehead h5 font-weight-bold teamtdtitle">
                           <i class="fa fa-users to" aria-hidden="true" id="navbarSideButton" style="color:#8dc6ff;margin-right:10px;"></i>
                           <a data-toggle="collapse" href="#profilelist" role="button" aria-expanded="false" aria-controls="profilelist" style="color: #613629;">{{team.name}}</a>
                        </td>
                        <td class="border-right">5</td>
                        <td class="border-right">2</td>
                        <td>
                        <span class="badge badge-primary badge-pill">DG</span>
                        Jose Luis De...
                        </td>
                        <td></td>
                     </tr>
                     
                  </tbody>
                  </table>
                  
                  <div class="card-footer">
                     <pagination :data="teams" @pagination-change-page="getResults"></pagination>
                  </div>
               </div>

               <div class="side-options-overlay overlay collapse" id="profilelist">
                  <div class="card card-outline-secondary h-100 border-0">
                     <div class="card-header d-flex justify-content-between">
                     <div>
                        <h4 class=" d-inline-block"><i class="fa fa-users to" aria-hidden="true"></i> Altas Transporte</h4>
                        <a href="#" class="h6"><i class="fa fa-circle text-success" aria-hidden="true"></i> On Track</a>
                     </div>
                     <div>
                        <a href="#" class="h4 ml-3"><i class="mdi mdi-more text-primary" aria-hidden="true"></i></a>
                        <a href="#" class="h4 ml-3 overlay-close"><i class="mdi mdi-arrow-collapse-right text-primary" aria-hidden="true"></i></a>
                     </div>
                     </div>
                     <div class="card-body">
                        <form autocomplete="off" class="form" role="form">
                        <div class="form-group row">
                           <label class="col-lg-4 col-form-label form-control-label">Assgineer</label>
                           <div class="col-lg-8">
                              <span class="title-logo bg-yellow">Jo</span> <span>Joes luis</span>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-lg-4 col-form-label form-control-label">Description</label>
                           <div class="col-lg-8">
                              <textarea class="textareades form-control" id="complexExampleMessage" rows="2"></textarea>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="col-lg-12 col-form-label form-control-label">Planners</label>
                        </div>
                        <div class="form-group row">
                           <div class="col-lg-8">
                              <div class="content"><span>+</span>Add Partner</div>
                           </div>
                        </div>
                        </form>
                     </div>
                     <div class="card-footer mt-auto p-0">
                     <ul class="text-center">
                        <li><small>Predo Valdes create the team 6 days ago</small></li>
                        <li><small>Predo Valdes added jose Luisas Planner 6 days ago</small></li>
                        <li class="myreply text-right"><small>Hola Equipo!</small></li>
                     </ul>
                     <form class="sharebox">
                        <div class="d-flex">
                        
                           <label for="attach" class="my-auto mr-2"><i class="fas fa-paperclip h2 m-0 text-primary"></i></label>
                           <input type="file" name="attach" id="attach">
                        
                        <input type="text" name="question" id="question" class="form-control" placeholder="Ask a question or post an update...">
                        <button class="btn btn-primary p-2 rounded-circle"><i class="fas fa-paper-plane"></i></button>
                        </div>
                     </form>
                     </div>

                  </div>
               </div>
               </div>
               
               <div class="tab-pane fade" id="Teammates" role="tabpanel" aria-labelledby="Teammates-tab">
						<div class="d-flex justify-content-between align-items-center px-lg-4 py-lg-3 px-3 py-2">
							<div>
							  <button type="button" class="btn btn-primary"><span>+ </span>Add Teammate</button>
							</div>
							<div>
							  <a href="#" class="mr-3"><i class="mdi mdi-progress-check"></i> All Teammates</a>
							  <a href="#" class="mr-3"><i class="mdi mdi-filter-variant"></i> Filter</a>
							  <a href="#" class="mr-3"><i class="mdi mdi-sort"></i> Sort</a>
							  <a href="#" class="mr-3"><i class="mdi mdi-settings-outline"></i> Customize</a>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-hover">
							  <thead>
								 <tr>
									<th colspan="2" class="border-right" width="40%">Teammate name</th>
									<th class="border-right">Teams</th> 
									<th class="border-right">Job Title</th>
									<th><i class="fa fa-plus" aria-hidden="true"></i></th>
								 </tr>
							  </thead>
							  <tbody>
								 <tr>
									<td class="tablehead"><span class="badge badge-primary badge-pill">DG</span></td>
									<td class="border-right h5 font-weight-bold teamtdtitle"><a href="#">Direccion General</a>
									</td>
									<td class="border-right">
										<span class="mr-3">
											<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a>
											 Importacian 
										</span> 
										<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Imp...
										
									</td>
									<td>
									   
									</td>
									<td></td>
								 </tr>
								 <tr>
									<td class="tablehead"><span class="badge badge-primary badge-pill">DG</span></td>
									<td class="border-right h5 font-weight-bold teamtdtitle"><a href="#">Direccion General</a>
									</td>
									<td class="border-right">
										<span class="mr-3">
											<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Importacian 
										</span> 
										<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Imp...
										
									</td>
									<td>
									   
									</td>
									<td></td>
								 </tr>
								 <tr>
									<td class="tablehead"><span class="badge badge-primary badge-pill">DG</span></td>
									<td class="border-right h5 font-weight-bold teamtdtitle"><a href="#">Direccion General</a>
									</td>
									<td class="border-right">
										<span class="mr-3">
											<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Importacian 
										</span> 
										<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Imp...
										
									</td>
									<td>
									   
									</td>
									<td></td>
								 </tr>
								 <tr>
									<td class="tablehead"><span class="badge badge-primary badge-pill">DG</span></td>
									<td class="border-right h5 font-weight-bold teamtdtitle"><a href="#">Direccion General</a>
									</td>
									<td class="border-right">
										<span class="mr-3">
											<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Importacian 
										</span> 
										<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Imp...
										
									</td>
									<td>
									   
									</td>
									<td></td>
								 </tr>
								 <tr>
									<td class="tablehead"><span class="badge badge-primary badge-pill">DG</span></td>
									<td class="border-right h5 font-weight-bold teamtdtitle"><a href="#">Direccion General</a>
									</td>
									<td class="border-right">
										<span class="mr-3">
											<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Importacian 
										</span> 
										<a href=""><i class="fa fa-users to" aria-hidden="true" id="navbarSideButton"></i></a> Imp...
										
									</td>
									<td>
									   
									</td>
									<td></td>
								 </tr>
							  </tbody>
						   </table>
						 </div>

						 <div class="side-options-overlay collapse" id="profilelist">
							<div class="card card-outline-secondary h-100 border-0">
								<div class="card-header d-flex justify-content-between">
								  <div>
									<h4 class=" d-inline-block"><i class="fa fa-users to" aria-hidden="true"></i> Altas Transporte</h4>
								   <a href="#" class="h6"><i class="fa fa-circle text-success" aria-hidden="true"></i> On Track</a>
								  </div>
								  <div>
									<a href="#" class="h4 ml-3"><i class="mdi mdi-more text-primary" aria-hidden="true"></i></a>
									<a href="#" class="h4 ml-3"><i class="mdi mdi-arrow-collapse-right text-primary" aria-hidden="true"></i></a>
								  </div>
								</div>
								<div class="card-body">
								   <form autocomplete="off" class="form" role="form">
									  <div class="form-group row">
										 <label class="col-lg-4 col-form-label form-control-label">Assgineer</label>
										 <div class="col-lg-8">
											<span class="title-logo bg-yellow">Jo</span> <span>Joes luis</span>
										 </div>
									  </div>
									  <div class="form-group row">
										 <label class="col-lg-4 col-form-label form-control-label">Description</label>
										 <div class="col-lg-8">
											<textarea class="textareades form-control" id="complexExampleMessage" rows="2"></textarea>
										 </div>
									  </div>
									  <div class="form-group row">
										 <label class="col-lg-12 col-form-label form-control-label">Planners</label>
									  </div>
									  <div class="form-group row">
										 <div class="col-lg-8">
											<div class="content"><span>+</span>Add Partner</div>
										 </div>
									  </div>
								   </form>
								</div>
								<div class="card-footer mt-auto p-0">
								  <ul class="text-center">
									<li><small>Predo Valdes create the team 6 days ago</small></li>
									<li><small>Predo Valdes added jose Luisas Planner 6 days ago</small></li>
									<li class="myreply text-right"><small>Hola Equipo!</small></li>
								  </ul>
								  <form class="sharebox">
									<div class="d-flex">
									  
										<label for="attach" class="my-auto mr-2"><i class="fas fa-paperclip h2 m-0 text-primary"></i></label>
										<input type="file" name="attach" id="attach">
									  
									  <input type="text" name="question" id="question" class="form-control" placeholder="Ask a question or post an update...">
									  <button class="btn btn-primary p-2 rounded-circle"><i class="fas fa-paper-plane"></i></button>
									</div>
								  </form>
								</div>

							 </div>
						</div>
						
					</div>


            </div>
            
            
            
            <div class="modal fade" id="addNewTeam" tabindex="-1" role="dialog" aria-labelledby="addNewTeam" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" style="display: inline-block;font: normal normal 600 16px/26px Montserrat;">Add Team</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 28px;">&times;</span>
                     </button>
                  </div>
            
                  <form id="addNewTeamForm" @submit.prevent="createTeam()">
                        <div class="modal-body" style="padding-top:0;">
                           <div class="form-group">
                              <label style="font: normal normal 490 11px Montserrat;">Name of the team:</label>
                              <input 
                                 type="text" 
                                 name="name"
                                 v-model="form.name"
                                 class="form-control"
                                 style="border-radius: 2px;margin-top: 5px;"
                                 autocomplete="off"
                                 :class="{ 'is-invalid': form.errors.has('name') }"
                                 />
                              <has-error :form="form" field="name"></has-error>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="javascript::void(0);" data-dismiss="modal" style="font: normal normal 490 11px Montserrat;letter-spacing: 2px;margin-right: 10px;text-decoration: none;">Cancel</a>
                           <button type="submit" class="btn btn-primary" style="font: normal normal 490 14px Montserrat;padding: 8px 12px;height:auto;">Add Team</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>


            <div class="modal fade" id="editUnitModal" tabindex="-1" role="dialog" aria-labelledby="editUnitModal" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" style="display: inline-block;font: normal normal 600 16px/26px Montserrat;">Edit Unit</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 28px;">&times;</span>
                     </button>
                  </div>
            
                  <form id="editUnitForm" @submit.prevent="updateUnit()">
                        <div class="modal-body" style="padding-top:0;">
                           <div class="form-group">
                              <label style="font: normal normal 490 11px Montserrat;">Name of the unit:</label>
                              <input 
                                 type="text" 
                                 name="unit_name"
                                 v-model="unitform.unit_name"
                                 class="form-control"
                                 style="border-radius: 2px;margin-top: 5px;"
                                 autocomplete="off"
                                 :class="{ 'is-invalid': unitform.errors.has('name') }"
                                 />
                              <has-error :form="unitform" field="name"></has-error>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="javascript::void(0);" data-dismiss="modal" style="font: normal normal 490 11px Montserrat;letter-spacing: 2px;margin-right: 10px;text-decoration: none;">Cancel</a>
                           <button type="submit" class="btn btn-primary" style="font: normal normal 490 14px Montserrat;padding: 8px 12px;height:auto;">Update</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
            

             <div class="modal fade" id="duplicateModal" tabindex="-1" role="dialog" aria-labelledby="duplicateModal" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" style="display: inline-block;font: normal normal 600 16px/26px Montserrat;">Duplicate Unit</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 28px;">&times;</span>
                     </button>
                  </div>
            
                  <form id="duplicateUnitForm" @submit.prevent="duplicateUnit()">
                        <div class="modal-body" style="padding-top:0;">
                           <div class="form-group">
                              <label style="font: normal normal 490 11px Montserrat;">Rename of the unit:</label>
                              <input 
                                 type="text" 
                                 name="unit_name"
                                 v-model="unitform.unit_name"
                                 class="form-control"
                                 style="border-radius: 2px;margin-top: 5px;"
                                 autocomplete="off"
                                 :class="{ 'is-invalid': unitform.errors.has('name') }"
                                 />
                              <has-error :form="unitform" field="name"></has-error>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="javascript::void(0);" data-dismiss="modal" style="font: normal normal 490 11px Montserrat;letter-spacing: 2px;margin-right: 10px;text-decoration: none;">Cancel</a>
                           <button type="submit" class="btn btn-primary" style="font: normal normal 490 14px Montserrat;padding: 8px 12px;height:auto;">Copy</button>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
   </div>
</div>
    
</template>

<script>
    export default {
        data () {
            return {
              editmode: false,
              tags : {},
              teams : {},
              unitData:{},
              form: new Form({
                  id : '',
                  unit_id : '',
                  name: '',
              }),
              unitform: new Form({
                  id : '',
                  unit_name: '',
              })
            }
        },
        methods: {
          getResults(page = 1) {
              this.$Progress.start();
              
              axios.get("/api/teams/list?page="+ page,{params: {
                    unit_id:this.$route.params.id
                  }}).then(({ data }) => {
                     this.teams = data.data.teams
                     this.unitData = data.data.unitData
                  });

              this.$Progress.finish();
          },
          
          loadTeams(){
             $('#input_unit_id').val(this.$route.params.id);
              axios.get("/api/teams/list",{params: {
                unit_id:(this.$route.params.id) ? this.$route.params.id : 0
              }}).then(({ data }) => {
                  this.teams = data.data.teams
                  this.unitData = data.data.unitData
              });
          },
          newModal(){
              this.editmode = false;
              this.form.reset();
              $('#addNewTeam').modal('show');
          },
          editUnitModal(){
               this.editmode = false;
               this.unitform.reset();
               this.unitform.id = this.$route.params.id;
               this.unitform.unit_name = this.unitData.unit_name;
               
               $('#editUnitModal').modal('show');
          },
          duplicateModal(){
               this.editmode = false;
               this.unitform.reset();
               this.unitform.id = this.$route.params.id;
               this.unitform.unit_name = this.unitData.unit_name;
               
               $('#duplicateModal').modal('show');
          },
          duplicateUnit(){
              this.$Progress.start();
              this.unitform.unit_id = this.$route.params.id;
              this.unitform.post('/api/unit/duplicateunit')
              .then((data)=>{
                  $('#duplicateModal').modal('hide');
                  
                  Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                  this.$Progress.finish();
                  this.$router.push('/teams/'+data.data.data.id) 
                  this.loadTeams();

              })
              .catch(()=>{

                  Toast.fire({
                      icon: 'error',
                      title: 'Some error occured! Please try again'
                  });
              })
          },
          updateUnit(){
              this.$Progress.start();
              this.unitform.unit_id = this.$route.params.id;
              this.unitform.post('/api/unit/updateunit')
              .then((data)=>{
                  $('#editUnitModal').modal('hide');

                  Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                  this.$Progress.finish();
                  this.loadTeams();

              })
              .catch(()=>{

                  Toast.fire({
                      icon: 'error',
                      title: 'Some error occured! Please try again'
                  });
              })
          },
          createTeam(){
              this.$Progress.start();
              this.form.unit_id = this.$route.params.id;
              this.form.post('/api/teams/store')
              .then((data)=>{
                  $('#addNewTeam').modal('hide');

                  Toast.fire({
                        icon: 'success',
                        title: data.data.message
                    });
                  this.$Progress.finish();
                  this.loadTeams();

              })
              .catch(()=>{

                  Toast.fire({
                      icon: 'error',
                      title: 'Some error occured! Please try again'
                  });
              })
          },
         deleteProduct(){
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  showCancelButton: true,
                  confirmButtonColor: '#d33',
                  cancelButtonColor: '#3085d6',
                  confirmButtonText: 'Yes, delete it!'
               }).then((result) => {

                  axios.post("/api/unit/removeteam",{
                     unit_id:(this.$route.params.id) ? this.$route.params.id : 0
                  }).then(({ data }) => {
                     //   window.location.reload();
                  });


               })
          }

        },
        watch: {
            '$route.params': {
               handler(newValue) {
                     const { id } = newValue
                     this.loadTeams()
               },
               immediate: true,
            }
         },
        mounted() {
             $('#input_unit_id').val(this.$route.params.id);
            
        },
        created() {
            this.$Progress.start();

            this.loadTeams();

            this.$Progress.finish();
        }
    }

    $(document).ready(function(){
      $('#navbarSideButton').on('click', function() {
          $('#navbarSide').addClass('reveal');
          $('.overlay').show();
      });
      $('.overlay-close').on('click', function() {
          $('#navbarSide').removeClass('reveal');
          $('.overlay').hide();
      });

      $('#dropdownMenuButton').click(function(){
         setTimeout(function(){
              $('.dropdownMenuButton').toggleClass('show');
         },500);
      });
    });
</script>
