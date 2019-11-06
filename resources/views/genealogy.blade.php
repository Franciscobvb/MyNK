<div class="users">
  <div class="loade" hidden></div>
  <?php echo $posts->render();  ?> 
  <table id="table" class="responsive-table centered highlight ">
  <thead>
    <tr>
      <th> <p><label> <input type="checkbox" /><span></span></label></p> </th>
      <th>Watch List</th>
      <th class="line_number">Line</th>
      <th class="level">Level</th>
      <th class="associateid">associateid</th>
      <th class="associatename">associatename</th>
      <th class="distributor_status">Distributor_status</th>
      <th class="email">email</th>
      <th class="mobile_number">mobile_number</th>
      <th class="alternative_number">alternative_number</th>
      <th class="country">country</th>
    </tr>
  </thead>

  <tbody>  
    @foreach ($posts as $result)
      <tr>
        <td> <p><label> <input type="checkbox" name="email[]" class="check_mail" value="{{ $result->email }}"   name="mail[]"/><span></span></label></p> </td>
        <td> <p><label> <input type="checkbox" class="check_watch" value="{{ $result->associateid }}" /><span></span></label></p> </td>
        <td  class="line_number">{{ $result->Line }}</td>
        <td  class="level">{{ $result->Level }}</td>
        <td class="associateid">{{ $result->associateid }}</td>
        <td class="associatename">{{ $result->associatename }}</td>
        <td class="distributor_status">{{ $result->Distributor_status }}</td>
        <td class="email">{{ $result->email }}</td>
        <td class="mobile_number">{{ $result->mobile_number }}</td>
        <td class="alternative_number">{{ $result->alternative_number }}</td>
        <td class="country">{{ $result->country }}</td>
      </tr> 
    @endforeach
  </tbody>
</table> 
<?php echo $posts->render();  ?> 
</div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript">
     //Seleccionar los usuarios que se les enviara correo
/*    $(document).ready(function(){
        $(".check_mail").click(function(){
           if (this.checked) {
                $('#from_email').val( $(this).val()+'; ');
              }else{
              console.log("Eliminado");
          }
             
        });
    });
*/
    $(document).ready(function() {

  $('[name="email[]"]').click(function() {
      
      var arr = $('[name="email[]"]:checked').map(function(){
        return this.value;
      }).get();
      
      var str = arr.join(';');
      
     // $('#arr').text(JSON.stringify(arr));
      
      $('#from_email').val(str);
    
    });

  });
 
  $(document).ready(function(){
        $(".check_watch").click(function(){
          if(this.checked) {
             var idi = $(this).val();
             console.log(idi);
            }else{
              console.log("Eliminado");
            }
             
        });
    });
</script>