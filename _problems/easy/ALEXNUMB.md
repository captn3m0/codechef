---
{"category_name":"easy","problem_code":"ALEXNUMB","problem_name":"Magic Pairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"gerald","date_added":"5-11-2013","tags":{"0":"ballon_ziq"},"editorial_url":"http://discuss.codechef.com/problems/ALEXNUMB","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/ALEXNUMB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/ALEXNUMB.pdf">Russian</a>.</h3>
<p>Alexandra has some distinct integer numbers <b>a<sub>1</sub>,a<sub>2</sub>...a<sub>n</sub></b>.<br />
Count number of pairs <b>(i,j)</b> such that:</p>
<li><b> 1≤ i ≤ n</b></li>
<li><b> 1≤ j ≤ n</b></li>
<li><b> a<sub>i</sub> &lt; a<sub>j</sub></b></li>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.The first line of each test case contains a single integer <b>n</b> denoting the number of numbers Alexandra has. The second line contains <b>n</b> space-separated distinct integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>n</sub></b> denoting these numbers.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of pairs for corresponding test case.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>All the a<sub>i</sub> are distinct
</li></ul>
<p> </p>
<h3>Example</h3>
<pre>
2
2
2 1
3
3 1 2
</pre><p><b>Output:</b></p>
<pre>
1
3
</pre><p> </p>
<h3>Explanation</h3>
<p>Case 1: Only one such pair: (2,1)</p>
<p>Case 2: 3 possible pairs: (2,1), (2,3), (3,1) </p>
<p>.</p>
