<?php
error_reporting(0);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script src="main.js" defer></script>
  <script src="ajax.js" defer></script>
  <script src="draggable.js" defer></script>
  <title>Document</title>
</head>
<body>
<div class="results" id="divi"></div>
  <div class="tabs">
    <input type="radio" name="1s" id="tab-btn-1" value="" checked>
    <label for="tab-btn-1">Добавить книгу</label>
    <input type="radio" name="1s" id="tab-btn-2" value="">
    <label for="tab-btn-2">Мои книги</label>
    <input type="radio" name="1s" id="tab-btn-3" value="">
    <label for="tab-btn-3">Мои любимые</label>
    <div id="content-1">
      <form id="forma" name="ourForm" enctype="multipart/form-data" action="process.php" method="POST">
        <input type="radio" name="1s" id="solo">Написать самому<br>
        <input type="radio" name="1s" id="ups">Загрузить из файла<br>
        <div id="upsf">
          <input type="file" name="file1" id="js-file">
          <input type="submit" value="Загрузить" name="submit">
          <!-- <button type="button" onclick="fetchAsyncApis()">Загрузить</button> -->
        </div>
      </form>
      
      <form name="ourForm2" method="POST" id="theForm" action="ups.php">
      <div id="response"></div>
        <div id="solof">
          <input type="text" placeholder="Название.." name="first" class="first"><br>
          <textarea name="second" cols="30" rows="10" placeholder="Описание.." class="second"></textarea>
          <button type="button" id="button" class="add">Отправить</button>
        </div>
      </form>
        <?php // 
  // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //   if (isset($_FILES['files'])) {
  //     $errors = [];
  //     $path = 'uploads/';
  //     $extensions = ['txt', 'pdf', 'docx'];

  //     $all_files = count($_FILES['files']['tmp_name']);

  //     for ($i=0; $i < $all_files; $i++) { 
  //       $file_name = $_FILES['files']['name'][$i];
  //       $file_tmp = $_FILES['files']['tmp_name'][$i];
  //       $file_type = $_FILES['files']['type'][$i];
  //       $file_size = $_FILES['files']['size'][$i];
  //       $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

  //       $file = $path . $file_name;

  //       if (!in_array($file_ext, $extensions)) {
  //         echo "<p>Неподходящее расширение файла!</p>" . $file_name . ' ' . $file_type;
  //       }
  //       elseif ($file_size > 104857600) {
  //         echo "<p>Файл более 100 МБ не может быть загружен!</p>" . $file_name . ' ' . $file_type;
  //       }
  //       else
  //       {
  //         move_uploaded_file($file_tmp, $file);
  //         echo "Книга успешно добавлена!";
  //       }
  //     }
     

  //   }
    
  // }

// ?> 
      </form>
      <div id="results"></div>
    </div>
    <div id="content-2">
    <div class="outi">
