@extends('layouts.main')

@section('container')
   <h4>Nama: <?= $name ?></h4>
   <h4>Email: <?= $email ?></h4>
   <img src="<?= $image ?>" alt="">
@endsection