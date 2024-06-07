
//setting up firebase  with out website
   const firebaseApp = firebase.initializeApp({  
    apiKey: "AIzaSyCW45HgzPlPKPUSEYxW0nQnfz3SNDk3v08",
   authDomain: "authentication-form-b0a1f.firebaseapp.com",
   projectId: "authentication-form-b0a1f",
   storageBucket: "authentication-form-b0a1f.appspot.com",
   messagingSenderId: "677249273982",
   appId: "1:677249273982:web:d036e3b6529c58ed64882f"});
   const db = firebaseApp.firestore();
   const auth = firebaseApp.auth();


   //signup function 
//    document.getElementById('signup-btn').addEventListener('click',function(){
    const signup=()=>{
    const email=document.getElementById("email").value;
    const password=document.getElementById("pass").value;
    console.log(email,password)
    // firebse code 

    firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
      // Signed up 
    //   var user = userCredential.user;
    //   document.write("you are signup");
    window.location.href = "signin.html";
    //   console.log(user)
      // ...
    })
    .catch((error) => {
      var errorCode = error.code;
      var errorMessage = error.message;
      console.log(errorCode);
      document.write(errorMessage);
      // ..
    });
   }

//    document.getElementById('signin-btn').addEventListener('click',function(){
    const signin=()=>{
    console.log("clicked")
    const email=document.getElementById("email").value;
    const password=document.getElementById("pass").value;
    
    // firebase copied code

    firebase.auth().signInWithEmailAndPassword(email, password)
  .then((result) => {
    // Signed in
    // document.write("you are sign in");
    //   console.log(result)
    window.location.href = "./index.html";

    // ...
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    alert(errorMessage);
  });
}