<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<div class="col-md-12">
<!-- Product Name -->
	<div class="form-group {{{ $errors->has('product_name') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="product_name">{!! Lang::get('product.product_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="product_name" id="product_name" value="{{{ Input::old('product_name', isset($products) ? $products->product_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="product_name" id="product_name" value="{{{ Input::old('product_name', isset($products) ? $products->product_name : null) }}}" />
			@endif
			{!! $errors->first('product_name','<label class="control-label" for="product_name">:message</label>')!!}
		</div>
	</div>

<!-- Product Price-->
	<div class="form-group {{{ $errors->has('price') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="price"> {!! Lang::get('product.product_price') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="number" name="price" id="price" value="{{{ Input::old('price', isset($products) ? $products->price : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="number" name="price" id="price" value="{{{ Input::old('price', isset($products) ? $products->price : null) }}}" />
			@endif
			{!! $errors->first('price','<label class="control-label" for="price">:message</label>')!!}
		</div>
	</div>
</div>