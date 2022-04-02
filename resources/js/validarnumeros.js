function valideKey(evt) {
    var code= (evt.which) ? evt.which : evt.keyCode;
    
    if (code==8) {
        return true;
    }else if (code>=48 && code<=57) {
        return true;
    } else {
        return false;
    }
}