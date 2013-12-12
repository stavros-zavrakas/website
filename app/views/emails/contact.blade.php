<html>
  <body>
      <p>You have recieved a new message from the enquiries form on your website.</p> 
      <p><strong>Name: </strong> {{ $name }} </p> 
      <p><strong>Email Address: </strong> {{ $email }} </p> 
      <p><strong>Message: </strong> {{ $body }} </p> 
      <p>This message was sent from the IP Address: {{ $ipaddress }} on {{ $date }} at {{ $time }}</p>";
  </body>
</html>