---
{"category_name":"medium","problem_code":"CHXORR","problem_name":"Chef and Pie","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"balajiganapath","date_added":"7-09-2013","tags":{"0":"bitwise","1":"easy","2":"furko","3":"greedychxorr","4":"ltime04"},"editorial_url":"http://discuss.codechef.com/problems/CHXORR","time":{"view_start_date":1380445200,"submit_start_date":1380445200,"visible_start_date":1380445200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef loves to cook pies. But more than that, he loves to play with numbers. And this task is one of his favorites. The goal is very simple: you need to select <b>3</b> numbers from an array of <b>N</b> numbers, such that their <b>XOR</b> will be maximal.</p>
<p><b>XOR</b> - exclusive or (<b>xor</b> - in Pascal, <b>^</b> - in C++) </p>
<p> </p>
<h3>Input</h3>
<p> The first line of input contains an integer <b>T</b> denoting the number of test cases. The first line of each test case contains a positive integer <b>N</b> denoting the number of integers in the given array. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> containing the elements of the array. </p>
<h3>Output</h3>
<p> For each test case, output a single line containing the  maximal <b>XOR</b> of <b>3</b> chosen numbers in the array. Note, that you have to choose exactly <b>3</b> numbers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
3
2 2 3

<b>Output:</b>
0
3
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (15 points): <b>3 ≤ N ≤ 100</b> <br /><br />
Subtask 2 (10 points): <b>1 ≤ A<sub>i</sub> ≤ 50</b>   <br /><br />
Subtask 3 (75 points):  Look at constraints.   <br /></p>
