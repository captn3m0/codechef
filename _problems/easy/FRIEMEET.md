---
{"category_name":"easy","problem_code":"FRIEMEET","problem_name":"Friends Meeting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"xcwgf666","date_added":"29-07-2015","tags":{"0":"cenadar","1":"dfs","2":"medium","3":"nov16","4":"tree"},"editorial_url":"http://discuss.codechef.com/problems/FRIEMEET","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/FRIEMEET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/FRIEMEET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/FRIEMEET.pdf">Vietnamese</a> as well.</h3>


<p>
Chef and his friend John have not see each other for years. They are both are looking forward to meeting again in the city they both grew up in.
</p>

<p>
The city has <b>N</b> public squares that they can meet in.
The squares are numbered from <b>1</b> to <b>N</b> and are connected with <b>N-1</b> roads. Each road has its own length
</p>

<p>
It is known that between two squares there is exactly one path that goes through the roads and squares such that no square appears in the path more than once. Roads do not intersect each other and it takes 0 time to pass through a square.
</p>

<p>
Chef and John have previously met in squares <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>M</sub></b> so they will meet in one of these squares again.
To make this meeting more adventurous they do not agree on the square beforehand. Rather, Chef will pick a random square <b>C</b> from this list of squares and John will independently pick a random square <b>J</b> from this list of squares. Both random choices will be taken uniformly over the list of squares.
</p>

<p>
In the day before the meeting, Chef spoke with his roomate about their plan and asked him to calculate the expected distance between squares that Chef and John randomly pick. Please remember that Chef's roommate knows neither <b>C</b> nor <b>J</b>. Help him calculate this expected distance.
</p>

<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>

<p>
The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b>.
</p>

<p>
The next <b>N-1</b> lines contain three space-separated integers <b>V</b>, <b>U</b>, and <b>L</b> describing a road with length <b>L</b> between squares <b>V</b> and <b>U</b>.
</p>

<p>
The final line of each case contains <b>M</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>M</sub></b>.
</p>

<h3>Output</h3>
<p>
For each test case, output a single line containing two integers <b>numer</b> and <b>denom</b> separated by a space. These indicate the fraction <b>numer/denom</b> giving expected distance between the squares randomly chosen by Chef and John. This fraction should be reduced so that gcd(<b>numer</b>, <b>denom</b>) = 1 and <b>denom</b> ≥ 1.
</p>

<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>V</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
<li>The squares <b>A<sub>i</sub></b> are distinct.</li>
<li><b>Subtask #1 [40 points]: N ≤  1000</b></li>
<li><b>Subtask #2 [60 points]: No additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
6 2
1 3 1
2 3 2
3 4 3
4 5 4
4 6 5
1 5
6 6
1 3 1
2 3 2
3 4 3
4 5 4
4 6 5
1 2 3 4 5 6</tt>

<b>Output:</b>
<tt>4 1
29 6</tt>
</pre>
