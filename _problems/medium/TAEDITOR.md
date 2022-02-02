---
{"category_name":"medium","problem_code":"TAEDITOR","problem_name":"Simple Editor","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"3-07-2014","tags":{"0":"bit","1":"ltime14","2":"medium","3":"segment","4":"strings","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TAEDITOR","time":{"view_start_date":1406452500,"submit_start_date":1406452500,"visible_start_date":1406452500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TAEDITOR.pdf">Mandarin Chinese </a>.</h3>
<p> </p>
<p>In this problem you will have to implement a simple editor. The editor maintains the content of a string <b>S</b> and have two following functions:<br />
<br/><br />
"<b>+ i x</b>": insert a string <b>x</b> into the current string <b>S</b> after the <b>i</b>'th character of the <b>S</b> (we use 1-indexing in this problem). When <b>i</b> equals to <b>0</b> it mean we add <b>x</b> at the beginning of <b>S</b>.<br/><br />
"<b>? i len</b>": Print the sub-string of length <b>len</b> starting at position <b>i</b>'th of <b>S</b>.<br />
<br/><br />
At the beginning, the editor holds an empty string. There will be <b>Q</b> queries of the two types described above.</br/></br/></br/></p>
<p> </p>
<h3>Input</h3>
<p>The first line contains the integer <b>Q</b>.<br />
Each line in the next <b>Q</b> lines contains one query.
</p>
<p> </p>
<h3>Output</h3>
<p>For each query of the second type, print out the answer sub-string in one line.
</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>For the first type of query: 0 ≤ <b>i</b> ≤ |<b>S</b>|</li>
<li>For the second type of query: 1 ≤ <b>i</b> ≤ |<b>S</b>| - <b>len</b> + 1 </li>
</ul>

<p>20 points</p>
<ul>
<li><b>Q</b> ≤ 1000, |<b>S</b>| ≤ 1000, sum of value of all <b>len</b>s ≤ 1000: </li>
</ul>

<p>30 points</p>
<ul>
<li><b>Q</b> ≤ 10000, |<b>S</b>| ≤ 10000, sum of value of all <b>len</b>s ≤ 10000: </li>
</ul>

<p>50 points</p>
<ul>
<li><b>Q</b> ≤ 3×10<sup>5</sup>, |<b>S</b>| ≤ 3×10<sup>5</sup>, sum of value of all <b>len</b>s ≤ 3×10<sup>5</sup>: </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
+ 0 ab
+ 1 c
? 1 3
+ 2 dd
? 1 5

<b>Output:</b>
acb
acddb
</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>"+ 0 ab": S = "ab"</li>
<li>"+ 1 c": S = "acb"</li>
<li>"+ 2 dd": S = "acddb"</li>
</ul>
