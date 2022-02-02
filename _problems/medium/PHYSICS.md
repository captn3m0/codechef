---
{"category_name":"medium","problem_code":"PHYSICS","problem_name":"Physics Class","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":"xiaodao","date_added":"1-10-2014","tags":{"0":"binary","1":"hash","2":"ltime17","3":"piyushkumar","4":"simple","5":"sorting"},"editorial_url":"http://discuss.codechef.com/problems/PHYSICS","time":{"view_start_date":1414312200,"submit_start_date":1414312200,"visible_start_date":1414312200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/PHYSICS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/PHYSICS.pdf">Russian</a>.</h3>
<p>The Physics teacher in Tanu's class is teaching concepts of a bouncing ball. The rubber ball that she is using has the property that if the ball is dropped from height H then, it bounces back to maximum height H/F. So after first bounce it rises up to maximum height H/F, after second bounce to maximum height H/F<sup>2</sup>, after third bounce to maximum height H/F<sup>3</sup>, and so on.</p>
<p>The class has <b>N</b> children, and the teacher wants to select two children such that when the taller child drops the ball from his height, ball reaches a maximum height equal to the height of the shorter child after some (possibly zero) number of bounces. Note that zero bounces mean heights of the two children will be same. Given the heights of the children in the class <b>Height[i]</b>, can you tell how many ways are there for the teacher to select two children for the demonstration? <b>Note</b> that when heights are same, the pair is only counted once (See first example for further clarification).</p>
<h3>Input</h3>
<p>First line contains T, number of testcases. Then 2*T lines follow, 2 per testcase.<br />First line of each testcase consists of two space-separated intergers <b>N</b> and <b>F</b>. Second line of each testcase contains N space-separated <b>integers</b> representing the array <b>Height</b>.<br />
<h3>Output</h3>
</p><p>For each testcase, print a single line containing the answer to the problem.<br />
<h3>Constraints</h3>
<ul>
<li><b>For 40 points:</b> 1 ≤ T ≤ 100, 1 ≤ N ≤ 10<sup>3</sup>, 2 ≤ F ≤ 10<sup>9</sup>, 1 ≤ Height[i] ≤ 10<sup>9</sup><br />
</li><li><b>For 60 points:</b> 1 ≤ T ≤ 100, 1 ≤ N ≤ 10<sup>4</sup>, 2 ≤ F ≤ 10<sup>9</sup>, 1 ≤ Height[i] ≤ 10<sup>9</sup></li></ul>
<h3>Example</h3>
</p><p><b>Input:</b></p>
<pre>2<br />3 2<br />2 2 2<br />3 2<br />2 1 4</pre><p><br /><b>Output:</b></p>
<pre>3<br />3</pre><p><br /><b>Explanation:</b>
<ul>
<li>In the first case, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).
</li><li>For the second case also, the three pairs are (child 1, child 2), (child 2, child 3) and (child 1, child 3).</li></ul>
</p>