<!DOCTYPE html>
<html>
<head>
    <title>Username Verification</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            width: 360px;
            padding: 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            font-size: 16px;
            color: #2c3e50;
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            box-sizing: border-box;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .form-group input:hover {
            background: white;
            border-color: #bdc3c7;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #4CAF50;
            box-shadow: 0 0 0 4px rgba(76, 175, 80, 0.1);
            background: white;
        }
        
        .submit-btn {
            background: linear-gradient(145deg, #4CAF50, #45a049);
            color: white;
            padding: 14px 28px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .submit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 7px 14px rgba(76, 175, 80, 0.2);
        }
        
        .submit-btn:active {
            transform: translateY(1px);
            box-shadow: none;
        }
        
        .submit-btn:disabled {
            background: linear-gradient(145deg, #cccccc, #bbbbbb);
            cursor: not-allowed;
        }
        
        #instruction {
            color: #4CAF50;
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            padding: 12px;
            background-color: #f1f8e9;
            border-radius: 10px;
            border: 1px solid #c8e6c9;
        }
        
        #message {
            margin-top: 20px;
            text-align: center;
            font-size: 15px;
            font-weight: 500;
            padding: 12px;
            border-radius: 10px;
        }
        
        .success {
            color: #1b5e20;
            background-color: #e8f5e9;
            border: 1px solid #a5d6a7;
        }
        
        .error {
            color: #b71c1c;
            background-color: #ffebee;
            border: 1px solid #ffcdd2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-group">
            <label for="username">User Name:</label>
            <input 
                type="text" 
                id="username" 
                name="username" 
                autocomplete="off" 
                autofocus
            >
        </div>
        <button class="submit-btn" onclick="verifyUsername()">Submit</button>
        <div id="instruction">Key in username and click submit</div>
        <div id="message"></div>
    </div>
    
    <script src="verify_ajax.js"></script>
</body>
</html>



