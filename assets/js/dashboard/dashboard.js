var dash = {
	module: () => {
		return "dashboard";
	},

	editProfile: (elm) => {
		$.ajax({
			type: "POST",
			dataType: "html",
			url: url.base_url(dash.module()) + "editProfile",
			beforeSend: function () {
				message.loadingProses("Proses Edit Profil");
			},
			error: function () {
				toastr.error("Proses Edit Profil Gagal");
				message.closeLoading();
			},
			success: function (resp_view) {
				bootbox.dialog({
					title: "Form Edit Profile",
					message: resp_view,
					size: "large",
					buttons: {
						cancel: {
							label: "Batal",
							className: "btn-danger",
							callback: function () {},
						},
						ok: {
							label: "Simpan",
							className: "btn-success",
							callback: function () {
								dash.simpanProfile();
							},
						},
					},
				});
			},
		});
	},

	simpanProfile: (elm) => {
		is_filled = true;
		$(".edit").each(function () {
			if ($.trim($(this).val()) == "") {
				is_filled = false;
			}
		});
		if (is_filled) {
			let data = [];
			$("input.edit").each(function () {
				let value = $.trim($(this).val());
				data.push(value);
			});
			$.ajax({
				data: data,
				type: "POST",
				dataType: "JSON",
				url: url.base_url(dash.module()) + "simpanProfile",
				beforeSend: function () {
					message.loadingProses("Proses Menyimpan Data Edit Profil");
				},
				error: function () {
					toastr.error("Proses Menyimpan Data Profile Gagal");
					message.closeLoading();
				},
				success: function (resp) {
					if (resp.is_valid) {
						message.closeLoading();
						toastr.success("Poses Menyimpan Data Profile Berhasil");
					} else {
						toastr.error("Proses Menyimpan Data Profile Gagal");
					}
				},
			});
		}
	},
};
