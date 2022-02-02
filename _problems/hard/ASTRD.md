---
{"category_name":"hard","problem_code":"ASTRD","problem_name":"Asteroids","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"mgch","date_added":"15-09-2015","tags":{"0":"geometry","1":"hard","2":"jan16","3":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/ASTRD","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/ASTRD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/ASTRD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/ASTRD.pdf">Vietnamese</a> as well.</h3>


<p>Your planet is a perfect sphere with radius <b>R</b> and center at <b>(0, 0, 0)</b>. There are <b>N</b> asteroids around the planet. Your task is to find the <b>minimal</b> possible number of asteroids you can observe from some point on the suface of the planet. An asteroid can be observed if it's at least <b>10<sup>-3</sup></b> above the horizon line at the place of the observation.</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b>, denoting the number of testcases.</p>
<p>The first line of each test case contains two space-separated integers, <b>N</b> and <b>R</b>.</p>
<p>The following <b>N</b> lines contains 3 space-separated integers each: coordinates <b>x<sub>i</sub>, y<sub>i</sub>, z<sub>i</sub></b> of the corresponding asteroid. </p>

<h3>Output</h3>
<p>For each test case, output one integer in a new line: the answer for the test case.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>R</b> ≤ <b>10</b></li>
<li><b>R - 1</b> ≤ <b>|x<sub>i</sub>|, |y<sub>i</sub>|, |z<sub>i</sub>|</b> ≤ <b>50</b></li>
<li><b>Subtask 1[11 points]: </b><b>1</b> ≤ <b>N</b> ≤ <b>2</b></li>
<li><b>Subtask 2[89 points]: </b><b>1</b> ≤ <b>N</b> ≤ <b>150</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 1
2 2 2
0 3 4
4 5 0

<b>Output:</b>
0
</pre>

<h3>Sample explanation:</h3>
One of the solutions can be: as all the asteroids have positive coordinates, we can choose some point on the surface which lies in the all-negative octant (see octant VII <a href='https://en.wikipedia.org/wiki/Octant_%28solid_geometry%29'>here</a>), and none of the asteroids will be observed.
