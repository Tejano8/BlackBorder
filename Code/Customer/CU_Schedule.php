<?php
require_once 'calendar_db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Calendar App Vanilla JS</title>

    <link rel="stylesheet" href="calendar.css">

    <style>
    /* side ↓ navigation */
            .slide{
                top:0;
                height:100vh;
                width:300px;
                position: fixed;
                left: 0;
                background-color:#d9d9d9;
                transition:0.5s ease;
                z-index:3;
                transform: translateX(-300px);
            }

            ul li{
                list-style:none;

            }
            ul li a {
            font-weight: bold;
            margin: 10px 0;
            padding: 10px;
            display: block;
            text-transform: capitalize;
            text-decoration: none;
            transition: 0.2s ease-out;
            font-size: 20px;
            color: #333;
            }

            ul li a:hover {
            background-color: #eee;
            color: #111;
            }

            
            ul li a i{
                width:40px;
                text-align:center;
                

            }
            input{
                display:none;
                visibility:hidden;
                -webkit-appearance:none;
        
            }
            .toggle{
                position:absolute;
                height:30px;
                width: 30px;
                top:20px;
                left:15px;
                z-index:4;
                cursor:pointer;
                border-radius:2px;
                background-color:#d9d9d9;
                box-shadow:0 0 10px rgba(0,0,0,0.3);
                transform: translateX(0px);
                transition: transform 0.54s ease;


            }
            .toggle .common{
                position:absolute;
                height: 2px;
                width: 20px;
                background-color:black;
                border-radius:50px;
                transition: 0.3s ease;
            }
            .toggle .top_line{
                top:30%;
                left:50%;
                transform:translate(-50%,-50%);

            }
            .toggle .middle_line{
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                
            }
            .toggle .bottom_line{
                top:70%;
                left:50%;
                transform:translate(-50%,-50%);
                
            }

            input:checked ~ .slide{
                transform:translateX(0);
                box-shadow:0 0 15px rgba(0,0,0.5);
            }

            input:checked ~ .toggle {
                transform:translateX(230px);
                transition: transform 0.54s ease;
                

            }
            /* side ↑ navigation */

            /* Calendar */
            body {
              display: flex;
              margin-top: 50px;
              justify-content: center;
              background-color: #FFFCFF;
            }

            button {
              width: 75px;
              cursor: pointer;
              box-shadow: 0px 0px 2px gray;
              border: none;
              outline: none;
              padding: 5px;
              border-radius: 5px;
              color: white;
            }

            #header {
              padding: 10px;
              color: #d36c6c;
              font-size: 26px;
              font-family: sans-serif;
              display: flex;
              justify-content: space-between;
            }

            #header button {
              background-color: #92a1d1;
            }

            #container {
              width: 770px;
            }

            #weekdays {
              width: 100%;
              display: flex;
              color: #247BA0;
            }

            #weekdays div {
              width: 100px;
              padding: 10px;
            }

            #calendar {
              width: 100%;
              margin: auto;
              display: flex;
              flex-wrap: wrap;
            }

            .day {
              width: 100px;
              padding: 10px;
              height: 100px;
              cursor: pointer;
              box-sizing: border-box;
              background-color: white;
              margin: 5px;
              box-shadow: 0px 0px 3px #CBD4C2;
              display: flex;
              flex-direction: column;
              justify-content: space-between;
            }

            .day:hover {
              background-color: #e8faed;
            }

            .day + #currentDay {
              background-color: #e8f4fa;
            }

            .event {
              font-size: 10px;
              padding: 3px;
              background-color: #58bae4;
              color: white;
              border-radius: 5px;
              max-height: 55px;
              overflow: hidden;
            }

            .padding {
              cursor: default !important;
              background-color: #FFFCFF !important;
              box-shadow: none !important;
            }

            #newEventModal,
            #deleteEventModal {
              display: none;
              z-index: 20;
              padding: 25px;
              background-color: #e8f4fa;
              box-shadow: 0px 0px 3px black;
              border-radius: 5px;
              width: 350px;
              top: 100px;
              left: calc(50% - 175px);
              position: absolute;
              font-family: sans-serif;
            }

            #eventTitleInput {
              padding: 10px;
              width: 100%;
              box-sizing: border-box;
              margin-bottom: 25px;
              border-radius: 3px;
              outline: none;
              border: none;
              box-shadow: 0px 0px 3px gray;
            }

            #eventTitleInput.error {
              border: 2px solid red;
            }

            #cancelButton,
            #deleteButton {
              background-color: #d36c6c;
            }

            #saveButton,
            #closeButton {
              background-color: #92a1d1;
            }

            #eventText {
              font-size: 14px;
            }

            #modalBackDrop {
              display: none;
              top: 0px;
              left: 0px;
              z-index: 10;
              width: 100vw;
              height: 100vh;
              position: absolute;
              background-color: rgba(0, 0, 0, 0.8);
            }

            .time, .theme , .venue {
          padding: 10px;
          width: 100%;
          box-sizing: border-box;
          margin-bottom: 25px;
          border-radius: 3px;
          outline: none;
          border: none;
          box-shadow: 0px 0px 3px gray;
}

