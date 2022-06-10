<?

require './connect.php';

$name = $_POST['name'];
$emal = $_POST['email'];
$text = $_POST['text'];

$sql = $connect->query("INSERT INTO `feedback` (`name`, `email`, `text`) VALUES ('$name', '$emal', '$text')");
header("Location: ../index.php");