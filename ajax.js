






























// var servResponse = document.querySelector('#results');

// form.addEventListener('submit', (e) => {
//   e.preventDefault()

//   var userFile = document.forms.ourForm.file1.value;
//   userFile = encodeURIComponent(userFile);

//   var xhr = new XMLHttpRequest();

//   xhr.open('POST', 'process.php');

//   var formData = new FormData(document.forms.ourForm);

//   xhr.setRequestHeader('Content-Type','multipart/form-data');

//   xhr.onreadystatechange = function(){
//     if (xhr.readyState === 4 && xhr.status === 200) {
//       servResponse.textContent = xhr.responseText;
//     }
//   }

//   xhr.send(formData);
// });

// var serverResponse = document.querySelector('#response');

// function goolos(){

//   let userInput = document.querySelector('#first').value,
//       userTextarea = document.querySelector('#second').value,
//       xhr = new XMLHttpRequest();
//   xhr.onreadystatechange = function(){
//       if(xhr.readyState === 4 && xhr.status === 200)
//           document.getElementById('response').innerHTML=xhr.responseText;
//       }

//   xhr.open('GET', "ups.php?a="+userInput+"&b="+userTextarea, true);

//   // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


  
  
//   xhr.send();
  
// };


// const delay = ms => {
//   return new Promise(r => setTimeout(() => r(), ms))
// }

// const url = 'https://apiinterns.osora.ru/';

// // function fetchApis(){
//   console.log('Started')
//   return delay(2000)
//   .then(() => fetch(url))
//   .then(response => response.json())
// }

// fetchApis()
//   .then(data => {
//     console.log('Data:', data)
//   })
//   .catch(e => console.error(e))

// async function fetchAsyncApis(){
//   console.log('Started')
//   await delay(2000)
//   const response = await fetch(url, {
//     method: 'POST',
//     login: 'String',
// 	  file: 'File(binary)'
//   })
//   const data = await response.json()
//   console.log('Data', data)
// }
// fetchAsyncApis()