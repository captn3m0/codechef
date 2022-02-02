---
{"category_name":"easy","problem_code":"CHSGMNTS","problem_name":"Chef and Segments","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"mugurelionut","date_added":"18-07-2015","tags":{"0":"antoniuk1","1":"dynamic","2":"july16","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CHSGMNTS","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CHSGMNTS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CHSGMNTS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CHSGMNTS.pdf">Vietnamese</a> as well.</h3>
<p>Chef has an array <b>A</b> consisting of <b>N</b> elements. He wants to find number of pairs of non-intersecting segments [<b>a</b>, <b>b</b>] and [<b>c</b>, <b>d</b>] (1 ≤ <b>a</b> ≤ <b>b</b> &lt; <b>c</b> ≤ <b>d</b> ≤ <b>N</b>) such there is no number that occurs in the subarray {<b>A<sub>a</sub></b>, <b>A<sub>a+1</sub></b>, ... , <b>A<sub>b</sub></b>} and   {<b>A<sub>c</sub></b>, <b>A<sub>c+1</sub></b>, ... , <b>A<sub>d</sub></b>} simultaneously. </p>
<p>Help Chef to find this number.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of elements in the array.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing one integer - number of pairs of non-intersecting segments. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><b>Subtask 1 (7 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>
<p><b>Subtask 2 (34 points)</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300</b></li>
</ul>
<p><b>Subtask 3 (59 points)</b></p>
<ul>
<li>Original constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
4
1 2 1 2

<b>Output:</b>
5
4
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
All possible variants are correct: {[1, 1], [2, 2]}, {[1, 1], [2, 3]}, {[1, 2], [3, 3]}, {[2, 2], [3, 3]}, {[1,1], [3, 3]}.
</p>
<p><b>Example case 2.</b><br />
Correct segments: {[1, 1], [2, 2]}, {[1, 1], [4, 4]}, {[2, 2], [3, 3]}, {[3, 3], [4, 4]}.</p>
