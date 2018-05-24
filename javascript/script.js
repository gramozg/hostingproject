
                                        var username = document.forms['vform']['FirstName'];
                                        var email = document.forms['vform']['Email'];
                                        var lastname = document.forms['vform']['LastName'];
                                        var description = document.forms['vform']['Description'];
                                        var website = document.forms['vform']['Website'];
                                //SELECTING ALL ERROR DISPLAY ELEMENTS
                                var name_error = document.getElementById('name_error');
                                var email_error = document.getElementById('email_error');
                                var lastname_error = document.getElementById('LastName_error');
                                var description_error = document.getElementById('Description_error');        
                                var website_error = document.getElementById('Website_error');        

                                // SETTING ALL EVENT LISTENERS
                                username.addEventListener('blur', nameVerify, true);
                                email.addEventListener('blur', emailVerify, true);
                                lastname.addEventListener('blur', passwordVerify, true);
                                description.addEventListener('blur', descriptionVerify, true);
                                website.addEventListener('blur', websiteVerify, true);

                                // validation function
                                function Validate() {
                                  // validate username
                                  if (username.value == "") {
                                    username.style.border = "1px solid red";
                                    document.getElementById('name').style.color = "red";
                                    name_error.textContent = "Name is required";
                                    username.focus();
                                    return false;
                                  }
                                  // validate username
                                  if (username.value.length < 3) {
                                    username.style.border = "1px solid red";
                                    document.getElementById('name').style.color = "red";
                                    name_error.textContent = "Name must be at least 3 characters";
                                    username.focus();
                                    return false;
                                  }
                                  // validate email
                                  if (email.value == "") {
                                    email.style.border = "1px solid red";
                                    document.getElementById('email').style.color = "red";
                                    email_error.textContent = "Email is required";
                                    email.focus();
                                    return false;
                                  }
                                   
                                 if (email.value == "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/") {
                                    email.style.border = "1px solid red";
                                    document.getElementById('email').style.color = "red";
                                    email_error.textContent = "Email can not contain these kind of elements";
                                    email.focus();
                                    return false;
                                  }
                                  // validate password
                                  if (lastname.value == "") {
                                    lastname.style.border = "1px solid red";
                                    document.getElementById('lastname').style.color = "red";
                                    lastname.style.border = "1px solid red";
                                    lastname_error .textContent = "Password is required";
                                    lastname.focus();
                                    return false;
                                  }
                                     if (description.value == "") {
                                    description.style.border = "1px solid red";
                                    document.getElementById('description').style.color = "red";
                                  
                                    description_error.textContent = "Please fill out the message box ";
                                    description.focus();
                                    return false;
                                  }
                                    if (website.value == "") {
                                    password.style.border = "1px solid red";
                                    document.getElementById('website').style.color = "red";

                                    website_error.textContent = "Website is required ";
                                    website.focus();
                                    return false;
                                  }
                                  // check if the two passwords match

                                }
                                // event handler functions
                                function nameVerify() {
                                  if (username.value != "") {
                                   username.style.border = "1px solid #5e6e66";
                                   document.getElementById('name').style.color = "#5e6e66";
                                   name_error.innerHTML = "";
                                   return true;
                                  }
                                }
                                function emailVerify() {
                                  if (email.value != "") {
                                    email.style.border = "1px solid #5e6e66";
                                    document.getElementById('email').style.color = "#5e6e66";
                                    email_error.innerHTML = "";
                                    return true;
                                  }
                                }
                                function lastNameVerify() {
                                  if (lastname.value != "") {
                                    lastname.style.border = "1px solid #5e6e66";

                                    document.getElementById('lastname').style.color = "#5e6e66";
                                    lastname_error.innerHTML = "";
                                    return true;
                                  }
                                function websiteVerify() {
                                  if (website.value != "") {
                                   website.style.border = "1px solid #5e6e66";
                                   document.getElementById('website').style.color = "#5e6e66";
                                   website_error.innerHTML = "";
                                   return true;
                                  } 
                                    function descriptionVerify() {
                                  if (description.value != "") {
                                   description.style.border = "1px solid #5e6e66";
                                   document.getElementById('description').style.color = "#5e6e66";
                                   description_error.innerHTML = "";
                                   return true;
                                  }    

                                }