@extends('layouts.app')
<!-- Select Project -->

@section('styles')
    <style>
        
        * {
                margin-right: 0px;
                margin-left: 0px;
                font-family: Ubuntu;
            }
            
        body {
			margin-top: 0px;
        }

            ul {
                display: inline-block;
                float: none;   
                width: fit-content;
                padding-inline-start: 10px;
                margin-top: 24px;
                
            }

            li {
                
                display: inline;
            }
            .h1, h1 {
                font-size: 2.4rem !important;
                margin-top: 4% !important;
                color: #262626;
            }
            .text-center h1 {
                text-align: left !important;
                margin-left: 17.2%;
            }
            button {
                width: 120px;
                background: #ffffff;
                border: none;
                height: 100%;
            }
            .disabled {
                cursor: not-allowed !important;
            }
     /*navbar css*/
     #container {
                display: grid;
                grid-template-columns: 1fr 8fr 2fr;
            }
            /*changed this*/
            #container div {
                box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
                outline: none;
                height: 60px;
            }
            #container p {
                justify-content: center;
                margin-top: 15px;
                font-style: normal;
                font-weight: bold;
                font-size: 1.3em;
                color: #323A43;
            }
            div>#ext {
                background: rgba(207, 204, 204, 0.4);
                font-size: 24px;
                font-weight: bold;
                justify-content: center;
                border: none;
                color: white;
                width: 100%;
                height: 60px;
                outline: none;
                /*added outline none*/
            }
            
            /*changed this from clear to close*/
            div>.close {
                outline: none;
            }
            .close {
                color: #C4C4C4;
                width: 100%;
            }
    /*end of nav bar*/
    .cEstimate { 
    margin: 0 auto;
    align-content: center;
    font-weight: bold;
    font-size: 20px;
    align-items: center;
    flex-wrap: wrap;
}
.next a {
    color: #ffffff;
}
.next {
    width: 10px;
    background: rgba(196, 196, 196, 0.4);
    float: right;
    font-size: 24px;
    font-weight: bold;
    padding-right: 98px;
    padding-left: 47px;
    color: white;
}

 .a-next {
    background: rgba(207, 204, 204, 0.4);
    width: 220px;
    height: 60px;
    padding: 5px 20px;
    margin: 0 auto;
    font-size: 24px;
    font-weight: bold;
    margin-top: 60px;
    clear: both;
    border: none;
    color: white;
    border: none !important;
}

.a-next a {
    color: white;
}
p, h3 {
    width: fit-content;
}
.lists {
    width: fit-content;
}
h5 {
    font-weight: bold;
    color: #262626;
}
  .card
  {
    display: grid;
    min-height: 34vh;
    max-width: fit-content;
    position: relative;
}
.card .card-body
{
    display: inline-grid;
    max-width: fit-content;
    justify-content: baseline;
    align-items: flex-end;
}
.card-body:hover {
    border: 5px solid black;
    box-sizing: border-box;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 50px;
    padding: 10px;
    width: 100%;
    background: #ffffff;
    border: 1px solid rgba(145, 145, 145, 0.4);
    color: #091429;
}
.project {
    border: 2px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    border: none;
    width: 100%;
    vertical-align: middle;
    -webkit-box-pack: justify;
}
.l-proj::placeholder {
    color: #919191;
}
.l-proj:focus {
    border: none;
}
.req {
     margin-left: 221px; 
     margin-top: 12rem;
    float: right;
}
.signup {
    background: #0ABAB5;
    width: 145px;
    height: 54px;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: white;
}

.est {
    color: white; 
    background:  #0ABAB5;
    font-weight: bold;
    font-size: 28px;
    line-height: 32px;
    padding: 10px;
    text-align: center;
    padding-top: 10px !important;
}
li {
    padding: 15px;
    margin: 8px !important;
    margin-top: 21px;
}
li a {
    margin: 1px;
    padding: 1px;
    color: black;
}

