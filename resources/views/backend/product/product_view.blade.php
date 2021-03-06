@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
	
		
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Product List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Image</th>
								<th>Product Name</th>
                                <th>Quantity</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>

@foreach($products as $item)
	<tr>
       
       <td><img src="{{ asset($item->product_thumbnail)}}" style="width: 60px; height: 50px;"></td>
	    <td>{{ $item->product_name }}</td>
        <td>{{ $item->product_qty }}</td>
		</td>
		<td>
			<a href="{{ route('category.edit', $item->id)}}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a> 
			<a href="{{ route('category.delete', $item->id)}}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
		</td>							
	</tr>
@endforeach

								</tbody>	
					  		</table>
						</div>
					</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->   
			</div>
			<!-- /.col -->



			       
			</div>


		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>


@endsection