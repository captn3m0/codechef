---
{"category_name":"easy","problem_code":"MAGA","problem_name":"Make array great again","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sidhant007","problem_tester":"kingofnumbers","date_added":"15-01-2018","tags":{"0":"cook90","1":"dynamic","2":"medium","3":"sidhant007"},"time":{"view_start_date":1516559400,"submit_start_date":1516559400,"visible_start_date":1516559400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/mandarin/MAGA.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/russian/MAGA.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK90/vietnamese/MAGA.pdf">Vietnamese</a> as well.</h3>

<p>
You are a citizen of Arrayland. Your President (Mr. P) has given you a mundane problem:
</p>

<p>
You're given an array <b>a</b> with size <b>N</b> (1-based indexing). You are allowed to perform an arbitrary number (including zero) of operations of the following type: choose an integer <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>) and swap <b>a<sub>i</sub></b> with <b>a<sub>N-i+1</sub></b>.
</p>

<p>
Your goal is to make the array <b>a</b> <i>great</i>. An array is great if it satisfies one of the following conditions:
<ul>
<li><b>a<sub>1</sub></b> > <b>a<sub>2</sub></b> < <b>a<sub>3</sub></b> > <b>a<sub>4</sub></b> < ... <b>a<sub>N</sub></b></li>
<li><b>a<sub>1</sub></b> < <b>a<sub>2</sub></b> > <b>a<sub>3</sub></b> < <b>a<sub>4</sub></b> > ... <b>a<sub>N</sub></b></li>
</ul>
</p>

<p>Compute the minimum number of operations necessary to make the array <b>a</b> great or determine that it's impossible to make it great.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the size of the array <b>a</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>Print a single line containing one integer — the minimum number of operations required to make the array great, or -1 if it's impossible.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>a<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6
1 2 3 4 5 6

<b>Output:</b>
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> The given array is NOT great. If you swap the second and the fifth element, then the array becomes great.</p>
