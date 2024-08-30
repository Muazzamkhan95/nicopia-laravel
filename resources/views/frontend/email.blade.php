<html lang="en" class="iframe js chrome webkit layout-large"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    </head>
    <body class="">
        
    
    
    <h5>Greeting!</h5>
    
    <div>
        <div class="content frame-content" role="main">
            <div id="message-header">
                <h6 class="subject">Name:
                    <span>{{ $emailData['name'] }}</span>
                </h6>
                <h6 class="subject">From:
                    <span>{{ $emailData['email'] }}</span>
                </h6>
                <br>
                <br>
                <p>Message: {{ $emailData['message'] }}</p>
            </div>
        </div>
    </div>
    
  
    

    
    </body></html>