@component('mail::message')
Hey there <b>{{ $user['name'] }}</b>! <br>

Congratulations on joining the official Arewa Consultative forum members portal!


We’re happy to have you as a part of our ever-growing community and we cant wait to start seeing you do amazing things on the plartform.
</br>
*BEGIN YOUR JOURNEY*
Below is your login details :</br>
*Email:* {{ $user['email'] }} </br>
*password:* {{ $user['surnName'] }} </br> 

<small>
    If you have any questions or comments, please send an email to 
    <span style="color: #3869d4">support@arewaconsultativeforum.org </span>,
     or call 08161939418, or send us a message on *Twitter*, *Instagram* or *Facebook*.

    To gain more insight about the *members portal*.
</small>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
