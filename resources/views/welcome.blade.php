<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/app.css">
    <title>User Registration</title>
</head>
<body>

    <div class = "container">

        <div class ="greeting">
            <div class = "text">
                <h1 class = "hello" >Hello Friend!</h1>
                <p class = "paragraph">Enter your personal details and start journy with us!<p>
            </div>
        </div> 

        <div class = "registration-form">
    
          <form action = "add" method = "post">

          @csrf
            <div class = "form">
   
                <div class ="form-container">
                    <h1 class = "add-user">Add a User</h1>
                    <p class = "add-info">Type in your info</p>
                    <hr>
                    <input type="text" placeholder="Name" name="name" id="name">
                    @error('name')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <hr>
                    <select id="country" name="country" required>
                    <option class = "disable" value="" disabled selected>Country</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="United States">United States</option>
                    </select>
                    @error('country')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <hr>
                    <input type="text" placeholder="Date of Birth" name = "date" id = "date" onClick="(this.type='date')">
                    @error('date')
                    <p class="error">{{ $message }}</p>
                    @enderror
                    <hr>
                    <button type="submit" class="save">SAVE</button>

                </div>
            </div>

           </form>
         @if(session()->has('success'))
         <div>
         <p class="success">{{ session('success') }}</p>
        </div>
         @endif

        </div>
    </div>

</body>
</html>