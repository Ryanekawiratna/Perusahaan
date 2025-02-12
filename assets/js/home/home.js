var home = {
	module: () => {
		return "home";
	},

	search: () => {
		let search = `
              <style>

               #input-search{
                     border-radius: 20px;
                     background: url("https://static.thenounproject.com/png/101791-200.png") no-repeat left;
                     background-size: 20px;
                     text-align:center;
                     }

                     #btn-cancel{
                             background-color: transparent;
                            background-repeat: no-repeat;
                            border: none;
                            cursor: pointer;
                            overflow: hidden;
                            outline: none;
                     }
              </style>
              <div class="row"> 
              <div class="col-md-12">
              <br>
              <br>
                     <div class="col-md-12" > 
                     <div id="div-search" class="col-md-12" style="text-align:center;">
                     <input id="input-search" type="text" placeholder="Masukan Pencarian Anda" size="55">
                     <button id="btn-cancel" onClick="home.cancel()">Cancel</button>
                     </div>
                     </div>
              </div>
              </div>`;
		$("#main-page").html(search).slideDown(500);
	},

	cancel: (elm) => {
		window.location.href = "http://localhost/web/";
	},
};

$(document).ready(function () {});
