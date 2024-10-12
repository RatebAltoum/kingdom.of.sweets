let navlink=document.querySelector(".nav-link");
function hidemenu(){
    navlink.style.right="0";
}
function showmenu(){
    navlink.style.right="-220px";
}
let showsearch=document.querySelector("#showsearch");
function onse(){
    showsearch.style.width="150px";
    showsearch.style.right="10%";
    showsearch.style.height="35px";

    
   
}
function offse(){
    showsearch.style.width="0px"
    showsearch.style.right="4.2%";
    showsearch.style.height="0";
}


function search () {
    const searchBox=document.getElementById("search-item").value.toUpperCase();
    //const storeItems = document.getElementById("product-list");
    const product= document.querySelectorAll(".porduct_order");
    const pname = document.getElementsByTagName("h2");
   
  
   
    for(var i =0; i< pname.length;i++){
        
        let match = product[i].getElementsByTagName('h2')[0];
        if(match){
            let textvalue=match.textContent  || match.innerHTML;

            if(textvalue.toUpperCase().indexOf(searchBox)>-1){
                product[i].style.display ="";

            }else{
                product[i].style.display ="none";

            }
        }
    }
}

document.getElementById('form_signin').addEventListener('submit', function (e) {  
    e.preventDefault();  
    
    let username = document.getElementById('sign_name').value;  
    let password = document.getElementById('sign_pass').value; 
    let massage = document.getElementById('massage'); 

    if (username === 'rateb' && password === '12345') {   
        window.location.href = 'select_maneger.php'; 
    } else{
             massage.innerText='Incorrect username or password !'
          }
}); 
