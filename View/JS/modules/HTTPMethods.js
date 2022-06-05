const d = document;

export function HTTPGet(dElement,url){
  const cards = dElement;

  fetch(url,{
    method : "GET" })
  .then(
    response => response.json())
  .then(data => {
    const fragment = d.createDocumentFragment();
    data.forEach(killer => {
      let div = d.createElement("div");
      div.classList.add("card");
      div.style.backgroundImage = "url('"+killer.img+"')";
      
      let divInformation = d.createElement("div");
      divInformation.classList.add("information");

      let bodydivInformation = "<span>"+killer.name+"</span><a href='killer.php?name="+killer.name+"' class='fa-solid fa-angles-right'></a>"

      divInformation.innerHTML = bodydivInformation;
      div.appendChild(divInformation);
      
      fragment.appendChild(div);
    });
    cards.appendChild(fragment);
  })
  .catch(e => console.log("ERROR: "+e.message));
}

export function HTTPPost(dElement,url){
  const form = dElement;
  form.addEventListener("submit",(e)=>{
    e.preventDefault();
    const formData = new FormData(form);
    fetch(url,{
      method:"POST",
      body: formData })
    .then(response => response.json())
    .then(data => {
      if(data.msg.status === 200) {
        form.reset();
        console.log(data);
      }else throw {status: data.msg.status, msg: data.msg.msg }; })
    .catch(error => console.error("ERROR: ",error));
  },false);
}

export function HTTPPut(dElement,url){

}

export function HTTPDelete(dElement,url){

}

/* function sendImg(){
  const formData = new FormData();
  formData.append("img",d.getElementById("img").files[0]);
  formData.append("ban",true);
  console.log(formData.get("img"));
  fetch(apiKillers,{
    method:"POST",
    body: formData
  }).then(response=>response.json())
  .then(data => console.log(data))
  .catch(error => console.error("ERROR: ",error));
} */

/* obj[k] = {
    'lastModified': v.lastModified,
    'name': v.name,
    'size': v.size,
    'type': v.type 
  }; 
  obj[k] = v;
*/

/* let obj = {};
    formData.forEach((v,k) =>{
      if(k == "img"){
        sendImg();
      }else{
        obj[k] = v;
      }
    }); */