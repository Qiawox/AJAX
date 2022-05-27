document.getElementById('forma').onclick = function () {
  if (document.getElementById('solo').checked  == true) {
    document.getElementById('solof').style.display = 'block';
    document.getElementById('upsf').style.display = 'none';
  }
  if (document.getElementById('ups').checked  == true) {
    document.getElementById('upsf').style.display = 'block';
    document.getElementById('solof').style.display = 'none';
  }
}

// const url = '';
// const form = document.querySelector('form');

// form.addEventListener('submit', (e) => {
//   e.preventDefault()

//   const files = document.querySelector('[type=file]').files
//   const formData = new FormData()

//   for (let i = 0; i < files.length; i++) {
//     let file = files[i]

//     formData.append('files[]', file)
//   }

//   fetch(url, {
//     method: 'POST',
//     body: formData
// }).then(response => {
//     return response.text();
// }).then(data => {
//     console.log(data);
// });
// })