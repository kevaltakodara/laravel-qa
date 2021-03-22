@extends('layouts.admin.app')

@section('content')
	<div class="heading-and-filters d-flex justify-content-between align-items-center">
        <div class="page-title">
            <h1>Project</h1>
        </div>
    </div>
    <div class="p-20">
		<div class="text-right mb-10"><a href="javascript:void()" title="" class="btn btn-orange" data-toggle="modal" data-target="#custModal"><i class="fa fa-plus"></i></a></div>
        <div class="card">
            <!--<div class="card-header">Project</div>-->
            <div class="card-body">                   	
                <div class="table-responsive">
                    <table id="project" class="display nowrap table table-bordered table-striped w-100">
                        <thead>
                            <tr>
                                <th>Project Name</th>
								<th>Client Name</th>
                                <th>End Date</th>
								<th>Project Cost (USD)</th>
								<th>Project Hours</th>
								<th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
								<td>Project 1</td>
                                <td>Hetal Patel</td>
								<td>12/31/2019</td>
								<td>40,000</td>
								<td>400</td>
                                <td class="text-center"><input type="checkbox" class="js-switch" checked /></td>
                                <td class="text-center"><a class="ml-5 mr-5" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-edit"></i></a><a class="ml-5 mr-5 text-orange" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-trash-alt text-orange"></i></a></td>
                            </tr>
                            <tr>
								<td>Project 2</td>
                                <td>Robin Singh</td>
								<td>10/31/2019</td>
								<td>50,000</td>
								<td>500</td>
                                <td class="text-center"><input type="checkbox" class="js-switch" checked /></td>
                                <td class="text-center"><a class="ml-5 mr-5" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-edit"></i></a><a class="ml-5 mr-5 text-orange" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-trash-alt text-orange"></i></a></td>
                            </tr>
                            <tr>
								<td>Project 3</td>
                                <td>Hetal Patel</td>
								<td>05/31/2019</td>
								<td>60,000</td>
								<td>600</td>
                                <td class="text-center"><input type="checkbox" class="js-switch" checked /></td>
                                <td class="text-center"><a class="ml-5 mr-5" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-edit"></i></a><a class="ml-5 mr-5 text-orange" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-trash-alt text-orange"></i></a></td>
                            </tr>
                            <tr>
								<td>Project 4</td>
                                <td>Robin Singh</td>
								<td>02/31/2019</td>
								<td>30,000</td>
								<td>300</td>
                                <td class="text-center"><input type="checkbox" class="js-switch" checked /></td>
                                <td class="text-center"><a class="ml-5 mr-5" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-edit"></i></a><a class="ml-5 mr-5 text-orange" href="javascript:void(0);" title="Edit"><i class="font-20 fa fa-trash-alt text-orange"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection