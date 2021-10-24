
$("#file").on("change", function(event){
    selectedFile=event.target.files[0];
    $("#uploadButton").show();

});
import { getStorage, ref } from "firebase/storage";
function uploadFile(){
    const storage = getStorage();
    var filename=selectedFile.name;
    var storageRef=firebase.storage().ref('/Resume/'+filename);
    var uploadTask=storageRef.put(selectedFile);

    uploadTask.on('state_Changed',function(snapshot){
        
    },function(error){

    },function(){
        var downloadURL=uploadTask.snapshot.downloadURL;
        console.log(downloadURL);
    });
    
    

}
import { getStorage, ref } from "firebase/storage";

// Create a root reference


// Create a reference to 'mountains.jpg'
const mountainsRef = ref(storage, 'mountains.jpg');

// Create a reference to 'images/mountains.jpg'
const mountainImagesRef = ref(storage, 'images/mountains.jpg');

// While the file names are the same, the references point to different files
mountainsRef.name === mountainImagesRef.name;           // true
mountainsRef.fullPath === mountainImagesRef.fullPath;   // false 