<?php
  $connect = mysqli_connect('localhost','root','','lib_b');
  $out_sql = "SELECT * FROM `books_file`;";
  $run_out_sql = mysqli_query($connect,$out_sql);
  while($out = mysqli_fetch_array($run_out_sql)){?>
    
    <?php

      switch ($out['status']) {
        case '0':
          $out['status'] = "В процессе...";
          break;
          case '1':
            $out['status'] = "Прочитана";
            break;
        default:
          # code...
          break;
      }
      $upd_status = $_GET['upd_status'];
    ?>


    <div class="par par1" id="id2"><p><?php echo $out['id']  ?></p></div>
    <div class="par par2" id="tittle2"><p><?php echo $out['tittle']  ?></p></div>
    

    <div class="par" id="st2us"><p><?php echo $out['status'] ?></p></div><br>
    <!-- <div class="par"><p></p></div> -->
    <?
    
    ?>
  <?}?>
    <button type="button" class="del_hidd">Удалить книгу</button>
    <button type="button" class="read_hidd">Читать книгу</button>
    <div id="read_div">
      <h3>Чтение книги</h3>
      <input type="text" placeholder="Введите id" id="read_st" class="read_st"><br>
      <button type="button" class="close">Читать</button>
      <button type="button" class="cls4">Закрыть</button>
    </div>
    <div id="read_is">
      <div class="back">

      </div>
      <button type="button" class="exit">Закрыть</button>
    </div>
    <button type="button" class="change">Редактировать книгу</button>
    <div id="change_div">
      <h3>Редактирование книги</h3>
      <input type="text" placeholder="Введите id" id="change_st" class="change_st"><br>
      <button type="button" class="change_btn">Найти</button>
      <button type="button" class="cls3">Закрыть</button>
    </div>
    <div id="chc">
      
    </div>
    <button type="button" class="hidd">Изменить статус книги на "прочитано"</button><br>
    <div id="upd_div">
      <h3>Изменение статуса</h3>
      <input type="text" placeholder="Введите id" id="upd_st" class="upd_st"><br>
      <button type="button" class="izm">Изменить</button>
      <button type="button" class="cls2">Закрыть</button>
      <div id="orv"></div>
    </div>
    <div id="del_div">
      <h3>Удаление книги</h3>
      <input type="text" placeholder="Введите id" id="del_st" class="del_st"><br>
      <button type="button" class="udl">Удалить</button>
      <button type="button" class="cls1">Закрыть</button>
      <div id="orv1"></div>
    </div>
  </div>
  <h1>Блок для чтения</h1>
  <div class="read" id="reads">
  </div>
  <div class="outi outi2">
      <?php
        $connect = mysqli_connect('localhost','root','','lib_b');
        $out_sql_1 = "SELECT * FROM `upload`;";
        $run_out_sql_1 = mysqli_query($connect,$out_sql_1);
        while ($rrr = mysqli_fetch_array($run_out_sql_1)) {
          switch ($rrr['status']) {
            case '0':
              $rrr['status'] = "В процессе...";
              break;
              case '1':
                $rrr['status'] = "Прочитана";
                break;
            default:
              # code...
              break;
          }
          ?>
            <div class="par par1" id="id2"><p><?php echo $rrr['id']  ?></p></div>
            <div class="par par2" id="tittle2"><p><?php echo $rrr['name']  ?></p></div>
            <div class="par par3" id="statik"><p><?php echo $rrr['status'] ?></p></div><br> 
          <?
        }
      ?>
      <button type="button" class="del_subF">Удалить книгу</button>
      <div id="delete">
        <h3>Удаление книги</h3>
        <input type="text" placeholder="Введите id" id="del_st_2" class="del_st_2"><br>
        <button type="button" class="yd nls">Удалить</button>
        <button type="button" class="cl1 nls">Закрыть</button>
        <div id="resultati"></div>
      </div>
      <button type="button" class="read_subF">Читать книгу</button>
      <div id="chitat"><h3>Чтение книги</h3>
        <input type="text" placeholder="Введите id" id="read_st_2" class="read_st_2"><br>
        <button type="button" class="rd nls">Читать</button>
        <button type="button" class="cl2 nls">Закрыть</button>
        <div id="resultati"></div>
      </div>    
      <button type="button" class="change_subF">Редактировать книгу</button>
      <div id="izmena"><h3>Редактирование книги</h3>
        <input type="text" placeholder="Введите id" id="read_st_3" class="read_st_3"><br>
        <button type="button" class="mnz nls">Найти</button>
        <button type="button" class="cl3 nls">Закрыть</button>
        <div id="resultati1"></div>
      </div> 
      <button type="button" class="st_subF">Изменить статус на "прочитано"</button>
      <div id="statka"><h3>Изменение статуса</h3>
        <input type="text" placeholder="Введите id" id="read_st_4" class="read_st_4"><br>
        <button type="button" class="stil nls">Изменить</button>
        <button type="button" class="cl4 nls">Закрыть</button>
        <div id="resultati2"></div>
      </div> 
    </div>
    <h1>Блок для чтения</h1>
    <div class="read1" id="reads1">
    </div>
    </div>
    
    <div id="content-3">
    <div class="autz" ondragover="onDragOver(event);" ondrop="onDrop(event);">
      <h1>Ваши книги</h1><br>
      <?php
      $nice = "SELECT * FROM `books_file`;";
      $run_nice = mysqli_query($connect,$nice);
      while ($drop = mysqli_fetch_array($run_nice)) {
        echo "  
                  <p draggable='true' ondragstart='onDragStart(event)' id='text' ondragend = 'dragEnd(event)'>$drop[tittle]</p>
                ";
      }
      ?>
      <?php
      $bad = "SELECT * FROM `upload`;";
      $run_bad = mysqli_query($connect,$bad);
      while ($drag = mysqli_fetch_array($run_bad)) {
        echo "
                  <p draggable='true' ondragstart='onDragStart(event)' id='text' ondragend = 'dragEnd(event)'>$drag[name]</p>
                ";
      }
      ?>
      </div>
      <div class="line">

      </div>
      <div class="aphz" ondragover="onDragOver(event);" ondrop="onDrop(event);">
        <h1>Ваши любимые книги</h1>
        <!-- <p ondragstart="onDragStart(event)" id="draggable-1" draggable="true">Работает</p> -->
      </div>
    </div>
  </div>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script>
    $("button.st_subF").on('click', function(){
      document.getElementById('statka').style.display = "block";
    })
    $("button.cl4").on('click', function(){
      document.getElementById('statka').style.display = "none";
    })
    $("button.stil").on('click', function(){
      var idq = $("input.read_st_4").val();
      $.ajax({
        method: 'POST',
        url: 'stil.php',
        data: {
          id: idq
        }
      })
      $("input.read_st_4").val('');
      if (idq == '') {
        document.getElementById('resultati2').innerHTML = "Введите ID...";
      }
      if (idq) {
        document.getElementById('resultati2').innerHTML = "Вы успешно изменили статус книги";
      }
    })
  </script>
  <script>
    $("button.change_subF").on('click', function(){
      document.getElementById('izmena').style.display = "block";
    })
    $("button.cl3").on('click', function(){
      document.getElementById('izmena').style.display = "none";
    })
    $("button.mnz").on('click', function(){
      var idt = $("input.read_st_3").val();
      $.ajax({
        method: 'POST',
        url: 'chng.php',
        data : {
          id: idt
        },
        success: function(viv){
          if (idt) {
            $('#resultati1').html(viv);
          }
          
        }
      })
      $("input.read_st_3").val('');
      if (idt == '') {
        document.getElementById('resultati1').innerHTML = "Введите ID...";
      }
    })
  </script>
  <script>
    $("button.read_subF").on('click', function(){
      document.getElementById('chitat').style.display = "block";
    })
    $("button.cl2").on('click', function(){
      document.getElementById('chitat').style.display = "none";
    })
    $("button.rd").on('click', function(){
      var idr = $("input.read_st_2").val();
      $.ajax({
        method: 'POST',
        url: 'read_is.php',
        data : {
          id: idr
        },
        success: function(echo){
          if (idr) {
            $('#reads1').html(echo);
          }
        }
      })
      $("input.read_st_2").val('');
      if (idr == '') {
        document.getElementById('resultati').innerHTML = "Введите ID...";
      }
    })
  </script>
  <script>
    $("button.del_subF").on('click', function(){
  document.getElementById('delete').style.display = "block";
})
$("button.cl1").on('click', function(){
  document.getElementById('delete').style.display = "none";
})

