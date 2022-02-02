---
{"category_name":"hard","problem_code":"JAKKU","problem_name":"Rebel rescue","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":null,"date_added":"18-12-2016","tags":{"0":"utkarsh_lath"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/JAKKU.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/JAKKU.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/JAKKU.pdf">Vietnamese</a> as well.</h3>

<p>
Government is surveilling the entire planet in search of black money, and now there are <b>N</b> satellites orbiting Earth.
Each satellite has sensors to detect black money transaction on the visible half of the planet.
For example, when a satellite is passing over north pole, it's sensors can detect any transaction in the northern hemisphere.
This surveillance has become a real pain point for some businessmen, as the satellite sensors are really good.
A powerful businessman wants to conduct a big black money transaction somewhere on the planet surface.
To do this, he must first sabotage all satellites which would be able to detect the transaction.
The businessman can choose any place and time for the transaction, as long as it is on the planet surface.
Please help him by finding the minimum number of satellites that must be sabotaged so that the transaction goes undetected.
He has promised you a small fraction of the money (in old currency) as a reward for your services.
</p>

<p>
&lt;object data="https://s3.amazonaws.com/codechef_shared/download/upload/FEB17/SC.svg" type="image/svg+xml" height="350"&gt;
&lt;/object&gt;

&lt;object data="https://s3.amazonaws.com/codechef_shared/download/upload/FEB17/T2.svg" type="image/svg+xml" height="350"&gt;
&lt;/object&gt;
</p>

<p>
The <b>i<sup>th</sup></b> satellite orbits along longitude <b>l<sub>i</sub></b>, and at time t=0, is in phase <b>p<sub>i</sub></b>.
Phase of an orbiting body is <i>the angle between north pole, planet center and the orbiting body</i>.
If phase <b>p<sub>i</sub></b> is less than 180 degree, the body lies on longitude <b>l<sub>i</sub></b> somewhere between north pole and south pole.
If phase is more than 180 degree, the body lies on longitude <b>l<sub>i</sub>-180</b> somewhere between south pole and north pole.

<p>

<p>
<b>Extra Explanation:</b> Note that the formulation of longitude and phase is slightly different from the system of longitudes and latitudes we use to denote points on earth's surface.
It is closer to Spherical coordinate system, but we have constrained the azimuth angle (<b>l<sub>i</sub></b> in the figure above) to be between 0 and 180, so the azimuth angle of an orbiting satellite does not change, and polar angle can be anywhere between 0 and 360.
At time <b>t</b>, the <b>i<sup>th</sup></b> satellite is located at <b>x = sin(p<sub>i</sub> + t) * cos(l<sub>i</sub>), y = sin(p<sub>i</sub> + t) * sin(l<sub>i</sub>), z = cos(p<sub>i</sub> + t)</b>.

</p>

<p>
<b>Assumptions to be made:</b>
<ul>
<li>The transaction takes place on a place which has arbitrarily small(but non zero) area.</li>
<li>The transaction lasts for arbitrarily short(but non zero) duration.</li>
<li>All satellites have circular orbit which is very far away from the planet’s surface.
</li>
<li>All satellites orbit at the same distance and the same speed.
</li>
<li>All angles are in degrees.
</li>
<li>The geometric center of the Planet is same as its center of mass.
</li>
<li>No special or general relativistic effects.
</li>
</ul>
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.
The description of <b>T</b> test cases follows.
</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of satellites.
The next <b>N</b> lines contain two space separated integers each, <b>p<sub>i</sub></b> and <b>l<sub>i</sub></b>.
</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of satellites that must be sabotaged to conduct a successful transaction.
</p>

<h3>Constraints:</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>3 ≤ <b>N</b> ≤ 50</li>
<li>0 ≤ <b>l<sub>i</sub></b> ≤ 179</li>
<li>0 ≤ <b>p<sub>i</sub></b> ≤ 359</li>
<li>All <b>l<sub>i</sub></b> are distinct.
</li>
<li>All <b>p<sub>i</sub></b> are distinct modulo 180.
</li>
</ul>

<h3>Example</h3>
<p>
<pre>
<b>Input:</b>
2
3
10 90
310 30
305 150
3
10 90
230 30
125 35

<b>Output:</b>
0
0
</pre>
</p>

<h3>Sub tasks</h3>
<ul>
<li>Sub task #1: N = 3 (10 points)</li>
<li>Sub task #2: N ≤ 20 (30 points)</li>
<li>Sub task #3: N ≤ 50 (60 points)</li>
</ul>

<h3>Explanation</h3>
<p><b>Example case 1</b>: The businessman can do transaction at time t=0, at longitude 90, and phi 230 (90W, 40S), where no orbiting satellite can see them, so he does not need to sabotage any of them.
</p>
<p><b>Example case 2</b>: The businessman can do transaction at time t=160 (after all satellites have complete 160 degrees of rotation), at longitude 125, and phi 267 (55W, 3S).
No satellite has to be sabotaged in this case either.
</p>
