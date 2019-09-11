<html>
<head>
<title>
firebase messaging demo
</title>
</head>

<body>

<div id="token">

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCCWxoyFUTFHSeIofZTVm7njWVCCXPOKfg",
    authDomain: "shwaiukh92.firebaseapp.com",
    databaseURL: "https://shwaiukh92.firebaseio.com",
    projectId: "shwaiukh92",
    storageBucket: "",
    messagingSenderId: "554344778454",
    appId: "1:554344778454:web:cfd4f7d0ef09d527"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

//retrive firebase messaging objects
messaging.usePublicVapidKey('BE5Ipmm_X7QuhaYs7I3TfOMRgF6Sg7bVsHweoHj94Nlrc0dVsjTRSu_X87pjUPFaN5kIP9dFiM0zejRlozlHW-I');
messaging.requestPermission().then(function(){




console.log('notification permission granted');

messaging.getToken().then(function(currentToken){

console.log(currentToken);
document.getElementById('token').innerHtml = currentToken;

}).catch(function(err){



    console.log('an erorr occured when retreving token',err);
    showToken('Erorr retriving instance id',err);

setTokentsentToServer(false);
});

}).catch(function(err)
{

console.log('unable to get permission to notify',err);
});

messaging.onMessage(function(payload)
{

var obj = JSON.parse(payload.data.notification);
var ntification = new notification (obj.title,{

icon:obj.icon,
body:obj.body

});

});


</script>

</div>
</body>
</html>