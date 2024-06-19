<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Video with Progress</title>
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
</head>

<body>
    <h1>Downloading Video</h1>
    <div id="progress-container">
        <div id="progress-bar">
            <div id="progress">0%</div>
        </div>
        <div id="status">Starting download...</div>
    </div>
    <script>
        window.onload = function () {
            var videoUrl = 'https://rr3---sn-ab5sznzk.googlevideo.com/videoplayback?expire=1718777508&ei=RCJyZsyfMuHKvcAPxuS-SA&ip=171.229.216.179&id=o-AEGNE7N3M_ODRMhNPF7CZ8aLRUFQgroceA7TRz7ZZv0m&itag=18&source=youtube&requiressl=yes&xpc=EgVo2aDSNQ%3D%3D&bui=AbKP-1M_95OXUbDprHswSjpWU-O4P9o5_07XvDaVEpAiuxrnN9emPSTcFow0W0pPOfn81P8HeLWo4wCC&spc=UWF9f_qSoZ85xNP9b7zJdd0MN3_G5sFJLP6WFuMuXhuOzWIZI1dP8TuL6H2c&vprv=1&svpuc=1&mime=video%2Fmp4&ns=gYzJbocxO7VNHHgdpjPgSR0Q&rqh=1&cnr=14&ratebypass=yes&dur=15904.763&lmt=1709432201412184&c=WEB&sefc=1&txp=4538434&n=SJkDxjkwd95Q4w&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cxpc%2Cbui%2Cspc%2Cvprv%2Csvpuc%2Cmime%2Cns%2Crqh%2Ccnr%2Cratebypass%2Cdur%2Clmt&sig=AJfQdSswRQIhALzMcgRdIu3kQfrJhBeGN8eecOH9W8TK55cplmQ4ObuaAiAzFHuJA3Md3AvLeANCKqyPHxg2nNDR7vrtfdWDRGjW9Q%3D%3D&rm=sn-8pxuuxa-i5o667s,sn-8pxuuxa-i5oz77e,sn-i3bdk7l&fexp=24350485&req_id=4fcb766c3c28a3ee&redirect_counter=3&cms_redirect=yes&cmsv=e&ipbypass=yes&mh=wG&mip=82.167.201.154&mm=30&mn=sn-ab5sznzk&ms=nxu&mt=1718754795&mv=u&mvi=3&pl=16&lsparams=ipbypass,mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AHlkHjAwRQIgVtUlr4DX7GI5iJplD5rYhgjPJdXfp1xQ1jk4kFEaeHQCIQCsLQ3pR4307OtvKw8PlwHJCDkB27z3h1ZClKx3szaSuQ%3D%3D';
            var xhr = new XMLHttpRequest();
            xhr.open('GET', videoUrl, true);
            xhr.responseType = 'blob';

            xhr.onprogress = function (e) {
                if (e.lengthComputable) {
                    var percentComplete = (e.loaded / e.total) * 100;
                    var progress = document.getElementById('progress');
                    var status = document.getElementById('status');
                    progress.style.width = percentComplete + '%';
                    progress.textContent = Math.round(percentComplete) + '%';
                    status.textContent = 'Downloaded ' + Math.round(e.loaded / 1024 / 1024) + ' MB of ' + Math.round(e.total / 1024 / 1024) + ' MB';
                }
            };

            xhr.onload = function () {
                if (xhr.status === 200) {
                    var blob = xhr.response;
                    var url = window.URL.createObjectURL(blob);
                    var a = document.createElement('a');
                    a.style.display = 'none';
                    a.href = url;
                    a.download = 'video.mp4';
                    document.body.appendChild(a);
                    a.click();
                    window.URL.revokeObjectURL(url);
                    var status = document.getElementById('status');
                    status.textContent = 'Download complete!';
                }
            };

            xhr.onerror = function () {
                alert('Failed to download video.');
            };

            xhr.send();
        };
    </script>
</body>

</html>