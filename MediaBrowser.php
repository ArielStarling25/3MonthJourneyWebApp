<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Browser</title>
    <link rel="stylesheet" href="CSS/MediaBrowser.css" />
</head>
<body>
    <div class="mbHeadDiv">
        <div class="mbTitleBox">
            <h1>Media Browser</h1>
        </div>
    </div>
    <div class="mbBodyDiv">   
        <div class="mediaBoxHolder">
            <div class="mediaPlayer">
                <video width="640" height="480" controls>
                    <source src="Uploads/Media/Video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <!-- Implement media scroller + uploader functionality here -->
            <div class="mediaScroll">
                <ol>
                    <li>
                        Node 1
                    </li>
                    <li>
                        Node 2
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="mbTailDiv">
        
    </div>
</body>
</html>