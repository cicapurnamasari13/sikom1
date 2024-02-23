@extends('_template_back.layout')

@section('content')
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex my-auto btn-list justify-content-end">
									<!--------- riute create buku --------->
									<a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>
									<a href="{{ route('export_excel_buku') }}" class="btn btn-success">Export Excel</a>
									<a href="{{ route('export_pdf_buku') }}" class="btn btn-danger">Export PDF</a>
									<a class="modal-effect btn btn-dark" data-bs-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Import Excel</a>								
								</div>
								@include('_component.pesan')
							</div>
							<div class="card-body mt-3">
								<div class="table-responsive">
									<table class="table table-bordered table-hover table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>No</th>
												<th>User</th>
												<th>Buku</th>
												<th>Tanggal Peminjaman</th>
												<th>Tanggal Pengembalian</th>
												<th>status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                                                                        @foreach ($data as $dt)
											<tr>
												<td scope="row">{{ $loop->iteration }}</td>
												<td>{{ $dt->user->username  }}</td>
												<td>{{ $dt->buku->judul }}</td>
												<td>{{ $dt->tanggal_peminjam }}</td>
												<td>{{ $dt->tanggal_pengembalian }}</td>
												<td>{{ $dt->status_peminjaman }}</td>
												<td>
													<a href="{{ route('buku.edit',$dt->id) }}" class="btn btn-sm btn-warning">Edit</a>
													<form onsubmit="return confirm('apakah anda yakin hapus data ini?')"action="{{ route('buku.destroy',$dt->id) }}" method="post" class="d-inline">
														@csrf @method('DELETE')
													<button type="submit" class="btn btn-sm btn-danger">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!--/div-->
			@include('data_buku.modal_import')
@endsection