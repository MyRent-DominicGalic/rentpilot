var options = {
  target : "lazy",
  classToLoad : "loaded",
  threshold : 0,
  rootMargin : "0px 0px 50px 0px",
}

var lazyload = new yall(options);

lazyload.run();
