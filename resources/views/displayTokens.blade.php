
@extends('voyager::master')
@section('content')

<div style="padding: 30px">
<div>
    <h1>Gercao de Token:</h1>
    </br>
    <h6 style="font-size: 16pt; color:red; font-weight:bold"> Atencao: Copie seu Token e guarde no local seguro, pois ele so eh esibido uma vez  </h6>
</div>
</br>
<div style=" margin: 20px,0px; color:gray;">
<code>
    {{$token}}
</code>

</div>
</div>
@endsection
