@extends('jobseeker.mainJobseekermenu')

@section('headTitle')

Create Your Resume/CV

@endsection

@section('mainCvcontent')

<div class="row justify-content-center">
        <div class="col-md-12 ">

            <!-- Resume nav section start -->
            <nav>
                <div class="nav nav-tabs nav-fill activeMenu">
                      <a class="nav-item nav-link" href="{{route('/personal')}}" role="tab">
                      <i class="fas fa-user-alt"></i> 
                      <big>Personal Information</big>
                    </a>

                    <a class="nav-item nav-link"  href="{{route('/educationinfo')}}" role="tab" >
                      <i class="fas fa-graduation-cap"></i>
                      <big> Education/Training</big>
                      </a>

                    <a class="nav-item nav-link"   href="{{route('/employmentinfo')}}" role="tab" >
                     <i class="fas fa-briefcase"></i>
                      <big>Employment</big>
                     </a>

                    <a class="nav-item nav-link"  href="{{route('/otherinfo')}}" role="tab" >
                      <i class="fas fa-list" ></i> 
                      <big>Other Information</big>
                      </a>
                </div>
            </nav>

<script type="text/javascript">
const currenylocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length
for(let i = 0; i<menuLength; i++){
if(menuItem[i].href===currenylocation){

  menuItem[i].className = "active"
}

}

</script>





       <!-- Resume nav section start -->
       

         @yield('cvMainInformation')


    <!--image section start-->
       <div class="accordion" id="accordion1" role="tablist">
         <div class="card">
          <!-- img Card header start -->
           <div class="card-header" role="tab">
                             
            <a style="text-decoration:none"class="mb-0"data-toggle="collapse" href="#collapsecall_img">
              <big>Picture</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
         <!-- img Card header end -->  
                                
      <!-- img Card body start -->
  <div id="collapsecall_img" class="collapse">
    <div class="card-body" data-parent="#accordion1">
       <form action="{{route('picture')}}" method="post" enctype="multipart/form-data">
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

       <div class="form group col-md-6">
        <label class="control-label col-md-12" for="cvPicture"><b>Picture:</b></label>
      <div class="input-group col-md-12">
         <div class="input-group-prepend">
          <span class="input-group-text">Upload</span>
         </div>
  <div class="custom-file">
      <input type="file" class="custom-file-input" id="imgFile" name="photo">
      <label class="custom-file-label" for="imgFile">Choose file</label>
    </div>
  </div>
  <div class="form-group col-md-6 mt-5">
  <input type="submit" class="btn btn-success" value="Save Picture" >
  </div>
  </div>
  </form>
   </div>
       </div> 
          <!--img Card body end -->            
            <!--image section end -->
      
                                                                      
           <!-- reference section start -->
           <div class="card-header" role="tab">                
            <a style="text-decoration:none"class="mb-0" data-toggle="collapse" href="#collapsecall_reference">
              <big>Reference(s)</big> 
               <i class="fa fa-angle-down rotate-icon"></i>
            </a>
          </div> 
          <div id="collapsecall_reference" class="card-body collapse" data-parent="#accordion1">  

       <form action="{{route('reference')}}"  method="post"  id="referance_dynamic_field">
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
  <label class="col-md-12 control-label" for="reference"><b>Reference(s)</b></label>
             <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="16%">Name</th>
                        <th width="16%">Designation</th>
                        <th width="16%">Organization</th>
                        <th width="16%">Email</th>
                        <th width="16%">Contract</th>
                        <th width="15%">Relation</th>
                        <th width="5%">Add</th>
                    </tr>
               </thead>

               <tbody class="table-body">

               </tbody>
              
               <tfoot>
                    <tr>
                        <td colspan="7">
                            <input type="submit" name="save" id="save" class="form-control btn btn-primary" value="Save">
                        </td>
                    </tr>
              </tfoot>
           </table>
        </form>
</div>
</div>
</div>
</div>
</div>


<!--- referance java script -->
<script>
$(document).ready(function(){

 var count = 1;

 referance_dynamic_field(count);

 function referance_dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input class="form-control" name="name[]" type="text"></td>';
        html += '<td><input class="form-control" name="designation[]" type="text"></td>';
        html += '<td><input class="form-control" name="organization[]" type="text"></td>';
        html += '<td><input class="form-control" name="email[]" type="text"></td>';
        html += '<td><input class="form-control" name="mobile[]" type="text"></td>';
        html += '<td><input class="form-control" name="relation[]" type="text"></td>';
        
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="form-contorl btn btn-danger remove"><i class="fas fa-minus"></i></button></td></tr>';
            $('.table-body').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="form-control btn btn-success"><i class="fas fa-plus"></i></i></button></td></tr>';
            $('.table-body').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  referance_dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 
});
</script>

@endsection