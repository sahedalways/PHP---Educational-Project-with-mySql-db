<?php
$cn=require_once("connect.php");

if(isset($_REQUEST["login"])){
    
    if(isset($_REQUEST["usr_nm"]) && isset($_REQUEST["pwd"])){
        $usr_nm = $_REQUEST["usr_nm"];
        $pwd = $_REQUEST["pwd"];
    
        if($usr_nm != "" && $pwd != ""){
            $match_query = "SELECT * FROM `admin` WHERE usr_nm = '$usr_nm' AND pwd = '$pwd' ";
            $run_query = mysqli_query ($connect, $match_query);
    
            $row = mysqli_num_rows($run_query);
            if($row < 2){
                ?>
    
                <script>
                    alert('Username or Password does not match !');
                    window.open('ad_login.php' , '_self');
                </script>
    <?php
            }
            else{
                $data = mysqli_fetch_assoc($run_query);
                $id=$data["id"];
    
                echo "all is well";
            }
        }
    }
    

}

        
        ?>
