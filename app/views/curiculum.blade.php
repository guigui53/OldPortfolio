@extends('main')

@section('content')
<div style="height:80%">
<?php

/*header("Content-Type: application/pdf");
//C'est CE HEADER CI-DESSOUS qu'il ne faut pas oublier :
header("Accept-Ranges: bytes");
header("Keep-Alive: timeout=15, max=78");
header("Connection: Keep-Alive");

header('Content-Disposition: inline filename=CValternance.pdf');
readfile('CValternance');*/

?>

<object data="cv/CValternance.pdf" type="application/pdf" height="900" width="100%" >
  alt : <a href="cv/CValternance.pdf">CValternance.pdf</a>
</object>
</div>
<br /><br />
<div>
<a href="cv/CValternance.pdf" target="_target">Lire le CV</a>
</div>
@stop