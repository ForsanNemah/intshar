 
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        #progress-container {
            width: 80%;
            max-width: 600px;
            margin-top: 20px;
        }

        #progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            height: 30px;
        }

        #progress {
            width: 0;
            height: 100%;
            background-color: #4caf50;
            text-align: center;
            line-height: 30px;
            color: white;
            border-radius: 5px 0 0 5px;
        }

        #status {
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }
    </style>
 

     <h1>Downloading Video</h1>
    <div id="progress-container">
        <div id="progress-bar">
            <div id="progress">0%</div>
        </div>
        <div id="status">Starting download...</div>
    </div>
    <script>


       
    </script>
 