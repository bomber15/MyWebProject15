  $(document).ready(function(){ //This is the start of the function and whats inside happens when the page loads
  var imageName = ["img/ireland.jpg","img/france.jpg", "img/germany.jpg" , "img/england.jpg" ];  //Array of images
  var indexNum = 0; //Sets the indexNum to 0
  
 $("#picture").click(function(){ // Changes when the user clicks on the Image
	  $("#picture").fadeOut(300,function(){ // This fades out the image and fades in the next image
      	 $("#picture").attr("src",imageName[indexNum]); //This adds the next image in the array
	      indexNum++; // indexes tru images 
	 
	 if(indexNum > 2){ //Goes back to first image after 3 image clicks
	  indexNum=0; 
	 }
	 $("#picture").fadeIn(500);
	});
  });
 });
 
 $ (document).ready(function(){ //When the page loads do whats in the function
 	
 	$('#content').load('city.php'); //Whatever has the id content load the php fine there
 	
 });