$("button.yd").on('click', function(){
  var ids = $("input.del_st_2").val();
  $.ajax({
    method: 'POST',
    url: 'delete.php',
    data: {
      id: ids
    }
  });
  $("input.del_st_2").val('');
  if (ids == '') {
    document.getElementById('resultati').innerHTML = "Ввведите ID...";
  }
  if (ids) {
    document.getElementById('resultati').innerHTML = "Вы успешноь удалили книгу";
  }
})
  </script>
  <script>
    $("button.change").on('click', function(){
      document.getElementById('change_div').style.display = 'block';
    })
    $("button.change_btn").on('click', function(){
      var idChange = $("input.change_st").val();
      console.log(idChange);
      $.ajax({
        method: 'POST',
        url: 'change.php',
        data: {
          id_change: idChange
        },
        success: function(data) {
          $('#chc').html(data);
        }
      });
      $("input.change_st").val('');
      document.getElementById('change_div').style.display = 'none';
    })
    $("button.cls3").on('click', function(){
      document.getElementById('change_div').style.display = 'none';
    })
  </script>
  <script>
    $("button.read_hidd").on('click', function(){
      document.getElementById('read_div').style.display = 'block';
    });
    $("button.close").on('click', function(){
      var idRead = $('input.read_st').val();
      console.log(idRead);
      $.ajax({
        method: 'POST',
        url: 'read.php',
        data: {
          id_read: idRead
        },
        success: function (data) {
      $('#reads').html(data);
     }
      });
      $('input.read_st').val('');
      document.getElementById('read_div').style.display = 'none';
    })
    $("button.cls4").on('click', function(){
      document.getElementById('read_div').style.display = 'none';
    })
  </script>
  <script>
    $("button.del_hidd").on('click', function(){
      document.getElementById('del_div').style.display = 'block';
    })
    $("button.udl").on('click', function(){
      var idDel = $('input.del_st').val();
      console.log(idDel);
      $.ajax({
        method: 'POST',
        url: 'del.php',
        data: {
          id_status: idDel
        }
      });
      $('input.del_st').val('');
      if (idDel == '') {
        document.getElementById('orv1').innerHTML = "Введите ID книги...";

      }
      if (idDel) {
        document.getElementById('orv1').innerHTML = "Вы успешно удалили книгу!";
      }
    })
    $("button.cls1").on('click', function(){
      document.getElementById('del_div').style.display = 'none';
    })
  </script>
  <script>
    $("button.hidd").on('click', function(){
      document.getElementById('upd_div').style.display = 'block';
    });
    $("button.izm").on('click', function(){
      var idVal = $('input.upd_st').val();
      console.log(idVal);
      $.ajax({
        method: 'POST',
        url: 'out.php',
        data: {
          id_status: idVal
        }
      });
      $('input.upd_st').val('');
      if (idVal == '') {
        document.getElementById('orv').innerHTML = "Введите ID книги...";

      }
      if (idVal) {
        document.getElementById('orv').innerHTML = "Вы успешно изменили статус!";
        // document.getElementById('st2us').innerHTML = "Прочитано";
      }
    })
    $("button.cls2").on('click', function(){
      document.getElementById('upd_div').style.display = 'none';
    })
  </script>
