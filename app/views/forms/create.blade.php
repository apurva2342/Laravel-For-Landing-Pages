@extends('layouts.scaffold')

@section('main')

<h1>Create Form</h1>

{{ Form::open(array('route' => 'forms.store')) }}
	<ul>
        <li>
            {{ Form::label('program', 'Program:') }}
            {{ Form::text('program') }}
        </li>

        <li>
            {{ Form::label('firstname', 'Firstname:') }}
            {{ Form::text('firstname') }}
        </li>

        <li>
            {{ Form::label('lastname', 'Lastname:') }}
            {{ Form::text('lastname') }}
        </li>

        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('zip', 'Zip:') }}
            {{ Form::text('zip') }}
        </li>

        <li>
            {{ Form::label('agency', 'Agency:') }}
            {{ Form::text('agency') }}
        </li>

        <li>
            {{ Form::label('leadsource', 'Leadsource:') }}
            {{ Form::text('leadsource') }}
        </li>

        <li>
            {{ Form::label('format', 'Format:') }}
            {{ Form::text('format') }}
        </li>

        <li>
            {{ Form::label('country', 'Country:') }}
            {{ Form::text('country') }}
        </li>

        <li>
            {{ Form::label('ipaddress', 'Ipaddress:') }}
            {{ Form::text('ipaddress') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


