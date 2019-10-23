@extends('layouts.master')

@section('styles')
    <style>
        
    </style>    
@endsection

@section('header')
<div id="container">
        <div>
            <button class="close navM" ><a href="index.html"><span>
                    <i class="fa fa-times"></i>
                  </span></a></button>
        </div>
        <div>
            <p class="nav cEstimate" id="cre">Create Estimate</p>
        </div>
        <div>
            <input class="next disabled" id="ext" type="button" value="NEXT">
        </div>
    </div>
  @endsection

@section('content')
<div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <h1>What project are you estimating?</h1>
            </div>
        </div>
    </div>



    <div class="row ml-auto box justify-content-center">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">A new project</h5>
                <p class="card-text">Create a new estimate and set up a new project based on the information.
                </p>

                <div class="project">
                    <input class="l-proj" type="text" onmouseout="verifyPath()" placeholder="Project Name" name="" id="createProject">
                    <br>
                    <span class="req">Required</span>
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-12">
                <button class="a-next disabled" id="btn"><a href="#">NEXT</a></button>
            </div>
        </div>
    </div>

@endsection

@section('script')
    
<script>
        function verifyPath() {
            let createProject = document.getElementById('createProject').value;

            if (createProject !== "") {
                document.querySelector('.a-next').style.background = '#0ABAB5';
                document.querySelector('.next').style.background = '#0ABAB5';

                document.querySelector('.a-next').classList.remove('disabled');
                document.querySelector('.next').classList.remove('disabled');
            } else {
                //console.log('here works');
                document.querySelector('.next').style.background = 'rgba(207, 204, 204, 0.4)';
                document.querySelector('.next').classList.add('disabled');
                document.querySelector('.a-next').style.background = 'rgba(207, 204, 204, 0.4)';
                document.querySelector('.a-next').classList.add('disabled');
            }
        }
    </script>
@endsection