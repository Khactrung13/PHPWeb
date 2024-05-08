<p style="font-size: 20px;
    color: green;
    font-weight: bold;
    margin: 5px;">Cám ơn quý khách đã đặt hàng</p>

<?php 
include_once "../Mail/mail.php"; 

$email = $_SESSION['email'];
sendMail($email,'Xac nhan dat hang','Bạn đã đặt hàng thành công !!! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất');
?>