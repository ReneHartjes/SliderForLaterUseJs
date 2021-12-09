<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br />
<h2 id="headline11" style ="text-align:center;">Werte für {{insert_content::121681}}</h2>
<br />
    <div id="solarwrapper">
        <div id="bg1div">
        <div id="giffront">
        <p id="textidid">Leistung <br/>(max.)</p>
        <b><h3 id="head1er" >{{insert_content::121678}}</h3></b>
        <p id="textidid2">kW</p>
        </div>
        <div id="gifback">
            <img src="./Solarfiles/animationgif.gif" />
        </div>
        </div>
        <div id="bg2div">
        <p id="textidid" >Ertrag </br></p>
        <b><h3 id="head1er2" >{{insert_content::121679}}</h3></b>
        <p id="textidid2">kWh</p>
        </div>		
        <div id="bg3div">
        <p id="textidid" >CO2 <br />Minderung</p>
        <b><h3 id="head1er" >{{insert_content::121680}}</h3></b>
        <p id="textidid2">kg</p>
        </div>	
    </div>




    <!---"Stylesheet"----->
    <style>

        
#solarwrapper div p br {
            display: block; /* makes it have a width */
            content: ""; /* clears default height */
            margin-top: -10px; /* change this to whatever height you want it */
}

        #solarwrapper br{
            line-height:10px;
        }

        #head1er{
            color:white;
            font-size: 22px;
            margin-top: -8px;
            text-align: center;
            margin-left: -11px;
            font-weight:bold;
            line-height: 1;
        }
        #head1er2{
            color:white;
            font-weight:bold;
            font-size: 22px;
            margin-top: 35px;
            text-align: center;
            margin-left: -11px;
            line-height: 1;
        }
        #textidid{
            color:white;
            margin-top: 123px;
            font-size: 16px;
            text-align: center;
            margin-left: -11px;
        }
        #textidid2{
            color:white;
            margin-left: -11px;
            font-size: 16px;
            line-height: 1;
            text-align: center;
            margin-top: -2px;
        }
        #solarwrapper{
            display:flex;
            justify-content: center;
            position: relative;
        }
        #bg1div{
            width: 113px;
            height: 259px;
            background-color: transparent;
            position:relative;
            margin:5px;
        }
        #giffront{
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 10;
            background-size: cover;
            background-image: url("./Solarfiles/itb-solar_sun_green.png");
        }
        #gifback{   

            position: absolute;
            color:white;
            z-index: 5;
            top:39.7%;
            left:9.7%;
        }
        #bg2div{
            width: 113px;
            height: 259px;
            background-image: url("./Solarfiles/itb-solar_home_grey.png");
            margin:5px;
        }
        #bg3div{
            width: 113px;
            height: 259px;
            background-image: url("./Solarfiles/itb-solar_co2_green.png");
            margin:5px;

        }
@media (max-width:600px) {
        #headline11{
        font-size:26px;
            }
}
@media (max-width:400px) {

        #headline11{
                font-size:24px;
                }
        #head1er{

                font-size: 18px;
                margin-left: 2px;
           
            }
        #bg2div{

                margin-left: 23px;
                margin-right: 23px;
            }
        #head1er2{
                font-size: 18px;
                margin-left: 2px;
            }  
        #textidid2{
                margin-left: 3px;
                font-size: 14px; 
        }
        #textidid{
            margin-left:3px;
            font-size: 14px; 
        }   
}
@media (max-width:375px) {
        #head1er{
            margin: 12px 0px auto;
            margin-left: 3px;
        }
        #bg2div{
        margin-left: 12px;
        margin-right: 12px;
        }
        #head1er2{
            margin: 41px 0px auto;
            margin-left: 3px;
        }       
        #textidid2{
        font-size: 14px;
        margin:  15px 0px auto;
        font-size: 14px; 
        }
        #textidid{
            margin: 123px 0px auto;
            font-size: 14px;
        }
}
@media (max-width:365px) {
    #bg2div{
    margin-left: 5px;
    margin-right: 5px;
    }
}
@media (max-width:350px) {


    


    #head1er2{
        margin-left: 3px;
    }
    #head1er{
        margin-left: 3px;
    }
}
@media (max-width:340px) {
        #solarwrapper{
            flex-direction: column;
            
            align-items: center;
        }
        #head1er{
            color:white;
            font-size: 22px;
            margin-top: 3px;
            text-align: center;
            margin-left: -13px;
            line-height: 1.1;
      
        }
        #head1er2{
            color:white;
            font-size: 22px;
            margin-top: 15px;
            text-align: center;
            margin-left: -13px;
            line-height: 1.1;

        }
        #textidid{
            color:white;
            margin-top: 123px;
            font-size: 16px;
            text-align: center;
            margin-left: -13px;

        }
        #textidid2{
            color:white;
            margin-left: -13px;
            font-size: 16px;
            line-height: 1;
            text-align: center;
            margin-top: 8px;
        }
    }
    </style>
</body>
</html>