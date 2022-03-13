<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($categories as $category)
							@if($category->parentCat->count())
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title ">
										<a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->id }}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{ $category->name }} 
										</a>
									</h4>
								</div>

									<div id="{{ $category->id }}" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
											@foreach($category->parentCat as $categoryChild)
												<li><a  href="{{ route('category.product', $categoryChild->id) }}">{{ $categoryChild->name }}</a>
												@include('partials.sidebar-category', ['category' => $categoryChild])
												</li>
											@endforeach
											</ul>
										</div>
									</div>

							</div>
							@else
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{ route('category.product', $category->id) }}">{{ $category->name }}</a></h4>
								</div>
							</div>
							@endif
						@endforeach	
							
							
						</div><!--/category-products-->
					
						
						
						
						
						
					
					</div>
</div>