---
{"category_name":"medium","problem_code":"ORDERAAM","problem_name":"Chef and the Orders","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"satej ","problem_tester":"gerald","date_added":"6-01-2014","tags":{"0":"cook42","1":"greedy","2":"hard","3":"min","4":"satej"},"editorial_url":"http://discuss.codechef.com/problems/ORDERAAM","time":{"view_start_date":1390158900,"submit_start_date":1390158000,"visible_start_date":1390158900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/ORDERAAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/ORDERAAM.pdf">Russian</a> as well.</h3>
<p>Chef gets <b>N</b> orders. The orders are numbered from <b>1</b> to <b>N</b>. He gets order <b>i</b> at <b>S<sub>i</sub></b> time, and this order contains <b>X<sub>i</sub></b> number of items. Chef needs to serve each of these <b>X<sub>i</sub></b> items before <b>D<sub>i</sub></b> time and for each unit of items he cannot cook before this deadline he needs to pay <b>P<sub>i</sub></b> unit of money as penalty. Given all of the orders, help the Chef to minimize the penalty he will have to pay. <br /><br /> <b>Important Note</b>: Chef can cook at most one item at a unit time and for each item he needs exactly one unit of time to cook. Also Chef can serve an item instantly, when the item is cooked. If Chef wants to serve an item at time <b>t</b>, then the latest he can cook that item is at time time <b>t</b>. In another words, for order <b>i</b> Chef can cook the items at time units <b>S<sub>i</sub></b>, <b>S<sub>i</sub>+1</b>, <b>S<sub>i</sub>+2</b>, ..., <b>D<sub>i</sub>-1</b>. Please note, that Chef can not cook items from order <b>i</b> exactly at time unit <b>D<sub>i</sub></b>. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case starts with a line containing <b>N</b> the number of orders. Each of the next <b>N</b> lines contains the description of an order. Order <b>i</b> is given as a four integers <b>S<sub>i</sub></b>, <b>X<sub>i</sub></b>, <b>D<sub>i</sub></b> and <b>P<sub>i</sub></b> in a single line separated by a single space. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum amount of penalty Chef has to pay. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>S<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>D<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
<li><b>S<sub>i</sub></b>+<b>X<sub>i</sub></b> ≤ <b>D<sub>i</sub></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
1 5 6 10
2
1 5 6 10
1 5 6 10
2
1 5 6 1
1 5 6 10
2
1 5 6 10
6 5 11 10
4
5 8 15 20
11 8 20 21
16 8 25 22
21 8 30 23

<b>Output:</b>
0
50
5
0
147

</pre><p> </p>
<h3>Explanation</h3>
<p style="text-align:justify"><b>Example 1:</b> There is only 1 order and all of the items from this order can be served. So zero penalty</p>
<p style="text-align:justify"><b>Example 2:</b> There are two orders and you cannot serve 5 items. You can select these 5 items from any order.</p>
<p style="text-align:justify"><b>Example 3:</b> There are two orders and you cannot serve 5 items. But it is better not to serve these 5 items from the first order.</p>
