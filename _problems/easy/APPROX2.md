---
{"category_name":"easy","problem_code":"APPROX2","problem_name":"Approximately II","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"stzgd","date_added":"27-04-2014","tags":{"0":"cakewalk","1":"ltime12","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/APPROX2","time":{"view_start_date":1401006600,"submit_start_date":1401006600,"visible_start_date":1401006600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/mandarin/APPROX2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME12/russian/APPROX2.pdf">Russian</a>.</h3>
<p>You are given an array of <b>N</b> integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> and an integer <b>K</b>. Find the number of such unordered pairs {<b>i</b>, <b>j</b>} that </p>
<ul>
<li><b>i</b> ≠ <b>j</b></li>
<li><b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> is minimal possible</li>
</ul>

<p>Output  the minimal possible value of <b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> (where <b>i</b> ≠ <b>j</b>) and the number of such pairs for the given array and the integer <b>K</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case consists of two space separated integers - <b>N</b> and <b>K</b> respectively.<br /><br />
The second line contains <b>N</b> single space separated integers - <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>N</sub></b> respectively.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two single space separated integers - the minimal possible value of <b>|a<sub>i</sub> + a<sub>j</sub> - K|</b> and the number of unordered pairs {<b>i</b>, <b>j</b>} for which this minimal difference is reached.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub>, K</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>N</b> = <b>2</b> - 31 point.</li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b> - 69 points.</li>
</ul>
</p><p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1   
4 9
4 4 2 6

<b>Output:</b>
1 4
</pre><h3>Explanation:</h3>
<p>The minimal possible absolute difference of <b>1</b> can be obtained by taking the pairs of <b>a<sub>1</sub></b> and <b>a<sub>2</sub></b>, <b>a<sub>1</sub></b> and <b>a<sub>4</sub></b>, <b>a<sub>2</sub></b> and <b>a<sub>4</sub></b>, <b>a<sub>3</sub></b> and <b>a<sub>4</sub></b>.</p>
