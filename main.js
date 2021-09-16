
document.getElementById("table-id").addEventListener("click", function(e) {
    let t = e.target; 

    if(t.classList.contains("bt-view")) { 
        while(!t.classList.contains("infos_livro"))
    	    t = t.parentElement;

        t.nextElementSibling.classList.toggle("active");
    }
});