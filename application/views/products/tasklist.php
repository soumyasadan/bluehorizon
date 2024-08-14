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
									<th scope="col">Project</th>
									<th scope="col">Task Title</th>
									<th scope="col">Status</th>
														
								</tr>
							</thead>
							<tbody>

								<?php 
								if(count($tasks)>0){
									foreach($tasks as $task){ ?>
									<tr>
										<th scope="row"><?=$task['id']?></th>
										<td><?=$task['title']?></td>
										<td><?=$task['task_title']?></td>
										<td><?=$task['status']?></td>
									</tr>
									<?php 
									}
								}else{ ?>
								<tr><td>No tasks</td></tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
