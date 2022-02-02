---
{"category_name":"medium","problem_code":"EXPALIN","problem_name":"Exponential Sub-Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"3 - 6","source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"27-12-2015","tags":{"0":"kostya_by","1":"ltime32","2":"palindrome","3":"string"},"editorial_url":"http://discuss.codechef.com/problems/EXPALIN","time":{"view_start_date":1454229000,"submit_start_date":1454229000,"visible_start_date":1454229000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/mandarin/EXPALIN.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/russian/EXPALIN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME32/vietnamese/EXPALIN.pdf">Vietnamese</a> as well.</h3>
<p>
You are given a binary string <b>S</b> of <b>N</b> bits. The bits in the string are indexed starting from 1. <b>S[i]</b> denotes the <b>i</b><sup>th</sup> bit of <b>S</b>.
</p>
<p>
Let's say that a sequence <b>i<sub>1</sub></b>, <b>i<sub>2</sub></b>, …, <b>i<sub>K</sub></b>(1 ≤ <b>K</b>; 1 ≤ <b>i<sub>1</sub></b> &lt; <b>i<sub>2</sub></b> &lt; … &lt; <b>i<sub>K</sub></b> ≤ <b>N</b>) <i>produces</i> a palindrome when applied to <b>S</b>, if the string <b>S[i<sub>1</sub>]</b> <b>S[i<sub>2</sub>]</b> … <b>S[i<sub>k</sub>]</b> is a palindrome (that is, reads the same backward or forward).
</p>
<p>
In addition, a sequence <b>i<sub>1</sub></b>, <b>i<sub>2</sub></b>, …, <b>i<sub>K</sub></b>(1 ≤ <b>K</b>; 1 ≤ <b>i<sub>1</sub></b> &lt; <b>i<sub>2</sub></b> &lt; … &lt; <b>i<sub>K</sub></b> ≤ <b>N</b>) is said to be <i>exponential</i>, if <b>i<sub>j + 1</sub> = p * i<sub>j</sub></b> for each integer <b>1 ≤ j &lt; K</b> and for some integer <b>p > 1</b>. Note, that a sequence of one element is always exponential.
</p>
<p>Your task is to count the number of exponential sequences that produce a palindrome when applied to <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>
The only line of description for each test case contains a binary string <b>S</b> of <b>N</b> bits.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the number of exponential sequences that produce a palindrome.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>Subtask 1(20 points): 1 ≤ <b>N</b> ≤ 20</li>
<li>Subtask 2(30 points): 1 ≤ <b>N</b> ≤ 1000</li>
<li>Subtask 3(50 points): 1 ≤ <b>N</b> ≤ 5 × 10<sup>5</sup></li>
</ul>
<h3>Note</h3>
<p>
The first test of the first subtask is the example test. It's made for you to make sure that your solution produces the same verdict both on your machine and our server.
</p>
<h3>Time Limits</h3>
<p>
Time limit for the first and the second subtasks is 3s. Time limit for the third subtask is 6s.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
11010
101001011

<b>Output:</b>
9
18

</pre><h3>Explanation of the first case in the example test</h3>
<p>
The following sequences are counted in the answer: {1}, {2}, {3}, {4}, {5}, {1, 2}, {1, 4}, {2, 4}, {1, 2, 4}.
</p>
