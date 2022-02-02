---
{"category_name":"hard","problem_code":"CHEFKNN","problem_name":"Chef and Interval Painting","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":15000,"problem_author":"bciobanu","problem_tester":null,"date_added":"26-12-2017","tags":{"0":"bciobanu","1":"counting","2":"hard","3":"march18","4":"ntt"},"editorial_url":"https://discuss.codechef.com/problems/CHEFKNN","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/CHEFKNN.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/CHEFKNN.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/CHEFKNN.pdf">Vietnamese</a> as well.</h3>

<p>Chef has <b>K</b> friends (numbered 1 through <b>K</b>) and an array of length <b>N</b> in which each element has a color; initially, each element has color 0. Chef agreed to let each of his friends (in the order from friend 1 to friend <b>K</b>) perform the following operation:
<ul>
<li>choose an arbitrary non-empty subarray</li>
<li>paint all elements in this subarray with color <b>i</b>, where <b>i</b> is the number of this friend</li>
</ul>
</p>

<p>When an element is painted with some color, its original color is lost. This happens even if this element was already painted by some friend before.</p>

<p>Chef is now wondering: how many distinct colorings of the final array are possible?</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the number of possible final arrays <b>modulo 163577857</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>K</b> ≤ <b>N</b> ≤ 10<sup>6</sup></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 5 · 10<sup>6</sup></b> 
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 points):</b> 1 ≤ sum of <b>N</b> over all test cases ≤ 500</p>

<p><b>Subtask #2 (20 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 2500</li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 10<sup>4</sup></li>
</ul>
</p>

<p><b>Subtask #3 (30 points):</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 5 · 10<sup>5</sup></li>
</ul>
</p>

<p><b>Subtask #4 (40 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
2 1
2 2
3 1

<b>Output:</b>

3
5
6
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> the final array can be [0, 1], [1, 0] or [1, 1].</p>
<p><b>Example case 2:</b> the final array can be [0, 2], [1, 2], [2, 0], [2, 1] or [2, 2].</p>
<p><b>Example case 3:</b> the final array can be [0, 0, 1], [0, 1, 0], [0, 1, 1], [1, 0, 0], [1, 1, 0] or [1, 1, 1].</p>
