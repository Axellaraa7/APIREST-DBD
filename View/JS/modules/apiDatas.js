const d = document, w = window;

export async function getApiDatasToSelect(dElement,url){
  const select = dElement;
  try{
    let response = await fetch(url);
    let data = await response.json();
    const fragment = d.createDocumentFragment();
    data.forEach(difficulty => {
      let option = document.createElement("option");
      option.value = difficulty.id;
      option.innerHTML = difficulty.difficulty.toUpperCase();
      fragment.appendChild(option);
    });
    select.appendChild(fragment);
  }catch(error){
    console.error("Error: "+error.message);
  }  
}