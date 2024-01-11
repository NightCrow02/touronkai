<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Dashboard | Touronkai</title>
</head>

<body>
    <div class="grid-container">
        @include('layout.header')
        @include('layout.leftnavibar')
        <article>
            <div class="friend-list">
                <h2>Dashboard</h2>
                <ul>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <a href="forum" type="button">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </a>
                        </div>
                        
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                                <span class="timestamp">12:30 PM</span>
                            </div>
                            <div class="text-msg">
                                <p>Hi</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </article>

        {{-- <aside> --}}
            @include('layout.rightnavbar')
            {{-- <div class="contacts">
                <p><strong>Contacts</strong></p>
                <ul>
                    <li>
                        <div>
                            <a href="" type="button">Markipo</a>
                            <span>Design Enthusiast.</span>
                        </div>
                        
                    </li>
                    <li>
                        <div>
                            <a href="" type="button">Markipo</a>
                            <span>Design Enthusiast.</span>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="" type="button">Markipo</a>
                            <span>Design Enthusiast.</span>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="" type="button">Markipo</a>
                            <span>Design Enthusiast.</span>
                        </div>
                    </li>
                </ul>
            </div> --}}
        {{-- </aside> --}}
        @include('layout.footer')
    </div>
</body>

</html>
