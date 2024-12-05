@extends('Resume.mainResume')
@section('cvMainInformation')

<!--Extra Curricular Activities</ section start-->
      
       <div class="accordion" id="accordion2" role="tablist">
         <div class="card">
          <!-- Extra Curricular Activities</ Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0" data-toggle="collapse" href="#collapsecall_active">
              <big>Extra Curricular Activities</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
     		 <!-- Extra Curricular Activities</Card header end -->
			
                    
                            <!-- Extra Curricular Activities</Card body start -->
							<div id="collapsecall_active" class="collapse">
                               <div class="card-body" data-parent="#accordion2">
                            
                            <form action="{{route('ExtraActivitie')}}"  method="post"  id="extra_dynamic_field">
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
         <label class="col-md-12 control-label" for="extra"><b>Add Extra Curricular Activities</b></label>
            <span id="result"></span>
             <table class="table table-bordered table-striped" id="user_table">
                <thead>
                    <tr>
                        <th width="30%">Title</th>
                        <th width="30%">Details</th>
                        <th width="25%">Location</th>
                        <th width="10%">Date</th>
                        <th width="5%">Add</th>
                    </tr>
                    
               </thead>

               <tbody id="extra_table">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="5">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>
   </div>
  </div>
</div>

 <!--javascript code start for extra field -->
<script>
$(document).ready(function(){

 var count = 1;

 extra_dynamic_field(count);

 function extra_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="extra_title[]" type="text" value=""></td>';
        html += '<td> <textarea class="form-control" name="extra_details[]" type="text" rows="1" value=""></textarea></td>';
        html += '<td><textarea class="form-control" name="location[]" rows="1"value=""></textarea></td>';
        html += '<td><input class="form-control" name="edate[]" type="date" value=""></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove_extra" id="remove_extra" class="form-contorl btn btn-danger"><i class="fas fa-minus"></i></button></td></tr>';
            $('#extra_table').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add_extra" id="add_extra" class="form-control btn btn-success"><i class="fas fa-plus"></i></button></td></tr>';
            $('#extra_table').html(html);
        }
 }

 $(document).on('click', '#add_extra', function(){
  count++;
  extra_dynamic_field(count);
 });

 $(document).on('click', '#remove_extra', function(){
  count--;
  $(this).closest("tr").remove();
 });

 

});
</script>       
  <!--javascript code end for extra field -->                    


@endsection