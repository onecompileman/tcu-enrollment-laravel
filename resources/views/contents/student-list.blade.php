@extends('layouts.main')

@section('content')
<div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title page-title">
                                Student List
                            </h4>
                        </div>
                        <div class="panel-body">
                         <div class="row">
                             <div class="col-sm-12">
                                 <table class="table table-bordered">
                                     <thead>
                                         <tr>
                                             <td>Student Id</td>
                                             <td>Name</td>
                                             <td>Email</td>
                                             <td>Actions</td>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach($students as $student)
                                         <tr>
                                             <td>{{ $student->student_id }}</td>
                                             <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                                             <td>{{ $student->email }}</td>
                                             <td>
                                             <a class="btn btn-primary">View</a>       
                                             <a  href="/students/{{ $student->id }}/delete" class="btn btn-danger">Delete</a>
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
@endsection