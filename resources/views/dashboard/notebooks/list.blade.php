@extends('layouts.dashboard')


@section('content')



	<div class="container-table100">
		<div class="wrap-table100">




			<div class="table100 ver5 m-b-110">
				<div class="table100-head">
					<table>
						<thead>
							<tr class="row100 head">
								<th class="cell100 column1">Id</th>
								<th class="cell100 column2">Title</th>
								<th class="cell100 column3">Visibility</th>
								<th class="cell100 column4">User</th>
								<th class="cell100 column5">Creation Date</th>
								<th class="cell100 column5">Actions</th>
							</tr>
						</thead>
					</table>
				</div>

				<div class="table100-body js-pscroll">
					<table>
						<tbody>
							@foreach($list_notebooks as $notebook)
							<tr class="row100 body">

								<td class="cell100 column1">{{$notebook->id}}</td>
								<td class="cell100 column2">{{$notebook->title}}</td>
								<td class="cell100 column3">
									@if($notebook->visiblity == 1)
									Public
									@else
									Private
									@endif
								</td>
								<td class="cell100 column4">{{$notebook->user->name}}</td>
								<td class="cell100 column5">{{$notebook->created_at}}</td>
								<td>
									<a class="btn btn-danger" href="{{url('/dashboard/notebooks/update/'.$notebook->id.'')}}">Update</a>
									<a class="btn btn-danger" href="{{url('/dashboard/notebooks/show/'.$notebook->id.'')}}">Show</a>
									<a class="btn btn-danger" href="{{url('/dashboard/notebook/'.$notebook->id.'/sections')}}">Sections</a>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


@endsection
