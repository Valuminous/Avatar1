   const nom = document.querySelector("#nom");
   const prenom = document.querySelector("#prenom");
   const email = document.querySelector("#exampleFormControlInput1");
   const telephone = document.querySelector("#telephone");
   const monboutton = document.querySelector("#monboutton");
   const name = document.querySelector("#lastname");
   const subname = document.querySelector("#firstname");
   const mail = document.querySelector("#exampleFormControlInput2");
   const phone = document.querySelector("#phone");
   const mybutton = document.querySelector("#mybutton");


if (mybutton != null) {
   mybutton.addEventListener("click", (event) => {
       console.log("page1")
       event.preventDefault();
       if (name.value == "" || subname.value == "" || mail.value == "" ||
           phone.value == "") {
           swal("Please fill in all the required fields!");
       } else {
           swal("Thanks for your questions or comments!");
       }
   })
} else {

     monboutton.addEventListener("click", (event) => {
         console.log("page2")
         event.preventDefault();
         if (nom.value == "" || prenom.value == "" || email.value == "" ||
             telephone.value == "") {
             swal("Merci de remplir tous les champs !");
         } else {
             swal("Merci pour vos questions ou commentaires !");
         }
     })
}

  
  