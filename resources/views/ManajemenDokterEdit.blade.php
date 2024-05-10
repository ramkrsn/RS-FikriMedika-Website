<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/desktop.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar min-vh-100">
                <img src="/img/Logo.png" alt="" class="img-logo">
                <ul class="nav flex-column">
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/1.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/2.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Manajemen Dokter</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/3.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Manajemen Kamar</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/4.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Resources</a>
                    </li>
                </ul>
            </div>
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Manajemen Dokter</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Edit Doctor</h1>
                    <div class="container form-container">
                        <form action="{{url('updatedokter/'.$dokter->iddokter.'/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$dokter->namadokter}}" name="namadokter">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$dokter->jadwaldokter}}" name="jadwaldokter">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{$dokter->polidokter}}"name="polidokter" >
                            </div>
                            <div class="form-group">
                                <p class="black-text">Wajah Dokter</p>
                                <input type="file" class="form-control-file" name="wajahdokter" value="{{$dokter->wajahdokter}}" accept="image/*" >
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update</button> 
                                <a href="{{url('/')}}" class="btn btn-danger">Cancel</a>
                            </div>
                            @csrf
                            @method('PATCH')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
