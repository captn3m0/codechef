---
{"category_name":"easy","problem_code":"GERALD05","problem_name":"Chef and Combinatorics","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":"rustinpiece","date_added":"10-12-2013","tags":{"0":"combinatorics","1":"cook41","2":"dynamic","3":"gerald","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/GERALD05","time":{"view_start_date":1387737000,"submit_start_date":1387737000,"visible_start_date":1387737000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/mandarin/GERALD05.pdf">here</a></h3>
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/COOK41/russian/GERALD05.docx">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef studies combinatorics. He tries to group objects by their <i>rang</i> (a positive integer associated with each object). He also gives the formula for calculating the number of different objects with <i>rang</i> <b>N</b> as following:</p>
<p><center><b>the number of different objects with <i>rang</i> N = F(N) = A<sub>0</sub> + A<sub>1</sub> * N + A<sub>2</sub> * N<sup>2</sup> + A<sub>3</sub> * N<sup>3</sup></b>.</center>
</p>
<p>Now Chef wants to know how many different multisets of these objects exist such that sum of <i>rang</i>s of the objects in the multiset equals to <b>S</b>. You are given the coefficients in <b>F(N)</b> and the target sum <b>S</b>. Please, find the number of different multisets modulo <b>1,000,000,007</b>.<br /></p>
<p>You should consider a multiset as an unordered sequence of integers. Two multisets are different if and only if there at least exists one element which occurs <b>X</b> times in the first multiset but <b>Y</b> times in the second one, where <b>(X ≠ Y)</b>.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br />
The first line of each test case contains four integers <b>A<sub>0</sub></b>, <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, <b>A<sub>3</sub></b>. The second line contains an integer <b>S</b>.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer - the answer to the test case modulo <b>1,000,000,007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>1000</b></li>
<li>Sum of all <b>S</b> for all test cases is not greater than 500. It's guaranteed that at least one <b>A<sub>i</sub></b> is non-zero.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 0 0 0
1
1 0 0 0
3
0 1 0 0
2
2 3 1 4
10

<b>Output:</b>
1
3
3
213986343
</pre><h3>Explanation</h3>
<p><b>Example case 2.</b> <br /><br />
In the second example function looks as follows <b>F(N) = 1</b>. So for each <i>rang</i> there is a single object of the <i>rang</i>. To get multiset with sum of <i>rang</i>s equal to 3, you can pick: three objects of <i>rang</i> 1, or one object of <i>rang</i> 1 and one of <i>rang</i> 2, or only one object of <i>rang</i> 3. <br /><br />
<b>Example case 3.</b> <br /><br />
In the third example function looks as follows <b>F(N) = N</b>. So, you have one distinct object of <i>rang</i> 1, two distinct objects of <i>rang</i> 2, three distinct objects of <i>rang</i> 3 and so on. To get<br />
multiset with sum of <i>rang</i>s equal to 2, you can pick: two objects of <i>rang</i> 1, one of objects of <i>rang</i> 2 (two ways).
</p>
