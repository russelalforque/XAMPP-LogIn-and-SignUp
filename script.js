const signUpForm = document.getElementById('signUp');
const signInForm = document.getElementById('signIn');
const toSignUpBtn = document.getElementById('toSignUpBtn');
const toSignInBtn = document.getElementById('toSignInBtn');

toSignUpBtn.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
toSignInBtn.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})