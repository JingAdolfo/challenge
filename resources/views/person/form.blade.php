<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
<div class="col-md-12">
<!-- Person First Name -->
	<div class="form-group {{{ $errors->has('first_name') ? 'has error' : '' }}}">
		<label class="col-md-4 control-label" for="first_name">{!! Lang::get('person.first_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="first_name" id="first_name" value="{{{ Input::old('first_name', isset($persons) ? $persons->first_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="first_name" id="first_name" value="{{{ Input::old('first_name', isset($persons) ? $persons->first_name : null) }}}" />
			@endif
			{!! $errors->first('first_name','<label class="control-label" for="first_name">:message</label>')!!}
		</div>
	</div>

<!-- Person Last Name-->
	<div class="form-group {{{ $errors->has('last_name') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="last_name"> {!! Lang::get('person.last_name') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="last_name" id="last_name" value="{{{ Input::old('last_name', isset($persons) ? $persons->last_name : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="last_name" id="last_name" value="{{{ Input::old('last_name', isset($persons) ? $persons->last_name : null) }}}" />
			@endif
			{!! $errors->first('last_name','<label class="control-label" for="last_name">:message</label>')!!}
		</div>
	</div>

<!-- Person Middle_Initial-->
	<div class="form-group {{{ $errors->has('middle_initial') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="middle_initial"> {!! Lang::get('person.middle_initial') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="middle_initial" id="middle_initial" value="{{{ Input::old('middle_initial', isset($persons) ? $persons->middle_initial : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="middle_initial" id="middle_initial" value="{{{ Input::old('middle_initial', isset($persons) ? $persons->middle_initial : null) }}}" />
			@endif
			{!! $errors->first('middle_initial','<label class="control-label" for="middle_initial">:message</label>')!!}
		</div>
	</div>

<!-- Person Age-->
	<div class="form-group {{{ $errors->has('age') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="age"> {!! Lang::get('person.age') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="age" id="age" value="{{{ Input::old('age', isset($persons) ? $persons->age : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="age" id="age" value="{{{ Input::old('age', isset($persons) ? $persons->age : null) }}}" />
			@endif
			{!! $errors->first('age','<label class="control-label" for="age">:message</label>')!!}
		</div>
	</div>

<!-- Person Address-->
	<div class="form-group {{{ $errors->has('address') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="address"> {!! Lang::get('person.address') !!}</label>
		<div class="col-md-4">
			@if($action == 2)
			<input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', isset($persons) ? $persons->address : null) }}}" readonly="true"/>
			@else
			<input class="form-control" type="text" name="address" id="address" value="{{{ Input::old('address', isset($persons) ? $persons->address : null) }}}" />
			@endif
			{!! $errors->first('address','<label class="control-label" for="address">:message</label>')!!}
		</div>
	</div>

<!-- gender -->
	<div class="form-group {{{ $errors->has('gender_id') ? 'has-error' : '' }}}">
		<label class="col-md-4 control-label" for="gender_id"> {!! Lang::get('person.gender_id') !!}</label>
		<div class="col-md-4">
			<select class="form-control" name="gender_id" id="gender_id" tabindex="4">
			@if($action == 1 || $action == 2)
				@foreach($gender_list as $gender)
					@if($gender->id == $persons->gender_id)
					<option name="gender_id" value="{{{ $gender->id }}}" selected>{{{ $gender->gender_name }}}</option>
					@else
					<option name="gender_id" value="{{{ $gender->id }}}" >{{{ $gender->gender_name }}}</option>
					@endif
				@endforeach
			@else
				<option name="" value="" selected>-</option>
				@foreach($gender_list as $gender)
					<option name="gender_id" value="{{{ $gender->id }}}">{{{ $gender->gender_name }}}</option>

				@endforeach
			@endif
			</select>
			{!! $errors->first('gender_id','<label class="control-label" for="gender_id">:message</label>')!!}
		</div>
	</div>
</div>