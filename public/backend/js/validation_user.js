function checkUsername() {
	var mess_username = document.getElementById('mess_username');

	if (frm_addUser.username.value == "") {
		mess_username.style.display = "block";
		mess_username.innerHTML = "Tài khoản không được để trống!";
		return false;
	}
	else if (frm_addUser.username.value.length <= 7) {
		mess_username.style.display = "block";
		mess_username.innerHTML = "Tài khoản ít nhất 8 ký tự.";
		return false;
	}
	else if (frm_addUser.username.value.length > 12) {
		mess_username.style.display = "block";
		mess_username.innerHTML = "Tài khoản tối đa 12 ký tự.";
		return false;
	}
	else {
		mess_username.style.display = "none";
		return true;
	}
}

function checkPassword() {
	var mess_password = document.getElementById('mess_password');

	if (frm_addUser.password.value == "") {
		mess_password.style.display = "block";
		mess_password.innerHTML = "Mật khẩu không được để trống!";
		return false;
	}
	else if (frm_addUser.password.value.length <= 7) {
		mess_password.style.display = "block";
		mess_password.innerHTML = "Mật khẩu ít nhất 8 ký tự.";
		return false;
	}
	else if (frm_addUser.password.value.length > 24) {
		mess_password.style.display = "block";
		mess_password.innerHTML = "Mật khẩu tối đa 24 ký tự.";
		return false;
	}
	else {
		mess_password.style.display = "none";
		return true;
	}
}

function checkRePassword() {
	var mess_repassword = document.getElementById('mess_repassword');

	if (frm_addUser.repassword.value != frm_addUser.password.value) {
		mess_repassword.style.display = "block";
		mess_repassword.innerHTML = "Nhập lại mật khẩu không khớp.";
		return false;
	}
	else {
		mess_repassword.style.display = "none";
		return true;
	}
}