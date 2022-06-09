import { loader } from "./../modules/loader.js";

export default function DeleteComponent(request){
  return `
  <h1>ESTAMOS EN EL DELETE COMPONENT ${request}</h1>
  `;
}