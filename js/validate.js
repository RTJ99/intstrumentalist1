function validateForm() {
	var uname = document.enquiries.userid;
	var uid = document.enquiries.userid;
	var phone = document.enquiries.phone;
	var email = document.enquiries.email;
	
	var empt = document.enquiries.enquiry.value;
	
	var check_letter_regex = /^[A-Za-z]+$/;
	var numbers = /^[0-9]\d{9}$/;
	var emails_fmt =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	
	 if(!(uname.value.match(check_letter_regex))) {
    	alert('Name must have alphabet characters only and it should not be empty.');
    	uname.focus();
	} else if(!(phone.value.match(numbers))) {
    	alert('Please enter a valid 10 digit mobile number and it should not be empty');
		phone.focus();
		
	} else if(!(email.value.match(emails_fmt))) {
		alert('Please enter a valid email and it must not be empty');
		email.focus();
		return false;
	}
	else if(empt =="") {
		alert('Enquiry must not be empty');
		text.focus();
		return false;
	}


	else {
		alert('Successfully! form ha been submitted.');
	}

}
function submitForm() {
	console.log('Successfully! form has been submitted.');
}


