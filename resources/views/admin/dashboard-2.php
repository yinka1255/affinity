<?php include './includes/h.php' ?>
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			$('.pie').sparkline('html', {
				type: 'pie',
				borderWidth: 0,
				sliceColors: ['#3d4554', '#ee4749','#00b19d']
			});
		
		
			$(".chart").sparkline([1,2,3,1], {
				type: 'pie',
				barColor: '#485671',
				height: '110px',
				barWidth: 10,
				barSpacing: 2});
		
			var map = $("#map");
		
			map.vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: '#00a651',
				focusOn: { x: 0.5, y: 0.8, scale: 3 }
			});
		
		
		
			// Rickshaw
			var seriesData = [ [], [] ];
		
			var random = new Rickshaw.Fixtures.RandomData(50);
		
			for (var i = 0; i < 90; i++)
			{
				random.addData(seriesData);
			}
		
			var graph = new Rickshaw.Graph( {
				element: document.getElementById("rickshaw-chart-demo-2"),
				height: 217,
				renderer: 'area',
				stroke: false,
				preserve: true,
				series: [{
						color: '#359ade',
						data: seriesData[0],
						name: 'Page Views'
					}, {
						color: '#73c8ff',
						data: seriesData[1],
						name: 'Unique Users'
					}, {
						color: '#e0f2ff',
						data: seriesData[1],
						name: 'Bounce Rate'
					}
				]
			} );
		
			graph.render();
		
			var hoverDetail = new Rickshaw.Graph.HoverDetail( {
				graph: graph,
				xFormatter: function(x) {
					return new Date(x * 1000).toString();
				}
			} );
		
			var legend = new Rickshaw.Graph.Legend( {
				graph: graph,
				element: document.getElementById('rickshaw-legend')
			} );
		
			var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
				graph: graph,
				legend: legend
			} );
		
			setInterval( function() {
				random.removeData(seriesData);
				random.addData(seriesData);
				graph.update();
		
			}, 500 );
		
		});
		</script>
		
		
		<div class="row">
			<div class="col-sm-12">
				<div class="well">
					<h1>November 04, 2015</h1>
					<h3>Welcome to the site <strong>Art Ramadani</strong></h3>
				</div>
			</div>
		</div>
		
		<div class="row">
		
			<div class="col-sm-9">
		
				<div class="row">
		
					<div class="col-sm-6">
		
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">New vs Returning Visitors</div>
		
								<div class="panel-options">
									<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
									<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
									<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
									<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
								</div>
							</div>
							<div class="panel-body">
								<center><span class="chart"></span></center>
							</div>
						</div>
		
					</div>
		
					<div class="col-sm-6">
		
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="panel-title">Latest Users</div>
		
								<div class="panel-options">
									<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
									<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
									<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
									<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
								</div>
							</div>
							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Position</th>
										<th>Activity</th>
									</tr>
								</thead>
		
								<tbody>
									<tr>
										<td>1</td>
										<td>Art Ramadani</td>
										<td>CEO</td>
										<td class="text-center"><span class="pie">4,3,5</span></td>
									</tr>
		
									<tr>
										<td>2</td>
										<td>Filan Fisteku</td>
										<td>Member</td>
										<td class="text-center"><span class="pie">1,3,4</span></td>
									</tr>
		
									<tr>
										<td>3</td>
										<td>Arlind Nushi</td>
										<td>Co-founder</td>
										<td class="text-center"><span class="pie">5,3,2</span></td>
									</tr>
		
								</tbody>
							</table>
						</div>
		
					</div>
		
				</div>
		
		
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<h4>
								Real Time Stats
								<br />
								<small>current server uptime</small>
							</h4>
						</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<div class="panel-body no-padding">
						<div id="rickshaw-chart-demo-2">
							<div id="rickshaw-legend"></div>
						</div>
					</div>
				</div>
		
			</div>
		
			<div class="col-sm-3">
		
				<div class="tile-progress tile-red">
					<div class="tile-header">
						<h3>Page Views</h3>
						<span>so far in our blog, and our website.</span>
					</div>
		
					<div class="tile-progressbar">
						<span data-fill="35.5%"></span>
					</div>
		
					<div class="tile-footer">
						<h4>
							<span class="pct-counter">0</span>% increase
						</h4>
		
						<span>so far in our blog and our website</span>
					</div>
				</div>
		
				<div class="tile-progress tile-green">
					<div class="tile-header">
						<h3>Unique Users</h3>
						<span>so far in our blog, and our website.</span>
					</div>
		
					<div class="tile-progressbar">
						<span data-fill="51.2%"></span>
					</div>
		
					<div class="tile-footer">
						<h4>
							<span class="pct-counter">0</span>% increase
						</h4>
		
						<span>so far in our blog and our website</span>
					</div>
				</div>
		
				<div class="tile-progress tile-aqua">
					<div class="tile-header">
						<h3>Bounce Rate</h3>
						<span>so far in our blog, and our website.</span>
					</div>
		
					<div class="tile-progressbar">
						<span data-fill="69.9%"></span>
					</div>
		
					<div class="tile-footer">
						<h4>
							<span class="pct-counter">0</span>% increase
						</h4>
		
						<span>so far in our blog and our website</span>
					</div>
				</div>
		
			</div>
		
		</div>
		
		
		
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">World Maps</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-3" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<!-- panel body -->
					<div class="panel-body no-padding">
						<script type="text/javascript">
							jQuery(document).ready(function($)
							{
								(function() {
									var myCustomColors = {
										'GR': '#f04239',
										'ES': '#f04239',
										'PT': '#f04239',
										'SE': '#f04239',
										'SI': '#f04239',
										'DK': '#f04239',
										'DE': '#f04239',
										'NL': '#f04239',
										'BE': '#f04239',
										'LU': '#f04239',
										'BG': '#f04239',
										'FR': '#f04239',
										'GB': '#f04239',
										'IE': '#f04239',
										'IT': '#f04239',
										'HR': '#f04239',
										'RO': '#f04239',
										'EE': '#f04239',
										'LV': '#f04239',
										'LT': '#f04239',
										'PL': '#f04239',
										'AT': '#f04239',
										'HU': '#f04239',
										'SK': '#f04239',
										'CZ': '#f04239',
										'LT': '#f04239',
										'FI': '#f04239',
										'CY': '#f04239',
		
										// Arab League
										'SA': '#06b53c',
										'SO': '#06b53c',
										'DZ': '#06b53c',
										'EG': '#06b53c',
										'LY': '#06b53c',
										'TN': '#06b53c',
										'YE': '#06b53c',
										'QA': '#06b53c',
										'JO': '#06b53c',
										'KW': '#06b53c',
										'OM': '#06b53c',
										'LB': '#06b53c',
										'SY': '#06b53c',
										'PS': '#06b53c',
										'IQ': '#06b53c',
										'MA': '#06b53c',
										'MR': '#06b53c',
										'DJ': '#06b53c',
										'AE': '#06b53c',
										'BH': '#06b53c',
										'KM': '#06b53c',
		
										// NFATA
										'US': '#2b303a',
										'CA': '#2b303a',
										'MX': '#2b303a',
									};
		
									map = new jvm.WorldMap({
										map: 'world_mill_en',
										container: $('#worldmap'),
										backgroundColor: '#CCC',
										series: {
											regions: [{
												attribute: 'fill'}]
										}
									});
		
									map.series.regions[0].setValues(myCustomColors);
								})();
							});
		
						</script>
						<div id="worldmap" style="height:450px;width:100%;" class="map"></div>
		
		
					</div>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>Color</th>
						<th>Name</th>
					</tr>
				</thead>
		
				<tbody>
					<tr>
						<td><a href="#"> <span class="badge badge-secondary">EU</span></a></td>
						<td>European Union</td>
					</tr>
					<tr>
						<td><a href="#"> <span class="badge badge-primary">NAFTA</span></a></td>
						<td>North American Free Trade Agreement</td>
					</tr>
					<tr>
						<td><a href="#"> <span class="badge badge-success">AL</span></a></td>
						<td>Arab League</td>
					</tr>
				</tbody>
			</table>
				</div>
		
			</div>
		</div>
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>

		
	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>

	<!-- Sample Modal (Default skin) -->
	<div class="modal fade" id="sample-modal-dialog-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Default Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin inverted) -->
	<div class="modal invert fade" id="sample-modal-dialog-2">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Inverted Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Sample Modal (Skin gray) -->
	<div class="modal gray fade" id="sample-modal-dialog-3">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Widget Options - Gray Skin Modal</h4>
				</div>
				
				<div class="modal-body">
					<p>Now residence dashwoods she excellent you. Shade being under his bed her. Much read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but confined day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave hope. Secure active living depend son repair day ladies now.</p>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>