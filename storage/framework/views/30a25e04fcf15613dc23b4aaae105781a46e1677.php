	<section id="chating-box">
		<button class="open-button" onclick="openForm()">Chat</button>
		<div class="chat-popup" id="myForm">
  			<form action="" class="form-container">
    			<h3>Chat</h3>
			    <label for="msg"><b>Message</b></label>
			    <textarea placeholder="Type message.." name="msg" required></textarea>
			    <button type="submit" class="btn">Send</button>
			    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		  </form>
		</div>
	</section>