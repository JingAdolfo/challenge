<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<div class="col-md-12">
<!-- Book Name -->
	<div class="form-group {{{ $errors->has('book_name') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="book_name">{!! Lang::get('book.book_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="book_name" id="book_name" value="{{{ Input::old('book_name', isset($books) ? $books->book_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="book_name" id="book_name" value="{{{ Input::old('book_name', isset($books) ? $books->book_name : null) }}}" />
			@endif
			{!! $errors->first('book_name','<label class="control-label" for="book_name">:message</label>')!!}
		</div>
	</div>

	<div class="form-group {{{ $errors->has('book_pcs') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="book_pcs">{!! Lang::get('book.book_pcs') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="book_pcs" id="book_pcs" value="{{{ Input::old('book_pcs', isset($books) ? $books->book_pcs : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="book_pcs" id="book_pcs" value="{{{ Input::old('book_pcs', isset($books) ? $books->book_pcs : null) }}}" />
			@endif
			{!! $errors->first('book_pcs','<label class="control-label" for="book_pcs">:message</label>')!!}
		</div>
	</div>

	<div class="form-group {{{ $errors->has('author_name') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="author_name">{!! Lang::get('book.author_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="author_name" id="author_name" value="{{{ Input::old('author_name', isset($books) ? $books->author_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="author_name" id="author_name" value="{{{ Input::old('author_name', isset($books) ? $books->author_name : null) }}}" />
			@endif
			{!! $errors->first('author_name','<label class="control-label" for="author_name">:message</label>')!!}
		</div>
	</div>

	<div class="form-group {{{ $errors->has('index_no') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="index_no"> {!! Lang::get('book.index_no') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="number" name="index_no" id="index_no" value="{{{ Input::old('index_no', isset($books) ? $books->index_no : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="number" name="index_no" id="index_no" value="{{{ Input::old('index_no', isset($books) ? $books->index_no : null) }}}" />
			@endif
			{!! $errors->first('index_no','<label class="control-label" for="index_no">:message</label>')!!}
		</div>
	</div>
</div>