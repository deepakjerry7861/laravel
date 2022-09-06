@php

echo"Hello Laravel";

$count = array('12','45','3443','Hello World');

echo"<pre>";
print_r($count);
echo"</pre>";

echo var_dump($count);
echo "<br>";
// Loop function start here

// echo $students['name'].'<br>';
// echo $students['Roll_no'].'<br>';
// echo $students['Class'].'<br>';
// echo $students['City'].'<br>';

@endphp

{{-- @foreach($student as $students)
<tr>
    <td>{{$students->name}}</td>
    <td>{{$students->email}}</td>
    <td>{{$students->phone}}</td>
    <td>{{$students->password}}</td>

@endforeach --}}

@foreach ($users as $user)
@php

echo"<pre>";
print_r($user);

echo"</pre>";
@endphp


@endforeach

{{-- If Statements function start here --}}

@php
$i="52";
    if($i>90){
        echo" Hello Number condition is Good";
    }
    elseif ($i>0) {
        echo" Hello This Condition is not fare";
    }
    else {
        echo" Pata nhi kya chal rha hai ";
    }
@endphp

{{-- @verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim --}}
