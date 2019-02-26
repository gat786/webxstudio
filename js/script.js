window.addEventListener("scroll",function(){
  change();
});
change();

var form = document.getElementById('form');
if(form)
{
  form.addEventListener('submit', function(e){
    e.preventDefault();
    document.getElementById('loading').style.display = "block";
    document.getElementById('loading').style.zIndex = 9999;
    fetch(form.action,{
      method: "POST",
      body: new FormData(form)
    }).then( function(response) {
      form.reset();
      return response.text();
    }).then(function(response){
      console.log(response)
      form.innerHTML += "Thank you for contacting us. We'll get to you as soon as possible";
      document.getElementById('loading').style.display = "block";
    document.getElementById('loading').style.zIndex = -9999;
    });
  });
} 

function change()
{
  if(window.scrollY > 0)
  {
    document.querySelector('nav').style.backgroundColor = "rgba(43,62,79,0.8)";
    document.querySelector('nav').style.boxShadow = "0 1rem 2rem rgba(0,0,0,.5)";
  }
  else
  {
    document.querySelector('nav').style.backgroundColor = "transparent";
    document.querySelector('nav').style.boxShadow = "0 0 0 transparent";
  }
}

var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 50;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
}

