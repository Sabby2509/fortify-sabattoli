<x-layout>

<header>
<div class="container-fluid movies">
<div class="row h-100 justify-content-around align-items-center">
<div class="col-12 h-25 justify-content-center align-items-center">
<h2 class="text-white text-color display-5 text-center">Contattaci</h2>
</div>
<div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
<div class="row">
<div class="col-12">
<i class="icon bi bi-whatsapp"></i>
</div>
</div>
<div class="row">
<div class="col-12">
<p>Scrivici su Whatsapp</p>
</div> 
</div> 
<div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
<div class="row">
<div class="col-12">
<i class="icon bi bi-instagram"></i>
</div>
</div>
<div class="row">
<div class="col-12">
<p>Scrivici su Instagram</p>
</div>
</div>
</div>


<div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
<div class="row">
<div class="col-12">
<i class="icon bi bi-facebook"></i>
</div>
</div>
<div class="row">
<div class="col-12">
<p>Scrivici su Facebook</p>
</div>
<div class="row h-100 justify-content-center align-items-center">
    <h2 class="text-white display-4 text-center text-color">scrivici una mail</h2>
<div class="col-12 col-md-8 text-white text-color">
    <form method="post" action="{{route('contactUs'}}" >
        @csrf
        <div class="mb-3">
    <label for="user" class="form-label">Inserisci il nome</label>
    <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Inserisci la mail</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Scrivi il messaggio</label>
    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>



</x-layout>