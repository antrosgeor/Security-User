// JavaScript Document
//gia na ele3oume an exoume vali ola ta stixeia stin lista sto contact.html
function validate_form()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var firstname = document.getElementById('firstname').value;
	var lastname = document.getElementById('lastname').value;
	var email = document.getElementById('email').value;
	var message = document.getElementById('message').value;

	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg ="You have not filled in the fields below\n";

	if (blank(firstname)) {
		msg = msg + "- Όνομα\n";
	}

	if (blank(lastname)) {
		msg = msg + "- Επώνυμο\n";
	}

	if (blank(email)) {
		msg = msg + "- Email\n";
	}
	else if (!email.match(/(\w+)@(.+)\.(\w+)$/)) { // Ελέγχουμε με κατάλληλο regular expression αν η τιμή του mail έχει έγκυρη μορφή. Για περισσότερες λεπτομέρειες, μπορεί να ανατρέξει κανείς στο google με αναζήτηση 'regular expressions javascript' 
		msg = msg + "- Το e-mail δεν είναι έγκυρο\n";
	}

	if (blank(message)) {
		msg = msg + "- Μήνυμα\n";
	}

	if (msg!="You have not filled in the fields below\n") {
		alert(msg);
		return false;
	}

	return true;
}


// Η συνάρτηση αυτή επιστρέφει 1 αν η τιμή του x είναι κενή, 0 σε διαφορετική περίπτωση
function blank ( x )
{
	 var length = x.length; // Αποθηκεύουμε τον αριθμό των χαρακτήρων
	 var result = 1;

	for (i = 1;i <= length;i++)
	{
		if (x.charAt(i-1) != " ") { // Διατρέχουμε έναν έναν χαρακτήρα και αν υπάρχει έστω 
									//ένας που ΔΕΝ είναι ο κενός, επιστρέφουμε 0
			
			result = 0;
			break;
		}
	} 
	return result;
}



//gia na ele3oume an exoume vali ola ta stixeia stin lista sto contact.html
function validate_form_user()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "You have not filled in the fields below\n";

	if (blank(username)) {
		msg = msg + "- Username\n";
	}

	if (blank(password)) {
		msg = msg + "- Password\n";
	}

	if (msg!="You have not filled in the fields below\n") {
		alert ( msg );
		return false;
	}
	return true;
}


function validate_form_contact(){
	
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var tel_phone = document.getElementById('tel_phone').value;
	var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "You have not filled in the fields below\n";
	
	if (!name) {
		msg = msg + "- Name\n";
	}

	if (!email) {
		msg = msg + "- Email\n";
	}
	
	if (!tel_phone) {
		msg = msg + "- Tel Phone\n";
	}
	//var phoneno = "/[^0-9]/" ;  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/  
	// (/[0-9]{10}$/)
	if(!tel_phone.match(/^\(?([0-9]{10})$/)) {
  			msg = msg + "-The Phone is NOT not right, must be 10 numbers \n";
  	}

	if (!subject) {
		msg = msg + "- Subject\n";
	}

	if (!message) {
		msg = msg + "- Message\n";
	}
	
	//if(!name || !email || !tel_phone || !subject || !message){
	if(msg!="You have not filled in the fields below\n"){
		alert(msg);
		return false;
	}else{
		return true;
	}
}

//gia na ele3oume an exoume vali ola ta stixeia stin lista sto contact.html
function validate_form_forgot()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var forgotname  = document.getElementById('forgot_name').value;
	var forgotemail = document.getElementById('forgot_email').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "You have not filled in the fields below\n";

	if (!forgotname) {
		msg = msg + "- Username\n";
	}

	if (!forgotemail) {
		msg = msg + "- E-mail\n";
	}

	if (msg!="You have not filled in the fields below\n") {
		alert ( msg );
		return false;
	}

	return true;
}

//user singup
function validate_form_singup()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var sing_up_username = document.getElementById('sing_up_username').value;
	var sing_up_phone = document.getElementById('sing_up_phone').value;
	var sing_up_password = document.getElementById('sing_up_password').value;
	var sing_up_re_password = document.getElementById('sing_up_re_password').value;
	var sing_up_email = document.getElementById('sing_up_email').value;
	var sing_up_re_email = document.getElementById('sing_up_re_email').value;
	//var ok = document.getElementById('ok').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "You have not filled in the fields below\n";

	if (!sing_up_username) {
		msg = msg + "- Username \n";
	}

	if (!sing_up_phone) {
		msg = msg + "- Phone \n";
	}

	//var phoneno = "/[^0-9]/" ;  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/  
	// (/[0-9]{10}$/)
	if(!sing_up_phone.match(/^\(?([0-9]{10})$/)) {
  			msg = msg + "-The Phone is NOT not right, must be 10 numbers \n";
  	}

	if (!sing_up_password) {
		msg = msg + "- Password \n";
	}

	if (!sing_up_re_password) {
		msg = msg + "- Re_Password \n";
	}
	
	if (sing_up_password != sing_up_re_password) {
	 	msg = "-The Password is NOT the same as the Re_Password \n";
	}

	if (!sing_up_email) {
		msg = msg + "- Email \n";
	}
	
	if (!sing_up_re_email) {
		msg = msg + "- Re_Email \n";
	}
	
	if (sing_up_email != sing_up_re_email) {
	 	msg = "-The Email is NOT the same as the Re_Email \n";
	}

	if (!document.getElementById('ok').checked) {
	    	msg = msg + "-You have not agreed to terms \n"; 
	}
	
	if (msg!="You have not filled in the fields below\n") {
		alert ( msg );
		return false;
	}

	return true;
}




//upgrade
function validate_form_up()
{
	// Παίρνουμε τις τιμές των html στοιχείων της φόρμας ανάλογα με το id τους
	var up_username = document.getElementById('up_username').value;
	var up_phone = document.getElementById('up_phone').value;
	var up_password = document.getElementById('up_password').value;
	var up_re_password = document.getElementById('up_re_password').value;
	var up_email = document.getElementById('up_email').value;
	//var ok = document.getElementById('ok').value;
	
	// Δημιουργούμε ένα μήνυμα σε περίπτωση που ο χρήστης δεν έχει συμπληρώσει κάποιο από τα πεδία της φόρμας
	var msg = "You have not filled in the fields below\n";

	//var phoneno = "/[^0-9]/" ;  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/  
	// (/[0-9]{10}$/)

	if( !(!up_phone) && !up_phone.match(/^\(?([0-9]{10})$/)) {
  			msg = msg + "-The Phone is NOT not right, must be 10 numbers \n";
  	}

	if (!up_username) {
		msg = msg + "- Enter the Username \n";
	}

	if (!up_re_password) {
		msg = msg + "- Enter the Password \n";
	}
	
	if (!(!up_password) && up_password == up_re_password) {
	 	msg = "-The Password is the same as the Re_Password \n";
	}
	
	if (msg!="You have not filled in the fields below\n") {
		alert ( msg );
		return false;
	}

	return true;
}
