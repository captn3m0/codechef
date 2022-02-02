---
{"category_name":"medium","problem_code":"SHTARR","problem_name":"Shooting on the array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":null,"date_added":"13-08-2017","tags":{"0":"altruist_","1":"medium","2":"oct17","3":"segment"},"editorial_url":"https://discuss.codechef.com/problems/SHTARR","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You have an array <b>A</b> of length <b>N</b> consisting of positive integers. Let's consider <b>N</b> vertical segments (parallel to y axis) on the plane, the i-th segment connects the points <b>(i, 0)</b> and <b>(i, A<sub>i</sub>)</b>.</p>

<p>You have <b> Q </b> queries of following two types:
<ul>
<li><b>+ i X </b> : <b> A<sub>i</sub> += X </b> </li>
<li><b>? i L R </b>: Let's consider <b>R - L+ 1</b> rays which are parallel to x axis. The <b>j</b>-th ray eminates at point <b>(i - 0.5, L+ j - 1.5)</b> and extends to the right infinitely long parallel to x axis. You have to print the number of the segments that will be shot by some ray. If a ray shoots a segment then it stops at that point and does't extend further. </li>
</ul>	
 </p>

<p>Note that all the queries of the second type are independent of each other.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer  <b> T </b> denoting the number of tests </p>
<p>The first line of each test case consists of two space separated integers <b> N, Q </b>.</p> 
<p>The second line contains <b>N</b> space separated denoting the array <b>A</b>.</p>
<p>Next <b> Q </b> lines contain the description of the queries in the format above.</p>

<h3>Output</h3>
<p>After each query of the second type, output in a single line the number of segments that are shot.</p>


<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤  <b> T </b> ≤ <b> 100 </b> </li>
<li> <b> 1 </b>  ≤ <b>N</b> ≤ <b> 10<sup>6</sup> </b></li>
<li> <b> 1 </b>  ≤ <b>Q</b> ≤ <b> 10<sup>5</sup> </b> </li>
<li> <b> 0 <  X  ≤ 10,000 </b> </li> 
<li> <b> 1 </b>  ≤ <b>i  </b> ≤ <b> N </b> </li>
<li> <b> 1 </b>  ≤ <b> A<sub>i</sub> </b> ≤ <b> 10<sup>9</sup> </b> </li>
<li> <b> 1 </b>  ≤ <b> L ≤ R  </b> ≤ <b> 10<sup>9</sup> </b> </li>
<li> The sum of <b>N</b> over all testcases does not exceed 10<sup>6</sup> </li>
<li> The sum of <b>Q</b> over all testcases does not exceed 10<sup>5</sup> </li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points)</b> : There are only queries of the second type</li> 
<li><b>Subtask #2 (10 points)</b> : In all queries of the second type <b>i = 1 </b> </li>
<li><b>Subtask #3 (30 points)</b> :  The sum of <b>Q</b> over all testcases does not exceed 10<sup>4</li>
<li><b>Subtask #4 (50 points)</b> :  Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
6 4
3 7 2 4 8 7
? 4 3 9 
? 3 1 7
+ 6 2
? 4 3 9

<b>Output:</b>
2
3
3

</pre>
<p> </p>