<h1>
# {{ $job->title }}
</h1>

<h2>Congratulation!</h2>
<p>
    Your Job Was Created successful.
</p>


<p>
    <a href="{{ url('/jobs/' . $job->id) }}">Click Here To see It</a>
</p>
