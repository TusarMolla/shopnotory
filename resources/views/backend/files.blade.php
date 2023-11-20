@extends('backend.master')

@section('content-body')
<div class="text-left mt-2 mb-3">
	<div class="row align-items-center">
		<div class="col-md-6">
			<h1 class="h3">All uploaded files</h1>
		</div>
		<div class="col-md-6 text-end">
			<a href="{{route('admin.files.create')}}" class="btn btn-circle btn-info">
				<span>Upload New File</span>
			</a>
		</div>
	</div>
</div> 
@endsection