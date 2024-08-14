
			<div class="row">
			<div class="col-12 mb-3 text-right">
				<a href="<?=base_url('project/create')?>" class="btn btn-primary">Create Main Project</a>
			</div>
				<div class="col-12">
					<div class="card">
						<div class="card-body text-center">
							<h5 class="card-title m-b-0"><?=$title?></h5>
						
						</div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">Id</th>
									<th scope="col">Project name</th>
									<th scope="col">Task name</th>
									<th scope="col">Hours</th>
									<th scope="col">Date</th>
									<th scope="col">Description</th>
								</tr>
							</thead>
							<tbody>

								<?php 
								if(count($projects)>0){
									foreach($projects as $product){ ?>
									<tr>
										<th scope="row"><?=$product['id']?></th>
										<td><?=$product['title']?></td>
										<td><?=$product['task_title']?></td>
										<td><?=$product['hours']?></td>
										<td><?php $date = $product['date'];
											echo $newDate = date("d-m-Y", strtotime($date));  
										
										?></td>
										<td><?=$product['description']?></td>
									</tr>
									<?php 
									}
								}else{ ?>
								<tr><td>No Products</td></tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
