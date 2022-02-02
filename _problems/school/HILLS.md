---
{"category_name":"school","problem_code":"HILLS","problem_name":"Jumping in the hills","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"21-02-2018","tags":{"0":"cakewalk","1":"greedy","2":"kingofnumbers","3":"ltime57"},"editorial_url":"https://discuss.codechef.com/problems/HILLS","time":{"view_start_date":1519491600,"submit_start_date":1519491600,"visible_start_date":1519491600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/mandarin/HILLS.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/russian/HILLS.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME57/vietnamese/HILLS.pdf">Vietnamese</a> as well.</h3>

<p>There are <b>N</b> hills in a row numbered 1 through <b>N</b> from left to right. Each hill has a height; for each valid <b>i</b>, the height of the <b>i</b>-th hill is <b>H<sub>i</sub></b>. Chef is initially on the leftmost hill (hill number 1). He can make an arbitrary number of jumps (including zero) as long as the following conditions are satisfied:
<ul>
<li>Chef can only jump from each hill to the next hill, i.e. from the <b>i</b>-th hill, he can jump to the <b>i+1</b>-th hill (if it exists).</li>
<li>It's always possible to jump to a hill with the same height as the current hill.</li>
<li>It's possible to jump to a taller hill if it's higher than the current hill by no more than <b>U</b>.</li>
<li>It's possible to jump to a lower hill if it's lower than the current hill by no more than <b>D</b>.</li>
<li>Chef can use a parachute and jump to a <b>lower</b> hill regardless of its height (as long as it's lower than the current hill). This jump can only be performed at most once.</li>
</ul>
</p>

<p>Chef would like to move as far right as possible. Determine the index of the rightmost hill Chef can reach.</p> 

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space-separated integers <b>N</b>, <b>U</b> and <b>D</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>H<sub>1</sub>, H<sub>2</sub>, ..., H<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the index of the rightmost reachable hill.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>N</b> ≤ 100</li>
<li>1 ≤ <b>U</b>, <b>D</b> ≤ 1,000,000</li>
<li>1 ≤ <b>H<sub>i</sub></b> ≤ 1,000,000 for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (100 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

3
5 3 2
2 5 2 6 3
5 2 3
4 4 4 4 4
5 2 7
1 4 3 2 1

<b>Output:</b>

3
5
1
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Chef can jump to second hill because it's higher by no more than <b>U</b>=3 than first hill, to jump to third hill Chef has to use parachute 
 because it's lower than second hill by 3 which is more than <b>D</b>=2, Chef can't jump to fourth hill because it's higher than third hill by 4 which is more than <b>U</b>=3</p>
<p><b>Example case 2:</b> All hills are of the same height, so chef can reach the last hill with no problems.</p>
<p><b>Example case 3:</b> Chef can't jump to second hill because it's too high for him</p>