---
{"category_name":"medium","problem_code":"SEQUAT2","problem_name":"Sebi and the equation 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"kevinsogo","date_added":"18-07-2016","tags":{"0":"bitwise","1":"cook76","2":"iscsi","3":"medium","4":"sieve"},"editorial_url":"http://discuss.codechef.com/problems/SEQUAT2","time":{"view_start_date":1479666600,"submit_start_date":1479666600,"visible_start_date":1479666600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/mandarin/SEQUAT2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/russian/SEQUAT2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK76/vietnamese/SEQUAT2.pdf">Vietnamese</a> as well.</h3>

<p>Sebi's father gives him a maths question every night after dinner which he has to solve before sleeping. Today's question is as follows.</p>

<p>There are four integers <b>A, B, C, N</b>. Consider the following equation in two non-negative integer variables <b>x</b> and <b>y</b>
<code>
<pre>
<b>x * y = (x | y) * (x & y) + A * x + B * y + C</b>
</pre>
</code>

where <b>|</b> denotes <a href="https://en.wikipedia.org/wiki/Bitwise_operation#OR">bitwise OR</a> and <b>&</b> denotes <a href="https://en.wikipedia.org/wiki/Bitwise_operation#AND">bitwise AND</a> operation.
</p>

<p>
Sebi's father asks him to consider solutions such that <b>x, y</b> don't exceed <b>N</b>. Let <b>X</b> be the sum of <b>x</b>'s for all solutions <b>(x, y)</b> and <b>Y</b> be the sum of <b>y</b>'s for all solutions <b>(x, y)</b>.
</p>

<p>
Its already very late in night. He is very sleepy, he thinks that if you can help him in telling the answer of the problem, he will just tell the answer to his father and sleep. Can you please help him?
</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.
</p>
<p>Each of the next <b>T</b> lines contains four space separated integers, denoting <b>A, B, C, N</b> as defined in the statement.</p>

<h3>Output</h3>
<p>Output a <b>T</b> line containing two space separated integers <b>X</b> and <b>Y</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>60</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</sup></b></li>
<li><b>1</b> ≤ <b>A, B, C</b> ≤ <b>10000</b></li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
1
1 1 4 9

<b>Output:</b>
12 12
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
1 
1 1 3 5

<b>Output:</b>
7 7
</pre>

<h3>Explanation</h3>
<p><b>Example 1.</b></p>
<p>
There are two solutions - (3, 9) and (9, 3). For example, (9, 3) is a solution because: 9 | 3 = 11 and 9 & 3 = 1, so 9 * 3 = 11 * 1 + 1 * 9 + 1 * 3 + 4.
</p>

<p>
The value of <b>X</b> will be 3 + 9 = 12, and where <b>Y</b> will be 9 + 3 = 12.
</p>

<p><b>Example 2.</b></p>
<p>The solutions of the equation is (2, 5) and (5, 2). So, <b>X = 7</b> and <b>Y = 7</b>.</p>