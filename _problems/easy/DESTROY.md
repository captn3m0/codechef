---
{"category_name":"easy","problem_code":"DESTROY","problem_name":"Chef and Destruction","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"antoniuk1","date_added":"2-11-2015","tags":{"0":"cook66","1":"easy","2":"greedy","3":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/DESTROY","time":{"view_start_date":1453660200,"submit_start_date":1453660200,"visible_start_date":1453660200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/mandarin/DESTROY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/russian/DESTROY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/vietnamese/DESTROY.pdf">Vietnamese</a> as well.</h3>
<p>Arrays have fallen out of Chef's good books, and he plans to destroy all arrays he possesses. He is left with the last array <b>A</b>, consisting of <b>N</b> positive integers.  In order to destroy the array, he can perform the following 2 types of operations any number of times.</p>
<ul>
<li>Choose any <b>2</b> elements, say <b>X</b> and <b>Y</b>, from the given array <b>A</b> such that <b>X</b> != <b>Y</b>, and remove them, or</li>
<li>Choose any <b>1</b> element, say <b>X</b>, from <b>A</b>, and remove it.</li>
</ul>
<p><br/></br/></p>
<p>In order to destroy the array as quickly as possible, Chef is interested in knowing the minimum number of operations required to destroy it. Please help him achieve this task.</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. First line of each test case contains a single integer <b>N</b> — the number of integers in the array <b>A</b>.<br/><br />
Second line of each test case contains <b>N</b> space separated integers denoting the array <b>A</b>.</br/></p>
<h3>Output</h3>
<p>For each test case, output the required answer in a new line.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 50000</li>
<p></p></b><br />
<b>
<li>1 ≤ N ≤ 50000</li>
<p></p></b><br />
<b>
<li>1 ≤ A<sub>i</sub> ≤ 10<sup>9</sup></li>
<p></p></b><br />
<b>
<li>sum of N over all test cases does not exceed 5 × 10<sup>5</sup></li>
<p></p></b>
</ul>
<h3> Example</h3>
<pre>
<b>Input</b>
3
2
1 2
2
1 1
3
1 2 3

<b>Output</b>
1
2
2

</pre><h3>Explanation</h3>
<ul>
<li>Test 1: In an operation, Chef can choose <b>2</b> elements <b>X</b> and <b>Y</b> such that <b>X = 1</b> and <b>Y = 2</b> and can destroy them as <b>X != Y</b>.</li>
<li>Test 2: Chef cannot choose <b>2</b> elements <b>X</b> and <b>Y</b> such that <b>X != Y</b>. So, he has to use the second operation twice in order to destroy the array.</li>
</ul>
