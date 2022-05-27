<link rel="stylesheet" href="styles.css">
<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id_change = $_POST['id'];
$str_change = "SELECT * FROM `upload` WHERE id = $id_change";
$run_change = mysqli_query($connect,$str_change);
$end_change = mysqli_fetch_array($run_change);
echo "<div id='div_red_2'>
      <h3>Редактирование книги</h3>
      <input type='text' value='$end_change[id]' class='nonik1'><br>
      <input type='text' value='$end_change[name]' class='tittle_up1'><br>
      <button type='button' id='save_changeSF' class='save_changeSF nls'>Редактировать</button>
      </div>";
?>
<script>
  $("button.save_changeSF").on('click', function(){
    document.getElementById('div_red_2').style.display = "none";
    var idi5 = $('input.nonik1').val();
    var tittle5 = $('input.tittle_up1').val();
    $.ajax({
        method: 'POST',
        url: 'alk.php',
        data: {
          id_all: idi5,
          tittle_all: tittle5
        }
      });
      document.getElementById('resultati1').innerHTML= "Вы успешно изменили Вашу книгу"
  })
</script>