/*change button*/
.cb{
  position:absolute;
  right:15px;
  top:5px;
  
}

/*Event button*/
.eb.primary-button {
  background-color: rgba(0, 123, 255, 1);
  padding: 5px 0px;
  width:90px;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
  color: white;
}

.eb.primary-button:hover {
  background-color: rgba(0, 94, 196, 1);
}

.eb.primary-button:active {
  background-color: rgba(0, 70, 147, 1);
}

/* Success button */
.eb.success-button {
  background-color: rgba(40, 167, 69, 1);
  padding: 5px 0px;
  width:90px;
        font-size: 14px;
        white-space: nowrap;
        overflow: hidden;
  color: white;
}

.eb.success-button:hover {
  background-color: rgba(31, 126, 52, 1);
}

.eb.success-button:active {
  background-color: rgba(20, 82, 34, 1);
}

            /* */
            </style>
        </head>
        <body>

         <!--side              ↓                panel -->
         <label>
            <input type="checkbox" class="input">
            <div class="toggle">
                <span class ="top_line common"></span>
                <span class ="middle_line common"></span>
                <span class ="bottom_line common"></span>
        </div>

        <div class="slide">
                <ul><br><br><br>
                <li><a href="CU_Account.php"><u>ACCOUNT</u></a></li>
                <li><a href="CU_Ord_Trac.php"><u>ORDER</u></a></li>
                <li><a href="CU_Order.php#bottom"><u>VIEW PACKAGES</u></a></li>
                <li><a href="CU_Schedule.php"><u>SCHEDULES</u></a></li>
                <li><a href="CU_Home.php"><u>HOME</u></a></li>
                <li><a href="CU_Payment.php"><u>PAYMENT</u></a></li>
                <button onclick="confirmLogout()" style="background-color: #FF5C5C; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer; position: fixed; bottom: 20px; left: 20px;">LOG OUT</button>

                <script>
                function confirmLogout() {
                    if (confirm("Are you sure you want to log out?")) {
                        window.location.href = "Login Page/logout.php";
                    }
                }
                document.querySelector('button').addEventListener('mouseover', function(){
                    this.style.transform = 'scale(1.1)';
                });
                document.querySelector('button').addEventListener('mouseout', function(){
                    this.style.transform = 'scale(1)';
                });
                </script>
            </ul>
            </div>
        </label>
    <!--side              ↑                panel -->
    <div id="container">
      <div id="header">
        <div id="monthDisplay"></div>
        <div>
          <button id="backButton">Back</button>
          <button id="nextButton">Next</button>
        </div>
      </div>

      <div id="weekdays">
        <div>Sunday</div>
        <div>Monday</div>
        <div>Tuesday</div>
        <div>Wednesday</div>
        <div>Thursday</div>
        <div>Friday</div>
        <div>Saturday</div>
      </div>

      <div id="calendar"></div>
    </div>

    <div id="newEventModal">
  <h2>New Event</h2>
  <form action="calendar_db_conn.php" method="post">
    <div class="cb">
    <button id="primaryButton" type="button" class="eb primary-button active">Event</button><br>
      <button id="successButton" type="button" class="eb success-button" style="margin-top:5px;">Appointment</button>
    
    </div>
    <input type="text" id="eventTitleInput" placeholder="Event Title" name="title" style="display: block; visibility: visible;">
    <input type="text" id="eventTimeInput" placeholder="Event Time" class="time" name="time" style="display: block; visibility: visible;">
    <input type="text" id="eventVenueInput" placeholder="Event Venue" class="venue" name="venue" style="display: block; visibility: visible;">
    <select name="city" id="city" class="city" style="width: 300px; height: 45px;">
      <option value="" disabled selected>Select City</option>
      <option value="caloocan">Caloocan City</option>
      <option value="laspinas">Las Piñas City</option>
      <option value="makati">Makati City</option>
      <option value="malabon">Malabon City</option>
      <option value="mandaluyong">Mandaluyong City</option>
      <option value="manila">Manila City</option>
      <option value="marikina">Marikina City</option>
      <option value="muntinlupa">Muntinlupa City</option>
      <option value="navotas">Navotas City</option>
      <option value="paranaque">Parañaque City</option>
      <option value="pasay">Pasay City</option>
      <option value="pasig">Pasig City</option>
      <option value="pateros">Pateros</option>
      <option value="quezon">Quezon City</option>
      <option value="sanjuan">San Juan City</option>
      <option value="taguig">Taguig City</option>
      <option value="valenzuela">Valenzuela City</option>
    </select>
    <br><br>
    <input type="text" id="eventThemeInput" placeholder="Event Theme" class="theme" name="theme" style="display: block; visibility: visible;">
    <textarea id="eventInformationInput" rows="2" cols="35" class="info" placeholder="Additional Information" name="info"></textarea>
    <button id="saveButton" type="submit">Save</button>
    <button id="cancelButton" type="button">Cancel</button>
  </form>
