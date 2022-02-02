---
{"category_name":"medium","problem_code":"CAKECUT","problem_name":"Cutting Cake","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"2-06-2016","tags":{"0":"bitwise","1":"cook71","2":"easy","3":"kingofnumbers"},"editorial_url":"http://discuss.codechef.com/problems/CAKECUT","time":{"view_start_date":1466965800,"submit_start_date":1466965800,"visible_start_date":1466965800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/mandarin/CAKECUT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/russian/CAKECUT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/vietnamese/CAKECUT.pdf">Vietnamese</a> as well.</h3>
<p>Chef recently cooked a big cake that can be represented as a grid of <b>N</b> rows and <b>M</b> columns, each cell can be either empty or contain a currant, Chef wants to cut out a sub-rectangle from the cake which contains even number of currants. Before cutting such a sub-rectangle, he is interested in knowing how many sub-rectangles are there which contains even number of currants.</p>
<h3>Input</h3>
<p>There is a single test case.</p>
<p>First line of the input contains two integers <b>N</b> and <b>M</b>.</p>
<p>Each of the next <b>N</b> lines contains a string of length <b>M</b>, <b>j</b>-th character of <b>i</b>-th string is <b>1</b> if the corresponding cell contains a currant otherwise it's 0.</p>
<h3>Output</h3>
<p>Output a single integer, the number of sub rectangles which contains even number of currants.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1500</b></li>
</ul>
<h3>Example 1</h3>
<pre><b>Input:</b>
<tt>2 2
01
10
</tt>
<b>Output:</b>
<tt>3</tt>
</pre><h3>Example 2</h3>
<pre>
<b>Input:</b>
<tt>3 4
1010
0101
1110
</tt>
<b>Output:</b>
<tt>26</tt>
</pre>