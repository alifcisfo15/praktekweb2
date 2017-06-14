<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
	</thead>
	<tbody>
 <?php 
 foreach ($nama_buku as $dt) { ?>
		<tr>
			<td><?= $dt['id_buku'] ?></td>
			<td><?= $dt['judul'] ?></td>
			<td><?= $dt['penulis'] ?></td>
		</tr>
		<?php 
		} ?>
	</tbody>
</table>
