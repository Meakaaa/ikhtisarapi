<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <script src="https://cdn.tailwindcss.com"></script> -->

	<title>ikhtisar | Admin</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('asset/logofav.png'); ?>">

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="s//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte3/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/adminlte3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/adminlte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte3/plugins/jqvmap/jqvmap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte3/dist/css/adminlte.min.css?v=3.2.0">

	<link rel="stylesheet"
		href="<?php echo base_url();?>assets/adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte3/plugins/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/adminlte3/plugins/summernote/summernote-bs4.min.css">
	<script nonce="245c4d2b-899e-4044-9a7a-34233ebd0eaa">
		(function (w, d) {
			! function (f, g, h, i) {
				f[h] = f[h] || {};
				f[h].executed = [];
				f.zaraz = {
					deferred: [],
					listeners: []
				};
				f.zaraz.q = [];
				f.zaraz._f = function (j) {
					return function () {
						var k = Array.prototype.slice.call(arguments);
						f.zaraz.q.push({
							m: j,
							a: k
						})
					}
				};
				for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
				f.zaraz.init = () => {
					var m = g.getElementsByTagName(i)[0],
						n = g.createElement(i),
						o = g.getElementsByTagName("title")[0];
					o && (f[h].t = g.getElementsByTagName("title")[0].text);
					f[h].x = Math.random();
					f[h].w = f.screen.width;
					f[h].h = f.screen.height;
					f[h].j = f.innerHeight;
					f[h].e = f.innerWidth;
					f[h].l = f.location.href;
					f[h].r = g.referrer;
					f[h].k = f.screen.colorDepth;
					f[h].n = g.characterSet;
					f[h].o = (new Date).getTimezoneOffset();
					if (f.dataLayer)
						for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
								...t[1],
								...u[1]
							}))))) zaraz.set(s[0], s[1], {
							scope: "page"
						});
					f[h].q = [];
					for (; f.zaraz.q.length;) {
						const v = f.zaraz.q.shift();
						f[h].q.push(v)
					}
					n.defer = !0;
					for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith(
							"_zaraz_")))
						.forEach((x => {
							try {
								f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
							} catch {
								f[h]["z_" + x.slice(7)] = w.getItem(x)
							}
						}));
					n.referrerPolicy = "origin";
					n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
					m.parentNode.insertBefore(n, m)
				};
				["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded",
					zaraz
					.init)
			}(w, d, "zarazData", "script");
		})(window, document);

	</script>
</head>
