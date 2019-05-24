@extends('app')

@section('content')

<div id="col-md-12">
	<div class="col-md-12 page-header">
		<h3> {{{ Lang::get("course.course_list") }}}
			<div class="pull-right">
				<a href="{{{ URL::to('course/create') }}}" class="btn btn-sm btn-primary iframe"><span class="glyphicon glyphicon-list"></span> {{ Lang::get("course.create_new_course") }}</a>
			</div>
		</h3>
	</div>

	<table id="course_table" class="table table-striped table-hover">
		<thead>
			<tr>
				<th> {{ Lang::get("course.course_code") }}</th>
				<th> {{ Lang::get("course.course_name") }}</th>
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


			course_table = $('#course_table').dataTable( {
				"sDom": "<'row'<'col-md-6><'col-md-6'f>r>t<'row'<col-md-6'i><'col-md-6'p>>",
				"sPaginationType": "bootstrap",
				"bProcessing": true,
				"bServerSide": true,
				"bStateSave": true,
				"sAjaxSource": "{{ URL::to('course/data/') }}",
				"fnDrawCallBack": function ( oSettings ) {
				},
			});
	});
</script>
@stop