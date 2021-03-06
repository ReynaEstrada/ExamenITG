<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex flex-column items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" >Inicio</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-center-tab" data-bs-toggle="pill" data-bs-target="#pills-center" type="button" role="tab" aria-controls="pills-center" aria-selected="false">Centro</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-student-tab" data-bs-toggle="pill" data-bs-target="#pills-student" type="button" role="tab" aria-controls="pills-student" aria-selected="false">Alumnos</button>
                 </li>
                 <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-score-tab" data-bs-toggle="pill" data-bs-target="#pills-score" type="button" role="tab" aria-controls="pills-score" aria-selected="false">Calificaciones</button>
                 </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                   <div class="d-flex flex-column"> 
                        <img src="{{asset('img/alumnos.png')}}" alt="imagen alumno" width="100" loading="lazy">
                        <img src="{{asset('img/calificaciones.png')}}" alt="imagen calificaciones" width="100" loading="lazy">
                        <img src="{{asset('img/centros.png')}}" alt="imagen centros" width="100" loading="lazy">
                     </div>
                </div>
                <div class="tab-pane fade" id="pills-center" role="tabpanel" aria-labelledby="pills-center-tab">
                 <div class="table-responsive">
                     <table class="table table-hover">
                           <thead>
                               <tr>
                               <th scope="col">#</th>
                               <th scope="col">clave</th>
                               <th scope="col">Telebachillerato</th>
                               <th scope="col">Clave del centro de trabajo</th>
                               <th scope="col">Municipio</th>
                               <th scope="col">Encargado</th>
                               <th scope="col">Correo del encargado</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($centers as $center)
                            <tr>
                               <td>{{$center->id}}</td>
                               <td>{{$center->key}}</td>
                               <td>{{$center->bachelor}}</td>
                               <td>{{$center->key_of_center}}</td>
                               <td>{{$center->municipality}}</td>
                               <td>{{$center->incharged}}</td>
                               <td>{{$center->incharged_email}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                       </table>
                     </div>    
                    {{$centers->links()}}     
                </div>
                <div class="tab-pane fade" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
                    <div class="table-responsive">
                     <table class="table table-hover">
                           <thead>
                               <tr>
                               <th scope="col">#</th>
                               <th scope="col">Matricula</th>
                               <th scope="col">Telebachillerato</th>
                               <th scope="col">Estatus Alumno</th>
                               <th scope="col">Nombre</th>
                               <th scope="col">Paterno</th>
                               <th scope="col">Materno</th>
                               <th scope="col">Genero</th>
                               <th scope="col">Generaci??n</th>
                               <th scope="col">Municipio Residencia</th>
                               <th scope="col">Pa??s Naciemiento</th>
                               <th scope="col">Fecha Naciemiento</th>
                               </tr>
                           </thead>
                            <tbody> 
                                 @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->registration_number}}</td>
                                    <td>{{$student->bachelor}}</td>
                                    <td>{{$student->student_status}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->parental_surname}}</td>
                                    <td>{{$student->maternal_surname}}</td>
                                    <td>{{$student->gender}}</td>
                                    <td>{{$student->generation}}</td>
                                    <td>{{$student->municipality_residence}}</td>
                                    <td>{{$student->country}}</td>
                                    <td>{{$student->born_date}}</td>
                                </tr>
                             @endforeach
                            </tbody>
                       </table>
                     </div>    
                     {{$students->links()}}
                     </div>
                <div class="tab-pane fade" id="pills-score" role="tabpanel" aria-labelledby="pills-score-tab">...</div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
