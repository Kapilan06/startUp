//import {initializeApp} from 'firebase/app';
//import {getStorage} from 'firebase/storage';

 //Import the functions you need from the SDKs you need
//import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-app.js";
//import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.1.3/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries
//import {getStorage, ref} from "/firebase/storage";
// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
import {initializeApp} from 'firebase/app';
/*
const firebaseConfig = {
  apiKey: "AIzaSyBkdHTBiitRxW3kBlZEUyLCXXwYAiu7U98",
  authDomain: "contactus-5243e.firebaseapp.com",
  databaseURL: "https://contactus-5243e-default-rtdb.firebaseio.com",
  projectId: "contactus-5243e",
  storageBucket: "contactus-5243e.appspot.com",
  messagingSenderId: "955606673959",
  appId: "1:955606673959:web:3af37b8cfc5b0d9a40bc02",
  measurementId: "G-7F4WGVJFGX"
};
*/

// Initialize Firebase
//const app = initializeApp(firebaseConfig);

//const app = initializeApp(firebaseConfig);
//import {getStorage, ref} from 'firebase/storage';
//const storage=getStorage();


console.log("im game");
console.log("im game");
console.log("im game");

//import { getStorage, ref } from "firebase/storage";


// Get a reference to the storage service, which is used to create references in your storage bucket
//const storage = getStorage();

// Create a storage reference from our storage service
//const storageRef = ref(storage);
//*************************************************************************************************************** */

var selectedFile;

$("#file").on("change",function(event){
    selectedFile=event.target.files[0];
    //$("#uploadButton").show();
});

//console.log(document.querySelector('#uploadButton'));


$("#uploadButton").click( function() {
    
   console.log("game");
    
}  
);
/*


$("#uploadButton").click(function uploadFile(){
    var filename=selectedFile.name;
    
    const storageRef=ref(storage,'/Resume/'+filename);
    

    uploadBytes(storageRef,file).then((snapshot)=>{
        console.log('uploaded a blob or file');
    });
    /*

   
    var uploadTask=storageRef.put(selectedFile);

    uploadTask.on('state_changed', function(snapshot){

    }, function(error){

    },function(){
        var downloadURL=uploadTask.snapshot.downloadURL;
        console.log(downloadURL)
    });*/
//},false);

