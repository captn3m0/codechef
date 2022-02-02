---
{"category_name":"hard","problem_code":"DEVLOCK","problem_name":"Devu and Locks","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"5 - 15","source_sizelimit":50000,"problem_author":"admin2","problem_tester":"pushkarmishra","date_added":"19-01-2015","tags":{"0":"admin2","1":"combinatorics","2":"dynamic","3":"feb15","4":"fft","5":"math","6":"matrix","7":"medium"},"editorial_url":"http://discuss.codechef.com/problems/DEVLOCK","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/DEVLOCK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/DEVLOCK.pdf">Russian</a>.</h3>
<p>Devu likes to play with a lock of <b>N</b> dials. Each dial rotates from numbers 0 to 9 clockwise (i.e. 0 to 1, 2 to 3 and 8 to 9). You can not rotate from 9 to 0.
</p>
<p>
Initially all the dials of the lock are set to 0. From the current lock, Devu can move any dial to at most 10 different positions (i.e. 0 to 9), so there are total <b>10<sup>N</sup></b> different locks possible.
</p>
<p>
Let us say for a lock we define cost of converting the initial lock (all zeros) to this lock. For this, we have to rotate each dial to corresponding position in the lock. Cost of moving a single dial to value <b>x</b> takes <b>x</b> seconds.<br />
eg. cost of moving to 123 is 1 + 2 + 3 = 6 and cost of moving to 99 is 9 + 9 is 18.
</p>
<p>
Now Devu has to hurry up to meet his girlfriend, So he has at most <b>M</b> seconds to spend, he wonders how many possible locks he can create such that when a lock is represented as a decimal number, it should be divisible by <b>P</b>. As answer could be large, print answer modulo <b>998244353</b>.
</p>
<h3>Input</h3>
<p>Only line of input will contain three integers <b>N, P, MM</b> respectively. Use of <b>MM</b> is defined in the output section.</p>
<h3>Output</h3>
<p>Print a single line containing <b>MM + 1</b> integers, i<sup>th</sup> (0 based indexing) of them should represent the<br />
answer for the problem with given <b>N, P</b> and <b>M = i</b>.</p>
<h3>Constraints</h3>
<ul>
<li><i>Subtask #1: (10 points) </i> <b>1</b> ≤ <b>N</b> ≤ <b>1000</b>, <b>1</b> ≤ <b>P</b> ≤ <b>50</b>, <b>1</b> ≤ <b>MM</b> ≤ <b>50</b> <b>TL : 5 secs</b> </li>
<li><i>Subtask #2: (20 points) </i> <b>1</b> ≤ <b>N</b> ≤ <b>10^9</b>, <b>1</b> ≤ <b>P</b> ≤ <b>50</b>, <b>1</b> ≤ <b>MM</b> ≤ <b>50</b> <b>TL : 5 secs</b></li>
<li><i>Subtask #3: (30 points) </i> <b>1</b> ≤ <b>N</b> ≤ <b>10^9</b>, <b>1</b> ≤ <b>P</b> ≤ <b>50</b>, <b>1</b> ≤ <b>MM</b> ≤ <b>500</b> <b>TL : 10 secs</b> </li>
<li><i>Subtask #4: (40 points) </i> <b>1</b> ≤ <b>N</b> ≤ <b>10^9</b>, <b>1</b> ≤ <b>P</b> ≤ <b>16</b>, <b>1</b> ≤ <b>MM</b> ≤ <b>15000</b> <b>TL : 15 secs</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 3 3

<b>Output:</b>
1 1 1 5
</pre><pre><b>Input:</b>
2 4 4

<b>Output:</b>
1 1 2 3 5
</pre><h3>Explanation</h3>
<p><b>Example #1.</b> <br />
For M = 0, we can have only one lock, ie. all zeros 00, it is divisible by 3. <br />
For M = 1, we can have only one lock, ie. all zeros 00, it is divisible by 3. <br />
For M = 2, we can have only one lock, ie. all zeros 00, it is divisible by 3. <br />
For M = 3, we can have 5 locks whose decimal representation is divisible by 3. They are 00, 03, 21, 30 and 12. 
</p>
<p><b>Example #2.</b>  <br />
For M = 0, we can have only one lock, ie. all zeros 00, it is divisible by 4. <br />
For M = 1, we can have only one lock, ie. all zeros 00, it is divisible by 4. <br />
For M = 2, we can have 2 locks whose decimal representation is divisible by 4. They are 00 and 20. <br />
For M = 3, we can have 3 locks whose decimal representation is divisible by 4. They are 00, 12 and 20. <br />
For M = 4, we can have 5 locks whose decimal representation is divisible by 4. They are 00, 04, 12, 20 and 40. 
</p>
