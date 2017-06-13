<section id="contact-modal" class="modal prpl-modal">


<div class="container">
    <div class="header">
      <h4>Contact Us</h4>
      <i class="material-icons modal-close">clear</i>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <h5>General Enquiries</h5>
        <p><i class="material-icons">local_phone</i><?php the_field('phone_number','options');?></p>
        <p><i class="material-icons">email</i><a href=mailto:"<?php the_field('contact_email','options');?>"><?php the_field('contact_email','options');?></a></p>
      </div>
    </div>

<!-- <form method="POST" action="" id="contact">
    <div class="row">
      <div class="input-field col s12 m6">
          <input id="firstName" name="First Name" type="text" />
          <label for="firstName">First Name</label><br />
      </div>
      <div class="col s12 m6 input-field">
          <input id="lastName" name="Last Name" type="text" />
          <label for="lastName">Last Name</label><br />
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12 m6">
          <input id="phone" name="Phone" type="text" />
          <label for="phone">Phone</label><br />
      </div>
      <div class="input-field col s12 m6">
          <input id="email" name="Email" type="email" />
          <label for="email">Email</label><br />
      </div>
    </div>

    <div class="row">
      <div class="input-field col m12">
          <textarea name='enquiry' id="enquiry" class="materialize-textarea"></textarea>
          <label for="enquiry">Enquiry</label>
      </div>
    </div>

    <button class="btn waves-effect waves-light btn-wht" type="submit" name="action" value='Submit'>Submit
      <i class="material-icons right">send</i>
    </button>
    </form> -->


    <div class="form-wrap delay2">
    		<form method="POST" action="" id="contact" autocomplete="off" class="no-ss">
    			<div class="left-form-col">
    				<h3>Your Details</h3>
    				<div class="field-wrap">
    					<input type="text" name="name" id="name" required />
    					<label for="name">Name</label>
    				</div>
    				<div class="field-wrap">
    					<input type="text" name="email" id="email" required/>
    					<!-- <input type="text" name="fake_email" id="honeypot" class=""/> -->
    					<label for="email">Email</label>
    				</div>
    				<div class="field-wrap">
    					<input type="text" name="phone" inputmode="tel" id="phone" required/>
    					<label for="text">phone (we'll call you to confirm appointment)</label>
    				</div>
    			</div>

    			<div class="right-form-col">
    				<h3>Pet Details</h3>
    				<div class="field-wrap">
    					<input type="text" name="animal" id="animal-type" required/>
    					<label for="animal">Animal Type</label>
    				</div>
    				<div class="field-wrap">
    					<input type="text" name="animal-name" id="animal-name" required />
    					<label for="animal-name">Name</label>
    				</div>
    				<div class="field-wrap">
    					<input type="text" name="toy" id="toy" required/>
    					<label for="toy">Favourite Toy</label>
    				</div>
    			</div>
    			<div class="left-form-col date-wrap">
    					<h3>Preferred Date</h3>
    				<div class="select-wrap">
    					<div class="select-inner">
    						<select name="day" id="day" required>
    						<option class="blank-opt" disabled selected></option>
    						<option value="1">1</option>
    						<option value="2">2</option>
    						<option value="3">3</option>
    						<option value="4">4</option>
    						<option value="5">5</option>
    						<option value="6">6</option>
    						<option value="7">7</option>
    						<option value="8">8</option>
    						<option value="9">9</option>
    						<option value="10">10</option>
    						<option value="11">11</option>
    						<option value="12">12</option>
    						<option value="13">13</option>
    						<option value="14">14</option>
    						<option value="15">15</option>
    						<option value="16">16</option>
    						<option value="17">17</option>
    						<option value="18">18</option>
    						<option value="19">19</option>
    						<option value="20">20</option>
    						<option value="21">21</option>
    						<option value="22">22</option>
    						<option value="23">23</option>
    						<option value="24">24</option>
    						<option value="25">25</option>
    						<option value="26">26</option>
    						<option value="27">27</option>
    						<option value="28">28</option>
    						<option value="29">29</option>
    						<option value="30">30</option>
    						<option value="31">31</option>
    					</select>
    					</div>
    					<label for="day">Day</label>
    				</div>

    				<div class="select-wrap month">
    					<div class="select-inner">
    					<select name="month" id="month" required>
    						<option class="blank-opt" disabled selected></option>
    						<option value="1">JAN</option>
    						<option value="2">FEB</option>
    						<option value="3">MAR</option>
    						<option value="4">APR</option>
    						<option value="5">MAY</option>
    						<option value="6">JUN</option>
    						<option value="7">JUL</option>
    						<option value="8">AUG</option>
    						<option value="9">SEP</option>
    						<option value="10">OCT</option>
    						<option value="11">NOV</option>
    						<option value="12">DEC</option>
    					</select>
    				</div>
    					<label for="month">Month</label>
    				</div>

    				<div class="select-wrap">
    					<div class="select-inner">
    						<select name="year" class="js-example-basic-single" id="year" required>
    							<option class="blank-opt" disabled selected></option>
    							<option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
    							<option value="<?php echo date('Y', strtotime('+1 year'));?>"><?php echo date('Y', strtotime('+1 year'));?></option>
    							<option value="<?php echo date('Y', strtotime('+2 year'));?>"><?php echo date('Y', strtotime('+2 year'));?></option>
    						</select>
    					</div>
    					<label for="year">year</label>
    				</div>
    			</div>
    			<div class="right-form-col">
    				<h3>Preferred Time</h3>
    				<div class="radio-button-wrapper">
    					<div class="single-radio-wrap">
    						<div class="radio-inner">
    							<input class="time-radio" type="radio" name="time" value="Morning" id="rad1"><label class="time-label" for="rad1">Morning</label>
    						</div>
    					</div>
    					<div class="single-radio-wrap">
    						<div class="radio-inner">
    							<input class="time-radio" type="radio" name="time" value="Midday" id="rad2"><label class="time-label" for="rad2">Midday</label>
    						</div>
    					</div>
    					<div class="single-radio-wrap">
    						<div class="radio-inner">
    							<input class="time-radio" type="radio" name="time" value="Afternoon" id="rad3"><label class="time-label" for="rad3">Afternoon</label>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="error-messages">

    			</div>
    			<div class="form-submit">
    				<button type="submit" class="arrow-trigger no-ss">
    					<h2>Send</h2>
    					<div class="small-arrow">
    						<svg version="1.1" id="_x38_6dd6fc9-e2ee-4280-a428-b159ba1579ac"
    							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115.2 92.6"
    							 style="enable-background:new 0 0 115.2 92.6;" xml:space="preserve">
    						<polygon class="st0" points="64.8,90 108.6,46.3 64.8,2.5 64.8,22.6 6.6,22.6 6.6,69.6 64.8,69.6 "/>
    						</svg>
    					</div>
    				</button>
    			</div>
    		</form>
    <div id="form-message"></div>
</section>
