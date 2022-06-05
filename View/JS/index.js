import { HTTPGet, HTTPPost } from "./modules/HTTPMethods.js";
import { getApiDatasToSelect } from "./modules/apiDatas.js";

const d = document, w = window;

const apiKillers = "http://127.0.0.1/DBD-API/API/killers.php", apiDifficulties = "http://127.0.0.1/DBD-API/API/difficulties.php", 
apiPerks = "http://127.0.0.1/DBD-API/API/perks.php";

w.addEventListener("load",inicio,false);

function inicio(){
  let currentUrl = window.location.pathname.split('/').pop();
  switch(currentUrl){
    case "index.php":
    case "": 
      HTTPGet(d.getElementById("cards"),apiKillers);
    break;
    case "register.php":
      getApiDatasToSelect(d.getElementById("difficulty"),apiDifficulties);
      //getPerks();
      HTTPPost(d.getElementById("form"),apiKillers);
    break;
    case "tets.php":
      d.querySelector("button").addEventListener("click",()=>{
        fetch(apiDifficulties).then(response => response.json()).then(data => console.log(data));
      });
    break;
  }
}


/*------------*/


//Para obtener estilos de un CSS (variables)
/* let mainColor = getComputedStyle(document.documentElement).getPropertyValue("--mainColor"); */

      

//OBJ:{name: "nurse"} -> JSON.stringify(OBJ);
//JSON:'{"name":"nurse"} -> json;
//formData used with fetch()-> formData(formElement) -> formData.foreach(k,v => obj[k] = v) -> JSON.stringify(obj);
//formData used with XMLHTTPREQUEST() -> .open(method,url) -> .send(formData)


/* function getMethodText(){
  fetch(apiKillers,{
    method:"POST",
    body:"hola",
    headers:{
      "Content-Type" : "text/plain"
    }
  }).then(response => response.text()).then(data =>
    console.log("SUCCESS",data))
  .catch(error => console.error("ERROR",error));
} */

