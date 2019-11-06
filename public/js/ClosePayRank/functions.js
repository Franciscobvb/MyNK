$(function() {

    $("#abiID").on('change',function(){
       
          $(".executive").show();
          $(".me").hide();
       

        var abi = $(this).val();
        console.log(abi);

        $.ajax({
            type: 'GET',
            url: 'consulta',
            data: {
              abi: abi
            },
            beforeSend: function() {
             
            }
          }).done(function(response){
           
           $('#name').val(response);
           
          }).fail(function(response){
             alert('Enter a vaid data ID');
          }).always(function() {
            //insert code
          });
   
    });


//year filter
$("#Year").on('change',function(){
        
        var year = $(this).val();
        console.log(year);

       

        $.ajax({
          url: "selectyear", /* Llamamos a tu archivo */
          type: "GET",
          contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), year: year
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#contenido").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#contenido").append("<tr><td>" + value.Period + "</td><td>" + value.Name + "</td><td>" + value.Purchases + "</td><td>" + value.Commission_Amount + "</td><td>+</td><td>" + value.Bonus_Deduction+ "</td><td>+</td><td>" + value.Other+ "</td><td>=</td><td>" + value.Adjusted_Gross+ "</td><td>" + value.Backup_Withholding+ "</td></tr>");
                  });
              }
          }
        });

    
    }); 


//total year filter
$("#Year").on('change',function(){
        
        var year = $(this).val();
        console.log(year);

        $.ajax({
          url: "selecttotalyear", /* Llamamos a tu archivo */
          type: "GET",
          contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), year: year
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#totaltax").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#totaltax").append("<tr><td>Totals</td><td></td><td>" + value.TotalPurchases + "</td><td>" + value.TotalCommission_Amount + "</td><td>+</td><td>" + value.TotalBonus_Deduction+ "</td><td>+</td><td>" + value.TotalOther+ "</td><td>=</td><td>" + value.TotalAdjusted_Gross+ "</td><td>" + value.TotalBackup_Withholding+ "</td></tr>");
                  });
              }
          }
        });

    
    }); 

// name filte
 $("#btnoptiontax").on('click',function(){
      $.ajax({
          url: "selecttaxname", /* Llamamos a tu archivo */
          type: "GET",
         // contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), Name: $("#Name").val(), year: $("#yeartax").val()
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#contenido").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#contenido").append("<tr><td>" + value.Period + "</td><td>" + value.Name + "</td><td>" + value.Purchases + "</td><td>" + value.Commission_Amount + "</td><td>+</td><td>" + value.Bonus_Deduction+ "</td><td>+</td><td>" + value.Other+ "</td><td>=</td><td>" + value.Adjusted_Gross+ "</td><td>" + value.Backup_Withholding+ "</td></tr>");
                  });
              }
          }
        });
      }); 

// total name filter
 $("#btnoptiontax").on('click',function(){
      $.ajax({
          url: "selecttotaltaxname", /* Llamamos a tu archivo */
          type: "GET",
         // contentType: "application/x-www-form-urlencoded",
          dataType: "json",  /* Esto es lo que indica que la respuesta será un objeto JSon */
           data: { 
              consultantid: $("#consultantid").val(), Name: $("#Name").val(), year: $("#yeartax").val()
            },
          success: function(data){
              /* Supongamos que #contenido es el tbody de tu tabla */
              /* Inicializamos tu tabla */
              $("#totaltax").html('');
              /* Vemos que la respuesta no este vacía y sea una arreglo */
              if(data != null && $.isArray(data)){
                  /* Recorremos tu respuesta con each */
                  $.each(data, function(index, value){
                      /* Vamos agregando a nuestra tabla las filas necesarias */
                      $("#totaltax").append("<tr><td>Totals</td><td></td><td>" + value.TotalPurchases + "</td><td>" + value.TotalCommission_Amount + "</td><td>+</td><td>" + value.TotalBonus_Deduction+ "</td><td>+</td><td>" + value.TotalOther+ "</td><td>=</td><td>" + value.TotalAdjusted_Gross+ "</td><td>" + value.TotalBackup_Withholding+ "</td></tr>");
                  });
              }
          }
        });
      }); 
})
