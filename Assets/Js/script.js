
function ini(){

    const my_subject = document.getElementById("subject");
    const my_body = document.getElementById("body");

    const my_btn = document.getElementById("my_save_btn").addEventListener('click',()=>{
        const form = document.getElementById('form');
        const formData = new FormData(form);
        formData.append("action","my_action")
        
        if(my_subject.value!="" && my_body.value!=""){

            fetch(ajaxurl, {
                method: 'POST',
                body: formData,
                dataType:"json"
            })
            .then(function(response) {
                
                console.log(response);
                if(response.status===200){
                    alert("success")
                }else{
                    alert("failed");
                }
            }).catch(()=>{
              alert("failed");
            })

        }else{
            alert("please fill the input box")
        }



    })
}

window.addEventListener('load', () => {
    ini();
})