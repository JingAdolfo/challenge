@extends('app')

@section('content')

<div id="col-md-12">
	<div class="col-md-12 page-header">
		<h3> {{{ Lang::get("course.edit_course") }}}
			<div class="pull-right">
				<a href="{{{ URL::to('course') }}}" class="btn btn-sm btn-primary iframe"><span class="glyphicon glyphicon-list"></span> {{ Lang::get('course.course_list') }}</a>
			</div>	
		</h3>
	</div>

	<form class="form-horizontal" method="post" action="{{ URL::to('course/'.$courses->id. '/edit') }}" autocomplete="off">
		<br>
		@include('course/form')
		<div class="col-md-12 col-md-offset-2">
			<div class="form-group">
				<label class="col-md-3 control-label" for="actions">&nbsp;</label>
				<div class="col-md-9">
					<button type="submit" class="btn btn-sm btn-success">
						<span class="glyphicon glyphicon-ok-circle"></span> {{ Lang::get("form.save_changes") }}
					</button>
					<a href="{{{ URL::to('course') }}}" class="btn btn-sm btn-warning close_popup">
						<span class="glyphicon glyphicon-ban-circle"></span> {{ Lang::get('form.cancel') }}
					</a>
				</div>
			</div>
		</div>
	</form>
</div>
@stop
@section('scripts')
<script type="text/javascript">
	$(":submit").closest("form").submit(function(){
					$(':submit').attr('disabled'.'disabled');
	});

</script>
@stop