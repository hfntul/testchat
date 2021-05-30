@extends('staff.master-staff')

@section('active-jd') active @endsection

@section('title-content') Jadwal Dokter @endsection

@section('subtitle-content') Poliklinik IPB @endsection

@section('main-content')
<!--START TABLE-->
<table class="table table-condensed">
	<thead>
		<tr>
			<th width="25%" class="text-center">Nama</th>
			<th width="30%" class="text-center">Bidang</th>
			<th colspan="2" width="25%" class="text-center">Jadwal</th>
			<th width="20%" class="text-center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<!--START ONE ROW-->
		<tr class="text-center">
			<td rowspan="5" style="vertical-align: middle;">Dr. A, S.Komp</td>
			<td rowspan="5" style="vertical-align: middle;">Dokter Mesin</td>
			<td class="padding-left5">Senin</td>
			<td class="padding-left5">10.00 - 14.00 WIB</td>
			<td rowspan="5" style="vertical-align: middle;">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Edit</button>
				<button type="button" class="btn btn-danger">Hapus</button>
			</td>
		</tr>
		<tr>
			<td class="padding-left5">Selasa</td>
			<td class="padding-left5">10.00 - 14.00 WIB</td>
		</tr>
		<tr>
			<td class="padding-left5">Rabu</td>
			<td class="padding-left5">10.00 - 14.00 WIB</td>
		</tr>
		<tr>
			<td class="padding-left5">Kamis</td>
			<td class="padding-left5">10.00 - 14.00 WIB</td>
		</tr	>
		<tr>
			<td class="padding-left5">Jumat</td>
			<td class="padding-left5">10.00 - 14.00 WIB</td>
		</tr>
		<!--STOP ONE ROW-->
	</tbody>
</table>
<!-- END TABLE-->

<!--START EDIT-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title" id="exampleModalLabel">Edit</h3>
			</div>
			<div class="modal-body">
				<!-- INPUTS -->
				<div>
					<label><h4>Nama Dokter</h4></label>
					<input type="text" class="form-control" placeholder="Nama Dokter">
					<br>
					<label><h4>Bidang</h4></label>
					<input type="text" class="form-control" placeholder="Bidang">
					<br>
					<label><h4>Jadwal</h4></label>
					<p>Senin</p>
					<select class="form-control">
						<option value="-">-</option>
						<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
						<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
						<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
						<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
					</select>
					<br>
					<p>Selasa</p>
					<select class="form-control">
						<option value="-">-</option>
						<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
						<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
						<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
						<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
					</select>
					<br>
					<p>Rabu</p>
					<select class="form-control">
						<option value="-">-</option>
						<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
						<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
						<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
						<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
					</select>
					<br>
					<p>Kamis</p>
					<select class="form-control">
						<option value="-">-</option>
						<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
						<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
						<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
						<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
					</select>
					<br>
					<p>Jumat</p>
					<select class="form-control">
						<option value="-">-</option>
						<option value="08.00 - 10.00 WIB">08.00 - 10.00 WIB</option>
						<option value="10.00 - 12.00 WIB">10.00 - 12.00 WIB</option>
						<option value="12.00 - 14.00 WIB">12.00 - 14.00 WIB</option>
						<option value="14.00 - 16.00 WIB">14.00 - 16.00 WIB</option>
					</select>
				</div>				
				<!-- END INPUTS -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary">Simpan</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!--END EDIT-->
@endsection