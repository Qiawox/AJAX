<link rel="stylesheet" href="styles.css">
<?php
error_reporting(0);
$connect = mysqli_connect('localhost','root','','lib_b');
$id_change = $_POST['id_change'];
$str_change = "SELECT * FROM `books_file` WHERE id = $id_change";
$run_change = mysqli_query($connect,$str_change);
$end_change = mysqli_fetch_array($run_change);
echo "<div id='div_red'>
      <h3>Редактирование книги</h3>
      <input type='text' value='$end_change[id]' class='nonik'><br>
      <input type='text' value='$end_change[tittle]' class='tittle_up'><br>
      <textarea cols='30' rows='10' class='textarea_up'>$end_change[description]</textarea>
      <button type='button' id='save_changeS' class='save_changeS'>Редактировать</button>
      </div>";
?>
<script>
  $("button.save_changeS").on('click', function(){
    document.getElementById('div_red').style.display = "none";
    var idi2 = $('input.nonik').val();
    var tittle = $('input.tittle_up').val();
    var textarea = $('textarea.textarea_up').val();
    $.ajax({
        method: 'POST',
        url: 'all.php',
        data: {
          id_all: idi2,
          tittle_all: tittle,
          textarea_all: textarea
        }
      });
      document.getElementById('chc').innerHTML= "Вы успешно изменили Вашу книгу"
  })
</script>
