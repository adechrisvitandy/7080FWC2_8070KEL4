<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
	{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>
	</div>
	<div class="form-group">
<label class="col-sm-2 control-label">NIP</label>
	<div class="col-sm-10">
	{!! Form::text('nip',null,['class'=>'form-control','placeholder'=>"NIP"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
	{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Gelar</label>
	<div class="col-sm-10">
	{!! Form::text('gelar',null,['class'=>'form-control','placeholder'=>"gelar"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
	{!! Form::text('status',null,['class'=>'form-control','placeholder'=>"status"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Jabatan</label>
	<div class="col-sm-10">
	{!! Form::text('jabatan',null,['class'=>'form-control','placeholder'=>" jabatan "]) !!}
	</div>
</div>
{{-- 	<div class="form-group">
<label class="col-sm-2 control-label">Pengguna_Id</label>
	<div class="col-sm-10">
	{!! Form::text('pengguna_id',null,['class'=>'form-control','placeholder'=>"Pengguna_Id"]) !!}
	</div>
</div> --}}
<div class="form-group">
<label class="col-sm-2 control-label">Username</label>
{!! form::hidden('level','guru')!!}
	<div class="col-sm-10">
	{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"username"]) !!}
	</div>
</div>
	<div class="form-group">
<label class="col-sm-2 control-label">Password</label>
	<div class="col-sm-10">
	{!! Form::text('password',null,['class'=>'form-control','placeholder'=>"password"]) !!}
	</div>
</div>