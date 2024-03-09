


// FR
document.querySelector("#lang ul li:nth-child(4) a").addEventListener("click",()=>{
    location.replace(location.protocol + "//" + location.host + location.pathname + "?lang=fr");
})


// EN
document.querySelector("#lang ul li:nth-child(5) a").addEventListener("click",()=>{
    location.replace(location.protocol + "//" + location.host + location.pathname + "?lang=en");
})