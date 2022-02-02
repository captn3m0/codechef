---
{"category_name":"easy","problem_code":"FLOORI4","problem_name":"Flooring","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"xcwgf666","date_added":"21-07-2014","tags":{"0":"ad","1":"devuy11","2":"easy","3":"math","4":"sept14"},"editorial_url":"http://discuss.codechef.com/problems/FLOORI4","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/FLOORI4.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/FLOORI4.pdf">Russian</a>.</h3>
<p>
Your task is simple. <br /><br /><br />
You need to find the value of <br /><img src="/download/extimages/cf6ab82c8e6808558c16486b31044dce.gif" />.<br /><br /><br />
As the value could be too large, output it modulo <b>M</b>.
</p>
<h3>Input</h3>
<p>
The first contains an integer <b>T</b>, denoting the number of the test cases. </p>
<p>Then there are <b>T</b> lines, each describing a single test case and contains two space separated integers <b>N</b> and <b>M</b> respectively. </p>
<h3>Output</h3>
<p>For each test case, output the value of summation modulo <b>M</b> on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b> M </b> ≤ <b>100000</b> </li>
</ul>
<p>There are two types of datasets:</p>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b> , <b>1</b> ≤ <b>T</b> ≤ <b>3000</b> </li>
<li> <b>10<sup>6</sup></b> ≤ <b>N</b> ≤ <b>10<sup>10</sup></b> , <b>1</b> ≤ <b>T</b> ≤ <b>30</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 1000

<b>Output:</b>
373
</pre><h3>Explanation</h3>
<p>1<sup>4</sup>*4 + 2<sup>4</sup>*2 + 3<sup>4</sup>*1 + 4<sup>4</sup>*1 = 373 </p>
