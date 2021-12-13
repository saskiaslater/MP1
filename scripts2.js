// function to asynchronously fetch file contents from path/URL "fromFile" 
// and insert them in the DOM object found with "whereTo" -- note this
// uses document.querySelector, so use CSS notation on "whereTo"

function loadDatabase() {

  // 1. creating a new XMLHttpRequest object
  ajax = new XMLHttpRequest();

  // 2. defines the GET/POST method, the source, and the async value of the AJAX object
  ajax.open("GET", "print.php", true);

  // 3. provides code to do something in response to the AJAX request
  ajax.onreadystatechange = function() {

    if ((this.readyState == 4) && (this.status == 200)) { // if .readyState is 4, the process is done; and if .status is 200, there were no HTTP errors

      // update the board based on info from the server
      console.log("Output: " + this.responseText);

    } else if ((this.readyState == 4) && (this.status != 200)) { // if .readyState is 4, the process is done; and if .status is NOT 200, output the error into the console

      console.log("Output: " + this.responseText);
      
      testresponse = '[{"id":"6","appt":"2021-12-10 20:41:25","player_mark":"X","player_space":"A1"},{"id":"7","appt":"2021-12-10 20:41:32","player_mark":"O","player_space":"B2"},{"id":"8","appt":"2021-12-10 21:58:25","player_mark":"O","player_space":"C3"}]';
      
      incomingObject = JSON.parse(testresponse);
      console.log(incomingObject);
      
      incomingObject[0].player_mark
      incomingObject[0].player_space
      
      for (let i = 0, i < 5; i++) {
        text += "" + i + "<br>";
        
      }

    }

  } // end ajax.onreadystatechange function

  // 4. let's go -- initiate request and process the responses
  ajax.send();

}

function saveMark(mark, space) { // put this into each function to find o and x

  // 1. creating a new XMLHttpRequest object
  ajax = new XMLHttpRequest();
  
 
  ajaxURL = "add-record.php" + "?" + "playmark=" + mark + "&" + "playspace=" + space;
  

  // 2. defines the GET/POST method, the source, and the async value of the AJAX object
  ajax.open("GET", ajaxURL, true);

  // 3. provides code to do something in response to the AJAX request
  ajax.onreadystatechange = function() {

    if ((this.readyState == 4) && (this.status == 200)) { // if .readyState is 4, the process is done; and if .status is 200, there were no HTTP errors

      // update the board based on info from the server
      console.log("Output: " + this.responseText);

    } else if ((this.readyState == 4) && (this.status != 200)) { // if .readyState is 4, the process is done; and if .status is NOT 200, output the error into the console

      console.log("Error: " + this.responseText);

    }

  } // end ajax.onreadystatechange function

  // 4. let's go -- initiate request and process the responses
  ajax.send();

}




