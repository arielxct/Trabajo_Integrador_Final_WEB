//  Calcula el Monto a informa, segun la cantidad de tickets comprados, 
// el valor de este y la categoria del comprador.

function calculaMonto() {



    let cantidadIngresada = parseInt(document.getElementById('cantidad').value);
    console.log( "cantidad ingresada: " + cantidadIngresada)

    
    if (isNaN(cantidadIngresada) || cantidadIngresada < 0) { // valido cantidad de tickets ingresados
         alert("Por favor, ingrese un número positivo.");
    
         document.getElementById('cantidad').value = "";
         
       }else { 
           

   
    let cantidadTickets = parseInt(document.getElementById('cantidad').value);
    // console.log( "cantidad tickets: " + cantidadTickets)

    let categoriaComprador = document.getElementById('categoria').value;
    // console.log( "categoria " + categoriaComprador)

    let valorTickets = 200;
    let monto = 0;
    // console.log("cantidad de tickets: "+cantidadTickets );
    // console.log("categoria del comprador: "+categoriaComprador );
    
    
            if ( categoriaComprador == "estudiante") {
                    monto= cantidadTickets*valorTickets*0.20
                    
            }else {
            
                    if (categoriaComprador == "trainee") {
                        monto= cantidadTickets*valorTickets*0.50  
                            

                            }else{
                                monto= cantidadTickets*valorTickets*0.85  
                                
                            }


                            
            }
            montoCompraTickets = "Total a Pagar:$ " + monto;
            console.log(montoCompraTickets);
            
            document.getElementById('resultadoMontoCompraTickets').innerHTML = montoCompraTickets;
            document.getElementById('totalMontoCompraTickets').innerHTML = montoCompraTickets;
    } 
} 
function borrador() {
            document.getElementById('fname').value = "";
            document.getElementById('lname').value = "";
            document.getElementById('su_email').value = "";
            document.getElementById('cantidad').value = "";
            document.getElementById('categoria').value = "";
            
            montoCompraTickets = "Total a Pagar:$ ";
            document.getElementById('resultadoMontoCompraTickets').innerHTML = montoCompraTickets;
            document.getElementById('totalMontoCompraTickets').innerHTML = montoCompraTickets;
      
    
}
