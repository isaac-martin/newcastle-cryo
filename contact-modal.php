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

<form method="POST" action="" id="contact">
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
          <textarea name=enquiry'' id="enquiry" class="materialize-textarea"></textarea>
          <label for="enquiry">Enquiry</label>
      </div>
    </div>

    <button class="btn waves-effect waves-light btn-wht" type="submit" name="action" value='Submit'>Submit
      <i class="material-icons right">send</i>
    </button>
    </form>
    <div id="form-message"></div>
</section>