<script>
  $(document).ready(function(){
    $('button.add').on('click', function(){
      var tittleVal = $('input.first').val();
      var contentVal = $('textarea.second').val();
      console.log(tittleVal, contentVal);

            $.ajax({
        method: 'POST',
        url: 'ups.php',
        data: { 
            first: tittleVal, second: contentVal
          }
      });

      
        $('input.first').val('');
        $('textarea.second').val('');
      if (tittleVal == '') {
        document.getElementById('results').innerHTML = "Введите название Вашей книги.";
      }
      if (contentVal == '') {
        document.getElementById('results').innerHTML = "Введите описание Вашей книги.";
      }
      if (tittleVal == '' && contentVal == '') {
        document.getElementById('results').innerHTML = "Невозможно создать пустую книгу!";
      }
      if (tittleVal && contentVal) {
        document.getElementById('results').innerHTML = "Вы успешно добавили книгу!";
      }
    });
  });
  // $(document).ready(function(){
  //   $('#upd_id_read').on('click', function(){
  //     $.ajax({
  //       method: 'GET',
  //       url: 'out.php'
  //     })
  //     return false;
  //   })
  // })

  
  
// </script>
 <script>
  // function Death(){
  //   const btn = documetn.getElementById('btn');
//     let userInput = document.querySelector('.first').value,
//     userTextarea = document.querySelector('.second').value,
//     xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function(){
//     if(xhr.readyState === 4 && xhr.status === 200)
//         document.getElementById('response').innerHTML=xhr.responseText;
//     };

// xhr.open('GET', "ups.php?a="+userInput+"&b="+userTextarea, true);
// // // $("#theForm").ajaxForm({url: 'process.php', type: 'post'})
// // let formData = new FormData(document.getElementById('theForm'));
// localStorage.setItem('tittle', userInput.toString());
// localStorage.setItem('description', userTextarea.toString());
// console.log(localStorage.getItem('tittle'));
// console.log(localStorage.getItem('description'));
// // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
// xhr.send();
//                             $.ajax({
//                                 type: "POST",
//                                 url: "process.php",
//                                 success: function(){
                                  
//                                     console.log('Успех');
//                                 },
//                                 error: function(){
//                                     console.log('Неудача');
//                                 }
//                             });
//                             $.post('process.php', $('#theForm').serialize());
// const delay = ms => {
//   return new Promise(r => setTimeout(() => r(), ms))
// }

// const url = 'process.php';


//   console.log('Started')
//   await delay(2000)
//   const response = await fetch(url, {
//     method: 'POST',
//     login: 'String',
// 	  file: 'File(binary)'
//   })
//   const data = await response.json()
//   console.log('Data', data)

//   btn.onclick = function(){
//     Death();
//   }

                        
// }            

// <script>
//   function goolos(){
//   let url = 'https://apiinterns.osora.ru/',
//       response = await fetch(url, {
//         method: 'POST',
//         mode: 'cors',
//         cache: 'no-cache',
//         credentials: 'same-origin',
//         headers: {'Content-Type': 'application/x-www-form-urlencoded',},
//         redirect: 'follow',
//         referrerPolicy: 'no-referrer',
//         body: JSON.stringify(data)
//       });
//       return await response.json();
// };
// postData('https://example.com/answer', { answer: 42 })
//   .then((data) => {
//     console.log(data);
//   });
</script>
<script>
$(document).ready(function (e) {
   $('#forma').on('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);

    $.ajax({
     type: 'POST',
     url: $(this).attr('action'),
     data: formData,
     cache: false,
     contentType: false,
     processData: false,
     success: function (data) {
      $('#results').html(data);
     },
     error: function (data) {
      document.getElementById('results').innerHTML = "Успех2!";
      document.getElementById('results').innerHTML = data;
     }

    });
   })
  });
</script>
<!-- <script>
  $('button').click(function(){
    $.ajax({
      url: "uploads/",
      success: function(result){
        $('#div1').html(result);
      }
    })
  })
</script> -->
</body>
</html>