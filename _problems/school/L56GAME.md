---
{"category_name":"school","problem_code":"L56GAME","problem_name":"Chef and Game with Sequence","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kefaa","problem_tester":"mgch","date_added":"16-01-2018","tags":{"0":"cakewalk","1":"kefaa","2":"ltime56","3":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/L56GAME","time":{"view_start_date":1517073000,"submit_start_date":1517073000,"visible_start_date":1517073000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/mandarin/L56GAME.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/russian/L56GAME.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME56/vietnamese/L56GAME.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a sequence <b>A</b> containing <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</p>

<p>Chef is playing a game with this sequence. In this game, he may perform the following operation any number of times (including zero): Choose an arbitrary pair of elements from the sequence such that their sum is even, delete these two elements from the sequence and insert their sum into the sequence instead.</p>

<p>The goal of the game is to minimise the number of elements in the sequence.</p>

<p>Help Chef to play the game and find the minimum possible size of the sequence at the end of the game!</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li> 
<li>The first line of each test case contains a single integer <b>N</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>
For each test case, print a single line containing one integer — the minimum possible final size of the sequence.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 1,000 for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (100 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
2
1 2
5
7 4 3 2 6

<b>Output:</b>

2
1
</pre>

<h3>Example</h3>
<p><b>Example case 1:</b> There is no pair of elements with an even sum. Thus, the sequence must remain the same and the answer is 2.</p>

<p><b>Example case 2:</b> Chef can choose elements 7 and 3 in the first step, delete them and insert 10 in the sequence. Now all its elements are even and Chef can choose any two elements on each of the following steps of the game until the sequence contains only one element.</p>
