
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index User</title>
  </head>
  <body>
    <div class="row" style="display: flex;align-items: center;justify-content: center;    padding-top: 30px;">
        <div class="col-10 ">
            <table class="table table-striped table-primary table-bordered">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Creado en</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    

    </div>

    
<!-- <h1>helloo view</h1>
<button type="button" class="btn btn-secondary">Secondary</buttonn>
<h1><?php echo $users ?></h1> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>

