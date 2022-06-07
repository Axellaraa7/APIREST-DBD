"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.HTTPGet = HTTPGet;
exports.HTTPPost = HTTPPost;
exports.HTTPPut = HTTPPut;
exports.HTTPDelete = HTTPDelete;
var d = document;

function HTTPGet(url, callback) {
  fetch(url, {
    method: "GET"
  }).then(function (response) {
    return response.json();
  }).then(function (data) {
    callback(data); //const fragment = d.createDocumentFragment();
    // data.forEach(killer => {
    //   let div = d.createElement("div");
    //   div.classList.add("card");
    //   div.style.backgroundImage = "url('"+killer.img+"')";
    //   let divInformation = d.createElement("div");
    //   divInformation.classList.add("information");
    //   let bodydivInformation = "<span>"+killer.name+"</span><a href='killer.php?name="+killer.name+"' class='fa-solid fa-angles-right'></a>"
    //   divInformation.innerHTML = bodydivInformation;
    //   div.appendChild(divInformation);
    //   fragment.appendChild(div);
    // });
    // cards.appendChild(fragment);
  })["catch"](function (e) {
    return console.log("ERROR: " + e.message);
  });
}

function HTTPPost(dElement, url) {
  var form = dElement;
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(form);
    fetch(url, {
      method: "POST",
      body: formData
    }).then(function (response) {
      return response.json();
    }).then(function (data) {
      if (data.msg.status === 200) {
        form.reset();
        console.log(data);
      } else throw {
        status: data.msg.status,
        msg: data.msg.msg
      };
    })["catch"](function (error) {
      return console.error("ERROR: ", error);
    });
  }, false);
}

function HTTPPut(dElement, url) {}

function HTTPDelete(dElement, url) {}
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