&lt;?php<br />
        $to = &quot;brian@promath.co.za&quot;; // REPLACE<br />
        $subject = &quot;Test mail&quot;;<br />
        $message = &quot;Hello! This is a simple email message.&quot;;<br />
        $from = &quot;noreply@eample.com&quot;;<br />
        $headers = &quot;From:&quot; . $from;<br />
        mail($to,$subject,$message,$headers);<br />
        echo &quot;Mail Sent.&quot;;
