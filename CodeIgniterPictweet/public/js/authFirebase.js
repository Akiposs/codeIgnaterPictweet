// The core Firebase JS SDK is always required and must be listed first
<script src="https://www.gstatic.com/firebasejs/7.14.4/firebase-app.js"></script>

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

<script>
  var firebaseConfig = {
    apiKey: "AIzaSyAq3XAHxGIK4XhnsSuOnZVO27fYcwq5mSk",
    authDomain: "codeignater-pictweet.firebaseapp.com",
    databaseURL: "https://codeignater-pictweet.firebaseio.com",
    projectId: "codeignater-pictweet",
    storageBucket: "codeignater-pictweet.appspot.com",
    messagingSenderId: "924424509327",
    appId: "1:924424509327:web:93d927682f9070983f9dfa"
  };
  firebase.initializeApp(firebaseConfig);


{/* 新規登録処理 */}
register.addEventListener('click', function(e) {
  var mailAddress = document.getElementById('mailAddress').value;
  var password = document.getElementById('password').value;
  
  firebase.auth().createUserWithEmailAndPassword(mailAddress, password)
  .catch(function(error) {
    alert('登録できません（' + error.message + '）');
  });
});
</script>