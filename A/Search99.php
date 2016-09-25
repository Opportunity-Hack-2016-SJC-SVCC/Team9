<html>
   
   <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
    
    
    
    <body>
    <script>
        
        
        background: url('/test.jpg') no-repeat center center;
    .bg {
  background: url('/test1.jpg') no-repeat center center;
  position: fixed;
  width: 100%;
  height: 350px; /*same height as jumbotron */
  top:0;
  left:0;
  z-index: -1;
}

.jumbotron {
  margin-bottom: 0px;
  height: 350px;
  color: white;
  text-shadow: black 0.3em 0.3em 0.3em;
  background:transparent;
            } 
        
        
        
        
        
        
        var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});</script>
    
    <div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-8 col-md-offset-4 col-lg-offset-0">
      <div class="well">
      <h3 align="center">Search Filter</h3>
        <form class="form-horizontal">
          <div class="form-group">
            <label for="location1" class="control-label">Location</label>
            <select class="form-control" name="" id="location1">
              <option value="">Any</option>
              <option value="">1</option>
              <option value="">2</option>
            </select>
          </div>
          <div class="form-group">
            <label for="type1" class="control-label">Type</label>
            <select class="form-control" name="" id="type1">
              <option value="">Any</option>
              <option value="">1</option>
              <option value="">2</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pricefrom" class="control-label">Min Price</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon1">$</div>
              <input type="text" class="form-control" id="pricefrom" aria-describedby="basic-addon1">
            </div>
          </div>
          <div class="form-group">
            <label for="priceto" class="control-label">Max Price</label>
            <div class="input-group">
              <div class="input-group-addon" id="basic-addon2">$</div>
              <input type="text" class="form-control" id="priceto" aria-describedby="basic-addon1">
            </div>
          </div>
          <p class="text-center"><a href="#" class="btn btn-danger glyphicon glyphicon-search" role="button"></a></p>
        </form>
      </div>
    </div>
	</div>
</div>
    
 
    
  
    </body>
</html>
