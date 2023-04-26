
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index User</title>
  </head>
  <body>
    <div class="row" style="display: flex;align-items: center;justify-content: center;    padding-top: 30px;">
        <div class="col-10 ">
            <formform  method="post" action="guardar" novalidate>
                @csrf
            
                <div class="mb-3">
                    <label class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{ old('nombre') }}">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" >
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" value="{{ old('password') }}">
                </div>
                <input type="submit" class="btn btn-info" value="enviar">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>


