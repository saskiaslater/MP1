  console.log("Output: " + this.responseText);
      
      testresponse = '[{"id":"6","appt":"2021-12-10 20:41:25","player_mark":"X","player_space":"A1"},{"id":"7","appt":"2021-12-10 20:41:32","player_mark":"O","player_space":"B2"},{"id":"8","appt":"2021-12-10 21:58:25","player_mark":"O","player_space":"C3"}]';
      
      incomingObject = JSON.parse(testresponse);
      console.log(incomingObject);
      
      incomingObject[0].player_mark
      incomingObject[0].player_space
      
      for (let i = 0, i < 5; i++) {
        text += "" + i + "<br>";
        
      }