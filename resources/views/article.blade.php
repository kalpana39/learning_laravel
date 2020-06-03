@extends('layout')



@section('content')



<body>

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
	
		<div id="sidebar">
			<ul class="style1">
				<li class="first">
                    @foreach($articles as $article)
					<h3>{{$article->title}}</h3>
					<p><a href="#">{{$article->excerpt}}</a></p>
                </li>
                @endforeach
				
			</ul>
			
		</div>
	</div>
</div>

</body>

         
@endsection()