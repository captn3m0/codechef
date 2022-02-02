---
{"category_name":"easy","problem_code":"FRNDMTNG","problem_name":"Chef and His Friend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":null,"date_added":"5-02-2015","tags":{"0":"antoniuk1","1":"easy","2":"frndmting","3":"june15","4":"maths","5":"probability"},"editorial_url":"http://discuss.codechef.com/problems/FRNDMTNG","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/FRNDMTNG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/FRNDMTNG.pdf">Russian</a>.</h3>
<p>Chef and his friend Yurii decided to meet in the cafe. As they are very busy one would not wait for another too long. Namely, after arriving, Chef will spend at most  <b>t<sub>1</sub></b> seconds waiting for Yurii while Yurii will wait no more than <b>t<sub>2</sub></b> seconds.</p>
<p>Chef can arrive at any moment within <b>[0..T<sub>1</sub>]</b> with equal probability. Similarly Yurii can arrive at any moment within <b>[0..T<sub>2</sub>]</b>.</p>
<p><b>Arrival time may be any real number from the interval.</b></p>
<p>Chef asks you to calculate the <a href="http://en.wikipedia.org/wiki/Probability">probability</a> of meeting his friend Yurii in the cafe.</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> denoting the number of test cases. First and the only line of each test case contains four space-separated integers – <b>T<sub>1</sub></b>, <b>T<sub>2</sub></b>, <b>t<sub>1</sub></b> and <b>t<sub>2</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output one the single real number - probability of meeting Chef and his friend Yurii. The answer will be considered correct if its absolute or relative error doesn't exceed <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ T<sub>1</sub>, T<sub>2</sub>  ≤ 10<sup>9</sup> </b></li>
<li><b>0 ≤ t<sub>1</sub>, t<sub>2</sub>  ≤ 10<sup>9</sup> </b></li>
</ul>
<p></p>
<p><b>Subtask 1: (5 points)</b></p>
<ul>
<li><b>t<sub>1</sub> = 0</b> and <b>t<sub>2</sub> = 0</b></li>
</ul>
<p></p>
<p><b>Subtask 2: (15 points)</b></p>
<ul>
<li><b>t<sub>1</sub> = 0</b> or <b>t<sub>2</sub> = 0</b></li>
</ul>
<p></p>
<p><b>Subtask 3: (25 points)</b></p>
<ul>
<li><b>1 ≤ T ≤ 5</b></li>
<li><b>1 ≤ T<sub>1</sub>, T<sub>2</sub> ≤ 10</b></li>
<li>The answer will be considered correct if its absolute or relative error doesn't exceed <b>10<sup>-2</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 4: (55 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2 1 1
1 1 1 1
<b>Output:</b>
0.750000
1.000000
</pre>