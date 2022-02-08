    function validation(){
      var email =  document.getElementById("email").value;
      var pass =  document.getElementById("password").value;
      var btn = document.getElementById("save").value;

       var error = document.getElementById("error"); 

	   var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
        if(email=="" || pass == "" ){
            error.innerHTML="complete All Fields Please !";
			document.getElementById("HH").style.background = "#F08B8B";
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0;
            return false;
        }
	   if (!email.match(validRegex)) {
		     error.innerHTML="the email is not valid !";
			document.getElementById("HH").style.background = "#F08B8B";
            document.body.scrollTop = 0; 
            document.documentElement.scrollTop = 0;
            return false;
		 
		 }


        }


        function prin(){
           return geElemenById("t").innerHTML = "Hello World!";
                }

        // ajax
        let fact = document.querySelector('#fact');
    let factText = document.querySelector('#factText');

    let numberInput = document.querySelector('#numberInput');
    numberInput.addEventListener('input', getFactAjax);


    function showSuggestionfs(str){
        if(str.length == 0){
                document.getElementById('FN').innerHTML = '';
        }
        else{
            var request = new XMLHttpRequest();
            request.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var node=document.getElementById('FN');
                node.innerHTML =this.responseText;
            }
            }
            request.open("GET","validation.php?fn="+str,true);
            
            request.send();
        }
        }


     


                    function showSuggestionps(str){
                        if(str.length == 0){
                                document.getElementById('ps').innerHTML = '';
                        }
                        else{// pass
                            var request = new XMLHttpRequest();
                            request.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                var node=document.getElementById('ps');
                                node.innerHTML =this.responseText;
                            }
                            }
                            request.open("GET","validation.php?ps="+str,true);
                            
                            request.send();
                        }
                        }


                        function showSuggestionrps(str){//
                            if(str.length == 0){
                                    document.getElementById('rps').innerHTML = '';
                            }
                            else{
                                var request = new XMLHttpRequest();
                                request.onreadystatechange = function(){
                                if(this.readyState == 4 && this.status == 200){
                                    var node=document.getElementById('rps');
                                    node.innerHTML =this.responseText;
                                }
                                }
                                request.open("GET","validation.php?rps="+str,true);
                                
                                request.send();
                            }
                            }
    
