<footer class="main-footer">
	<div class="footer-left">
		Copyright &copy; 2022 <div class="bullet"></div> Design By <a href="https://kemlu.go.id/kualalumpur/id" target="_blank">PPLN KL</a>
	</div>
	<div class="footer-right">
		2.3.0
	</div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<!-- General JS Scripts -->
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/jquery.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/popper.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/tooltip.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/moment.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/js/stisla.js"></script>

<!-- Template JS File -->
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/js/scripts.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/js/custom.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/summernote/summernote-bs4.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/codemirror/lib/codemirror.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/codemirror/mode/javascript/javascript.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/datatables/datatables.min.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?php echo base_url('/assets/assets_stisla') ?>/assets/js/page/index-0.js"></script>
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function() {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function(msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	} else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
<script>
</script>
</body>

</html>