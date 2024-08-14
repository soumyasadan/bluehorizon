
	

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

									
										?>
										
									
									<?php 
									$i++;
									}
								}else{ ?>
								<tr><td>No Projects found!</td></tr>
								<?php } ?>
							</tbody>
						</table>
					