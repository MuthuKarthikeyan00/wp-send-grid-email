// alert()
function mk(){

    const form = document.getElementById('form');
    const formData = new FormData(form);
    formData.append("action","my_action")

   fetch(ajaxurl, {
      method: 'POST',
      body: formData,
   })
   .then(function(response) {
     alert("success");
   }).catch(()=>{
    alert("failed");
   })




}


function ini(){
    const my_btn = document.getElementById("my_save_btn").addEventListener('click',()=>{
       mk();
    })
}

window.addEventListener('load', () => {
    ini();
})