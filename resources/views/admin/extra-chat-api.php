<?php include './includes/header.php' ?>
		
		
		<div class="jumbotron">
			<h1>Chat API</h1>
			
			<p>Neon Chat is simple <strong>API Chat</strong> platform developed by <a href="http://www.laborator.co" target="_blank"><strong>Laborator</strong></a> that you can use to integrate to your own chat system. It provides bunch of options you can use to support full chat platform. Here you can test the functions and know about their usage details.</p>
			
			<p>
				<br />
				<a class="btn btn-primary btn-lg" href="#markup" role="button">See the Markup</a>
			</p>
		</div>
		
		
		
		<div class="row">
			<div class="col-md-6">
				<h3>Toggle Chat</h3>
				
				<p>Link that toggles chat. Just add this attribute to any element: <code>data-toggle="chat"</code></p>
				
				<p>
					<a href="#" class="btn btn-default" data-toggle="chat">Toggle Chat</a>
					
					<a href="#" class="btn btn-default chat-open">Force Open</a>
					
					<a href="#" class="btn btn-default chat-close">Force Close</a>
					
				</p>
				
				<br />
				
				<h4>With Animation</h4>
				
				<p>
					<a href="#" class="btn btn-default" data-toggle="chat" data-animate="1">Toggle Chat w/ Animation</a>
						
					<a href="#" class="btn btn-default chat-open" data-animate="1">Force Open</a>
					
					<a href="#" class="btn btn-default chat-close" data-animate="1">Force Close</a>
				</p>
				
				<br />
				
				<h4>Toggle Left Sidebar</h4>
				
				<p>This will close the sidebar (if it is already open) when chat shows.</p>
				
				<p>
					<a href="#" class="btn btn-default" data-toggle="chat" data-collapse-sidebar="1">Toggle Chat w/ Sidebar</a>
					
					<a href="#" class="btn btn-default" data-toggle="chat" data-collapse-sidebar="1" data-animate="1">Toggle Chat w/ Sidebar (Animated)</a>
				</p>
				
			</div>
			
			<div class="col-md-6">
				
				<h3>See how its implemented</h3>
				
				<strong>Code for Toggle Chat</strong>
				<pre>&lt;a href=&quot;#&quot; class=&quot;btn btn-default&quot; data-toggle=&quot;chat&quot;&gt;Toggle Chat&lt;/a&gt;</pre>
				
				<br />
				
				<strong>Force open</strong>
				<pre>&lt;a href=&quot;#&quot; class=&quot;btn btn-default chat-open&quot;&gt;Force Open&lt;/a&gt;</pre>
				
				<br />
				
				<strong>Force close</strong>
				<pre>&lt;a href=&quot;#&quot; class=&quot;btn btn-default chat-close&quot;&gt;Force Close&lt;/a&gt;</pre>
				
				<br />
				
				<strong>The above buttons with animation feature</strong>
				<pre>&lt;a href=&quot;#&quot; class=&quot;btn btn-default&quot; data-toggle=&quot;chat&quot; data-animate=&quot;1&quot;&gt;Toggle Chat w/ Animation&lt;/a&gt;</pre>
				
				<br />
				
				<strong>Toggle Chat + Sidebar</strong>
				<pre>&lt;a href=&quot;#&quot; class=&quot;btn btn-default&quot; data-toggle=&quot;chat&quot; data-collapse-sidebar=&quot;1&quot;&gt;Toggle Chat w/ Sidebar&lt;/a&gt;</pre>
				
				<br />
				
				<strong>To add animations simply add this attribute:</strong>
				<pre>data-animate="1"</pre>
				
			</div>
		</div>
		
		<br />
		
		
		
		<div class="row">
			<div class="col-md-7">
				<h3>Chat Bubble</h3>
				
				<p>If you want to receive chat notifications, simply add this class <code>.chat-notifications-badge</code> to any element, each time the new message is submitted it will be updated automatically.</p>
				
				<br />
				<p>
					Exmaple:
					
					<span class="badge badge-danger chat-notifications-badge is-hidden"></span>
					
					
					<br />
					<br />
					
					<strong>Code</strong>
					<pre>&lt;span class=&quot;badge badge-danger chat-notifications-badge is-hidden&quot;&gt;&lt;/span&gt;</pre>
					
				</p>
			</div>
			
			<div class="col-md-5">
				<h3>Always Visible Chat</h3>
				
				<p>If you want to have the chat always visible on the right sidebar add class <code>.chat-visible</code> to <code>.page-container</code> element.</p>
			</div>
		</div>
		<br />
		
		
		
		<div class="row">
			<div class="col-md-12">
				<h3 id="markup">Markup</h3>
				
				<p>Adding chat functionality to Neon theme its easy. Add <code>#chat</code> container inside <code>.page-content</code> element. Here is an examlpe: </p>
				
				<pre>&lt;div id=&quot;chat&quot; class=&quot;fixed&quot; data-current-user=&quot;Art Ramadani&quot; data-order-by-status=&quot;1&quot; data-max-chat-history=&quot;25&quot;&gt;
			
			&lt;div class=&quot;chat-inner&quot;&gt;
			
				
				&lt;h2 class=&quot;chat-header&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;chat-close&quot;&gt;&lt;i class=&quot;entypo-cancel&quot;&gt;&lt;/i&gt;&lt;/a&gt;
					
					&lt;i class=&quot;entypo-users&quot;&gt;&lt;/i&gt;
					Chat
					&lt;span class=&quot;badge badge-success is-hidden&quot;&gt;0&lt;/span&gt;
				&lt;/h2&gt;
				
				
				&lt;div class=&quot;chat-group&quot; id=&quot;group-1&quot;&gt;
					&lt;strong&gt;Favorites&lt;/strong&gt;
					
					&lt;a href=&quot;#&quot; id=&quot;sample-user-123&quot; data-conversation-history=&quot;#sample_history&quot;&gt;&lt;span class=&quot;user-status is-offline&quot;&gt;&lt;/span&gt; &lt;em&gt;Catherine J. Watkins&lt;/em&gt;&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;user-status is-online&quot;&gt;&lt;/span&gt; &lt;em&gt;Nicholas R. Walker&lt;/em&gt;&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;user-status is-online&quot;&gt;&lt;/span&gt; &lt;em&gt;Susan J. Best&lt;/em&gt;&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;user-status is-offline&quot;&gt;&lt;/span&gt; &lt;em&gt;Brandon S. Young&lt;/em&gt;&lt;/a&gt;
					&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;user-status is-idle&quot;&gt;&lt;/span&gt; &lt;em&gt;Fernando G. Olson&lt;/em&gt;&lt;/a&gt;
				&lt;/div&gt;
			
			&lt;/div&gt;
			
			&lt;!-- conversation template --&gt;
			&lt;div class=&quot;chat-conversation&quot;&gt;
				
				&lt;div class=&quot;conversation-header&quot;&gt;
					&lt;a href=&quot;#&quot; class=&quot;conversation-close&quot;&gt;&lt;i class=&quot;entypo-cancel&quot;&gt;&lt;/i&gt;&lt;/a&gt;
					
					&lt;span class=&quot;user-status&quot;&gt;&lt;/span&gt;
					&lt;span class=&quot;display-name&quot;&gt;&lt;/span&gt; 
					&lt;small&gt;&lt;/small&gt;
				&lt;/div&gt;
				
				&lt;ul class=&quot;conversation-body&quot;&gt;	
				&lt;/ul&gt;
				
				&lt;div class=&quot;chat-textarea&quot;&gt;
					&lt;textarea class=&quot;form-control autogrow&quot; placeholder=&quot;Type your message&quot;&gt;&lt;/textarea&gt;
				&lt;/div&gt;
				
			&lt;/div&gt;
			
		&lt;/div&gt;
		
		
		&lt;!-- Chat Histories --&gt;
		&lt;div class=&quot;chat-history&quot; id=&quot;sample_history&quot;&gt;
			&lt;li&gt;
				&lt;span class=&quot;user&quot;&gt;Art Ramadani&lt;/span&gt;
				&lt;p&gt;Are you here?&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:00&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Catherine J. Watkins&lt;/span&gt;
				&lt;p&gt;This message is pre-queued.&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:25&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Catherine J. Watkins&lt;/span&gt;
				&lt;p&gt;Whohoo!&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:26&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent unread&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Catherine J. Watkins&lt;/span&gt;
				&lt;p&gt;Do you like it?&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:27&lt;/span&gt;
			&lt;/li&gt;
		&lt;/div&gt;
		
		
		
		
		&lt;!-- Chat Histories --&gt;
		&lt;div class=&quot;chat-history&quot; id=&quot;sample_history_2&quot;&gt;
			&lt;li class=&quot;opponent unread&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Daniel A. Pena&lt;/span&gt;
				&lt;p&gt;I am going out.&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;08:21&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent unread&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Daniel A. Pena&lt;/span&gt;
				&lt;p&gt;Call me when you see this message.&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;08:27&lt;/span&gt;
			&lt;/li&gt;
		&lt;/div&gt;</pre>
				
				<br />
				<h4 id="chat-api-order-contacts">Chat Attributes for <em>#chat</em> container</h4>
				
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="15%">Attribute Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<span class="label label-info">data-current-user</span>
							</td>
							<td>The current user display name which will be sent messages from.</td>
						</tr>
						
						<tr>
							<td>
								<span class="label label-info">data-order-by-status</span>
							</td>
							<td>
								You can decide wether you want to sort users in groups by their status by adding <strong>1</strong> value to this attribute.
								Status ordering: 1 online, 2 busy, 3 idle, 4 offline. To change this ordering edit <strong>neon-chat.js</strong> file.
							</td>
						</tr>
						
						<tr>
							<td>
								<span class="label label-info">data-max-chat-history</span>
							</td>
							<td>
								For each chat conversation there is a limit of N messages. Here you can define how many messages per conversation can be stored at maximum. Default value is: 25 records.
							</td>
						</tr>
					</tbody>
				</table>
				
				
				<br />
				<h4>Group Attributes</h4>
				
				<p>
					Chat groups are required! So you should at least have one group. For example you can name it <em>Contacts</em> or whatever. To create chat groups simply add new element with <code>.chat-group</code> class and you are done. To add a name to this group insert the <code>&lt;strong&gt;</code> tag as first element of the group with the group name.
					Inside chat groups you can insert the contacts.
				</p>
				
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="15%">Attribute Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<span class="label label-info">id</span>
							</td>
							<td>Group ID is required if you want to manipulate the group via Neon Chat API. Sample example <code>neonChat.removeGroup("sample-group-id");</code></td>
						</tr>
					</tbody>
				</table>
				
				
				<br />
				<h4>Contact Attributes</h4>
				
				<p>
					After you have created the group now you can append the chat contacts to it. Simply add <code>&lt;a&gt;</code> elements, for example: 
					<pre>&lt;a href=&quot;#&quot; id=&quot;user-id-123&quot;&gt;&lt;span class=&quot;user-status is-online&quot;&gt;&lt;/span&gt; &lt;em&gt;Nicholas R. Walker&lt;/em&gt;&lt;/a&gt;</pre>
					
					<br />
					User status element is required inside the link element. For each user define the status, example: <code>&lt;span class=&quot;user-status is-busy&quot;&gt;&lt;/span&gt;</code>,
					<code>&lt;span class=&quot;user-status is-idle&quot;&gt;&lt;/span&gt;</code> or <code>&lt;span class=&quot;user-status is-offline&quot;&gt;&lt;/span&gt;</code>
					
					<br />
					<br />
				</p>
				
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="15%">Attribute Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<span class="label label-info">id</span>
							</td>
							<td>User ID is required if you want to manipulate the group via Neon Chat API, by default this API will automatically assign an ID to each contact. <br />Sample example 
								<code>neonChat.getUser("user-123");</code> or
								<code>neonChat.setStatus("user-123", "offline");</code> or 
								<code>neonChat.open("user-123");</code>
							</td> 
						</tr>
						
						<tr>
							<td>
								<span class="label label-info">data-conversation-history</span>
							</td>
							<td>
								You can pre-load Chat History for any contact by simply specifying this attribute. Inside the attribute apply the ID of chat conversation. 
								
								<br />
								<br />
								Here is an example:
								
								<pre>&lt;a href=&quot;#&quot; data-conversation-history=&quot;#sample_history&quot;&gt;&lt;span class=&quot;user-status is-offline&quot;&gt;&lt;/span&gt; &lt;em&gt;Catherine J. Watkins&lt;/em&gt;&lt;/a&gt;
		
		
		&lt;!-- Chat History for this user --&gt;
		&lt;div class=&quot;chat-history&quot; id=&quot;sample_history&quot;&gt;
			&lt;li&gt;
				&lt;span class=&quot;user&quot;&gt;Art Ramadani&lt;/span&gt;
				&lt;p&gt;Are you here?&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:00&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Catherine J. Watkins&lt;/span&gt;
				&lt;p&gt;This message is pre-queued.&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:25&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Catherine J. Watkins&lt;/span&gt;
				&lt;p&gt;Whohoo!&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:26&lt;/span&gt;
			&lt;/li&gt;
			
			&lt;li class=&quot;opponent unread&quot;&gt;
				&lt;span class=&quot;user&quot;&gt;Faruk zjermi&lt;/span&gt;
				&lt;p&gt;Do you like it?&lt;/p&gt;
				&lt;span class=&quot;time&quot;&gt;09:27&lt;/span&gt;
			&lt;/li&gt;
		&lt;/div&gt;</pre>
							</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</div>
		<br />
		
		
		
		
		<div class="row">
			<div class="col-md-12">
				<h2>API Functions</h2>
				
				
				<!-- API Functions -->
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Function Name</th>
							<th>Description and Usage Details</th>
						</tr>
					</thead>
					<tbody>
						
						
						<tr>
							<td>
								<h4>neonChat.showChat(animated)</h4>
							</td>
							<td class="middle-align">
								This function shows the chat contacts container. 
								<br />Specifying <code>animated</code> attribute with <code>true</code> value, will add animation.
								
								<br />
								<br />
								Example:
								<pre>neonChat.showChat(true);</pre>
								
								<a href="javascript:neonChat.showChat(true);">Try it!</a>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.hideChat(animated)</h4>
							</td>
							<td class="middle-align">
								This function will hide the chat container. 
								<br />Specifying <code>animated</code> attribute with <code>true</code> value, will add animation.
								
								<br />
								<br />
								Example:
								<pre>neonChat.hideChat(false);</pre>
								
								<a href="javascript:neonChat.hideChat(false);">Try it!</a>
							</td>
						</tr>
						
						
						
						<tr>
							<td>
								<h4>neonChat.toggleChat(animated, collapse_sidebar)</h4>
							</td>
							<td class="middle-align">
								It the mix of two above functions, which will decide whether to open it if its closed or close it if its opened.
								<br />Attribute: <code>animated</code> applying <code>true</code> value, will add animation.
								<br />Attribute: <code>collapse_sidebar</code> applying <code>true</code> value, will hide the left sidebar (if its already open) or will show the sidebar if the chat is closed.
								
								<br />
								<br />
								Example:
								<pre>neonChat.toggleChat(false, true);</pre>
								
								<a href="javascript:neonChat.toggleChat(false, true);">Try it!</a>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.open(user_id)</h4>
							</td>
							<td class="middle-align">
								Opens chat conversation window for <code>user_id</code>. User ID can be the group element <code>&lt;a&gt;</code> or id of the element inside chat group.
								
								<br />
								<br />
								Example:
								<pre>// Primary form
		neonChat.open(&quot;sample-user-123&quot;);
		
		// Secondary form
		neonChat.open($(&quot;.chat-group a#sample-user-123&quot;));
		</pre>
								
								<a href="javascript:neonChat.showChat(false); neonChat.open($('.chat-group a#sample-user-123'));">Try it!</a>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.close()</h4>
							</td>
							<td class="middle-align">
								Will close current active chat conversation window, no attributes are required.
								
								<br />
								<br />
								Example:
								<pre>neonChat.close();</pre>
								
								<a href="javascript:neonChat.close();">Try it!</a>
							</td>
						</tr>
						
						<tr>
							<td>
								<h4>neonChat.refreshUserIds()</h4>
							</td>
							<td class="middle-align">
								It will search all contacts in groups and create/open Chat History for contacts that already don't have. 
								You will be likely to call this method when you manually add chat groups, or contacts to groups, but its not required if you use our predefined user/group management functions.
							</td>
						</tr>
						
						<tr>
							<td>
								<h4>neonChat.pushMessage(id, msg, from, time, fromOpponent, unread)</h4>
							</td>
							<td class="middle-align">
								This function <code>neonChat.pushMessage(id, msg, from, time, fromOpponent, unread)</code> will broadcast the messages to contacts. It is used for both, sender and receiver. If you act as receiver, the attribute <code>fromOpponent</code> must be set to <code>true</code>.
								
								<br />
								<br />
								Attributes:
								<br />
								<br />
								<ul class="list-unstyled dist">
									<li>
										<span class="label label-default">id</span> - Contact ID that will receive the message.
									</li>
									<li>
										<span class="label label-default">msg</span> - The message text that will be sent.
									</li>
									<li>
										<span class="label label-default">from</span> - The name of sender - <code>string</code> value.
									</li>
									<li>
										<span class="label label-default">time</span> - Could be sent as <code>new Date()</code> object or time as string <code>17:45</code>.
									</li>
									<li>
										<span class="label label-default">fromOpponent</span> - Its a boolean attribute, that will mark the message that is being set as from receiver, also styled differently.
									</li>
									<li>
										<span class="label label-default">unread</span> - This attribute will be used mostly when the previous attribute <code>fromOpponent</code> is true. This function attribute is set to true when you want a message to be marked as new message. 
										If this attribute is set to <code>true</code> the number of unread messages will be updated.
									</li>
								</ul>
								
								
								<br />
								<a href="javascript:javascript:neonChat.showChat(false); neonChat.pushMessage('ui-id-1', 'This test message ' + (new Date().getTime()), 'Susan J. Best', new Date(), true, true); neonChat.renderMessages('ui-id-1', false);">Try it! Send message to <strong>Nicholas R. Walker</strong> as <strong>Susan J. Best</strong></a>
								<br />
								<a href="javascript:javascript:neonChat.showChat(false); neonChat.pushMessage('ui-id-1', 'This is reply to you buddy.' + (new Date().getTime()), 'Nicholas R. Walker', new Date(), false, false); neonChat.renderMessages('ui-id-1', false);">Try it! Reply message to <strong>Susan J. Best</strong> as <strong>Nicholas R. Walker</strong></a>
								<br />
								<a href="javascript:javascript:neonChat.showChat(false); neonChat.pushMessage('ui-id-5', 'Hello world ' + (new Date().getTime()), 'Daniel A. Pena', new Date(), true, true); neonChat.renderMessages('ui-id-5', false);">Try it! Send message to <strong>Robert J. Garcia</strong> as <strong>Daniel A. Pena</strong></a>
								<br />
							</td>
						</tr>
						
						
						<tr id="status-options">
							<td>
								<h4>neonChat.getStatus(user_id)</h4>
							</td>
							<td class="middle-align">
								
								Get the current status of user which is selected by <code>user_id</code>. Will return <code>status_id</code> which can be fetched on <code>neonChat.statuses[status_id]</code>.
								
								<br />
								<br />
								The <code>status</code> object contains these properties i.e: <code>{class: 'is-online', order: 1, label: 'Online'}</code>.
								
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.setStatus(user_id, new_status)</h4>
							</td>
							<td class="middle-align">
								
								Sets the user status which is selected by <code>user_id</code>. This will also update the CSS Style on contacts list. Available choices:
								
								<pre>// Set online
		neonChat.setStatus(&quot;sample-user-123&quot;, &quot;online&quot;);
		
		// Set busy
		neonChat.setStatus(&quot;sample-user-123&quot;, &quot;busy&quot;);
		
		// Set away/idle
		neonChat.setStatus(&quot;sample-user-123&quot;, &quot;idle&quot;);
		
		// Set offline
		neonChat.setStatus(&quot;sample-user-123&quot;, &quot;offline&quot;);
								</pre>
								
								<a href="javascript:neonChat.showChat(false); neonChat.setStatus('sample-user-123', 'online');">Try it! Set <strong>online</strong> status for <strong>Catherine J. Watkins</strong></a>
								<br />
								
								<a href="javascript:neonChat.showChat(false); neonChat.setStatus('sample-user-123', 'busy');">Try it! Set <strong>busy</strong> status for <strong>Catherine J. Watkins</strong></a>
								<br />
								
								<a href="javascript:neonChat.showChat(false); neonChat.setStatus('sample-user-123', 'idle');">Try it! Set <strong>idle</strong> status for <strong>Catherine J. Watkins</strong></a>
								<br />
								
								<a href="javascript:neonChat.showChat(false); neonChat.setStatus('sample-user-123', 'offline');">Try it! Set <strong>offline</strong> status for <strong>Catherine J. Watkins</strong></a>
								<br />
								
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.orderGroups()</h4>
							</td>
							<td class="middle-align">
								If sorting is enabled (read <a href="#chat-api-order-contacts">here</a>) via <code>data-order-by-status</code> attribute, this function can be used to re-sort contacts inside groups. The sorting is determined with <strong>Status Priority</strong> which can be set on <strong>js/neon-chat.js</strong> on <code>statues</code> variable. Set <code>order</code> priority for each status. The statuses with lower number will be ordered to top.
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.countUnreadMessages(user_id)</h4>
							</td>
							<td class="middle-align">
								Will calculate the total number of unread messages on chat history. If you specify the <code>user_id</code> (which is optional) it will return the unread messages for selected user.
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.createGroup(group_name, prepend)</h4>
							</td>
							<td class="middle-align">
								Create new (blank) chat group. The <code>group_name</code> is required, while <code>prepend</code> is optional.
								
								<br />
								<br />
								Attributes:
								<br />
								<br />
								<ul class="list-unstyled dist">
									<li>
										<span class="label label-default">group_name</span> - Group name that will be created.
									</li>
									<li>
										<span class="label label-default">prepend</span> - If you set this to <strong>true</strong> it will create the group as first entry on the chat groups, otherwise it will append to the bottom.
									</li>
								</ul>
								
								<br />
								Returns <code>group_id</code> which can be used then to add, remove, or move contacts from/to this group.
								
								<br />
								<br />
								
								Sample Code:
								<pre>var new_group_id = neonChat.createGroup('Party', true);</pre>
								
								<br />
								<a href="javascript:return false;" onclick="neonChat.showChat(false); window.new_gr_id = neonChat.createGroup('Party', true); this.onclick = null;">Try it! Create new group named "Party"</a>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.removeGroup(group_id, move_users_to_group)</h4>
							</td>
							<td class="middle-align">
								Delete existing chat group. The <code>group_id</code> is required, while <code>move_users_to_group</code> is optional.
								
								<br />
								<br />
								Attributes:
								<br />
								<br />
								<ul class="list-unstyled dist">
									<li>
										<span class="label label-default">group_id</span> - Group ID that will be deleted.
									</li>
									<li>
										<span class="label label-default">move_users_to_group</span> - The current users of this group to place to another group id.
									</li>
								</ul>
								
								<br />
								
								Sample Code:
								<pre>neonChat.removeGroup('group-3', 'group-2');</pre>
								
								
								<br />
								
								<a href="javascript: neonChat.showChat(false); neonChat.removeGroup('group-3', 'group-2');">Try it! Delete group "Social" and place contact to "Work"</a>
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.addUser(group_id, display_name, status, prepend, user_id)</h4>
							</td>
							<td class="middle-align">
								Add user to specified group. The <code>group_id</code> is required, also <code>display_name, status</code> are required to init the user. Last two parameters <code>prepend, user_id</code> are optional.
							
								<br />
								<br />
								Attributes:
								<br />
								<br />
								<ul class="list-unstyled dist">
									<li>
										<span class="label label-default">group_id</span> - Existing group ID to add the user
									</li>
									<li>
										<span class="label label-default">display_name</span> - Display Name for this contact
									</li>
									<li>
										<span class="label label-default">status</span> - Status for this user, <a href="#status-options">see status options</a>.
									</li>
									<li>
										<span class="label label-default">prepend</span> - (Optional) Wether to add this user to the top, or to the bottom. This option is valid if contact ordering is <strong>off</strong>.
									</li>
									<li>
										<span class="label label-default">user_id</span> - (Optional) By default if you don't specify this attribute, it will be automatically generated, or you can apply your desired id.
									</li>
								</ul>
								
								<br />
								Returns <code>user_id</code> of newly created user. The equivalent method is <code>neonChat.addUserId(group_id, user_id, display_name, status, prepend)</code> which will require <code>user_id</code> to be set, if you are going to add contacts with IDs.
								
								<br />
								<br />
								Sample Code:
								<pre>neonChat.addUser(group_id, 'John Doe 123', 'busy', true);</pre>
								
								<br />
								<a href="javascript:neonChat.showChat(false);" onclick="neonChat.addUser(window.new_gr_id, 'John Doe ' + Math.round(Math.random() * 100), Math.round(Math.random() * 100)%2==0 ? 'online' : 'busy', true);">Try it! Add user to "Party" Group (if this group exists)</a>
								
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.getUser(user_id)</h4>
							</td>
							<td class="middle-align">
								Will return user object by selecting it via <code>user_id</code>. The user object contains these properties: <code>{$el: $dom_element, messages: [], unreads: 2, status: 'online'}</code>.
							</td>
						</tr>
						
						
						<tr>
							<td>
								<h4>neonChat.moveUser(user_id, new_group_id, prepend)</h4>
							</td>
							<td class="middle-align">
								Will move specific user to specific group. The <code>user_id</code> and <code>new_group_id</code> are required, while <code>prepend</code> is optional.
							
								<br />
								<br />
								Attributes:
								<br />
								<br />
								<ul class="list-unstyled dist">
									<li>
										<span class="label label-default">user_id</span> - Existing user ID which is about to move
									</li>
									<li>
										<span class="label label-default">new_group_id</span> - The group ID that will accept this user.
									</li>
									<li>
										<span class="label label-default">prepend</span> - Set the user to the top of group. This option is valid if contact ordering is <strong>off</strong>.
									</li>
								</ul>
								
								<br />
								
								Sample Code:
								<pre>neonChat.moveUser('sample-user-123', 'group-2', true);</pre>
								
								<br />
								<a href="javascript:neonChat.showChat(false);" onclick="neonChat.moveUser('sample-user-123', 'group-2', true);">Try it! Move <strong>Catherine J. Watkins</strong> to <strong>Work</strong> group.</a>
							</td>
						</tr>
						
					</tbody>
				</table>
				
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
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>