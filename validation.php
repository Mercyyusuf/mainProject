<?php
  // define variables and set to empty values
  $arrival = $departure = $first_name = $last_name = $email= $phone = $adults = $children = $room_pref = "";
  $arrivalErr = $departureErr = $first_nameErr = $last_nameErr = $emailErr= $phoneErr = $adultsErr = $childrenErr = $room_prefErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["arrival"])) {
          $arrivalErr = "required";
        } 
        else {
          $arrival = test_input($_POST["arrival"]);
        //   check if arrival only contains letters and whitespace
         if (!preg_match("/^[a-zA-Z-' ]*$/",$arrival)) {
             $arrivalErr = "Only letters and white space allowed";
           }
        }
        if (empty($_POST["departure"])) {
            $depatureErr = "required";
        } 
        else {
            $departure = test_input($_POST["departure"]);
             // check if depature only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$departure)) {
            $departureErr = "Only letters and white space allowed";
         }
        }
        if (empty($_POST["first_name"])) {
            $first_nameErr = "required";
        } 
        else {
            $first_name = test_input($_POST ["first_name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
            $first_nameErr = "Only letters and white space allowed";
         }
        }
        if (empty($_POST["email"])) {
            $emailErr = "required";
        } 
        else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
         }
        }
        if (empty($_POST["phone"])) {
            $phoneErr = "required";
        } 
        else {
            $phone = test_input($_POST["phone"]);
            // the format /^[0-9]{11}+$/ will check for phone number with 11 digits and only numbers
            if (!preg_match("/^[0-9]{11}+$/",$phone)) {
            $phoneErr = "invalid number";
         }
        } 
        if (empty($_POST["adults"])) {
            $adultsErr = "required";
        } 
        else {
            $adults = test_input($_POST["adults"]);
            // check if adults only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$adults)) {
            $adultsErr = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["children"])) {
            $childrenErr = "required";
        } 
        else {
            $children = test_input($_POST["children"]);
            // check if children only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$children)) {
            $childrenErr = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["room_pref"])) {
            $room_prefErr = "required";
        } 
        else {
            $room_pref = test_input($_POST["room_pref"]);
            // check if room_pref only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$room_pref)) {
            $room_prefErr = "Only letters and white space allowed";
         }
        }
    }
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
    

     $link = mysqli_connect("localhost","nobleemmy","@Emmy2929","kingmaker");
     if ($link === false) {
        die("ERROR: could not connect. please try again" . mysqli_connect_error());
     } 

     $sql = "INSERT INTO king (arrival, departure, first_name, last_name, email, phone, adults, children, room_pref) VALUES
     (?,?,?,?,?,?,?,?,?)";

     if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssssiiis", $arrival, $departure, $first_name, $last_name, $email, $phone, $adults, $children, $room_pref);
       
        
        $arrival = $_REQUEST["arrival"];
        $departure = $_REQUEST["departure"];
        $first_name = $_REQUEST["first_name"];
        $last_name = $_REQUEST["last_name"];
        $email = $_REQUEST["email"];
        $phone = $_REQUEST["phone"];
        $adults = $_REQUEST["adults"];
        $children = $_REQUEST["children"];
        $room_pref = $_REQUEST["room_pref"];
        // $arrival = $_POST["arrival"];


        if (mysqli_stmt_execute($stmt)) {
            echo "Record insterted successfully.";
        }
        else {
            echo "Could not execute query: $sql. " . mysqli_error($link);
        }
    }
    else {
        echo "Could not execute query: $sql. " . mysqli_error($link);
    }
    

    mysqli_stmt_close($stmt);
    mysqli_close($link);
?>
    <?php
        echo "<H1>Contact details</H1>";
        echo "<br>";
        echo $arrival;
        echo "<br>";
        echo $arrivalErr;
        echo "<br>";
        echo $departure;
        echo "<br>";
        echo $departureErr;
        echo "<br>";
        echo $first_name;
        echo "<br>";
        echo $first_nameErr;
        echo "<br>";
        echo $last_name;
        echo "<br>";
        echo $last_nameErr;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $emailErr;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $phoneErr;
        echo "<br>";
        echo $adults;
        echo "<br>";
        echo $adultsErr;
        echo "<br>";
        echo $children;
        echo "<br>";
        echo $childrenErr;
        echo "<br>";
        echo $room_pref;
        echo "<br>";
        echo $room_prefErr;  
    ?>