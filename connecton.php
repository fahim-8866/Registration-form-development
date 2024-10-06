<?PHP
$server_name= 'localhost';
$user_name= 'root';
$password= '';
$db_name= 'registration_frm';

// mysqli inbuilt function
$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if(!$conn){
    die("connection failed");
}
// else{
//     echo "connection successful";
// }

?>