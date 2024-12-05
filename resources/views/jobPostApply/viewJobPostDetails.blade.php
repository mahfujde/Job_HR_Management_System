@extends('jobseeker.mainJobseekermenu')

@section('headTitle')
 view and apply job
@endsection

@section('mainCvcontent')

@if(!empty($job_posts))
        @foreach($job_posts as $job_post)
<div class="card m-5">
    <div class="card-header">
        <p><b>{{$job_post->company_name}}</b></p>
    </div>

    <div class="card-body m-3">
   
         <p><b>Title:</b>
             {{$job_post->job_title}}</p></p>
         <p><b>Description:</b>
             {{$job_post->job_description}}</p>
         <p><b>Address:</b>
             {{$job_post->address}}</p>
         <p><b>Responsibilities:</b>
             {{$job_post->job_responsibilities}}</p>
         <p><b>Location:</b>
             {{$job_post->job_location}}</p>
         <p><b>Salary:</b>
             {{$job_post->salary}}</p>
         <p><b>Employment Status:</b>
             {{$job_post->employment_status}}</p>
         <p><b>Educational Requirements:</b>
             {{$job_post->educational_requirements}}</p>
         <p><b>Experience Requirements:</b>
             {{$job_post->experience_requirements}}</p>
         <p><b>Key Skills :</b>
             {{$job_post->key_skills}}</p>
         <p><b>Vacancy No:</b>
             {{$job_post->vacancy_no}}</p>
         <p><b>Curcular Date:</b>
             {{$job_post->curcular_date}}</p>
         <p><b>Deadline:</b>
             {{$job_post->deadline}}</p>
        <?php
            $id = encrypt($job_post->job_id);

        ?>
     
        
       @if(!count($data))
        <a href="{{url('/jobapply/'.$id)}}" class="btn btn-info">
        Apply
        </a>
       @else
       @foreach($data as $i)
          @if($i->is_applied==1)
       
       
          <a href="#" class="btn btn-info disable" onclick="return confirm('You have applied already for this post')">Apply</a>
         
         @else
         <a href="{{url('/jobapply/'.$id)}}" class="btn btn-info">
        Apply
         @endif
           @endforeach
       @endif
     
       
       
      
        
     
    </div>
   </div>
</div>
   @endforeach
   @endif
@endsection