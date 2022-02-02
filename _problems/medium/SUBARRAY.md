---
{"category_name":"medium","problem_code":"SUBARRAY","problem_name":"Parenthesis with Maximum Sum Subarray","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"anudeep2011","date_added":"11-11-2014","tags":{"0":"cook55","1":"data","2":"devuy11","3":"dynamic","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/SUBARRAY","time":{"view_start_date":1424025000,"submit_start_date":1424025000,"visible_start_date":1424025000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/mandarin/SUBARRAY.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK55/russian/SUBARRAY.pdf">Russian</a> as well.</h3>
<p>You are given a character parenthesis array and an integer array.</p>
<p>You need to find the maximum sum sub-array in the integer array such that the corresponding sub-array in the character array has balanced parenthesis.  </p>
<p>
Formally, a balanced parentheses is subset of  <b>{</b> [,],{,},&lt;,>,(,) <b>}</b>∗ defined recursively as follows: </p>
<ul>
<li>The empty string is balanced parentheses. </li>
<li>If A is balanced parentheses, then so are the strings [A], {A} , &lt;A>, (A). </li>
<li>If A and B are balanced parenthesis, then so is the string AB. </li>
</ul>

<h3>Input Format</h3>
<ul>
<li>First line contains <b>T</b>, the number of test cases.</li>
<li>First line of each test case contains integer <b>N</b>.</li>
<li>Next two lines contain the character array and the integer array respectively, each having <b>N</b> elements.</li>
</ul>
<h3>Output Format</h3>
<p>For each test case, output the maximum sum obtained using the constraints above. If the maximum sum obtained is less than 0, output 0 instead.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1 ≤ Sum of <b>N</b> over all test cases ≤ 10<sup>6</sup>  </b></li>
<li><b>1 ≤ <b>N</b> ≤ 10<sup>5</sup>  </b></li>
<li><b>1 ≤ <b>T</b> ≤ 10<sup>5</sup>  </b></li>
<li><b>1 ≤ Abs(value of the integer array) ≤ 10<sup>9</sup> </b></li>
<li><b>Character array contains chars from this set: [,],{,},&lt;,>,(,) </b></li>
</ul>
</p>
<pre>
<b>Sample Input</b>
3
4
()()
-1 -2 3 4
4
(()]
-1 -2 3 4
4
[{]{
1 2 3 4

<b>Sample Output</b>
7
1
0
</pre><h3>Explanation</h3>
<p>
For first test case take last 2 elements: 3 + 4 = 7.  <br />
For second test case take the middle 2 elements: -2 + 3 = 1  
</p>
<p><b>Warning : Large Input - Output, Use fast IO.</b></p>
