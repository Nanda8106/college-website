function myFunction() {
    var input, filter, ul, li, a, i, txtValue, valuefound=0;
    document.querySelector(".SearchHere").style.display = "inline";
    document.querySelector(".noans").style.display = "none";
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    if(filter == 0){
    	document.querySelector(".SearchHere").style.display = "none";
    }
    ul = document.getElementById("myKeywords");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
            valuefound = 1;
            
        } else {
            li[i].style.display = "none";
            valuefound = 0
        }
    }
    if(valuefound ==0){
    	document.querySelector(".noans").style.display = "";
    }
}