#new_user {
    margin-top: 20px;
    margin-left: 2%;
}
.shift {
    font-weight: bold;
    font-size: 28px;
    line-height: 32px;
}
.login {
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
}
.hidden {
    display: none;
}
.disabled {
    cursor: not-allowed;
}
.box {
    margin-top: 4%;
}

#container {
    display: grid;
    grid-template-columns: 1fr 8fr 2fr;
}
option, select{
    font-size: 14px;
}
.dropbtn:focus, .project:focus, .dropbtn:hover, .project:hover {
    cursor: pointer !important;
}
#clear{
    padding: auto;
}
 
.row {
    margin-right: 0;
    margin-left: -15px;
}



@media (max-width: 992px) 
{
.h1, h1 {
    font-size: 2rem !important;
    margin-top: 3% !important;
}
.text-center h1 {
    margin-left: 17.2%;
}
button {
    width: 120px;
    height: 100%;
}
#container p {
    font-size: 19.5px;
    margin-top: 9px;
}
div > #ext{
    font-size: 20px;
}
.a-next {
    width: 180px;
    height: 60px;
    padding: 5px 20px;
    font-size: 20px;
    margin-top: 60px;
}
.h5, h5 {
    font-size: 1.05rem;
}
p.card-text {
    font-size: .8rem;
}
  .card
  {
    min-height: 34vh;
}
.card-body:hover {
    border: 3px solid black;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 40px;
    padding: 10px;
    width: 100%;
}
.project {
    border: 1.5px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    width: 100%;
    margin-bottom: 2rem;
}
.l-proj::placeholder {
    line-height: 10px;
}
.box {
    margin-top: 3%;
}
option, select{
    font-size: 14px;
}
#container .navM img {
    height: 20px;
}

}



@media (max-width: 767px) 
{
.h1, h1 {
    font-size: 1.5rem !important;
    margin-top: 3% !important;
}
.text-center h1 {
    margin-left: 17.2%;
}
#container p {
    margin-top: 5px;
}
.a-next {
    width: 160px;
    height: 55px;
    padding: 5px 15px;
    font-size: 18px;
    margin-top: 60px;
    margin-bottom: 100px;
}
  .card
  {
    min-height: 28vh;
    margin-bottom: 30px;
    max-width: 85%;
    margin-left: 7%;
}
.card-body:hover {
    border: 2px solid black;
}
.dropbtn, .project {
     margin-top: 1vh; 
    height: 40px;
    padding: 0;
    width: 72vw !important;
}
.project {
    border: 1.5px solid rgba(145, 145, 145, 0.4);
    overflow: hidden;
}
.l-proj {
    font-size: 14px;
    width: 100%;
    margin: .5rem 0 0 .3rem;
}
.l-proj::placeholder {
    line-height: 10px;
}
.box {
    margin-top: 3%;
}
option, select{
    font-size: 14px;
}
#container .navM img {
    height: 20px;
}
#container p {
    font-size: 17.5px;
    margin-top: 12px;
}
div > #ext {
    font-size: 18px;
}
#container .navM img {
    height: 18px;
}

}


@media (max-width: 576px) 
{
.h1, h1 {
    font-size: 1.15rem !important;
}
#container p {
    margin-top: 0x;
}
.a-next {
    width: 120px;
    height: 45px;
    padding: 5px 10px;
    font-size: 15px;
    margin-top: 25px;
    margin-bottom: 110px;
}
.h5, h5 {
    font-size: 1rem;
}
  .card
  {
    min-height: 25vh;
}
p.card-text {
    font-size: .78rem;
    padding-right: .5rem;
}
.card-body:hover {
    border: 1px solid black;
}
.dropbtn, .project {
     margin-top: 0; 
    height: 35px;
    padding: 0;
    width: 70vw !important;
}
.project {
    border: .5px solid rgba(145, 145, 145, 0.4);
}
.l-proj {
    font-size: 12px;
}
.box {
    margin-top: 2%;
}
option, select{
    font-size: 12px;
}
#container .navM img {
    height: 20px;
}
#container p {
    font-size: 16px;
    margin-top: 12px;
}
div > #ext {
    font-size: 15px;
}
#container .navM img {
    height: 14px;
}
button {
    width: 70px;
}

}
           
            @media (max-width: 976px) {
    div>#ext{
        font-size: 15px;
    }
            }

    </style>        
