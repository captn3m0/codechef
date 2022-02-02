---
{"category_name":"medium","problem_code":"RRSERVER","problem_name":"Servers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"tuananh93","date_added":"5-09-2014","tags":{"0":"Rubanenko","1":"cook53","2":"dp","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/RRSERVER","time":{"view_start_date":1419186616,"submit_start_date":1419186616,"visible_start_date":1419186616,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/mandarin/RRSERVER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK53/russian/RRSERVER.pdf">Russian</a> as well.</h3>
<p>There are <b>N</b> servers which you have to place in <b>N</b> slots. Slots and servers are numbered from <b>1</b> to <b>N</b>.<br />
A distance between slots <b>i</b> and <b>j</b> is <b>|i - j|</b>. There are <b>M</b> pairs of servers that should be connected by wire. You are to place all the servers in the slots so the total wire length is minimized. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains two integer numbers <b>N</b> and <b>M</b>. Then <b>M</b> lines follow. Each of them contains two numbers <b>a</b> and <b>b</b>, which means that server <b>a</b> and server <b>b</b> should be connected to each other.
</p>
<h3>Output</h3>
<p>Output single integer — minimal wire length required to connect all the servers arranged in <b>N</b> slots.</p>
<h3>Constraints</h3>
<p><b>1 ≤ N ≤ 20</b> <br />
<b>0 ≤ M ≤ N * (N - 1) / 2 </b> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 2
1 2
1 3
<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p>One of the optimal arrangements is <b>[2, 1, 3]</b></p>
