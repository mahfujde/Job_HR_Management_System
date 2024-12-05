@extends('Resume.mainResume')
@section('cvMainInformation')

<!--Work experience section start-->
      
       <div class="accordion" id="accordion2" role="tablist">
         <div class="card">
          <!-- Work experience Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0" data-toggle="collapse" href="#collapsecall_work">
              <big>Work Experience</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Work experience Card header end -->
			
                    
                            <!-- Work experience Card body start -->
							<div id="collapsecall_work" class="collapse">
                               <div class="card-body" data-parent="#accordion2">
                            

                             <form action="{{route('WorkExperience')}}"  method="post"  id="employe_dynamic_field">
      {{csrf_field()}} 

       @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
         <label class="col-md-12 control-label" for="employe"><b>Add Employment History</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="20%">Company Name</th>
                        <th width="20%">Designation</th>
                        <th width="30%">Responsibilities</th>
                        <th width="10%">From</th>
                        <th width="10%">To</th>
                        <th width="5%">Add</th>
                    </tr>
                    
               </thead>

               <tbody id="employe_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="6">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                       
                    </tr>
              </tfoot>
           </table>
        </form>
   </div>
  </div>
</div>

 <!--javascript code start for employ field -->
<script>
$(document).ready(function(){

 var count = 1;

 employe_dynamic_field(count);

 function employe_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="company_name[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="designation[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="responsibilities[]" type="text" value=""></td>';
        html += '<td><input class="form-control" name="join_date[]" type="date" value=""></td>';
        html += '<td><input class="form-control" name="resign_date[]" type="date" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_employe" id="remove_employe" class="form-contorl btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
            $('#employe_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_employe" id="add_employe" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#employe_table').html(html);
        }
 }

 $(document).on('click', '#add_employe', function(){
  count++;
  employe_dynamic_field(count);
 });

 $(document).on('click', '#remove_employe', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>
 <!--javascript code end for employ field -->


@endsection