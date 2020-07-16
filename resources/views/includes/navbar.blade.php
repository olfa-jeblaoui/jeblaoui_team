<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Réservation_Hôtel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavALLMarkup">
      <div class="navbar-nav">
        <a  class="nav-item nav-link active" href="{{url('/reservation')}}">Reservation <span class="sr-only">(current)</span></a>
        <a  class="nav-item nav-link" href="{{url('/affectation')}}">Configuration</a> 
        <a  class="nav-item nav-link" href="{{url('/historique')}}">Historique</a>
      </div>
    </div>
  </nav>