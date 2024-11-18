import "./bootstrap";
import "flowbite";

const serachBar = document.getElementById("topbar-search");
serachBar.addEventListener('change', (e)=>{
  console.log("e.target.value");
})