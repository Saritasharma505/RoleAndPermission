<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

<div id="page-wrapper">
            <table class="table" id="table" >
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Country</th>
            <th class="text-center">Salary ($)</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Deepak</td>
            <td>Singh</td>
            <td>pradeep.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>kamal</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Sanjay</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Sandeep</td>
            <td>Kumar</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Kuldeep</td>
            <td>Rawat</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Poonam</td>
            <td>rani</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Rani</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Krishan</td>
            <td>Kumare</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>Female</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>sandeep@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>2000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>India</td>
            <td>15000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Satyam</td>
            <td>kumar</td>
            <td>satyam@gmail.com</td>
            <td>male</td>
            <td>uk</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Pradeep</td>
            <td>Singh</td>
            <td>pradeepnarvaar@gmail.com</td>
            <td>male</td>
            <td>usa</td>
            <td>25000</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>

    </tbody>
</table>
</div>


@stop
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
 

    

