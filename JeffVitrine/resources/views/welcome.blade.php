@extends('layouts.app')

@section('title', 'Placeholder')

@section('content')

    <div class="containers">
        <div class="mobilemenubar">

        </div>
        <section id="Presentation">
        <div class="text_column">
            <div class="Text_presentation_box">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <br/>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

            </div>

        </div>
        <div class="Map_column">
            <div class="map" id="myMap">
            </div>
        </div>
        </section>
        <section id="Services">
            <div class="Center"><h2>Accommodations Disponibles</h2></div>
            <div class="Display">
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="FirstPic">
                <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
            </div>
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="SecondPic">
                    <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
                </div>
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="ThirdPic">
                    <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
                </div>
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="FourthPic">
                    <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
                </div>
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="FifthPic">
                    <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
                </div>
                <div class="imageBox"><img src="https://placehold.co/300x180" alt="SixthPic">
                    <div class="imageDescription">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</div>
                </div>

            </div>
            <div id="zoomedImage" onclick="this.style.display='none';"></div>
        </section>
        <section id="Contact">
            <div class="contact-container">
  <div class="contact-left">
    <h2>Contactez-Moi</h2>
    <form method="POST" action="{{ route('sendMail') }}" class="contact-form">
      <div class="single-row">
          <input type="text" placeholder="Prénom" class="form-in mr" required>
          <input type="text" placeholder="Nom"class="form-in ml" required >
      </div>
      <div class="multiple-row">
          <input type="email" placeholder="Email" class="form-in" required>
          <textarea placeholder="Votre message" class="form-in"></textarea>
          <input type="submit" id="submit"><label for="submit"><i class="fas fa-paper-plane"></i></label>
      </div>

    </form>
  </div>
  <div class="contact-right">
    <h2>Contact Informations</h2>
    <div class="contact-info">
      <p><i class="fas fa-phone-alt"></i> placeholder </p>
      <p><i class="fas fa-envelope"></i> placeholder </p>
      <p><i class="fas fa-map-marker-alt"></i> Saint-Claude, Guadeloupe</p>
    </div>

    <div class="social-links">
      <a href="#"><i class="fab fa-facebook"></i></a>
    </div>
  </div>
</div>

        </section>
    </div>
<script>
    function zoomImage(){
    let images= document.querySelectorAll('.imageBox img');
    let zoomedImage= document.querySelector('#zoomedImage');

    images.forEach(img => {
  img.addEventListener('click', function() {
    zoomedImage.style.backgroundImage = 'url(' + img.src + ')';
    zoomedImage.style.display = 'block';
  });
});
  }

  document.addEventListener('DOMContentLoaded', function() {
    zoomImage();
});
</script>

    @endsection