@endsection


@section('content')
    <div class="contaner">
            
        <header style="border-bottom: 2px solid rgb(223, 223, 223);">
            <nav style="display: flex; ">
                <a href="#"  @click.prevent="$router.push('/estimate')" class="column-1">
                    <img
                        src="https://res.cloudinary.com/mide358/image/upload/v1570621469/clear_24px_rasbwc.png"
                        alt="navIcon"
                    />
                </a>
                <a href="#" @click.prevent="previous" class="column-1">
                    <img
                        src="https://res.cloudinary.com/mide358/image/upload/c_scale,h_27,w_13/v1570621434/Vector_ag4hnv.png"
                        alt="navIcon"
                    />
                </a>
                <div class="column-2">Create Estimate</div>
                <a href="#" @click.prevent="next" class="column-3">NEXT</a>
            </nav>
        </header>


        <h1 class="">What project are you estimating?</h1>
        <form method="post" action="/estimate/create/step2">
            @csrf
            <div class="row ml-auto mr-auto box justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">A previously created project</h5>
                            <p style="padding-bottom: 10px;" class="card-text">Find estimate for a previously created project, by doing so the
                                estimate
                                gets populated with some of the data. 
                            </p>
                            <div class="contents dropdown">
                                <select class="dropbtn" name="old_project" id="projectSelect">
                                    <option selected value="">Select</option>
                                    @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                    @endforeach
                                </select>  
                                <!-- <i class="fa fa-caret-down"></i> -->                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">A new project</h5>
                            <p class="card-text">Create a new estimate and set up a new project based on the
                                information.
                            </p>
                            <input type="text" name="new_project" id="name" placeholder="Project Name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!-- @if(session('success'))<p><span class="alert alert-success">{{session('success')}}</span></p>
                @elseif(session('error'))<p><span class="">{{session('error')}}</span></p> @endif -->
            </div>
            <button type="submit" class="btn dark">NEXT</button>
        </form>
    </div>
@endsection

@section('header')
<div id="container">
        <div>
            <button class="close navM"><a href="/dashboard"><span>
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
    <form method="post" action="/estimate/create/step2">
        @csrf
        <div class="row ml-auto box justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">A previously created project</h5>
                            <p class="card-text">Find estimate for a previously created project, by doing so the estimate gets populated with some of the data.</p>
        
                            <div class="dropdown mr-1">
                                <select class="dropbtn" name="" onmouseout="verifyPath()" id="projectSelect">
                            <option value="select" selected="disabled">Select Project</option>
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->title}}</option>
                                @endforeach
                            {{-- <a href=""><option value="app" class="dropdown-item">Glacier Fintech App</option></a>
                            <a href=""><option value="branding" class="dropdown-item">AB Technology Solutions Branding</option></a> --}}
                        </select>
                                <!-- <i class="fa fa-caret-down"></i>                            -->
                            </div>
                        </div>
                    </div>
                </div>
    
            <div class="col-md-4">
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
                    <button class="a-next disabled"><a href="#">NEXT</a></button>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')
<script>
        let est_content = document.querySelector('#est_content');
        let estimate_page = document.querySelector('#Create_estimate');

        let hide = () => {
            // estimate_page.classList.add('hidden');
            document.querySelector('#Create_estimate').classList.remove('hidden');
            document.querySelector('#estimate').classList.add('hidden');

        }

        est_content.addEventListener('click', hide);


        document.querySelector('#close').addEventListener('click', () => {
            document.querySelector('#estimate').classList.remove('hidden');
            document.querySelector('#Create_estimate').classList.add('hidden');

        });

        //createProject = '';
        function verifyPath() {
            let createProject = document.getElementById('createProject').value;
            let projectSelect = document.getElementById('projectSelect');

            let ele = projectSelect.selectedIndex;

            if (createProject !== "" || ele !== 0) {
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