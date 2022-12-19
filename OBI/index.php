
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DrNG</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="form.css" />
  </head>

  <body class="bg-gray-200 flex justify-center items-center h-screen w-screen">
    <!--*********************************** THE POPUP REGISTRATION FORM ***************************** -->
    <style>
      #abc {
        display: none;
        overflow: auto;
      }

      #close {
        position: absolute;
        right: 95%;
        top: 32px;
        cursor: pointer;
        color: black;
      }
      #close:hover {
        /* background-color: red; */
        color: rgb(189, 39, 39);
        border-radius: 80px;
        height: 25px;
        width: 15px;
        font-size: 40px;
        text-align: center;
        transform: scaleX(2);
        transition: all 0.8s ease-in-out 0.2s;
      }
    </style>
    <div class="body">
      <div class="container2" id="abc">
        <svg
          id="close"
          onclick="div_hide()"
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M7 16l-4-4m0 0l4-4m-4 4h18"
          ></path>
        </svg>
        <header>Create New Record</header>
        <form action="./php/record.php" id="form" method="POST" name="form">
          <div class="form first">
            <div class="details personal">
              <span class="title">General Information</span>

              <div class="fields">
                <div class="input-field">
                  <label>Unique Code</label>
                  <input
                    style="border: none; width: 80px"
                    type="text"
                    name="code"
                    required
                  />
                </div>

                <div class="input-field">
                  <label>Name</label>
                  <input type="text" name="name" required />
                </div>

                <div class="input-field">
                  <label>Sex</label>
                  <select class="input-field" name="sex" id="">
                    <option value="male">--Select gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Phone</label>
                  <input type="tel" name="phone" required />
                </div>

                <div class="input-field">
                  <label>Email</label>
                  <input type="email" name="email" required />
                </div>
              </div>
              <hr id="hr3" />
              <span class="title">Appointment Information</span>
              <div class="fields">
                <div class="input-field">
                  <label>Appointment Date</label>
                  <input type="date" name="app_date" required />
                </div>

                <div class="input-field">
                  <label>First Time</label>
                  <select class="input-field" name="first_time" id="">
                    <option value="">--Select--</option>
                    <option value="no">No</option>
                    <option value="yes">Yes</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Request Date</label>
                  <input type="date" name="req_date" required />
                </div>

                <div class="input-field">
                  <label>Appointment Status</label>
                  <select class="input-field" name="status" id="">
                    <option value="null">--Select Status--</option>
                    <option value="pending">Pending</option>
                    <option value="passed">Passed</option>
                    <option value="rescheduled">Rescheduled</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Appointment Time</label>
                  <input
                    placeholder="AM"
                    style="border: none; width: 120px; text-align: end"
                    type="text"
                    name="app_time"
                    required
                  />
                </div>
              </div>

              <span class="title">Address Information</span>
              <div class="fles1">
                <div class="input-field">
                  <label>Address 1</label>
                  <input
                    class="field"
                    type="text"
                    name="address_one"
                    required
                  />
                </div>

                <div class="input-field">
                  <label>City</label>
                  <input class="field" type="text" name="city" required />
                </div>
              </div>
              <span>Notes</span>
              <div class="fles1">
                <div class="input-field">
                  <label> Before Appointment</label>
                  <textarea
                    class="field notes"
                    type="text"
                    name="note_before"
                    required
                  ></textarea>
                </div>

                <div class="input-field">
                  <label>After Appointment</label>
                  <textarea
                    class="field notes"
                    type="text"
                    name="note_after"
                    required
                  ></textarea>
                </div>
              </div>

              <button class="savebtn" type="submit" name="submit">
                <span class="btntext">Save</span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!--*********************************** END OF POPUP REGISTRATION FORM ************************** -->
    <div class="container1 bg-red-100">
      <div class="flex flex-row bg-white items-center">
        <div class="app-bg-blue-1 px-10 py-5">
          <span class="text-lg text-white font-bold">DrNG</span>
        </div>
        <div class="flex flex-row pl-5 itmes-center">
          <div
            class="h-9 w-9 bg-yellow-400 border-solid border-4 border-blue-600 rounded-xl mt-2"
          ></div>
          <div class="flex flex-col pl-5 items-center">
            <span
              class="font-semibold text-sm app-color-black pl-5 items-center mt-2"
              >Dr. Ngwashi</span
            >
            <span
              class="font-semibold text-xs app-color-gray-1 pl-5 items-center"
            >
              Gynecologist</span
            >
          </div>
          <svg
            class="w-4 h-4 app-color-blue-3 ml-5 mt-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 9l-7 7-7-7"
            ></path>
          </svg>
          <div class="w-px bg-gray-100 h-10 ml-5 mt-1"></div>
        </div>
        <div class="flex flex-row pl-5 items-center mr-auto">
          <div
            class="h-9 w-9 app-bg-blue-2 flex justify-center items-center rounded-xl"
          >
            <svg
              class="w-6 h-6 app-color-blue-1"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
              ></path>
            </svg>
          </div>
          <div class="flex flex-col pl-5">
            <span class="font-semibold text-sm app-color-black">Today</span>
            <span class="font-semibold text-sm app-color-blue-1"
              >12 AUG 2022</span
            >
          </div>
          <svg
            class="w-4 h-4 app-color-blue-3 ml-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 9l-7 7-7-7"
            ></path>
          </svg>
          <div class="w-px bg-gray-100 h-10 ml-5"></div>
        </div>
        <svg
          class="w-6 h-6 app-color-blue-3 mr-5"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
          ></path>
        </svg>
      </div>
      <div class="flex flex-col app-bg-white-1">
        <div class="flex flex-row py-5">
          <span class="text-lg font-bold app-color-black"
            ><a class="animating-link font-semibold text-md mr-5"
              >Appointment</a
            ></span
          >
          <!-- <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg> -->
          <span
            id="popup"
            onclick="div_show()"
            class="text-lg font-bold app-color-black"
            ><a
              id="popup"
              onclick="div_show()"
              class="animating-link font-semibold text-md mr-5"
              >Create New Record</a
            ></span
          >
        </div>
        <div class="flex flex-row flex justify-center items-center">
          <div
            class="missed flex flex-col w-40 pl-5 py-3 mr-8 rounded-bl-2xl rounded-tr-2xl"
          >
            <span class="missed text-sm font-semibold">Missed</span>
            <span class="text-3xl app-color-redd font-bold">
                <?php
                    require"./php/config.php";
                    $query = mysqli_query($con, "SELECT * FROM appointments WHERE status='missed'");
                    $x = mysqli_num_rows($query);
                    echo $x;
                ?>
            </span>
          </div>
          <div
            class="schedule flex flex-col w-40 pl-5 py-3 mr-8 rounded-bl-2xl rounded-tr-2xl"
          >
            <span class="text-sm font-semibold">Rescheduled</span>
            <span class="text-3xl app-color-yellow font-bold">
            <?php
                    $query = mysqli_query($con, "SELECT * FROM appointments WHERE status='rescheduled'");
                    $x = mysqli_num_rows($query);
                    echo $x;
                ?>
            </span>
          </div>
          <div
            class="passed flex flex-col w-40 pl-5 py-3 mr-8 rounded-bl-2xl rounded-tr-2xl"
          >
            <span class="text-sm font-semibold">Passed</span>
            <span class="text-3xl app-color-seagreen font-bold">
                 <?php
                    $query = mysqli_query($con, "SELECT * FROM appointments WHERE status='passed'");
                    $x = mysqli_num_rows($query);
                    echo $x;
                ?>
            </span>
          </div>
        </div>
        <div class="flex flex-row bg-white p-10">
          <table class="w-full">
            <thead>
              <tr>
                <th class="text-left text-xs app-color-black pb-5">Name</th>
                <th class="text-left text-xs app-color-black pb-5">Code</th>
                <th class="text-left text-xs app-color-black pb-5">Gender</th>
                <th class="text-left text-xs app-color-black pb-5">Address</th>
                <th class="text-left text-xs app-color-black pb-5">Phone</th>
                <th class="text-left text-xs app-color-black pb-5">Status</th>
                <th class="text-left text-xs app-color-black pb-5">Delete</th>
              </tr>
            </thead>
            <tbody>
           <?php
                // require"./php/config.php";
                $apps = mysqli_query($con, "SELECT * FROM `appointments` ");
                while($app = mysqli_fetch_array($apps)){
                    echo('
                    <tr class="app-border-1">
                    <td>
                     <h2 style="font-weight: 600"> '.$app["name"].'</h2>
                    </td>
                    <td>
                      <div
                        class="flex justify-center items-center rounded-md w-8 h-8 app-bg-yellow-2 app-color-yellow-1 text-lg font-semibold"
                      >
                        '.$app["code"].'
                      </div>
                    </td>
                    <td>
                      '.$app["sex"].'
                    </td>
                    <td>'.$app["address_one"].'</td>
                    <td>'.$app["phone"].'</td>
                    <td>'.$app["status"].'</td>
                    <td><a href="./php/delete.php?id='.$app["id"].'"><button>Delete</button></a></td>
                  </tr>
                    ');
                }
            ?>
            
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
