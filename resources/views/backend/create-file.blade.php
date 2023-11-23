@extends('backend.master')

@section('content-body')
    
<div class="text-left mt-2 mb-3">
		<div class="">
			<a href="{{url()->previous()}}" class="btn btn-circle btn-info">
				<span>Back</span>
			</a>
		</div>
        <div class="text-center mt-5">
            <form action="{{route('admin.files.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 ">
                    <label for="formFile w-50" class="form-label">Default file input example</label>
                    <input name="images[]" class="form-control w-25 m-auto" type="file" id="formFile" multiple>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>

</div> 

@endsection