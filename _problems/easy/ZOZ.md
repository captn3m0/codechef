---
{"category_name":"easy","problem_code":"ZOZ","problem_name":"Magic Elements","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"lg5293","date_added":"30-03-2018","tags":{"0":"array","1":"easy","2":"ltime58","3":"mgch","4":"sum"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/ZOZ.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/ZOZ.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/ZOZ.pdf">Vietnamese</a> as well.</h3>

<p>
You are given an array <b>A</b> with size <b>N</b> and a number <b>K</b>. Let's call a position <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>) <i>valid</i> if, after increasing <b>A<sub>i</sub></b> by <b>K</b>, it would be greater than the sum of all other elements in the array <b>A</b>.
</p>

<p>Determine the number of distinct valid positions.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the number of valid positions.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100,000</li>
<li>1 ≤ <b>N</b> ≤ 100,000</li>
<li>1 ≤ <b>K</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>4</sup> for each valid <b>i</b></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 100,000</li>
</ul> 

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (33 points):</b> sum of <b>N</b> over all test cases ≤ 5,000
</p>

<p>
<b>Subtask #2 (67 points):</b> original constraints
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>

2
4 4
2 1 6 7
4 2
2 1 5 4

<b>Output:</b>

1
0
</pre>

<h3>Explanation</h3>
<p>
<b>Example case 1:</b> <b>A<sub>1</sub> + K</b> = 6 isn't greater than <b>A<sub>2</sub> + A<sub>3</sub> + A<sub>4</sub></b> = 14, so position 1 isn't valid. <b>A<sub>2</sub> + K</b> = 5 isn't greater than <b>A<sub>1</sub> + A<sub>3</sub> + A<sub>4</sub></b> = 15, so position 2 isn't valid. <b>A<sub>3</sub> + K</b> = 10 isn't greater than <b>A<sub>1</sub> + A<sub>2</sub> + A<sub>4</sub></b> = 10, so position 3 also isn't valid. <b>A<sub>4</sub> + K</b> = 11 is greater than <b>A<sub>1</sub> + A<sub>2</sub> + A<sub>3</sub></b> = 9. Therefore, there is only one valid position — position 4.
</p>