
    @extends('layouts.app')

    @section('content')
     @php
         $title=['HTML' , 'CSS' , 'php'];
         $description=['Hyper Text Markup Language' , 'Cascading Style Sheets' , 'personal home pages'];
         $bool=true;
     @endphp


<div class="container mt-5 ">
  <table class="table">
    <thead >
      <tr>
        <th scope="col"  style="color: blueviolet">
         <h2>Title</h2>
        </th>
        <th scope="col"  style="color: blueviolet">
          <h2>Description</h2>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          @foreach ($title as $t) 
            @if ($bool)
              <h3 >{{$t}}</h3>
            @endif
      
          @endforeach
        </td>

        <td>
          @foreach ($description as $d)
          @if ($bool)
             <h3> {{$d}}</h3>
          @endif
       @endforeach
        </td>
      </tr>
    </tbody>
    
  </table>
   
</div>
@endsection







    