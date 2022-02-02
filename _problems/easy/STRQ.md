---
{"category_name":"easy","problem_code":"STRQ","problem_name":"Chef and Strings","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"shangjingbo","date_added":"9-10-2014","tags":{"0":"feb15","1":"ma5termind","2":"precalculation"},"editorial_url":"http://discuss.codechef.com/problems/STRQ","time":{"view_start_date":1424079000,"submit_start_date":1424079000,"visible_start_date":1424079000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/mandarin/STRQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB15/russian/STRQ.pdf">Russian</a>.</h3>
<p>Chef likes strings a lot but moreover he likes good strings. Chef calls a string <b>str</b> a good string if <b>str</b> starts and ends at different characters. For eg : strings such as <b>abab</b> , <b>baccba</b> , <b>abc</b> are all good strings whereas strings like <b>aba</b>, <b>baab</b> , <b>baacaab</b> are not good at all .</p>
<p>Today, Chef has a special string <b>P</b> consisting of lower case letters <b>"c"</b> , <b>"h"</b> , <b>"e"</b> and <b>"f"</b> only. Chef wants to make some queries about his string <b>P</b>.</p>
<p>Each of chef's query has the following form <b>a b L R</b>. For a given query, Chef wants to count the number of good strings which starts at letter <b>a</b> and ends at letter <b>b</b> such that starting index <b>S<sub>i</sub></b> and ending index <b>E<sub>i</sub></b> of a chosen substring satisfies <b>L &lt;= S<sub>i</sub> &lt; E<sub>i</sub> &lt;= R</b>.</p>
<p><b>NOTE</b></p>
<p>Two substrings <b>P<sub>1</sub></b> and <b>P<sub>2</sub></b> are considered to be different if either <b>S<sub>1</sub> != S<sub>2</sub></b> or <b>E<sub>1</sub> != E<sub>2</sub></b> where <b>S<sub>1</sub>,E<sub>1</sub></b> and <b>S<sub>2</sub>,E<sub>2</sub></b> are the starting and ending index of string <b>P<sub>1</sub></b> and string <b>P<sub>2</sub></b> respectively.</p>
<p>Chef is not able to accomplish this task efficiently. Can you help him ?</p>
<h3>Input</h3>
<p>First line of the input contains a string <b>P</b> denoting the chef's special string. Next line of the input contains a single integer <b>Q</b> denoting the number of chef's queries. Next <b>Q</b> lines of the input contains <b>four</b> space separated parameters where the first <b>two</b> parameters are characters denoting <b>a</b> and <b>b</b> respectively and rest <b>two</b> are integers denoting <b>L</b> and <b>R</b> respectively.
</p>
<h3>Output</h3>
<p>For each chef's query, print the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 &lt;= |P| &lt;= 10<sup>6</sup></b></li>
<li><b>1 &lt;= Q &lt;= 10<sup>6</sup></b></li>
<li><b>1 &lt;= L &lt;= R &lt;= |P|</b></li>
<li><b>P,a,b</b> belongs to the set of lower case letters <b>[c,h,e,f] and a != b</b>.
</li><li><b>All test files are strictly according to constraints.</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li> Subtask #1: <b>1&lt;=|P|,Q&lt;=10<sup>4</sup> : 27 pts</b></li>
<li> Subtask #2: <b>1&lt;=|P|,Q&lt;=10<sup>5</sup> : 25 pts</b></li>
<li> Subtask #3: <b>1&lt;=|P|,Q&lt;=10<sup>6</sup> : 48 pts</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
checfcheff
5
c h 1 10
c f 1 10
e c 1 10
c f 1 5
c f 6 10

<b>Output</b>
4
8
2
2
2
</pre><h3>Explanation</h3>
<ul>
<li>Q1 : good strings are <b>ch</b> , <b>checfch</b> , <b>cfch</b> , <b>ch</b> </li>
<li>Q2 : good strings are <b>checf</b> , <b>checfchef</b> , <b>checfcheff</b> , <b>cf</b> , <b>cfchef</b> , <b>cfcheff</b> , <b>chef</b> , <b>cheff</b></li>
</ul>
<h3>Warning</h3>
<p>Large test data set, Prefer to use faster input/output methods .</p>
