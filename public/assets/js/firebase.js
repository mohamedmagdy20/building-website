// Import the functions you need from the SDKs you need
// import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
// import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDV4DlAxqZd8bno4IN6loAzqretqKRCo20",
  authDomain: "alfreeg-f6103.firebaseapp.com",
  projectId: "alfreeg-f6103",
  storageBucket: "alfreeg-f6103.appspot.com",
  messagingSenderId: "605146573321",
  appId: "1:605146573321:web:b498eefd5ab5848bcce6d8",
  measurementId: "G-XTRW862GFS"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
// const analytics = getAnalytics(app);

// const messaging = firebase.messaging();

// messaging.requestPermission()
//   .then(function () {
//     console.log("Notification permission granted.");
//     return messaging.getToken();
// })
// .then(function (token) {
//   console.log("FCM device token:", token);
// })
// .catch(function (error) {
//   console.error("Error getting FCM device token:", error);
// });

$(document).ready(function(){

    $("#LoginForm").submit(function(e){

        const messaging = firebase.messaging();

        messaging.requestPermission()
          .then(function () {
            console.log("Notification permission granted.");
            return messaging.getToken();
        })
        .then(function (token) {
          console.log("FCM device token:", token);
          $("#token").val(token)
        })
        .catch(function (error) {
          console.error("Error getting FCM device token:", error);
        });


        $(".submit-button").html('<i class="fa fa-spinner fa-spin"></i> Process...').prop('disabled', true);
        e.preventDefault();
        $.ajax({
            url:'/login',
            header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type:'POST',
            data: new FormData(this),
            processData:false,
            contentType:false,
            success:function(data){
                // console.log(data);
                if(data.status === 200){
                    $(".submit-button").html('Save').prop('disabled', false);

                    // handl Fcm 



                    toastr.success(`${data.message}`);

                    window.location.replace(`url('/')`);
                }else{
                    // console.log(data);
                    $(".submit-button").html('Save').prop('disabled', false);
                    toastr.error(`${data.message}`);
                }
                    
            },
            error:function(data)
            {
                console.log(data);
                $(".submit-button").html('Save').prop('disabled', false);
                
                if(data.status == 400){
                    // printErrorMsg(data.responseJSON.errors)
                    msg = data.responseJSON.data
                    $.each(msg,function(key,value){
                         toastr.error(`${key}: ${value}`);
                    })
                }
    
                
            }
    
        });
    });
            
    });
    


