<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.head')
    <title>Groups | Touronkai</title>
</head>
<body>
    
    <div class="grid-container">
        @include('layout.header')

        @include('layout.leftnavibar')

        <article>
            <div class="friend-list">
                <h2>My Groups</h2>
                <ul>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>Cinephile</h4>
                            </div>
                            <div class="text-msg">
                                <p>Group keluarga</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>Finance</h4>
                            </div>
                            <div class="text-msg">
                                <p>Group Kerja</p>
                            </div>
                        </div>
                    </li><li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>Sports</h4>
                            </div>
                            <div class="text-msg">
                                <p>Group Olahraga</p>
                            </div>
                        </div>
                    </li>
                </li><li>
                    <img src="img/profileimage.png" alt="Friend 1">
                    <div class="friend-info">
                        <div class="friend-details">
                            <h4>Tech</h4>
                        </div>
                        <div class="text-msg">
                            <p>Group UKM</p>
                        </div>
                    </div>
                </li>
                </ul>
            </div>

        </article>
        
        @include('layout.rightnavbar')
    </div>

    @include('layout.footer')
</body>
</html>