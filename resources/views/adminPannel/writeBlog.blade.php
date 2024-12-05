@extends('adminPannel.mainAdmin')


<!-- title head-->
@section('headTitle')

Blog Information

@endsection


@section('adminMainContent')

<div class="card">
	<div class="card-body">
	 <form action="" method="post" style="margin-left:50px">
         <div class="row">
<!-- blog information  -->
	
                <div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="btitle">Title:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="btitle" type="text" placeholder="" >
                        
                    </div>
                </div>
				
				 <div class="col-md-12 form-group">
                 <label class="col-md-2 control-label" for="bdescription">Description:</label>
                  <div class="col-md-10">
                   <textarea class="form-control" name="bdescription" value="" placeholder="Description:" ></textarea>
                        </div>
                            </div>
				
				<div class="col-md-12 form-group">
                 <label class="col-md-2 control-label" for="bpicture">Picture:</label>
                  <div class="col-md-10">
				<div class="custom-file">
      <input type="file" class="custom-file-input" id="imgFile" name="bpicture">
      <label class="custom-file-label" for="imgFile">Choose file</label>
    </div>
		</div>	
</div>	


                    <div class="col-md-12 form-group">
                     <label class="col-md-2 control-label" for="pdate">Published Date:</label>
                    <div class="col-md-10">
                    <input class="form-control" name="pdate" type="date" placeholder="" >
                        
                    </div>
                </div>
				
				                    <div class="col-md-10">
										 <input class="form-control btn btn-success" type="submit"  name="save"  value="Save">
                                        </div>
										</div>
				
				</div>
				</form>
</div>				
		</div>		

	@endsection