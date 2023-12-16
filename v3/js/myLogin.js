function checkAndFocus(count) {
    if(count == 4) return $('#chk_login').click(); 
    var input1Value = document.querySelector(`.input${count}`).value;

    if (input1Value !== '') {
        document.querySelector(`.input${count+1}`).focus();
    }
    
} 
function checkAndFocusForDelete(count){
    if(count == 1) return ;
    var input1Value = document.querySelector(`.input${count}`).value; 

    if(input1Value == ""){
        document.querySelector(`.input${count-1}`).focus();
    }
}
