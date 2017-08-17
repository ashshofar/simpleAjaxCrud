@extends('layouts.public')

@section('main')
	<div class="page-title">
	  	<div class="title_left">
	    	<h3>Class</h3>
	 	</div>
	</div>

	<div class="clearfix"></div>
	
	{{-- ADD NEW CLASS --}}
	<div class="row">
	 	<div class="col-md-12 col-sm-12 col-xs-12">
	    	<div class="x_panel">
	      		<div class="x_title">
			        <h2>Add class</h2>
	        		<div class="clearfix"></div>
	      		</div>
		      	<div class="x_content">
		        	<form class="form-horizontal form-label-left" id="frmClass" novalidate>
		        		<div class="item form-group">
		        			<label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">Class Name <span class="required">*</span></label>
			        		<div class="col-md-6 col-sm-6 col-xs-12">
				              	<input id="name" class="form-control col-md-7 col-xs-12" name="name" placeholder="Class Name e.g X IPA 1" required="required" type="text">
				            </div>
		        		</div>
			          	<div class="ln_solid"></div>
			          	<div class="form-group">
			            	<div class="col-md-6 col-md-offset-3">
			            		<input type="hidden" name="id" id="id">
			              		<button type="button" class="btn btn-success" id="btnSubmit"><i class="fa fa-save"></i> Save</button>
			            	</div>
			          	</div>
	        		</form>
		      	</div>
	    	</div>
	  	</div>
	</div>

	{{-- DATATABLES --}}
	<div class="row">
	 	<div class="col-md-12 col-sm-12 col-xs-12">
	    	<div class="x_panel">
	      		<div class="x_title">
			        <h2>Class Data</h2>
			        <button class="btn btn-primary pull-right" id="refreshButton"><i class="fa fa-refresh"></i> Refresh Data</button>
	        		<div class="clearfix"></div>
	      		</div>
		      	<div class="x_content">
		        	<table id="class-Table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    </table>
		      	</div>
	    	</div>
	  	</div>
	</div>
@endsection

@section('extension-js')
	@include('class.script.script-class')
@endsection