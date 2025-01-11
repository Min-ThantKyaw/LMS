@extends('admin.common.main')
@section('main_section')
    <div class="row main_section_nav border border-primary">
        <div class="col bg-light">
            <h4>Courses</h4>
        </div>
        <div class="col-6">
            <form action="" class="d-flex">
                <select class="form-select select_option">
                    <option value="1">FirstYear</option>
                    <option value="2">SecondYear</option>
                    <option value="1">ThirdYear</option>
                    <option value="2">FouthYear</option>
                    <option value="1">FinalYear</option>
                </select>
                <select class="form-select select_option">
                    <option value="1">ComputerScience</option>
                    <option value="2">ComputerTechnology</option>
                </select>
                <select class="form-select select_option">
                    <option value="1">FirstSeminar</option>
                    <option value="2">SecondSeminar</option>
                </select>
               <button type="submit" class="btn btn-outline-success">Search</button>
            </form>
        </div>
        <div class="col">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter course code">
                    <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="contents oveflow-y-auto">

    </div>
@stop
