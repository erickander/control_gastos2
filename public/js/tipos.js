  //arrow funcion
const validar=()=>{
      const tip_descripcion=document.querySelector("#tip_descripcion");
      if (tip_descripcion.value.length==0) {
        Swal.fire({
  icon: 'error',
  title: 'Error',
  text: 'Campo Obligatorio!',
});              
 return false;

      }
     
}  

