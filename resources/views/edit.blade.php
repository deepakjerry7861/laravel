@extends('master')
@section('title', 'Edit Student')
@section('content')




<h1 class="text-center">Student Details Update</h1>

<div class="container">

    <form action = "/edit/<?php echo $viewdata[0]->id; ?>" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <table>
           <tr>
              <td>Name</td>
              <td>
                 <input type = 'text' name = 'name' value = '<?php echo $viewdata[0]->name; ?>'/><br>
              </td>
              <br><td>
                 <input type = 'text' name = 'email' value = '<?php echo $viewdata[0]->email; ?>'/>
              </td><br>
              <br><td>
                <input type = 'text' name = 'class' value = '<?php echo $viewdata[0]->class; ?>'/>
             </td><br>
              <br><td>
                <input type = 'text' name = 'Mobile' value = '<?php echo $viewdata[0]->Mobile; ?>'/>
             </td><br>
           <tr>
              <td colspan = '2'>
                 <input type = 'submit' value = "Update student" />
              </td>
           </tr>
        </table>
     </form>








@endsection
