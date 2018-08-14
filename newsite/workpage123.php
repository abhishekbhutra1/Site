<html>
<head>
    <link href="workpage123.css" rel="stylesheet">
    <script src="jquery-1.10.2.min.js"></script>
    <script src="workpage123.js"></script>
</head>

<body>
<div class="container-fluid" style="background-color: #9d9d9d;position:fixed;width:100%;height:100%;">
<div class="col-lg-4 col-md-4" style="position: fixed;width: 300px;height:100%; background: #151719; color: white;">
    <ul>
        <li id="user"><?php
            session_start();
            if(isset($_SESSION['name'])) {
            $username = $_SESSION['name'];
            echo "Hello"." ".($username);
            }
            else
            echo "Hello Username";?></li>
        <li><button id="create">CREATE</button>
            <ul id="folders">
                <li>
                    <form id="bucket" method="post" enctype="multipart/form-data">
                        Enter the folder name:<br>
                        <input type="text" id="foldername" name="foldername"><p></p>
                        <input type="button" id="submit" value="create" onclick="createfolder()">
                    </form>
                </li>

            </ul>
        </li>
        <li><button id="remove">REMOVE</button>
            <ul id="delete">
                <li>
                    <form id="removefolder" method="post" enctype="multipart/form-data">
                        Enter the folder name to be removed:<br>
                        <input type="text" id="delfolder" name="delfolder"><p></p>
                        <input type="button" id="submit" value="remove" onclick="deletefolder()">
                    </form>
                </li>
            </ul>
        </li>
        <li><button id="upload">UPLOAD IMAGE</button>
            <ul id="imagfold">
                <li>
                    <form id="record" method="post" enctype="multipart/form-data">
                            Enter the folder name:<br>
                            <input type="text" id="foldername" name="foldername"><p></p>
                            <input id="filename" type="file" name="uploadfile" value=""/>
                            <input class="sub" type="button" name="submit" value="Upload File" onclick="savedata()"/>
                    </form>
                </li>

            </ul>
        </li>
    </ul>
    <div class="directories">
        <ul>
            <li><button class="click" onclick="loadDir()">ALBUMS</button></li>
        </ul>
        <div class="dir" style="background-color: #9a9d4e;">
            <button id="button" style="background-color:#be8205;border: none;padding: 10px;width: 100%;margin-top: 2px;"></button>
        </div>
    </div>
</div>
    <div class="col-lg-8 col-md-8" style="background-color: #ffe41b;margin-left: 300px;height:100%;background-image: url('1.jpg');background-repeat: no-repeat;background-size:cover;background-blend-mode:lighten;overflow: auto">
        <div id="data" >
        </div>
</div>
</body>
</html>