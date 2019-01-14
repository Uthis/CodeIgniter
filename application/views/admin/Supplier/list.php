
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Price</th>
										<th>Photo</th>
										<th>Description</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Supplier as $supplier): ?>
									<tr>
										<td width="150">
											<?php echo $supplier->Supplier_name ?>
										</td>
										<td>
											<?php echo $supplier->Supplier_address ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						