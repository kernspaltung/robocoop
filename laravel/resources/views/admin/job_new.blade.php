@extends('layouts.master')

@section('title','Chambas')       

@section('id','admin_chambas')       

@section('content')       

    <h1>Nueva Chamba</h1>
    
    <form action="http://localhost:8000/api/v0/job" method="post" id="form_new_job" class="row">

        <label for="new_job_ame">Name</label>
            <input type="text" id="new_job_ame" name="ame"/>

        <label for="new_job_description">Description</label>
            <input type="text" id="new_job_description" name="description"/>

        <label for="new_job_deliverables">Deliverables</label>
            <input type="text" id="new_job_deliverables" name="deliverables"/>

        <label for="new_job_status">Status</label>
            <input type="text" id="new_job_status" name="status"/>

        <label for="new_job_administrators">Administrators</label>
            <input type="text" id="new_job_administrators" name="administrators"/>

        <label for="new_job_members">Members</label>
            <input type="text" id="new_job_members" name="members"/>

        <label for="new_job_tasks">Tasks</label>
            <input type="text" id="new_job_tasks" name="tasks"/>

        <label for="new_job_sessions">Sessions</label>
            <input type="text" id="new_job_sessions" name="sessions"/>

        <label for="new_job_materials">Materials</label>
            <input type="text" id="new_job_materials" name="materials"/>

        <label for="new_job_payments">Payments</label>
            <input type="text" id="new_job_payments" name="payments"/>


        <input type="submit">


    </form>

@endsection
