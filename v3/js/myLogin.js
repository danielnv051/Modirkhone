function checkAndFocus(count) {
    if(count == 4) return ; 
    var input1Value = document.querySelector(`.input${count}`).value;

    if (input1Value !== '') {
        document.querySelector(`.input${count+1}`).focus();
    }
    
}
