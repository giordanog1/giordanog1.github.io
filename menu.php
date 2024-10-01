<!DOCTYPE html>          


<html>                      

  <head>                     
      
    <title>HeaderMenu</title>  
    <style>
a {
      text-decoration: none;
    }

a:hover {
text-decoration: underline dotted red;
}

body
{
 text-align: left;
 font-family: 'Roboto Mono', monospace;
 color: white;
 font-size: large;

}


.line-container {
            position: relative;
            width: 100%;
            height: 1px;
            background-color: #fff; /* Base line color */
            overflow: hidden;
        }
        
.glow-line {
            position: absolute;
            top: 0;
            left: -10%; /* Start outside the visible area */
            width: 15%; /* Width of the glowing part */
            height: 100%;
            background: linear-gradient(to right, #ff0000, #1e00ff);
            box-shadow: 0 0 40px rgb(0, 242, 255), 0 0 40px rgb(1, 251, 255);
            animation: moveGlow 8s linear infinite;
        }

        @keyframes moveGlow {
            0% {
                left: -15%;
            }
            100% {
                left: 100%;
            }
        }



     </style>
  </head>                 
   
   
  <body link="blue" vlink="blue" alink="red">  
  
  &nbsp <a href=" ">Home</a> &nbsp 
  <a href=" ">About</a>  &nbsp 
  <a href=" ">Skills</a>  &nbsp 
  <a href="https://github.com/giordanog1?tab=projects">Github</a>  &nbsp
  <a href=" ">Contact</a>  &nbsp
<div class="line-container">
    <div class="glow-line"></div>
    
  </body>                    
  
</html>                     