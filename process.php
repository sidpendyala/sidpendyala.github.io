<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $vemail = $_POST['email'];
        $pnumber = $_POST['phone'];
        $message = $_POST['message'];

        $mail = "siddharthpendyala@gmail.com";
        $header = "From: ".$vemail;
        $txt = "You have received an email from: ".$name.".\n\n".$message."You can contact this visitor at: ".$pnumber;

        mail($mail, $header, $txt, $header);
        header("Location: index.html?mailsend");
    }
?>