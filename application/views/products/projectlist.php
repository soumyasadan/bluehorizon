
			<div class="row">
			
				<div class="col-12">
					<div class="card">
						<div class="card-body text-center">
							<h5 class="card-title m-b-0"><?=$title?></h5>
						
						</div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Id</th>
									<th scope="col">Title</th>
									<th scope="col">Status</th>
														
								</tr>
							</thead>
							<tbody>

								<?php 
								if(count($projects)>0){
									foreach($projects as $project){ ?>
									<tr>
										<th scope="row"><?=$project->id?></th>
										<td><?=$project->title?></td>
										<td><?=$project->status?></td>
									</tr>
									<?php 
									}
								}else{ ?>
								<tr><td>No Projects</td></tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
