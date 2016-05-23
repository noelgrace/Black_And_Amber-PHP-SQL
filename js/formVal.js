function validateEmail()
{
 
   var emailID = document.queryForm.inputEmail.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 ) || dotpos+2 >= emailID.length) 
   {
       alert("Please enter email in the format something@mail.com")
       document.queryForm.inputEmail.focus() ;
       return false;
   }
   return( true );
}

function formValidate()
{
   if( document.queryForm.inputFirstName.value == "" )
   {
     alert( "Please provide your first name!" );
     document.queryForm.inputFirstName.focus() ;
     return false;
   }
   if( document.queryForm.inputLastName.value == "" )
   {
     alert( "Please provide your last name!" );
     document.queryForm.inputLastName.focus() ;
     return false;
   }
   if( document.queryForm.inputEmail.value == "" )
   {
     alert( "Please provide your email address!" );
     document.queryForm.inputEmail.focus() ;
     return false;
   }else{
     // Put extra check for data format
     var ret = validateEmail();
     if( ret == false )
     {
          return false;
     }
   }
   if( document.queryForm.inputQuery.value == "" )
   {
     alert( "Please enter your query!" );
     document.queryForm.inputQuery.focus() ;
     return false;
   }
   return true;
}


