@extends('backend.master')

@section('content-body')
    
<div class="text-left mt-2 mb-3">
		<div class="">
			<a href="{{url()->previous()}}" class="btn btn-circle btn-info">
				<span>Back</span>
			</a>
		</div>
        <div class="text-center ">
            <form action="">
                <input type="file" multiple><br>
                <button>Submit</button>
            </form>
        </div>

</div> 

@endsection