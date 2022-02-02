---
{"category_name":"easy","problem_code":"MEX","problem_name":"Max Mex","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hruday968","problem_tester":"alex_2oo8","date_added":"22-08-2017","tags":{"0":"greedy","1":"hruday968","2":"oct17","3":"simple","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/MEX","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/MEX.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/russian/MEX.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/MEX.pdf">vietnamese</a> as well.</h3>

<p>You are given a multi-set <b>S</b> of <b>N</b> integers, and an integer <b>K</b>. You want to find the maximum value of minimal excluded non-negative integer (<a href="https://en.wikipedia.org/wiki/Mex_(mathematics)"><b>MEX</b></a>) of the multi-set given that you are allowed to add at most any <b>K</b> integers to the multi-set. Find the maximum value of MEX that you can obtain. </p>

<p>Few examples of finding MEX of a multi-set are as follows. MEX of multi-set {0} is 1, {1} is 0, {0, 1, 3} is 2, {0, 1, 2, 3, 5, 6} is 4.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of testcases.</p>

<p>The first line of each test case contains two space seperated integers <b>N</b> and <b>K</b> denoting the size of the multi-set and the maximum number of extra integers that you can add in the multi-set respectively.</p>

<p>The second line contains <b>N</b> space separated integers denoting the multi-set <b>S</b>: <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b> ,.... <b>S<sub>N</sub></b>.

<h3>Output</h3>
<p>For each testcase, output the answer in a single line. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>S<sub>i</sub></b> ≤ <b>2 * 10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b> (15 points): <b>K</b>=0.</li>
<li><b>Subtask #2</b> (85 points): Original Constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
3 0
1 0 2
3 1
1 0 2
4 3
2 5 4 9
2 0
3 4

<b>Output:</b>
3
4
6
0
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> As <b>K</b> = 0, so we can't add any element to the multi-set. Elements of the set are {1, 0, 2}. The MEX value of this set is 3.</p>
<p><b>Example case 2.</b> As <b>K</b> = 1, you are allowed to add at most 1 element to the multi-set. The multi-set are {1, 0, 2}. You can add element 3 to the multi-set, and it becomes {1, 0, 2, 3}. The MEX value of this multi-set is 4. There is no other way to have higher value of MEX of the set by adding at most one element to the multi-set.</p>
