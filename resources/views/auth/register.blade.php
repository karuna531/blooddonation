<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{url('css/style1.css')}}" />
</head>



<body>
  <section class=" container">
    <header>Registration Form</header>
    <form action="{{route('register')}}" method='post' class="form">
      @csrf
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" placeholder="Enter full name" name="name" required />
      </div>
      <div class="input-box">
        <label>Age</label>
        <input type="number" placeholder="Enter Age" name="age" min="18" max="60" required />
      </div>

      <div class="input-box">
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" required />
      </div>

      <div class="input-box">
        <label>Password</label>
        <input type="password" placeholder="Enter password" name="password" required />
      </div>
      <div class="input-box">
        <label>Confirm Password</label>
        <input type="password" placeholder="Enter email address" name="password" required />
      </div>

      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="text" placeholder="Enter phone number" pattern="[0-9]{10}" name="contact_address" required />
        </div>
        <!-- <div class="input-box">
          <label>Date of donation</label>
          <input type="date" placeholder="Enter date of donation" required />
        </div> -->
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" checked />
            <label for="check-male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" />
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-other" name="gender" />
            <label for="check-other">other</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" placeholder="Enter your address" required />
      </div>
      <label for="blood group">Select Blood Group</label>
      <div class="column">

        <div class="select-box">
          <select>
            <option hidden>O+</option>
            <option>O-</option>
            <option>A+</option>
            <option>A-</option>
            <option>AB+</option>
            <option>AB-</option>
          </select>
        </div>

      </div>

      <!-- <div class="column">
        <input type="text" placeholder="Enter your region" required />
        <input type="number" placeholder="Enter postal code" required />
      </div> -->
      <button>Submit</button>
    </form>
  </section>
</body>

</html>