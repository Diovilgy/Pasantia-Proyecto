export function soloNumeros(e) {
    var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = "1234567890",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
  }

/* document.write('falso');
function valideKey(evt) {
    var code= (evt.which) ? evt.which : evt.keyCode;
    
    if (code==8) {
        return true;
    }else if (code>=48 && code<=57) {
        return true;
    } else {
        return false;
    }
} */

