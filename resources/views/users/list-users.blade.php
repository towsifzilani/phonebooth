@extends('layouts.app')
@section('title',__('Usermanagement'))

@push('css-header')
@endpush

@push('js-header')
@endpush

@section('content')
<div class='row'>
	<div class='col-12'>
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered table-striped" id="tbl-employees">
				       <thead>
				           <tr>
				               <th>Name</th>
				               <th>Position</th>
				               <th>Office</th>
				               <th>Salary</th>
				           </tr>
				       </thead>
				       <tbody>
				           <tr>
				               <td>Ashish Kumar</td>
				               <td>PHP</td>
				               <td>Office ABC</td>
				               <td>100000</td>
				           </tr>
				           <tr>
				               <td>Vijay Kumar</td>
				               <td>Wordpress</td>
				               <td>Office PQR</td>
				               <td>80000</td>
				           </tr>
				           <tr>
				               <td>Dhananjay Negi</td>
				               <td>Node Js</td>
				               <td>Office XYZ</td>
				               <td>150000</td>
				           </tr>
				    </tbody>
				 </table>
			</div>
		</div>
	</div>
</div>
@endsection

@push('css-footer')
@endpush

@push('js-footer')
<script>
	$(document).ready(function(){
		let table = $("#tbl-employees").DataTable({
			pageLength: 10,
			dom: '<"top"f>rt<"bottom"lip><"clear">',
			columnDefs: [
				{
					targets: '',
					className: 'text-center'
				}
			]
		});
	});
</script>
@endpush