@extends('layouts.default')
@section('title',$user->name)
@section('content')
<div class="row">
	<div class="col col-8 offset-2">
		<div class="col-12">
			<div class="col-offset-2 col-8">
				<section class="user_info">
					@include('shared._user_info',['user' => $user])
				</section>
			</div>
		</div>
	</div>
</div>
@stop
