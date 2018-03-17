@extends("template")
@section("content")

<p class="text-right">
	<a href="{{url('form')}}">
		<button type="button" class="btn btn-primary">Tambah</button>
	</a>
</p>

<table class="table table-bordered">
		<thead>
			<tr>
				<th>Kolom Header</th>
				<th>Kolom Header</th>
				<th>Kolom Header</th>
				<th>Kolom Header</th>
				<th>Kolom Header</th>
			</tr>

		</thead>
		<tbody>
			<tr>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
				<td>Data</td>
			</tr>
		</tbody>
</table>


@endsection
