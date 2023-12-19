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
                <h2>Forum</h2>
                <ul>
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
                        <div class="friend-info">
                            <div class="friend-details">
                                <h5>Lorem Ipsum</h5>
                            </div>
                            <div class="text-msg">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae lorem dui. Integer nulla ex, accumsan ac pharetra in, fringilla in velit. Morbi varius sem justo, id vehicula quam condimentum in. Pellentesque consequat orci eleifend est tristique, ac pretium nisi aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris nec felis mi. Quisque vitae consequat quam. Sed at tellus turpis. Integer viverra commodo eleifend.

                                    Aliquam ultrices lobortis cursus. Donec felis dui, facilisis eget nibh et, sagittis dignissim ex. Pellentesque tempor sollicitudin mauris. Curabitur vulputate neque nunc, non maximus enim vestibulum sit amet. Mauris interdum scelerisque diam, a tempus nunc efficitur eget. Aenean condimentum, ante sit amet hendrerit sagittis, leo sem varius sem, eu congue lorem enim ac lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam cursus at ligula vitae aliquam. Pellentesque condimentum tincidunt quam. Vivamus congue quam lacus, in hendrerit arcu vehicula sagittis. Nulla mi augue, tincidunt eget elit eu, rhoncus ultricies massa. Sed consectetur pulvinar lacus ac suscipit. Integer sollicitudin sapien dolor, vitae dapibus nisi blandit a. Cras at feugiat sem.
                                    
                                    Suspendisse ornare egestas nisl. Sed ac felis molestie, malesuada massa non, pulvinar odio. Nunc at mi vitae nunc sollicitudin mattis. Pellentesque id nibh neque. In hac habitasse platea dictumst. Nunc eleifend, mauris eget tincidunt semper, mi nulla eleifend lacus, ut hendrerit tellus libero non tellus. Mauris suscipit erat vitae metus tempus feugiat. Aliquam erat volutpat. Proin sed facilisis nisi, finibus elementum lectus.</h4>
                            </div>
                        </div>
                    </li> 
                    <li>
                        <div class="friend-info">
                          
                                <h1>Discussion</h1>
                            
                            <div class="text-msg">
                                <textarea id="comment" rows="8" placeholder="Write a Comment"></textarea>  
                            </div>
                            <button type="submit">Comment</button>
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
