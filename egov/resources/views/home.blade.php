<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Vehicle Registration Form</h2>
        <form id="registrationForm" action="{{ route ('store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>
            <div class="form-group">
                <label for="type_of_vehicle_transaction">Type of Vehicle Transaction:</label>
                <input type="text" id="type_of_vehicle_transaction" name="type_of_vehicle_transaction" required>
            </div>
            <div class="form-group">
                <label for="vehicle_registration_in_the_name_of">Vehicle Registration in the Name of:</label>
                <input type="text" id="vehicle_registration_in_the_name_of" name="vehicle_registration_in_the_name_of" required>
            </div>
            <div class="form-group">
                <label for="nature_of_vehicle_registration">Nature of Vehicle Registration:</label>
                <input type="text" id="nature_of_vehicle_registration" name="nature_of_vehicle_registration" required>
            </div>
            <div class="form-group">
                <label for="type_of_vehicle_registration">Type of Vehicle Registration:</label>
                <input type="text" id="type_of_vehicle_registration" name="type_of_vehicle_registration" required>
            </div>
            <div class="form-group">
                <label for="old_owner_id">Old Owner ID:</label>
                <input type="text" id="old_owner_id" name="old_owner_id" required>
            </div>
            <button type="submit">Register Vehicle</button>
        </form>
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            let isValid = true;
            const fields = [
                'nationality',
                'type_of_vehicle_transaction',
                'vehicle_registration_in_the_name_of',
                'nature_of_vehicle_registration',
                'type_of_vehicle_registration',
                'old_owner_id'
            ];
            
            fields.forEach(function(field) {
                const input = document.getElementById(field);
                if (input.value.trim() === '') {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                event.preventDefault();
                alert('Please fill out all fields.');
            }
        });
    </script>
</body>
</html>
