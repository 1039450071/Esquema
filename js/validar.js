function validar() {
    var nombre, apellido, correo, telefono, expresion, condiciones;
    
    nombre= document.getElementById("nombre").value;
    apellido=document.getElementById("apellido").value;
    correo= document.getElementById("correo").value;
    telefono= document.getElementById("telefono").value;
	dejarenblanco= document.getElementById("dejarenblanco").value;

    expresion=/\w+@+\w+\.+[a-z]/;

if(nombre === "")
    {
        alert("El campo nombre es requerido");
		document.form.nombre.focus();
        return false;
    }

    else if(nombre.length>30)
        {
            alert("El nombre es muy  largo");
			document.form.nombre.focus();
                return false;
        }
    else if(apellido.length>30)
        {
            alert("El nombre es muy  largo");
            document.form.nombre.focus();
                return false;
        }
    
    else if(correo === "")
        {
            alert("El campo correo es requerido");
			document.form.correo.focus();
        	return false; 
        }
	else if(!expresion.test(correo))
        {
            alert("El correo no es válido");
			document.form.correo.focus();
            return false;
        }
    else if(telefono === "")
        {
            alert("El campo telefono es requerido");
			document.form.telefono.focus();
            return false;
        }
    
    else if(isNaN(telefono)) //NAN significa que NO es un numero
        {
            alert("El teléfono ingresado no es un número");
			document.form.telefono.focus();
            return false;
        }
    else if(telefono.length<7)
        {
            alert("El telefono debe tener mínimo 7 caracteres");
			document.form.telefono.focus();
            return false;
        }
	    
    
}


