---
{"category_name":"easy","problem_code":"PERMEXIS","problem_name":"Watson asks Does Permutation Exist","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"27-09-2016","tags":{"0":"cook75","1":"darkshadows","2":"logic","3":"simple","4":"sorting"},"time":{"view_start_date":1477247400,"submit_start_date":1477247400,"visible_start_date":1477247400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/mandarin/PERMEXIS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/russian/PERMEXIS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/vietnamese/PERMEXIS.pdf">Vietnamese</a> as well.</h3>

<p>Watson gives an array <b>A</b> of <b>N</b> integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> to Sherlock. He wants Sherlock to reorganize the array in a way such that no two adjacent numbers differ by more than 1.</p>
<p>Formally, if reorganized array is <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b>, then the condition that <b>| B<sub>i</sub> - B<sub>i + 1</sub> | ≤ 1</b>, for all <b>1 ≤ i &lt; N</b>(where <b>|x|</b> denotes the absolute value of <b>x</b>) should be met.
<p>Sherlock is not sure that a solution exists, so he asks you.</p>

<h3>Input</h3>
<p>First line contains <b>T</b>, number of test cases. Each test case consists of <b>N</b> in one line followed by <b>N</b> integers in next line denoting <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output in one line <b>YES</b> or <b>NO</b> denoting if array <b>A</b> can be reorganized in required way or not.
</p>
<h3>Constraints</h3>
<ul>
  <li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
  <li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤  <b>10<sup>9</sup></b></li>
  <li>Sum of <b>N</b> over all test cases  ≤ <b>2*10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
3 2 2 3 
2
1 5

<b>Output:</b>
YES
NO
</pre>
<h3>Explanation</h3>
<p>
Test case 1:<br/>
No need to reorganise.
<br/>
<br/>
Test case 2:<br/>
No possible way.
</p>