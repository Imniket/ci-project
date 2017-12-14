<!-- contact -->
	<div class="contact wthree-2">
		<div class="container">
			<h1>Contact</h1> 
			
			<div class="contact-form">
				<div class="col-md-4 contact-form-left agile-3">
					<h2>Address :</h2>
					<p>Eiusmod Tempor inc</p>
					<p>9560 St Dolore Place,</p>
					<p>Telephone : +1 800 603 6035</p>
					<p>FAX : +1 800 889 9898</p>
					<a href="mailto:example@email.com">mail@example.com</a>
				</div>
				<div class="col-md-8 contact-form-right  agileits-3">
					<h3>Contact Form</h3>
                                        <form action="<?php echo base_url('contact/');  ?>" method="post">
                                            <input type="text" name="name" placeholder="Name" required="">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <input type="text" name="phone" placeholder="Phone" required="">
						
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //contact -->