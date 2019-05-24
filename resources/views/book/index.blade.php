@extends('app')

@section('content')

<div id="col-md-12">
	<div class="col-md-12 page-header">
		<h3> {{{ Lang::get("book.book_list") }}}
			<div class="pull-right">
				<a href="{{{ URL::to('book/create') }}}" class="btn btn-sm btn-primary iframe"><span class="glyphicon glyphicon-list"></span> {{ Lang::get("book.create_new_book") }}</a>
			</div>
		</h3>
	</div>

	<table id="book_table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th> {{ Lang::get("book.book_name") }}</th>
				<th> {{ Lang::get("book.book_pcs") }}</th>
				<th> {{ Lang::get("book.author_name") }}</th>
				<th> {{ Lang::get("Index Number") }}</th>
				<th> {{ Lang::get("form.action") }}</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
@stop

{{--  Script --}}
@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {


			book_table = $('#book_table').dataTable( {
				"sDom": "<'row'<'col-md-6><'col-md-6'f>r>t<'row'<col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"bProcessing": true,
				"bServerSide": true,
				"bStateSave": true,
				"sAjaxSource": "{{ URL::to('book/data/') }}",
				"fnDrawCallBack": function ( oSettings ) {
				},
			});
	});
</script>
@stop