<?php

use Kreait\Firebase\Value\PhoneNumber;

include 'DBconfig.php';
    session_start();

    if(isset($_POST['user_claims_btn'])){
        $uid=$_POST['claims_user_id'];
        $roles=$_POST['role_as'];

        if($roles=='admin'){
            $auth->setCustomUserClaims($uid, ['admin' => true]);
            $msg="user roled as admin";
        }elseif($roles=='super_admin'){
            $auth->setCustomUserClaims($uid, ['super_admin' => true]);
            $msg="user roled as Superadmin";
        }elseif($roles=='norole'){
            $auth->setCustomUserClaims($uid, null);
            $msg="user roled is removed";

        }
        if($msg){
            $_SESSION['status']=$msg;
            header("Location: userEdit.php?id=$uid");
            exit();
        }else{
            $_SESSION['status']="Password not updated";
            header("Location: userEdit.php?id=$uid");
            exit();
        }
    }

    if(isset($_POST['change_password'])){
        $new_password=$_POST['new_password'];
        $retype_password=$_POST['re_password'];
        $uid=$_POST['change_pwd_user_id'];

        if($new_password==$retype_password){
        $updatedUser = $auth->changeUserPassword($uid, $new_password);
        if($updatedUser){
            $_SESSION['status']="password updated";
            header('Location: userList.php');
            exit();
        }else{
            $_SESSION['status']="Password not updated";
            header('Location: userList.php');
            exit();
        }

        }else{
            $_SESSION['status']="New password and retype password does not match";
            header("Location: userEdit.php?id=$uid");
            exit();
        }

        
    }

    if(isset($_POST['enable_disable'])){
        $disable_enable=$_POST['enable_disable'];
        $uid = $_POST['ena_dis_user_id'];
        if($disable_enable=='disable'){
            $updatedUser = $auth->disableUser($uid);
            $msg="Account disabled";
        }else{
            $updatedUser = $auth->enableUser($uid);
            $msg="Account enabled";

        }
        if($updatedUser){
            $_SESSION['status']=$msg;
            header('Location: userList.php');
            exit();
        }else{
            $_SESSION['status']=$msg;
            header('Location: userList.php');
            exit();
        }

    }

    if(isset($_POST['reg_user_del_btn'])){
        $uid=$_POST['reg_user_del_btn'];

        try {
            $auth->deleteUser($uid);
            $_SESSION['status']="User Deleted sucessfully!!";
            header('Location: userList.php');
            exit();
                   
        }catch(Exception $e) {
            $_SESSION['status']="No ID found!!";
            header('Location: userList.php');
            exit();
        }        
            
    }

    if(isset($_POST['update_user_btn'])){
            $displayname=$_POST['displayname'];
            $phone=$_POST['phone'];
            

            $uid = $_POST['user_id'];
            $properties = [
                'displayName' => $displayname,
                'phoneNumber' => $phone,
            ];

            $updatedUser = $auth->updateUser($uid, $properties);
            if($updatedUser){
                $_SESSION['status']="User updated sucessfully!!";
                header('Location: userList.php');
                exit();
            }else{
                $_SESSION['status']="User not updated sucessfully!!";
                header('Location: userList.php');
                exit();
            }
    }

    if(isset($_POST['register_btn'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];        
        $password=$_POST['password'];

        $userProperties = [
            'email' => $email,
            'emailVerified' => false,
            'phoneNumber' => '+94'.$phone,
            'password' => $password,
            'displayName' => $name,
            
        ];
        
        $createdUser = $auth->createUser($userProperties);

        if($createdUser){
            $_SESSION['status']="User created sucessfully!!";
            header('Location: Register.php');
            exit();
        }
        else{
            $_SESSION['status']="User not created sucessfully!!";
            header('Location: Register.php');
            exit();
        }
    }

    if(isset($_POST['delete_btn'])){
        $del_btn=$_POST['delete_btn'];

        $ref_table='feedback/'.$del_btn;

       $del_querry_result= $database->getReference($ref_table)->remove();
       if($del_querry_result){
        $_SESSION['status']="Feedback deleted successfully";
        header('Location: index1.php');
        }else{
        $_SESSION['status']="Feedback not deleted !!";
        header('Location: index1.php');
        }
    }
    
    if(isset($_POST['update'])){
        $key=$_POST['key'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];

        $updateFeedback= [
            'name'=> $name,
            'email'=>$email,
            'subject'=> $subject,
            'phone'=> $phone,
            'message'=>$message
          ];

          $ref_table='feedback/'.$key;

          $update_querry=$database->getReference($ref_table)->update($updateFeedback);


        
        //$postKey = $postRef->getKey(); // The key looks like this: -KVquJHezVLf-lSye6Qg

        
        //$postRef = $database->getReference($ref_table)->push($postData);

        if($update_querry){
            $_SESSION['status']="Feedback updated successfully";
            header('Location: index1.php');
        }
        else{
            $_SESSION['status']="Feedback is not updated successfully";
            header('Location: index1.php');
        }

    }

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $phone=$_POST['phone'];
        $message=$_POST['message'];

        $postData = [
            'name'=> $name,
            'email'=>$email,
            'subject'=> $subject,
            'phone'=> $phone,
            'message'=>$message
          ];

        
        //$postKey = $postRef->getKey(); // The key looks like this: -KVquJHezVLf-lSye6Qg

        $ref_table='feedback';
        $postRef = $database->getReference($ref_table)->push($postData);

        if($postRef){
            $_SESSION['status']="Your Feedback is added successfully";
            header('Location: contactUs.php');
        }
        else{
            $_SESSION['status']="Your Feedback is not added successfully";
            header('Location: contactUs.php');
        }


    }
    

?>