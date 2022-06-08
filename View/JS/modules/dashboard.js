const d = document;

export function dashboard(){
  const tabs = d.querySelectorAll(".tab");
  tabs.forEach( (tab,index) => tab.dataset.id = index + 1)
  d.addEventListener("click", (e) => {
    let operation = e.target.dataset.id;
    console.log(operation);
    switch(operation){
      case 1:
        break;
      case 2:
        break;
    }
  },false)
}

