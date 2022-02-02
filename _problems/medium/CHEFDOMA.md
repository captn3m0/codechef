---
{"category_name":"medium","problem_code":"CHEFDOMA","problem_name":"Chef and Dominating Subarrays","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"6-02-2016","tags":{"0":"decomposition","1":"ltime33","2":"med","3":"mgch","4":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/CHEFDOMA","time":{"view_start_date":1456592400,"submit_start_date":1456592400,"visible_start_date":1456592400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/CHEFDOMA.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/CHEFDOMA.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/CHEFDOMA.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes problems with arrays. Let's call an array <b>V</b> dominating if there exists a number <b>x</b> (the dominator) whose number of occurrences is strictly greater than half the size of the array (that is, <tt>floor(</tt>|<b>V</b>|/2<tt>)</tt>).
</p>
<p>
For example, the arrays {1, 2, 1} is dominating, with the number 1 being the dominator, since half the size of the array is 1, while the number 1 occurs twice. Similarly, the array {1, 1, 1, 2} is dominating. On the other hand, the arrays {1, 2, 3} and {1, 2, 2, 1} are not dominating.
</p>
<p>Given an array <b>A</b> consisting of <b>N</b> positive integers, you need to help Chef find the number of subarrays of <b>A</b> which are dominating.</p>
<h3>Input</h3>
<p>The first line of input contains one integer <b>N</b> denoting the number of elements in the array <b>A</b>. The second line of input contains <b>N</b> space-separated integers denoting the array <b>A</b>.</p>
<h3>Output</h3>
<p>Output the answer to the query in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5 × 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 1 2 1

<b>Output:</b>
9

<b>Input:</b>
7
1 2 3 3 2 1 3

<b>Output:</b>
11

</pre><h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> <b> N </b>≤ 10<sup>2</sup>. <b>Points - 10</b></li>
<li><b>Subtask 2:</b> <b> N </b>≤ 10<sup>4</sup>. <b>Points - 20</b></li>
<li><b>Subtask 3:</b> <b> N </b>≤ 10<sup>5</sup>. <b>Points - 30</b></li>
<li><b>Subtask 4:</b> Original constraints. <b>Points - 40</b></li>
</ul>
<h3>Explanation</h3>
<ul>
<p>Test #1:<br/><br />
The dominating subarrays are A[1..1], A[2..2], A[3..3], A[4..4], A[5..5], A[6..6], A[1..3], A[2..4], A[3..5].</br/></p>
<p>Test #2:<br/><br />
The dominating subarrays are A[1..1], A[2..2], A[3..3], A[4..4], A[5..5], A[6..6], A[7..7], A[3..4], A[2..4], A[3..5], A[3..7].</br/></p>
</ul>
