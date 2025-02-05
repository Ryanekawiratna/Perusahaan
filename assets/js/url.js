var url = {
	base_url: function (module) {
		var url_host = window.location.host;
		var url_protocol = window.location.protocol;
		return url_protocol + "//" + url_host + "/" + "web" + "/" + module + "/";

		// var url_host = window.location.host;
		// if (url_host.includes('0.10') || url_host.includes('203.108')) {
		//   var url_protocol = window.location.protocol;
		//   var path = 'order_pakan';
		//   if (url_host.includes('203.108')) {
		//     path += '-dev';
		//   }

		//   return (
		//     url_protocol +
		//     "//" +
		//     url_host +
		//     "/" +
		//     path +
		//     "/" +
		//     module +
		//     "/"
		//   );
		// } else {
		//   return ('https://orderpakan.wonokoyo.co.id/' + module + '/');
		// }
	},
};
