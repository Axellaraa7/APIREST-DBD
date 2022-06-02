const d = document;

export function HTTPGet(dElement,url){
  const cards = dElement;

  fetch(url,{
    method : "GET"
  }).then(
    response => response.json()
  ).then(data => {
    const fragment = d.createDocumentFragment();
    data.forEach(killer => {
      let div = document.createElement("div");
      div.classList.add("card");
      div.style.backgroundImage = "url('"+killer.img+"')";
      
      let divInformation = document.createElement("div");
      divInformation.classList.add("information");

      let bodydivInformation = "<span>"+killer.name+"</span><a href='killer/name="+killer.name+"' class='fa-solid fa-angles-right'></a>"

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
    console.info("FETCHING DATA TO ... "+url);
    const formData = new FormData(form);
    /* let obj = {};
    formData.forEach((v,k) =>{
      if(k == "img"){
        sendImg();
      }else{
        obj[k] = v;
      }
    }); */
    fetch(url,{
      method:"POST",
      body: formData
    }).then(response=>response.json())
    .then(data => console.log(data))
    .catch(error => console.error("ERROR: ",error));
  },false);
}

/* function sendImg(){
  const formData = new FormData();
  formData.append("img",document.getElementById("img").files[0]);
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