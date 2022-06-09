import { HTTPGet } from "./HTTPMethods.js";
import { loader } from "./loader.js";
import MainComponent from "./../components/MainComponent.js";
import UploadComponent from "./../components/UploadComponent.js";
import DeleteComponent from "./../components/DeleteComponent.js";
import UpdateComponent from "./../components/UpdateComponent.js";

const d = document;

export function dashboard(){
  const board = d.getElementById("dashboard");
  let { hash } = location, operation = undefined;
  const tabs = d.querySelectorAll(".tab");

  board.innerHTML = loader();
  
  setTimeout(()=>{
    if(!hash || hash === "#") board.innerHTML = MainComponent();
    else board.innerHTML = actions(parseInt(hash.charAt(1)));
  },5000);
  tabs.forEach( (tab,index) => tab.dataset.id = index + 1)
  d.addEventListener("click", (e) => {
    if(!e.target.matches(".tab")) return;
    let operation = parseInt(e.target.dataset.id);
    board.innerHTML = loader();
    setTimeout(()=>{
      board.innerHTML = actions(operation);
    },5000);
  },false);
    
}

const actions = (operation) => {
  let htmlContent = "";
  switch(operation){
    case 1:
      location.hash = "#"+operation+"-upload-killer";
      htmlContent = UploadComponent(1);
      break;
    case 2:
      location.hash = "#"+operation+"-upload-survivor";
      htmlContent = UploadComponent(2);
      break;
    case 3:
      location.hash = "#"+operation+"-upload-perk";
      htmlContent = UploadComponent(3);
      break;
    case 4:
      location.hash = "#"+operation+"-delete-killer";
      htmlContent = DeleteComponent(1);
      break;
    case 5:
      location.hash = "#"+operation+"-delete-survivor";
      htmlContent = DeleteComponent(2);
      break;
    case 6:
      location.hash = "#"+operation+"-delete-perk";
      htmlContent = DeleteComponent(3);
      break;
    case 7:
      location.hash = "#"+operation+"-update-killer";
      htmlContent = UpdateComponent(1);
      break;
    case 8:
      location.hash = "#"+operation+"-update-survivor";
      htmlContent = UpdateComponent(2);
      break;
    case 9:
      location.hash = "#"+operation+"-update-perk";
      htmlContent = UpdateComponent(3);
      break;
  }
  return htmlContent;
}