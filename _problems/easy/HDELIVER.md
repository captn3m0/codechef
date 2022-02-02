---
{"category_name":"easy","problem_code":"HDELIVER","problem_name":"Home Delivery","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"yellow_agony","problem_tester":"anton_lunyov","date_added":"18-01-2012","tags":{"0":"easy","1":"march12","2":"yellow_agony"},"editorial_url":"http://discuss.codechef.com/problems/HDELIVER","time":{"view_start_date":1331461658,"submit_start_date":1331461658,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has decided to start home delivery from his restaurant. He hopes that he will get a lot of orders for delivery, however there is a concern. He doesn't have enough work forces for all the deliveries.  For this he has came up with an idea - he will group together all those orders which have to be delivered in nearby areas. 
In particular, he has identified certain bidirectional roads which he calls as fast roads. They are short and usually traffic free, so the fast travel is possible along these roads. His plan is that he will send orders to locations <b>A</b> and <b>B</b> together if and only if it is possible to travel between <b>A</b> and <b>B</b> using only fast roads. Your task is, given the configuration of fast roads, identify which orders are to be sent together.

<h3>Input</h3>
</p><p>First line of input contains an integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. First line of each test case contains two space separated integers <b>N</b> and <b>M</b>, denoting number of locations and the number of fast roads. Then <b>M</b> lines follow each containing two space separated integers <b>A</b> and <b>B</b>, denoting that there is a fast road between locations <b>A</b> and <b>B</b>. Assume that locations are indexed by numbers from 0 to <b>N-1</b>. 
<br /><br />
Next line contains an integer <b>Q</b> denoting the number of queries. Each of the next <b>Q</b> lines contain two integers <b>X</b> and <b>Y</b>. For each query you have to find out if orders meant for locations <b>X</b> and <b>Y</b> are to be sent together or not.
<br /><br />
Note that there might be multiple fast roads between same pair of locations, also there might be a fast road that links a location to itself.

<h3>Output</h3>
</p><p>For each test case print <b>Q</b> lines - one for each query. Output "YO" if the orders are to be 
delivered together and "NO" otherwise (quotes for clarity).

<h3>Constraints</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 100
1 ≤ <b>M</b> ≤ 1000
0 ≤ <b>A, B, X, Y</b> ≤ <b>N-1</b>
1 ≤ <b>Q</b> ≤ 3000
</pre>

<h3>Example</h3>

<pre>
<b>Input:</b>
1
4 2
0 1
1 2
3
0 2
0 3
2 1

<b>Output:</b>
YO
NO
YO
</pre>

<h3>Warning!</h3>
</p><p><b>There are large input and output files in this problem. Make sure you use fast enough I/O methods.</b></p>