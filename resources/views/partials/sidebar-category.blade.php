@if($category->parentCat->count())
<div  class="panel-collapse ">
	<div class="panel-body">
		<ul>
		@foreach($category->parentCat as $categoryChild)
			<li><a href="{{ route('category.product', $categoryChild->id) }}">{{ $categoryChild->name }}</a>
            @include('partials.sidebar-category', ['category' => $categoryChild])
            </li>
		@endforeach
		</ul>
	</div>
</div>


@endif