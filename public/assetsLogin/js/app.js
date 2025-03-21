
document.getElementById('loginForm').addEventListener('submit', function (e) {
   e.preventDefault(); 

   const vedio=document.getElementById('myVedio');
vedio.addEventListener('play',function(){
   vedio.remove('controls');
});
   const email = this.email.value; 
   const password = this.password.value; 
   console.log('بيانات تسجيل الدخول:', { email, password });
   const alertDiv = document.createElement('div');
   alertDiv.className = 'alert alert-success mt-3'; 
   alertDiv.textContent = 'جاري التحقق من البيانات...'; 
   this.parentNode.insertBefore(alertDiv, this.nextSibling);
   this.reset(); 
});