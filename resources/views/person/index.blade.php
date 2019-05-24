@extends('app')

@section('content')

<div id="col-md-12">
	<div class="col-md-12 page-header">
		<h3> {{{ Lang::get("person.person_list") }}}
			<div class="pull-right">
				<a href="{{{ URL::to('person/create') }}}" class="btn btn-sm btn-primary iframe"><span class="glyphicon glyphicon-list"></span> {{ Lang::get("person.create_new_person") }}</a>
			</div>
		</h3>
	</div>

	<table id="person_table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th> {{ Lang::get("person.fullname") }}</th>
				<th> {{ Lang::get("person.age") }}</th>
				<th> {{ Lang::get("person.address") }}</th>
				<th> {{ Lang::get("person.gender_id") }}</th>
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


			person_table = $('#person_table').dataTable( {
				"sDom": "<'row'<'col-md-6><'col-md-6'f>r>t<'row'<col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"bProcessing": true,
				"bServerSide": true,
				"bStateSave": true,
				"sAjaxSource": "{{ URL::to('person/data/') }}",
				"fnDrawCallBack": function ( oSettings ) {
				},
			});
	});
</script>
@stop