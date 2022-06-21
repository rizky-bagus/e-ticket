<!DOCTYPE html>
<html>
<head>
	<title> Form Validasi </title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/StyleRegistrasi.css">
</head>

<div class="container">
	<form class="form" action="<?php echo base_url()."Register/DoRegister"; ?>" method="POST">
	<h1>Registrasi</h1>
		<div class="form-control">
			<label for="Nama">Nama</label>
			<input type="text" placeholder="Masukkan Nama..." id="Nama" name="nama" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="Nama">NIK</label>
			<input type="text" placeholder="Masukkan NIK" id="Nik" name="nik" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="Nama">No. Hp</label>
			<input type="text" placeholder="Telepon" id="Hp" name="nohp"  />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="Nama">Gender:</label> <br/>
			<input type="radio" name="gender" value="male" /> Male    
			<input type="radio" name="gender" value="female" /> Female
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
    <div class="form-control">
			<label for="Nama">Alamat</label>
			<input type="text" placeholder="Masukkan Alamat" id="Alamat" name="alamat" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="Nama">Email</label>
			<input type="email" placeholder="a@gmail.com" id="email" name="email" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="Nama">Password</label>
			<input type="password" placeholder="Password" id="password" name="password"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="Nama">Konfirmasi</label>
			<input type="password" placeholder="Ketik Ulang password" id="password2" name="cpassword"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<button type="button" id="btnSubmit">SUBMIT</button>
		<button style="display: none;" type="submit" id="btnSubmitHidden"></button>
	</form>
<script>
const form = document.getElementById("form");
const Nama = document.getElementById("Nama");
const Nik = document.getElementById("Nik");
const Hp = document.getElementById("Hp");
const Alamat = document.getElementById("Alamat");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");

document.getElementById("btnSubmit").addEventListener("click", submitRegister);

function submitRegister() {
	var valid = checkInputs();
	if (valid){
		document.getElementById('btnSubmitHidden').click();
	}
}

form.addEventListener("submit", (e) => {
	e.preventDefault();

	var valid = checkInputs();
	if (valid){
		document.getElementById('btnSubmit').click();
	}
});

function checkInputs() {
	// trim to remove the whitespaces
	const NamaValue = Nama.value.trim();
    const NikValue = Nik.value.trim();
	const emailValue = email.value.trim();
	const HpValue = Hp.value.trim();
    const AlamatValue = Alamat.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

	if (NamaValue === "") {
		setErrorFor(Nama, "Nama tidak boleh kosong!");
		return false;
	} else {
		setSuccessFor(Nama);
	}

  if (NikValue === "") {
		setErrorFor(Nik, "Nik tidak boleh kosong!");
		return false;
	} else {
		setSuccessFor(Nik);
	}

  if (HpValue === "") {
		setErrorFor(Hp, "No. Hp tidak boleh kosong!");
		return false;
	}else if (!isHp(HpValue)) {
		setErrorFor(Hp, "No Hp tidak Valid! harus berupa Angka 0-9");
		return false;
	}else {
		setSuccessFor(Hp);
	}

  if (AlamatValue === "") {
		setErrorFor(Alamat, "Alamat tidak boleh kosong!");
		return false;
	} else {
		setSuccessFor(Alamat);
	}

	if (emailValue === "") {
		setErrorFor(email, "Email tidak boleh kosong");
		return false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, "Email tidak Valid!");
		return false;
	} else {
		setSuccessFor(email);
	}

	if (passwordValue === "") {
		setErrorFor(password, "Password tidak boleh kosong");
		return false;
	} else {
		setSuccessFor(password);
	}

	if (password2Value === "") {
		setErrorFor(password2, "Password tidak boleh kosong");
		return false;
	} else if (passwordValue !== password2Value) {
		setErrorFor(password2, "Passwords tidak sesuai!");
		return false;
	} else {
		setSuccessFor(password2);
	}
	return true;
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector("small");
	formControl.className = "form-control error";
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = "form-control success";
}

function isHp(Hp) {
	return /[0-9]/.test(
		Hp
	);	
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
		email
	);	
}
</script>
</div>


