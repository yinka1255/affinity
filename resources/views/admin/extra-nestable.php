<?php include './includes/header.php' ?>
		
					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>
		
									<a href="extra-icons.html">Extra</a>
							</li>
						<li class="active">
		
									<strong>Nestable Lists</strong>
							</li>
							</ol>
					<h2>Nestable Lists</h2>
		<br />
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			$('.dd').nestable({});
		});
		</script>
		
		
		<div class="panel panel-primary" data-collapsed="0">
					
			<div class="panel-heading">
				<div class="panel-title">
					Simple Draggable List
				</div>
				
				<div class="panel-options">
					<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
					<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
				</div>
			</div>
			
			
			<div class="panel-body">
		
				<div id="list-1" class="nested-list dd with-margins"><!-- adding class "with-margins" will separate list items -->
					
					<ul class="dd-list">
						<li class="dd-item">
							<div class="dd-handle">
								Item 1
							</div>
							
							<ul class="dd-list">
								<li class="dd-item">
									<div class="dd-handle">
										Sub Item 1
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										Sub Item 2
									</div>
								</li>
							</ul>
						</li>
						
						<li class="dd-item">
							<div class="dd-handle">
								Item 2
							</div>
						</li>
						
						<li class="dd-item">
							<div class="dd-handle">
								Item 3
							</div>
						</li>
						
						<li class="dd-item">
							<div class="dd-handle">
								Item 4
							</div>
						</li>
					</ul>
						
				</div>
		
			</div>
		
		</div>
		
		
		<div class="row">
			
			<div class="col-sm-6">
				
				<div class="panel panel-primary" data-collapsed="0">
							
					<div class="panel-heading">
						<div class="panel-title">
							Custom Drag Button
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
							
						<div id="list-2" class="nested-list dd with-margins custom-drag-button"><!-- adding class "custom-drag-button" will create specific handler for dragging list items -->
							
							<ul class="dd-list">
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 1
									</div>
									
									<ul class="dd-list">
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 1
											</div>
										</li>
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 2
											</div>
														
											<ul class="dd-list">
											
												<li class="dd-item">
													<div class="dd-handle">
														<span>.</span>
														<span>.</span>
														<span>.</span>
													</div>
													
													<div class="dd-content">
														Sub list element 2.1
													</div>
												</li>
											
												<li class="dd-item">
													<div class="dd-handle">
														<span>.</span>
														<span>.</span>
														<span>.</span>
													</div>
													
													<div class="dd-content">
														Sub list element 2.2
													</div>
												</li>
											
											</ul>
											
										</li>
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 3
											</div>
										</li>
										
									</ul>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 2
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 3
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 4
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 5
									</div>
								</li>
							</ul>
								
						</div>
						
					</div>
				
				</div>
		
				
			</div>
			
			<div class="col-sm-6">
				
				<div class="panel panel-primary" data-collapsed="0">
							
					<div class="panel-heading">
						<div class="panel-title">
							Show Drag Button on Hover
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
							
						<div id="list-2" class="nested-list dd with-margins custom-drag-button drag-button-on-hover"><!-- adding class "drag-button-on-hover" will show the drag handler only when hovering the element -->
							
							<ul class="dd-list">
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 1
									</div>
									
									<ul class="dd-list">
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 1
											</div>
										</li>
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 2
											</div>
										</li>
									
										<li class="dd-item">
											<div class="dd-handle">
												<span>.</span>
												<span>.</span>
												<span>.</span>
											</div>
											
											<div class="dd-content">
												Sub list element 3
											</div>
										</li>
										
									</ul>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 2
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 3
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 4
									</div>
								</li>
								
								<li class="dd-item">
									<div class="dd-handle">
										<span>.</span>
										<span>.</span>
										<span>.</span>
									</div>
									
									<div class="dd-content">
										List element 5
									</div>
								</li>
							</ul>
								
						</div>
					
					</div>
				
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




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jquery.nestable.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>