</div>

<div id="deleteEventModal">
  <h2>Event</h2>
  <p id="eventText"></p>
  <button id="deleteButton">Delete</button>
  <button id="closeButton">Close</button>
</div>

    <div id="modalBackDrop" style="height:110%;"></div>

    <div id="newEventModal">
  <h2>New Event</h2>
  <form action="calendar_db_conn.php" method="post">
    <div class="cb">
    <button id="appointmentButton" onclick="showAppointmentForm()">Appointment</button>
<button id="eventButton" onclick="showEventForm()">Event</button>
    </div>
    <input type="text" id="eventTitleInput" placeholder="Event Title" name="title" style="display: block; visibility: visible;">
    <input type="text" id="eventTimeInput" placeholder="Event Time" class="time" name="time" style="display: block; visibility: visible;">
    <input type="text" id="eventVenueInput" placeholder="Event Venue" class="venue" name="venue" style="display: block; visibility: visible;">
    <select name="city" id="city" class="city" style="width: 300px; height: 45px;">
      <option value="" disabled selected>Select City</option>
      <option value="caloocan">Caloocan City</option>
      <option value="laspinas">Las Piñas City</option>
      <option value="makati">Makati City</option>
      <option value="malabon">Malabon City</option>
      <option value="mandaluyong">Mandaluyong City</option>
      <option value="manila">Manila City</option>
      <option value="marikina">Marikina City</option>
      <option value="muntinlupa">Muntinlupa City</option>
      <option value="navotas">Navotas City</option>
      <option value="paranaque">Parañaque City</option>
      <option value="pasay">Pasay City</option>
      <option value="pasig">Pasig City</option>
      <option value="pateros">Pateros</option>
      <option value="quezon">Quezon City</option>
      <option value="sanjuan">San Juan City</option>
      <option value="taguig">Taguig City</option>
      <option value="valenzuela">Valenzuela City</option>
    </select>
    <br><br>
    <input type="text" id="eventThemeInput" placeholder="Event Theme" class="theme" name="theme" style="display: block; visibility: visible;">
    <textarea id="eventInformationInput" rows="2" cols="35" class="info" placeholder="Additional Information" name="info"></textarea>
    <button id="saveButton" type="submit">Save</button>
    <button id="cancelButton" type="button">Cancel</button>
  </form>
</div>

<div id="deleteEventModal">
  <h2>Event</h2>
  <p id="eventText"></p>
  <button id="deleteButton">Delete</button>
  <button id="closeButton">Close</button>
</div>

