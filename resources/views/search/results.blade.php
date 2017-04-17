<form id="elasticScout" action="/SearchQuery" method="get">
     <div class="mysearchbar">
         <input name="search" placeholder="Search...">
		@if(!empty($accounts))

		    @foreach($accounts as $account)

			<h1>{{ $products->title }} </h1>
			
			<h1>{{ $products->price }} </h1>
			<h1>{{ $products->description }} </h1>

		    @endforeach

		@endif
     </div>
</form>
