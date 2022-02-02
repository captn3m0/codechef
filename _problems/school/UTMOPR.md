---
{"category_name":"school","problem_code":"UTMOPR","problem_name":"Strange operations","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_note","problem_tester":"rubanenko","date_added":"13-06-2015","tags":{"0":"basic","1":"cakewalk","2":"code_note","3":"cook59","4":"simulation"},"editorial_url":"http://discuss.codechef.com/problems/UTMOPR","time":{"view_start_date":1434911400,"submit_start_date":1434911400,"visible_start_date":1434911400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/mandarin/UTMOPR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/russian/UTMOPR.pdf">Russian</a> as well.</h3>

<p>Given an array consisting of <b>N</b> integers, you have to do the following operation <b>K</b> times.

<ul><li>Find out the sum of all the elements in the array. Denote it by <strong>S</strong>. Insert an integer in the array strictly greater than <strong>S</strong>. Hence, size of the array will increase by one.</li> </ul>
</p>

<p>Thus, at the end of the <b>K</b> operations, the array will have <b>N</b> + <b>K</b> elements. Find out the smallest possible value of the last number inserted in the array. Since this number can be very large, you just have to tell whether it will be odd or even. </p>

<h3>Input</h3>
<ul>
<li>The first line of each test file contains the number of test cases, <b>T</b>.</li>
<li>The description of the test cases follows this line. Each test case description consists of 2 lines.</li>
<li>The first line has the values of <b>N</b> and <b>K</b>, separated by a space. </li>
<li>The next line contains a single-space separated list of values of the elements in the array.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the answer to the problem.If the number is even print <b>"even"</b>  and if the number is odd print  <b>"odd"</b>.</li>
</ul>

<h3>Constraints:</h3>
<p>
<ul>
<li>1 ≤ <strong>T</strong> ≤10<br/></li>
<li>1 ≤ <strong>K</strong> ≤ 10<sup>6</sup><br /></li>
<li>1 ≤ <strong>N</strong> ≤ 10<sup>3</sup><br /></li>
<li>1</sup> ≤ array element ≤ 10<sup>9</sup></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Sample Input:</b>
1
2 3
5 7
</pre>

<p><strong>Sample Output:</strong><br />
<pre>
even

</pre></p>