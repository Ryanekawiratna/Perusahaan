var login = {
	module: () => {
		return "user";
	},

	doLogin: (e) => {
		let params = {
			user: $("#username").val(),
			password: $("#password").val(),
		};
		// alert(params.password);
		$.ajax({
			dataType: "json",
			type: "POST",
			data: params,
			url: url.base_url(login.module()) + "auth",
			beforeSend: function () {
				message.loadingProses("Proses Login");
			},
			error: function () {
				toastr.error("Proses Login Gagal");
				message.closeLoading();
			},
			success: function (resp) {
				// alert(resp);
				if (resp.is_valid) {
					message.closeLoading();
					toastr.success("Proses Login Berhasil");
					setTimeout(function (elm) {
						window.location.href = "http://localhost/web/dashboard";
					}, 4000);
				} else {
					message.closeLoading();
					toastr.error("Username atau Password Salah");
				}
			},
		});
	},
};

$(document).ready(function () {
	$("#form_login").on("keydown", function (event) {
		if (event.key === "Enter") {
			event.preventDefault();
			login.doLogin(event);
		}
	});
});
