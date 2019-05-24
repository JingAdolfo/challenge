<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<div class="col-md-12">

	<div class="form-group {{{ $errors->has('course_code') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="course_code">{!! Lang::get('course.course_code') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="course_code" id="course_code" value="{{{ Input::old('course_code', isset($courses) ? $courses->course_code : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="course_code" id="course_code" value="{{{ Input::old('course_code', isset($courses) ? $courses->course_code : null) }}}" />
			@endif
			{!! $errors->first('course_code','<label class="control-label" for="course_code">:message</label>')!!}
		</div>
	</div>

	
	<div class="form-group {{{ $errors->has('course_name') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="course_name"> {!! Lang::get('course.course_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="course_name" id="course_name" value="{{{ Input::old('course_name', isset($courses) ? $courses->course_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="course_name" id="course_name" value="{{{ Input::old('course_name', isset($courses) ? $courses->course_name : null) }}}" />
			@endif
			{!! $errors->first('course_name','<label class="control-label" for="course_name">:message</label>')!!}
		</div>
	</div>
</div>