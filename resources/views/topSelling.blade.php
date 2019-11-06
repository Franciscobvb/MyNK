  <table class="responsive-table">
      <thead>
        <tr>
             <th>#</th>
             <th>Item Code</th>
             <th>Description</th>
        </tr>
      </thead>
 
      <tbody>
        @foreach ($datas as $result)
          <tr>
              <td>{{ $result->No }}</td>
              <td>{{ $result->ItemCode }}</td>
              <td>{{ $result->Description }}</td>
          </tr> 
        @endforeach
      </tbody>
  </table>
  <br>
