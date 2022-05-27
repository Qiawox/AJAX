<?php
// $a = $_GET['a'];
// $b = $_GET['b'];
// $d = "Название - ";
// $m = "Описание - ";
// $o = "<br>";
// $c = $d . $a . $o . $m . $b;

// echo $c;


// $data = [
//   "tittle" => $_POST['userInput'],
//   "desc" => $_POST['nice']
// ];
// $connection = new PDO('mysql:hos=localhost;dbname=lib_b', 'root', '');
// $sql = 'INSERT INTO books_file (tittle, description) VALUES (:tittle, :desc)';
// $statement = $connection->prepare($sql);
// $result = $statement->execute($data);
// var_dump($result);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$connect = mysqli_connect('localhost','root','','lib_b');
$tittle = $_POST['first'];
$desc = $_POST['second'];
$sql = "INSERT INTO `books_file` (`tittle`, `description`) VALUES ('$tittle', '$desc');";
if ($tittle && $desc) {
  $run_sql = mysqli_query($connect,$sql);
  if ($run_sql) {
    echo 'Вы успешно добавили книгу!';
  }
}
else
{
  echo 'Заполните все поля.';
}
}
?>
