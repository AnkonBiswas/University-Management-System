
@extends('admin.main')


@section('content')

<div class="uk-container">
	<form method="post"  enctype="multipart/form-data">
		                    {{csrf_field()}}

		<input type="submit" name="submit" value="Confirm Course" class="uk-button uk-button-primary">
    <table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Course Id</th>
            <th>Id</th>
            <th>Course Name</th>
             <th>Section</th>
              <th>Seat</th>
           
              <th>Enroll</th>
        </tr>
    </thead>
    <tbody>
    	

            @foreach($courses as $course)

          

@if($course->preq != null)

  @foreach($coursestudents as $scourse)


  @if($course->preq == $scourse->course_id)





        <tr>
            <td>{{$course->c_id}}</td>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
             <td>
{{$course->section}}
            </td>
            <td>
{{$course->seats}}
            </td>

            <td> <input class="uk-checkbox" type="checkbox" value="{{$course->id}}" name="course[]"> Enroll </td>
             
             
              
         

        </tr>
        
 @endif

         @endforeach

         @else


            <tr>
            <td>{{$course->c_id}}</td>
            <td>{{$course->id}}</td>
            <td>{{$course->course_name}}</td>
             <td>
{{$course->section}}
            </td>
            <td>
{{$course->seats}}
            </td>

              <td> <input class="uk-checkbox" type="checkbox" value="{{$course->id}}" name="course[]"> Enroll </td>

        </tr>

           @endif



        @endforeach

        
    </tbody>
</table>
</form>
</div>

  


    


        


@endsection
