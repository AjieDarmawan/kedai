<style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/
    /* style untuk link popup */
    a.popup-link {
        padding:10px 0;
        text-align: center;
        margin:7% auto;
        position: relative;
        width: 100%;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.popup-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */ 
     #pemegangsaham {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #pemegangsaham:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /*style untuk popup */ 
     #v_ruas_detail {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #v_ruas_detail:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
     #danatalangan {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #danatalangan:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    #penagihankelman {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #penagihankelman:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    #pembayaranlman {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #pembayaranlman:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

     #progreskonstriksi {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -300px;
    }
    #progreskonstriksi:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /*style untuk popup */  
     #progrestanah {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #progrestanah:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

     #progresbiayakontruksi {
        /*overflow-x:scroll;*/
         visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #progresbiayakontruksi:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    #addkontraktor {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #addkontraktor:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

     #addsubkontraktor {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #addsubkontraktor:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

     #add_issue {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #add_issue:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    #add_fleet {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #add_fleet:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    #add_material {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #add_material:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    
    #add_supervisi {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #add_supervisi:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    #add_pmi {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #add_pmi:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    #pengembalianlman {
        /*overflow-x:scroll;*/
        visibility: hidden;
        opacity: 0;
        margin-top: -700px;
    }
    #pengembalianlman:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    
    


    @media (min-width: 768px){
        .popup-container {
            width:900px;

        }
    }
    @media (max-width: 767px){
        .popup-container {
            width:100%;
        }
    }
    .popup-container {
        position: relative;
        margin:4% auto;
        padding:5px 5px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup-close {
        position: absolute;
        top:3px;
        right:3px;
        background-color: #333;
        padding:7px 10px;
        font-size: 10px;
        text-decoration: none;
        line-height: 1;
        color:#fff;
        margin-top: -400px;
    }


        .grid .ibox {
            margin-bottom: 0;
        }

        .grid-item {
            margin-bottom: 25px;
            width: 100%px;
        }






    </style>
    <style type="text/css">
  
* {margin:0; padding: 0;}

body {font-family: Arial, Helvetica, sans-serif;}

/* Tombol Button Pesan */
#button {margin: 5% auto; width: 100px; text-align: center;}
#button a {
  width: 100px;
  height: 30px;
  vertical-align: middle;
  background-color: #F00;
  color: #fff;
  text-decoration: none;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid transparent;
}

/* Jendela Pop Up */
#popup {
  width: 100%;
  height: 100%;
  position: fixed;
  background: rgba(0,0,0,.7);
  top: 0;
  left: 0;
  z-index: 9999;
  visibility: hidden;
}

.window {
  width: 600px;
  height: 500px;
  background: #fff;
  border-radius: 10px;
  position: relative;
  padding: 10px;
  text-align: center;
  margin: 5% auto;
}
.window h2 {
  margin: 100px 0 0 0;
}
/* Button Close */
.close-button {
  width: 6%;
  height: 20%;
 
}

/* Memunculkan Jendela Pop Up*/
#popup:target {
  visibility: visible;

        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 9999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
        box-shadow: 0 3px 0px 0px #eea900;
        
}


</style>