// function downloadURI(uri, name) {
//     var link = document.createElement("a");
//     link.download = name;
//     link.href = uri;
//     document.body.appendChild(link);
//     link.click();
//     document.body.removeChild(link);
//     delete link;
//   };
  
//   window.onload = function ()
//   {
//     console.log('onload');
//     let qrcode = new QRCode(document.getElementById("qrcode"),
//                {
//                 text: document.getElementById("data"),
//                 // width: 450,
//                 // height: 450,
//                 colorDark : "#000000",
//                 colorLight : "#ffffff",
//                 correctLevel : QRCode.CorrectLevel.H
//               });  
//     setTimeout(
//       function ()
//       {
//           let dataUrl = document.querySelector('#qrcode').querySelector('#img').src;
//           downloadURI(dataUrl, 'qrcode.png');
//       }
//       ,1000);
  
//   };


// function shot(){

//   var elmt=document.getElementById("img");
//   domtoimage.toPng(elmt)
//   .then(function(dataUrl){
//     var image = new Image();
//     image.src = dataUrl;
//     document.body.appendChild("img")
    
//   })
//   .catch(function(error){
//     console.error("error error",error)
//   });
// }

// let btnDownload = document.querySelector('#button');
// let img = document.querySelector('#img');
// imagePath = img;

// // Must use FileSaver.js 2.0.2 because 2.0.3 has issues.
// btnDownload.addEventListener('click', () => {
//     // img.src = imagePath;
//     console.log(imagePath);
//     // let fileName = "qrcode.jpg";
//     // FileSaver.saveAs(imagePath);
// });


