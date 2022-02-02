---
{"category_name":"school","problem_code":"RNDPAIR","problem_name":"Random Pair","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"amrmahmoud","date_added":"18-11-2017","tags":{"0":"cakewalk","1":"cook88","2":"kingofnumbers","3":"kingofnumbers","4":"likecs","5":"probability"},"editorial_url":"https://discuss.codechef.com/problems/RNDPAIR","time":{"view_start_date":1511116200,"submit_start_date":1511116200,"visible_start_date":1511116200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/russian/RNDPAIR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/vietnamese/RNDPAIR.pdf">Vietnamese</a> as well.</h3>
<p>Chefu is Chef's little brother, he is 12 years old and he is new to competitive programming.</p>

<p>Chefu is practicing very hard to become a very skilled competitive programmer and win gold medal in IOI.</p>

<p>Now Chefu is participating in a contest and the problem that he is trying to solve states:</p>

<p>Given an array <b>A</b> of <b>N</b> integers, find any <b>i</b>,<b> j</b> such that <b>i</b> < <b> j</b> 
 and <b>A<sub>i</sub></b> + <b>A<sub>j</sub></b> is maximum possible </p>


<p>unfortunately, there's no much time left before the end of the contest, so Chefu doesn't have time to think of correct solution, so instead, he wrote a solution that selects a random pair (<b>i</b>, <b> j</b>) (<b>i</b> < <b> j</b>) and output <b>A<sub>i</sub></b> + <b>A<sub>j</sub></b>. each pair is equiprobable to be selected.</p>
<p>Now Chefu wants your help to calculate the probability that his solution will pass a particular input.</p>


<p> </p>


<h3>Input</h3>
<p>First line contains an integer <b>T</b> denoting the number of test-cases.</p>

<p>First line of each test-case contains a single integer <b>N</b></p>

<p>Second line of each test-case contains <b>N</b> space-separated integers <b>A<sub>1<sub></b> <b>A<sub>2<sub></b> ... <b>A<sub>N<sub></b></p>


<p> </p>

<h3>Output</h3>
<p>For each test-case output a single line containing a single number denoting the probability that Chefu's solution to output a correct answer. your answer will be accepted if the absolute difference between it and correct answer is less than 1e-6</p>


<h3>Constraints</h3>

<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1,000</b></li>

</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
3 3 3 3
6
1 1 1 2 2 2
4
1 2 2 3

<b>Output:</b>
1.00000000
0.20000000
0.33333333
</pre>
<p> </p>