<div class="accordion mb-2" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<span><i class="fa fa-user"></i> Account</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">
								<li class="list-group-item"><a href="#"><i class="fa fa-pencil"></i> View Profile</a></li>
							</ul>
						</div>
					</div>
				</div>

                <div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<span><i class="fa fa-file-text"></i> Blogs</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">										
								<li class="list-group-item"><a href="{{route('blogAdd')}}"><i class="fa fa-plus"></i> Add Blogs</a></li>
								<li class="list-group-item"><a href="#"><i class="fa fa-pencil-square-o"></i> View Blogs </a></li>
                                <li class="list-group-item"><a href="#"><i class="fa fa-eye"></i> Update Blogs </a></li>
                                <li class="list-group-item"><a href="#"><i class="fa fa-trash"></i> Delete Blogs </a></li>		
							</ul>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">									
							<a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<span><i class="fa fa-list"></i>Lists</span>
								<i class="fa fa-chevron-down toggle"></i>
							</a>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">
							<ul class="list-group">										
								<li class="list-group-item"><a href="#"><i class="fa fa-table"></i> Blog List</a></li>		
							</ul>
						</div>
					</div>
				</div>

</div>
