---
{"category_name":"medium","problem_code":"CNPIIM","problem_name":"Counting Matrices","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"shiplu","date_added":"2-12-2013","tags":{"0":"april14","1":"easy","2":"kuruma","3":"maths"},"editorial_url":"http://discuss.codechef.com/problems/CNPIIM","time":{"view_start_date":1397468002,"submit_start_date":1397468002,"visible_start_date":1397467741,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/CNPIIM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/CNPIIM.pdf">Russian</a>.</h3>
<p> </p>
<p>Lira loves Linear Algebra and she is especially keen about matrix :).</p>
<p>Today, she learnt some properties about matrices, namely, she learnt about what the trace of a matrix is, as her teacher gave her many exercises for her to practice.</p>
<p>As we know she is pretty clever, she rapidly came up with some definitions of her own and devised a somewhat harder version of the problem initially proposed by her teacher.
</p><p>Namely, she defines a <b>Positive Invertible Integer Matrix</b> as being an invertible 2x2 matrix composed only of positive (i.e. greater than 0) integer elements and whose determinant is greater than 0.</p>
<p>Now, she is interested in counting how many such matrices are there, such that their trace is equal to <b>N</b> .</p>
<p>It's your turn to solve Lira's problem :D</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br />
Each test case consist of single integer <b>N</b>, the trace of the matrix.
</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number of <b>Positive Invertible Integer Matrices</b> such that their trace is equal to <b>N</b> and determinant is positive.</p>
<p>Read here for additional info:</p>
<p><a href="http://en.wikipedia.org/wiki/Trace_(linear_algebra)">http://en.wikipedia.org/wiki/Trace_(linear_algebra)</a></p>
<p><a href="http://en.wikipedia.org/wiki/Determinant">http://en.wikipedia.org/wiki/Determinant</a> </p>
<h3>Constraints:</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>2500</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3

<b>Output:</b>
2	
</pre><h3>Explanation</h3>
<p>The only two matrices that exist with trace equal to 3 and that satisfy all the given conditions are:</p>
<p><img src="/download/extimages/0a3c6a4adf4feefa0ff7eb3765ac8959.gif" alt="Matrices" width="91" height="42" /></p>
