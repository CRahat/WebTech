function adminUpdateValidation(){
  let category = document.getElementById("category").value;
  let contact = document.getElementById("contact").value;  
  let amount = document.getElementById("amount").value;

  

  let error1=document.getElementById('error1');
  let error2=document.getElementById('error2');
  let error3=document.getElementById('error3');
 
  if (catagory == "") 
  {
      clear();
      error1.innerHTML="category is required";
      return false;
  }
  if (contact == "") 
  {
      clear();
      error2.innerHTML="contact is required";
      return false;
  }
  if (amount == "") 
  {
      clear();
      error3.innerHTML="amount is required";
      return false;
  }
  
  
  
  else
  {
    alert("Update Successfully!");
    return true;
  }
  function clear()
  {
    error1.innerHTML="";
    error2.innerHTML="";
    error3.innerHTML="";

  }


  
}