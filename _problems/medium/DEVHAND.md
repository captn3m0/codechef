---
{"category_name":"medium","problem_code":"DEVHAND","problem_name":"Devu and his three Hands","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kevinsogo","date_added":"7-02-2015","tags":{"0":"admin2","1":"arithmetic","2":"combinatorics","3":"may15","4":"medium","5":"modular"},"editorial_url":"http://discuss.codechef.com/problems/DEVHAND","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/DEVHAND.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/DEVHAND.pdf">Russian</a>.</h3>
<p>
As you have probably realized up to now that Devu is not a normal guy, he is a very weird and abnormal guy. Normally people have two hands, but Devu has three of them. So he wears three wrist watches on his hands.
</p>
<p>
Devu loves to write name of his friends on his wrist watches. So he want to attach a string corresponding to name of his friends on each wrist watch. He is a quite particular about natural beauty, so he will not attach strings such that one of the string on a watch is prefix (not necessarily proper prefix) of some other string on other watch. Also alphabet size of characters in the string is equal to first <b>K</b> English Alphabets. (i.e. 1 ≤ <b>K ≤ 26</b>).
</p>
<p>
Now Devu wonders in how many ways he can select three non empty strings of length less than or equal to <b>N</b> to attach with his wrist watches. As answer could be very large, he wants you to print answer modulo <b>10^9 + 7</b>.
</p>
<h3>Input</h3>
<p>First line of test case contains a single integer <b>T</b> corresponding to the number of test cases.<br />
For each test case, there will be a single line containing two space separated integers <b>N, K</b>. </p>
<h3>Output</h3>
<p>For each test case, print a single line corresponding to the answer of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><i>Subtask #1: (3 points) </i>  <b>1</b> ≤ <b>T</b> ≤ <b>9</b>, <b>1</b> ≤ <b>N</b> ≤ <b>3</b>, <b>1</b> ≤ <b>K</b> ≤ <b>3</b></li>
<li><i>Subtask #2: (20 points) </i> <b>1</b> ≤ <b>T</b> ≤ <b>200</b>, <b>1</b> ≤ <b>N</b> ≤ <b>100</b>, <b>1</b> ≤ <b>K</b> ≤ <b>26</b></li>
<li><i>Subtask #3: (30 points) </i> <b>1</b> ≤ <b>T</b> ≤ <b>200</b>, <b>1</b> ≤ <b>N</b> ≤ <b>10^5</b>, <b>1</b> ≤ <b>K</b> ≤ <b>26</b></li>
<li><i>Subtask #4: (47 points) </i> <b>1</b> ≤ <b>T</b> ≤ <b>2000</b>, <b>1</b> ≤ <b>N</b> ≤ <b>10^9</b>, <b>1</b> ≤ <b>K</b> ≤ <b>26</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 2
1 3
2 2

<b>Output:</b>
0
6
36
</pre><h3>Explanation</h3>
<p><b>Example #1.</b> <br />
There is no valid arrangement of three strings to the watches, because at least one of the string will be equal to other which will violate the property stated in the problem.
</p>
<p><b>Example #2.</b>  <br />
There are 6 possible arrangements of the strings to the watches. </p>
<ul>
<li>{"a", "b", "c"} </li>
<li>{"a", "c", "b"} </li>
<li>{"b", "a", "c"} </li>
<li>{"b", "c", "a"} </li>
<li>{"c", "a", "b"} </li>
<li>{"c", "b", "a"} </li>
</ul>

