		
			<div class="row">
			
				<div class="col-12">
					<div class="card">
						<div class="card-body text-center">
							<h5 class="card-title m-b-0"><?=$title?></h5>
						
						</div>
						<input type="search" class="form-control sh"  id="target" placeholder="Search project" />
						<div id="searchtablediv">
						<table class="table" id="searchtable">
							<thead>
								<tr>
									<th scope="col">#No</th>
									<th scope="col">Name</th>
									<th scope="col">Total hours</th>
									
								</tr>
							</thead>
							<tbody id="datable_body">

								<?php 
								$i=1;
								if(count($projects)>0){
									foreach($projects as $product){ ?>
									<tr>
										<th scope="row"><?=$i?></th>
										<td><b><?=$product['title']?></b></td>
										<td><b><?=$product['tot']?></b></td>
									</tr>
									

										<?php
											$id = $product['fk_projectid'];
											$sql = $this->db->query("select task_title,m.hours from tbl_main_projects m 
											left join tbl_tasks t on t.id=m.fk_task_id where fk_projectid=$id");
											$result = $sql->result_array();
											foreach($result as $row){ ?>
											<tr>
												<td></td>
												<td><?=$row['task_title']?></td>
												<td><?=$row['hours']?></td>
											</tr>
											<?php
											}

									//}
										?>
										
									
									<?php 
									$i++;
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
		</div>
		<script type="text/javascript">
			let timeoutID = null;
			function findMember(str) {
				
				if(str.length>4) {
					var myKeyVals = { 'search' : str};
                $.ajax({
                    url: '/test/project/search/'+str,
                    type: "POST",
					data:myKeyVals,
                    dataType: "html",
                    success:function(data) {
					   $('#searchtable').empty();
                       $("#searchtablediv").html(data);
					}
                });
				
			}
			}

			$('#target').keyup(function(e) {
			clearTimeout(timeoutID);
			const value = e.target.value
			timeoutID = setTimeout(() => findMember(value), 500)
			});
			</script>
	</body>
</html>
