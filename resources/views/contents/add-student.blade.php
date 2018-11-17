@extends('layouts.main')

@section('content')
 <div class="row">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title page-title">
                                Student Profile
                            </h4>
                        </div>
                        <div class="panel-body">
                            <form action="/store-student" method="post">
                            @csrf 
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Student ID <span class="required">*</span></label>
                                    <input name="student_id" type="text" class="form-control">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="">Lastname <span class="required">*</span></label>
                                    <input name="lastname" type="text" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Firstname<span class="required">*</span></label>
                                    <input name="firstname" type="text" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Middlename <span class="required">*</span></label>
                                    <input name="middlename" type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="">Gender <span class="required">*</span></label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Date of birth<span class="required">*</span></label>
                                    <input name="date_of_birth" type="date" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Marital Status <span class="required">*</span></label>
                                    <select name="marital_status" id="" class="form-control">
                                        <option value="S">Single</option>
                                        <option value="D">Divorced</option>
                                        <option value="M">Married</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="">Contact Number <span class="required">*</span></label>
                                    <input name="contact_number" type="text" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Email<span class="required">*</span></label>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="col-sm-4">
                                    <label for="">Address <span class="required">*</span></label>
                                    <input name="address" type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
</form>
                    </div>
                </div>
@endsection