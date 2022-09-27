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
				<table class="table table-bordered" id="table_id" class="display">
				    <thead>
				        <tr>
				            <th>Column 1</th>
				            <th>Column 2</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td>Row 1 Data 1</td>
				            <td>Row 1 Data 2</td>
				        </tr>
				        <tr>
				            <td>Row 2 Data 1</td>
				            <td>Row 2 Data 2</td>
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
lfrtip
@push('js-footer')
<script>
	$(document).ready(function(){
		let table = $("#table_id").DataTable({
			colReorder: true,
			serverSide: true,
			processing: true,
			pageLength: 10,
			order: [[ 1, "desc" ]],
			dom: '<"top"f>rt<"bottom"lip><"clear">',
		});
	});
</script>
@endpush