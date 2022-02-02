---
{"category_name":"medium","problem_code":"BROCLK","problem_name":"Broken Clock","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"r_64","date_added":"23-08-2017","tags":{"0":"chemthan","1":"feb18","2":"math","3":"matrix","4":"modular","5":"trigonometry"},"editorial_url":"https://discuss.codechef.com/problems/BROCLK","time":{"view_start_date":1518427800,"submit_start_date":1518427800,"visible_start_date":1518427800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/mandarin/BROCLK.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/russian/BROCLK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/FEB18/vietnamese/BROCLK.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a clock, but it got broken today — the minute hand on Chef's clock doesn't rotate by the angle 2π/3600 each second, but by a different fixed angle <b>x</b>. The coordinates of the center of the clock are (0, 0). The length of the minute hand is <b>l</b>.</p>

<p>One endpoint of the minute hand is always located at the clock center; the other endpoint is initially located at the point (0, <b>l</b>). One second later, Chef observes that this endpoint is at distance <b>d</b> above the <b>x</b>-axis, i.e. the <b>y</b>-coordinate of this endpoint is equal to <b>d</b>.</p>

<p>Chef is curious about where the minute hand will be (specifically, its <b>y</b>-coordinate) after <b>t</b> seconds. Because <b>t</b> can be very large, Chef can't wait for that moment. Please help him!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains three space-separated integers <b>l</b>, <b>d</b> and <b>t</b>.</li>
</ul>

<h3>Output</h3>
<p>We can prove that for the given constraints, the <b>y</b>-coordinate of the end of the minute hand can always be written as a rational number <b>p</b> / <b>q</b>, where gcd(<b>p</b>, <b>q</b>) = gcd(<b>q</b>, 10<sup>9</sup> + 7) = 1. Let's denote the modular inverse of <b>q</b> (it's guaranteed that the modular inverse exists and is unique) by <b>r</b>.</p>

<p>For each test case, print a single line containing one number (<b>p</b> · <b>r</b>) modulo 10<sup>9</sup> + 7.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>d</b> < <b>l</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>t</b> ≤ 10<sup>18</sup></li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (5 points):</b> <b>t</b> ≤ 3</p>

<p><b>Subtask #2 (15 points):</b> <b>t</b> is a power of 2, i.e. <b>t</b> = <b>2<sup>p</sup></b> for some <b>p</b> ≥ 0</p>

<p><b>Subtask #3 (40 points):</b> sum of <b>t</b> over all test cases ≤ 10<sup>6</sup></p>

<p><b>Subtask #4 (40 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
4 2 1
4 2 2
4 2 3

<b>Output:</b>

2
1000000005
1000000003
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b></p>
<img src="https://i.imgur.com/85ynCEa.png" width="50%" height="50%">

<p><b>Example case 2:</b></p>
<img src="https://i.imgur.com/fxXO8Gu.png" width="50%" height="50%">
<p>The <b>y</b>-coordinate is -2, so the answer is 1000000005.</p>

<p><b>Example case 3:</b></p>
<img src="https://i.imgur.com/zQIOE1B.png" width="50%" height="50%">
<p>The <b>y</b>-coordinate is -4, so the answer is 1000000003.</p>