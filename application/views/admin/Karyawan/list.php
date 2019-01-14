<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                            <table border="1">
							    <thead>
									<tr>
										<th>Nama</th>
										<th>Alamar</th>
										<th>Nomor</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Karyawan as $Karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $Karyawan->Karyawan_nama ?>
										</td>
										<td>
											<?php echo $Karyawan->Karyawan_address ?>
										</td>
                                        <td>
											<?php echo $Karyawan->Karyawan_phone ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
</body>
</html>	