<script>
  let nav = 0;
  let clicked = null;
  let events = localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];

  const calendar = document.getElementById('calendar');
  const newEventModal = document.getElementById('newEventModal');
  const deleteEventModal = document.getElementById('deleteEventModal');
  const backDrop = document.getElementById('modalBackDrop');

  const eventTitleInput = document.getElementById('eventTitleInput');
  const eventTimeInput = document.getElementById('eventTimeInput');
  const eventVenueInput = document.getElementById('eventVenueInput');
  const eventThemeInput = document.getElementById('eventThemeInput');

  const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  function openModal(date) {
    clicked = date;

    const eventForDay = events.find(e => e.date === clicked);

    if (eventForDay) {
      document.getElementById('eventText').innerText = eventForDay.title;
      deleteEventModal.style.display = 'block';
    } else {
      newEventModal.style.display = 'block';
    }

    backDrop.style.display = 'block';
  }

  function load() {
    const dt = new Date();

    if (nav !== 0) {
      dt.setMonth(new Date().getMonth() + nav);
    }

    const day = dt.getDate();
    const month = dt.getMonth();
    const year = dt.getFullYear();

    const firstDayOfMonth = new Date(year, month, 1);
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    const dateString = firstDayOfMonth.toLocaleDateString('en-us', {
      weekday: 'long',
      year: 'numeric',
      month: 'numeric',
      day: 'numeric',
    });
    const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

    document.getElementById('monthDisplay').innerText =
      `${dt.toLocaleDateString('en-us', { month: 'long' })} ${year}`;

    calendar.innerHTML = '';

    for (let i = 1; i <= paddingDays + daysInMonth; i++) {
      const daySquare = document.createElement('div');
      daySquare.classList.add('day');

      const dayString = `${month + 1}/${i - paddingDays}/${year}`;

      if (i > paddingDays) {
        daySquare.innerText = i - paddingDays;
        const eventForDay = events.find(e => e.date === dayString);

        if (i - paddingDays === day && nav === 0) {
          daySquare.id = 'currentDay';
        }

        if (eventForDay) {
          const eventDiv = document.createElement('div');
          eventDiv.classList.add('event');
          eventDiv.innerText = eventForDay.title;
          daySquare.appendChild(eventDiv);
        }

        daySquare.addEventListener('click', () => openModal(dayString));
      } else {
        daySquare.classList.add('padding');
      }

      calendar.appendChild(daySquare);
    }
  }

  function closeModal() {
    eventTitleInput.classList.remove('error');
    newEventModal.style.display = 'none';
    deleteEventModal.style.display = 'none';
    backDrop.style.display = 'none';
    eventTitleInput.value = '';
    clicked = null;
    load();
  }

  function saveEvent() {
    if (eventTitleInput.value) {
      eventTitleInput.classList.remove('error');

      events.push({
        date: clicked,
        title: eventTitleInput.value,
      });

      localStorage.setItem('events', JSON.stringify(events));
      closeModal();
    } else {
      eventTitleInput.classList.add('error');
    }
  }

  function deleteEvent() {
    events = events.filter(e => e.date !== clicked);
    localStorage.setItem('events', JSON.stringify(events));
    closeModal();
  }
  function showAppointmentForm() {
  document.getElementById("formContainer").innerHTML =
    `
    <label for="title">Title:</label>
    <input type="text" id="titleInput">
    <label for="time">Time:</label>
    <input type="text" id="timeInput">
    <label for="info">Info:</label>
    <input type="text" id="infoInput">
    `;
}

function showEventForm() {
  document.getElementById("formContainer").innerHTML =
    `
    <label for="title">Title:</label>
    <input type="text" id="titleInput">
    <label for="time">Time:</label>
    <input type="text" id="timeInput">
    <label for="date">Date:</label>
    <input type="text" id="dateInput">
    <label for="location">Location:</label>
    <input type="text" id="locationInput">
    `;
}

  function initButtons() {
    document.getElementById('nextButton').addEventListener('click', () => {
      nav++;
      load();
    });

    document.getElementById('backButton').addEventListener('click', () => {
      nav--;
      load();
    });

    document.getElementById('saveButton').addEventListener('click', saveEvent);
    document.getElementById('cancelButton').addEventListener('click', closeModal);
    document.getElementById('deleteButton').addEventListener('click', deleteEvent);
    document.getElementById('closeButton').addEventListener('click', closeModal);
  }

  initButtons();
  load();
</script>
    
  </body>
</html>