turn = 1;
winner = 0;
a1filled = false;
a1win = "";
b1filled = false;
b1win = "";
c1filled = false;
c1win = "";
a2filled = false;
a2win = "";
b2filled = false;
b2win = "";
c2filled = false;
c2win = "";
a3filled = false;
a3win = "";
b3filled = false;
b3win = "";
c3filled = false;
c3win = "";
//starting conditions so that the conditions will change once squares have been clicked
window.onload = function() {

  // add a click function to the <div> with id="a1"
  
  loadDatabase(); 
  setInterval(function(){ loadDatabase(); }, 1000);



  document.querySelector("#a1").onclick = function() {


    if (a1filled == false) {


      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#a1 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#a1 img").style.display = "block";
        turn = 2;
        a1filled = true;
        a1win = "x";
        saveMark("x","a1");
      
        
        

      } else {
        document.querySelector("#a1 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#a1 img").style.display = "block";
        turn = 1;
        a1filled = true;
        a1win = "o";
        saveMark("o","a1");
        
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  } // end #a1 onclick function
//for one square, a1 if it is player 1's turn it will use X and if it is player 2's turn it will use O
  //other conditions change once a box is clicked 



  document.querySelector("#b1").onclick = function() {

    if (b1filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#b1 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#b1 img").style.display = "block";
        turn = 2;
        b1filled = true;
        b1win = "x";
        saveMark("x","b1");

      } else {
        document.querySelector("#b1 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#b1 img").style.display = "block";
        turn = 1;
        b1filled = true;
        b1win = "o";
        saveMark("o","b1");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }

//same as first box, just for b1


  document.querySelector("#c1").onclick = function() {

    if (c1filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#c1 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#c1 img").style.display = "block";
        turn = 2;
        c1filled = true;
        c1win = "x";
        saveMark("x","c1");

      } else {
        document.querySelector("#c1 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#c1 img").style.display = "block";
        turn = 1;
        c1filled = true;
        c1win = "o";
        saveMark("o","c1");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }




  document.querySelector("#a2").onclick = function() {

    if (a2filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#a2 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#a2 img").style.display = "block";
        turn = 2;
        a2filled = true;
        a2win = "x";
        saveMark("x","a2");

      } else {
        document.querySelector("#a2 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#a2 img").style.display = "block";
        turn = 1;
        a2filled = true;
        a2win = "o";
        saveMark("o","a2");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }





  document.querySelector("#b2").onclick = function() {

    if (b2filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#b2 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#b2 img").style.display = "block";
        turn = 2;
        b2filled = true;
        b2win = "x";
        saveMark("x","b2");

      } else {
        document.querySelector("#b2 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#b2 img").style.display = "block";
        turn = 1;
        b2filled = true;
        b2win = "o";
        saveMark("o","b2");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }




  document.querySelector("#c2").onclick = function() {

    if (c2filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#c2 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#c2 img").style.display = "block";
        turn = 2;
        c2filled = true;
        c2win = "x";
        saveMark("x","c2");

      } else {
        document.querySelector("#c2 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#c2 img").style.display = "block";
        turn = 1;
        c2filled = true;
        c2win = "o";
        saveMark("o","c2");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }





  document.querySelector("#a3").onclick = function() {

    if (a3filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#a3 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#a3 img").style.display = "block";
        turn = 2;
        a3filled = true;
        a3win = "x";
        saveMark("x","a3");

      } else {
        document.querySelector("#a3 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#a3 img").style.display = "block";
        turn = 1;
        a3filled = true;
        a3win = "o";
        saveMark("o","a3");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }





  document.querySelector("#b3").onclick = function() {

    if (b3filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#b3 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#b3 img").style.display = "block";
        turn = 2;
        b3filled = true;
        b3win = "x";
        saveMark("x","b3");

      } else {
        document.querySelector("#b3 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#b3 img").style.display = "block";
        turn = 1;
        b3filled = true;
        b3win = "o";
        saveMark("o","b3");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }





  document.querySelector("#c3").onclick = function() {

    if (c3filled == false) {

      if (turn == 1) {
        // set the <div>'s inner <img> source to the O image, then make it display visibly 
        document.querySelector("#c3 img").src = "https://img.icons8.com/ios-filled/50/000000/x.png";
        document.querySelector("#c3 img").style.display = "block";
        turn = 2;
        c3filled = true;
        c3win = "x";
        saveMark("x","c3");

      } else {
        document.querySelector("#c3 img").src = "https://img.icons8.com/ios-filled/50/000000/o.png";
        document.querySelector("#c3 img").style.display = "block";
        turn = 1;
        c3filled = true;
        c3win = "o";
        saveMark("o","c3");
      }

    }

    setTimeout(function() {
      checkWin();
    }, 100);
  }








} // end of window.onload

function checkWin() {
  
  //this function is checking all of the possible combinations to win for X's and O's
  //once there is a winner, an alert shows up to say who won

  if ((a1win == "x") && (b1win == "x") && (c1win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;
    //screen reloads after someone wins
    //sends screen to wins.php so that the score count can go up

  }
  if ((a1win == "o") && (b1win == "o") && (c1win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;
    //same as above but if O won

  }



  if ((a2win == "x") && (b2win == "x") && (c2win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((a2win == "o") && (b2win == "o") && (c2win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((a3win == "x") && (b3win == "x") && (c3win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((a3win == "o") && (b3win == "o") && (c3win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((a1win == "x") && (a2win == "x") && (a3win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((a1win == "o") && (a2win == "o") && (a3win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((b1win == "x") && (b2win == "x") && (b3win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((b1win == "o") && (b2win == "o") && (b3win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((c1win == "x") && (c2win == "x") && (c3win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((c1win == "o") && (c2win == "o") && (c3win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((a3win == "x") && (b2win == "x") && (c1win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((a3win == "o") && (b2win == "o") && (c1win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }



  if ((c3win == "x") && (b2win == "x") && (a1win == "x")) {

    alert("X Wins!!");
    winner = 1;
    location.replace("wins.php");
    return false;

  }
  if ((c3win == "o") && (b2win == "o") && (a1win == "o")) {

    alert("O Wins!!");
    winner = 1;
    location.reload();
    return false;

  }


  if ((a1win != "") && (a2win != "") && (a3win != "") && (b1win != "") && (b2win != "") && (b3win != "") && (c1win != "") && (c2win != "") && (c3win != "")) {

    alert("Tie Game!!");
    location.reload();
    return false;

  }


}