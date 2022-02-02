---
{"category_name":"medium","problem_code":"SEQLCS","problem_name":"Chef and the Number Sequence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"iscsi","date_added":"1-08-2015","tags":{"0":"cook61","1":"dp","2":"medium","3":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/SEQLCS","time":{"view_start_date":1440357600,"submit_start_date":1440357600,"visible_start_date":1440357600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/mandarin/SEQLCS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK61/russian/SEQLCS.pdf">Russian</a> as well.</h3>
<p>Chef has a sequence <b>A</b> consisting of <b>N</b> integers each lying between <b>1</b> and <b>K</b>, both inclusive. Now he wants to construct another sequence <b>B</b> of the same length also containing integers between <b>1</b> and <b>K</b> (again, both inclusive). Find out in how many ways he can construct the sequence <b>B</b>, such that the length of <a href="https://en.wikipedia.org/wiki/Longest_common_subsequence_problem">Longest Common Subsequence (LCS)</a>  of <b>A</b> and <b>B</b> is exactly <b>L</b>. As the answer could be large, print it modulo <b>10<sup>9</sup> + 7</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains <b>T</b> denoting the number of test cases. Each test case contains two lines: </p>
<ul>
<li>The first line of each test case contains three space separated integers <b>N</b>, <b>K</b>, and <b>L</b>.</li>
<li>The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... <b>A<sub>N</sub></b>. </li>
</ul>
<h3>Output</h3>
<p>For each test case output the number of ways to construct B as described above. Output the result modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N,K</b> ≤ <b>16</b> </li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>N</b> </li>
<li>The sequence <b>A</b> consists of integers between <b>1</b> and <b>K</b> (both inclusive). </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2 1
1 2
3 3 2
1 2 2

<b>Output:</b>
3
11

</pre><h3>Explanation</h3>
<p>
<b>First Example</b> : There are total three possible valid sequences <b>B</b> : [1, 1], [2, 2] and [2, 1]. LCS of these sequences with sequence <b>A</b> is equal to 1. Note that [1, 2] is not a valid sequence as LCS of this and sequence <b>A</b> is equal to 2.
</p>
<p>
<b>Second Example</b>: The 11 ways are: [1, 1, 2], [1, 2, 1], [1, 2, 3],  [1, 3, 2], [2, 1, 2], [2, 2, 1],  [2, 2, 2], [2, 2, 3], [2, 3, 2],  [3, 1, 2], [3, 2, 2].
</p>
<h3>Note</h3>
<p>Two sequences of <b>B</b> are considered different if there is at least one position which contains different numbers in the sequences.</p>
