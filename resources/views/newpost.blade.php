<html>
    <header>
        <title>Twitter</title>
    </header>
    <body>
        <div class="text-center">
       <center><h1 >Add New Post</h1></center> 
        </div>
        <form action="/userinput" method="post" enctype="multipart/form-data">
    @csrf
    <div class="ml-4">
        <label for="name">Your name</label>
        <input type="text" id="name" name="uname" required>
    </div>
    <input type="hidden" id="name" value="<?php date_default_timezone_set("Asia/Calcutta"); echo date('h:i:A');?>" name="time" required>
    <div class="ml-4">
        <label for="message">Enter Message</label>
        <textarea id="message" name="umessage" rows="5" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>

 <div ml-5>
        <a href="/">home</a>
        </div>
        <div ml-5>
        <a href="/post">post</a>
        </div>
        
    </body>
</html>
