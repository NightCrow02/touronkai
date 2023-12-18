<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.head')
    <title>Contacts | Touronkai</title>
</head>
<body>
    
    <div class="grid-container">
        @include('layout.header')

        @include('layout.leftnavibar')

        <article>
            <div class="friend-list">
                <h2>My Contacts</h2>
                <ul>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                {{-- <h4>{{$userData->$name}}</h4> --}}
                                @foreach($userData as $user)
                                    <li>
                                        <img src="img/profileimage.png" alt="Friend Image">
                                        <div class="friend-info">
                                            <div class="friend-details">
                                                <h4>NIM: {{ $user->nim }}</h4>
                                                <p>Email: {{ $user->email }}</p>
                                            </div>
                                            <div class="text-msg">
                                                <p>Status</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </div>
                            <div class="text-msg">
                                <p>Status</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Doe</h4>
                            </div>
                            <div class="text-msg">
                                <p>Status</p>
                            </div>
                        </div>
                    </li><li>
                        <img src="img/profileimage.png" alt="Friend 1">
                        <div class="friend-info">
                            <div class="friend-details">
                                <h4>John Thor</h4>
                            </div>
                            <div class="text-msg">
                                <p>Status</p>
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