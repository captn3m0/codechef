---
{"category_name":"hard","problem_code":"TMP01","problem_name":"To Queue or not to Queue","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":"xcwgf666","date_added":"24-07-2013","tags":{"0":"gerald","1":"hard","2":"sept13","3":"strings","4":"suffix"},"editorial_url":"http://discuss.codechef.com/problems/TMP01","time":{"view_start_date":1379323800,"submit_start_date":1379323800,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has a string <b>S</b>. Initially, this string is empty. Also, Chef has a sequence of operations. Each operation is of one of the following two types:</p>
<ul>
<li>add character to the end of the string <b>S</b>, so the length of <b>S</b> increases by 1.</li>
<li>delete the first character of <b>S</b>, so the length of <b>S</b> decreases by 1.</li>
</ul>

<p>After each operation Chef asks you the number of distinct substrings of the current string <b>S</b>. Please answer his questions!
</p>
<h3>Input</h3>
<p>The first line of input contains <b>Q</b> - the number of operations. Then <b>Q</b> lines follow, each of these lines describes the operation.</p>
<ul>
<li>Add operation is of the form "+ <b>C</b>", where <b>C</b> is a lowercase English letter.</li>
<li>Delete operation is of the from "-".</li>
</ul>

<p>It is guaranteed that after each operation, the length of <b>S</b> is a positive integer.
</p>
<h3>Output</h3>
<p>Just to make the size of your output smaller, Chef asks you the sum of answers of all <b>Q</b> operations modulo <b>1000000007</b>.<br />
So, print a single integer - the sum of answers for all operations (the sum of <b>Q</b> numbers) modulo <b>1000000007</b>.
</p>
<h3>Constraints</h3>
<p>
1 ≤ Q ≤ 1000000
</p>
<h3>Example</h3>
<pre><b>Input:</b>
8
+ a
+ b
+ a
+ a
-
-
-
+ a

<b>Output:</b>
27
</pre><p> </p>
<h3>Explanation</h3>
<p>
In the first test case the string <b>S</b> transforms as follows: </p>
<ul>
<li>After the first operation <b>S</b> = a. The number of distinct substrings is 1: a.</li>
<li>After the second operation <b>S</b> = ab. The number of distinct substrings is 3: a, b, ab.</li>
<li>After the third operation <b>S</b> = aba. Answer is 5: a, b, ab, ba, aba.</li>
<li>After the fourth operation <b>S</b> = abaa. Answer is 8: a, b, ab, ba, aa, aba, baa, abaa.</li>
<li>After the fifth operation <b>S</b> = baa. Answer is 5: a, b, ba, aa, baa.</li>
<li>After the sixth operation <b>S</b> = aa. Answer is 2: a, aa.</li>
<li>After the seventh operation <b>S</b> = a. Answer is 1: a.</li>
<li>After the eighth operation <b>S</b> = aa. Answer is 2: a, aa.</li>
</ul>

<p>The sum is <b>1 + 3 + 5 + 8 + 5 + 2 + 1 + 2 = 27</b>, <b>27 modulo 1000000007 = 27</b>, so, you should print 27.
</p>
