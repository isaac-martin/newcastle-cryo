<section id="contact-modal" class="modal prpl-modal">


<div class="container">
    <div class="header">
      <h4>Contact Us</h4>
      <i class="material-icons modal-close">clear</i>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <h5>Assesment &amp; Report Enquiries</h5>
        <p><i class="material-icons">local_phone</i><?php the_field('phone_number','options');?></p>
        <p><i class="material-icons">description</i><?php the_field('fax','options');?></p>
        <p><i class="material-icons">email</i><a href=mailto:"<?php the_field('contact_email','options');?>"><?php the_field('contact_email','options');?></a></p>
      </div>
      <div class="col s12 m6">
        <h5>Office Address</h5>
          <?php the_field('office_address','options');?>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6">
        <h5>Business Enquiries</h5>
        <p><i class="material-icons">local_phone</i><?php the_field('business_enquires_number','options');?></p>
        <p><i class="material-icons">email</i><a href=mailto:"<?php the_field('business_enquires_email','options');?>"><?php the_field('contact_email','options');?></a></p>
      </div>
      <div class="col s12 m6">
        <h5>Mail To</h5>
        <?php the_field('mail_to','options');?>
      </div>
    </div>

    <div id='crmWebToEntityForm'>
       <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
       <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2144709000000205081 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>

		   <input type='text' style='display:none;' name='xnQsjsdp' value='5b8d53f49290d64b6cc216a5bea3deef6a49ea7016b3dd37aad3b35b09d23aa2'/>
		   <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
		   <input type='text' style='display:none;' name='xmIwtLD' value='904706bebea13aea0f995991098eec617f1383e846b8aaad852e65e3b68dc7df'/>
		   <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

		   <input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;prudenceconsulting.com.au&#x2f;thankyou' />

    <div class="row">
      <div class="input-field col s12 m6">
          <input id="fName" name="First Name" type="text" />
          <label for="fName">First Name</label><br />
      </div>
      <div class="col s12 m6 input-field">
          <input id="lName" name="Last Name" type="text" />
          <label for="lName">Last Name</label><br />
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
<div class="input-field col s12 m6">
	<select name='Industry'>
		<option value='' disabled selected>Industry</option>
		<option value='Lawyer'>Lawyer</option>
		<option value='Personal&#x20;Injury&#x20;Specialist'>Personal Injury Specialist</option>
		<option value='Legal&#x20;Assistant'>Legal Assistant</option>
		<option value='Medical&#x20;Specialist'>Medical Specialist</option>
		<option value='General&#x20;Practitioner'>General Practitioner</option>
		<option value='Allied&#x20;Health&#x20;Professional'>Allied Health Professional</option>
		<option value='Service&#x20;Provider&#x20;&#x28;to&#x20;Prudence&#x29;'>Service Provider &#x28;to Prudence&#x29;</option>
		<option value='Employer'>Employer</option>
		<option value='Insurer'>Insurer</option>
		<option value='IMA'>IMA</option>
		<option value='Claims&#x20;Manager'>Claims Manager</option>
		<option value='Broker'>Broker</option>
		<option value='Employee'>Employee</option>
		<option value='Injured&#x20;Person'>Injured Person</option>
		<option value='Peak&#x20;body'>Peak body</option>
	</select>
</div>

      <div class="input-field col s12 m6">
          <textarea name='LEADCF1' id="enquiry" class="materialize-textarea"></textarea>
          <label for="enquiry">Enquiry</label>
      </div>
    </div>

    <button class="btn waves-effect waves-light btn-wht" type="submit" name="action" value='Submit'>Submit
      <i class="material-icons right">send</i>
    </button>
    <script>
 	  var mndFileds=new Array('Email','First Name','Last Name');
 	  var fldLangVal=new Array('Email','First Name','Last Name');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads2144709000000205081'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{
				 alert('Please select a file to upload.');
				 fieldObj.focus();
				 return false;
				}
			alert(fldLangVal[i] +' cannot be empty.');
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none.');
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   }
			 }
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
	     }

</script>
    </form>
	</div>


  </div>
</section>
