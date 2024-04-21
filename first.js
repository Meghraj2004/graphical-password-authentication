var str="";
function display(img){
    str=document.getElementById("listofseq").value+img.getAttribute('value')+",";
    // alert(""+img.getAttribute('value'));
    document.getElementById("listofseq").value=str;
}
function finalbtn(){
    
    document.getElementById("hidden").value=str
    // alert(str)
    str=""
} 
function reset1(){
    str=""
    document.getElementById("listofseq").value=str;
}