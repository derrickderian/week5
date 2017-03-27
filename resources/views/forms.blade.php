<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" ">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="post" class="form-horizontal">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" @if(isset($email)) value="{{ $email }}" @endif>
					</div>
					<div class="form-group">
						<label for="gender">Jenis Kelamin</label>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="m" @if(isset($gender) && $gender == "m") checked @endif>
								Laki-laki
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="f" @if(isset($gender) && $gender == "f") checked @endif>
								Perempuan
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gender" value="other" @if(isset($gender) && $gender == "other") checked @endif>
								Other
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="senjata">Senjata Pilihan</label>
						<br>
						Bisa pilih lebih dari satu
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="excalibur" @if(isset($senjata) && in_array('excalibur', $senjata)) checked @endif>
								Excalibur
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="sange & yasha" @if(isset($senjata) && in_array('sange & yasha', $senjata)) checked @endif>
								Sange & Yasha
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="money" @if(isset($senjata) && in_array('money', $senjata)) checked @endif>
								Money
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="nothing" @if(isset($senjata) && in_array('nothing', $senjata)) checked @endif>
								Nothing
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="senjata[]" value="unknown" @if(isset($senjata) && in_array('unknown', $senjata)) checked @endif>
								Unknown
							</label>
						</div>
					</div>
				
				<button type="submit" class="btn btn-warning">Submit</button>
				</form>
				<br>
				<br>
				@if(isset($nama))
				Halo, {{ $nama }}
				@endif
				<br>
				@if(isset($email))
				Email kamu {{ $email }}
				@endif
				<br>
				@if(isset($gender))
				Kamu Seorang
					@if($gender == "m")
					Laki-laki
					@elseif($gender == "f")
					Perempuan
					@else
					Ga jelas
					@endif
				@endif
				@if(isset($senjata))
				<br>
				Senjata Pilihan :
				<br>
				@foreach($senjata as $weapon)
					-> {{ ucwords($weapon) }}
				<br>
				@endforeach
				@endif

					<script type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>			
			</div>		
		</div>
	</div>
	
</body>
</html>