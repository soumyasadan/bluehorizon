<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body text-center">
							<h5 class="card-title m-b-0"><?=$title?></h5>
						
						<form method="post" action="<?=base_url('project/storeProduct')?>">

						
							<div class="form-group">
								<label for="title">Project:</label>
								<select class="form-control" name="fk_projectid" required="required">
									<option value="">Select</option>
									<?php
									foreach($projects as $p){ ?>
									<option value="<?php echo $p->id;?>"><?php echo $p->title;?></option>
									<?php
									}

									?>
								</select>
							</div>

							<div class="form-group">

								<label for="title">Task:</label>

								<select name="fk_task_id" id="fk_task_id"  class="form-control">

								</select>

							</div>

							<div class="form-group">

								<label for="title">Hours:</label>

								<select name="hours" id="hours"  class="form-control">
								<?php
									for($i=1;$i<=24;$i++){ ?>
									<option value="<?php echo $i;?>"><?php echo $i;?> Hrs</option>
									<?php
									}

									?>
								</select>

							</div>
							
							<div class="form-group">
							<label for="title">Date:</label>
								<input type="date" class="form-control" name="date" placeholder="Date" required="required">
							</div>
							<div class="form-group">
							<label for="title">Description:</label>
								<textarea class="form-control" name="description" rows="10" placeholder="Description" required="required"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">


    $(document).ready(function() {
        $('select[name="fk_projectid"]').on('change', function() {
			var projectID = $(this).val();
            if(projectID) {
                $.ajax({
                    url: '/test/project/gettasks/'+projectID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="fk_task_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="fk_task_id"]').append('<option value="'+ value.id +'">'+ value.task_title +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="fk_task_id"]').empty();
            }
        });
    });
</script>
	</body>
</html>
