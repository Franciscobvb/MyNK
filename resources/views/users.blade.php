<div class="loade" hidden></div>
<?php echo $posts->render();  ?> 
  <table id="table" class="responsive-table">
    <thead>
      <tr>
        <th> <p><label> <input type="checkbox" /><span></span></label></p> </th>
        <th>Watch List</th>
        <th>Line</th>
        <th>Level</th>
        <th>associateid</th>
        <th>associatename</th>
        <th>Distributor_status</th>
        <th>email</th>
        <th>mobile_number</th>
        <th>alternative_number</th>
        <th>country</th>
      </tr>
    </thead>

    <tbody>  
      @foreach ($posts as $result)
        <tr>
          <td> <p><label> <input type="checkbox" name="email[]" class="check_mail"  name="countries[]" value="{{ $result->email }}" /><span></span></label></p> </td>
          <td> <p><label> <input type="checkbox" class="check_watch" value="{{ $result->associateid }}"/><span></span></label></p> </td>
                            <td>{{ $result->Line }}</td>
          <td>{{ $result->Level }}</td>
          <td>{{ $result->associateid }}</td>
          <td>{{ $result->associatename }}</td>
          <td>{{ $result->Distributor_status }}</td>
          <td>{{ $result->email }}</td>
          <td>{{ $result->mobile_number }}</td>
          <td>{{ $result->alternative_number }}</td>
          <td>{{ $result->country }}</td>
        </tr> 
      @endforeach
    </tbody>
  </table> 
<?php echo $posts->render();  ?> 


<script type="text/javascript">
  $(document).ready(function() {

  $('[name="email[]"]').click(function() {
      
      var arr = $('[name="email[]"]:checked').map(function(){
        return this.value;
      }).get();
      
      var str = arr.join(',');
      
     // $('#arr').text(JSON.stringify(arr));
      
      $('#from_email').val(str);
    
    });

  });

  //Seleccionar los usuarios que estaran en el  watchlist
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
             