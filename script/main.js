var clickTab = document.querySelectorAll('.tablinks');
var tariffTab = document.querySelectorAll('.tariff-tablinks');

// Табы для просмотра авто
  clickTab[0].onclick = function(){
      openTarif(event, 'standart');
  }
  clickTab[1].onclick = function(){
      openTarif(event, 'business');
  }
  clickTab[2].onclick = function(){
      openTarif(event, 'premium');
  }

  // Get the element with id="defaultOpen" and click on it
  clickTab[1].click();

  function openTarif(evt, mark) {
      // Declare all variables
      var i, tabcontent, tablinks;
    
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
    
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
    
      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(mark).style.display = "flex";
      evt.currentTarget.className += " active";
  }


// Табы для выбора тарифов
  tariffTab[0].onclick = function(){
      tariff(event, 'standart-tar');
  }
  tariffTab[1].onclick = function(){
      tariff(event, 'business-tar');
  }
  tariffTab[2].onclick = function(){
      tariff(event, 'premium-tar');
  }

  // Get the element with id="defaultOpen" and click on it
  tariffTab[1].click();

  function tariff(evt, mark1) {
      // Declare all variables
      var i, tabcontent, tablinks;
    
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tariffs_list");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
    
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tariff-tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
    
      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(mark1).style.display = "block";
      evt.currentTarget.className += " active";
  }
// окончание выбора тарифов
// slides
  var prevVolvo, nextVolvo, prevVaz, nextVaz, prevPrem, nextPrem;
  prevVolvo = document.querySelector('.slider_volvo .prev');
  nextVolvo = document.querySelector('.slider_volvo .next');

  prevVaz = document.querySelector('.slider_vaz .prev');
  nextVaz = document.querySelector('.slider_vaz .next');

  prevPrem = document.querySelector('.slider_prem .prev');
  nextPrem = document.querySelector('.slider_prem .next');


  prevVolvo.addEventListener('click',function(){
      plusSlides(-1);
  });
  nextVolvo.addEventListener('click',function(){
      plusSlides(1);
  });

  prevVaz.addEventListener('click',function(){
      plusSlidesvz(-1);
  });
  nextVaz.addEventListener('click',function(){
      plusSlidesvz(1);
  });

  prevPrem.addEventListener('click',function(){
      plusSlidesPr(-1);
  });
  nextPrem.addEventListener('click',function(){
      plusSlidesPr(1);
  });

  var slideIndex = 1;
  showSlides(slideIndex);
  showSlidesvz(slideIndex);
  showSlidesPr(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  function plusSlidesvz(n) {
    showSlidesvz(slideIndex += n);
  }
  function plusSlidesPr(n) {
    showSlidesPr(slideIndex += n);
  }


  function showSlides(n) {
    var i;
    var slides = document.querySelectorAll(".slider_volvo .mySlides");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block";
    console.log(slides); 
  }

  function showSlidesvz(n) {
    var i;
    var slides = document.querySelectorAll(".slider_vaz .mySlides");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block"; 
  }

  function showSlidesPr(n) {
    var i;
    var slides = document.querySelectorAll(".slider_prem .mySlides");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block"; 
  }
// end slider in our_cars

// button Order

  // var btnOrder = document.querySelectorAll('.btn_order');
  // for(var i = 0; i < btnOrder.length; i++){
  //   btnOrder[i].onclick = toThanks;
  // }
  // function toThanks(){
  //   window.location.href = 'thanks.html';
  // }