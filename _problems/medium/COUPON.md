---
{"category_name":"medium","problem_code":"COUPON","problem_name":"Online Shopping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_kavala","problem_tester":"Rubanenko","date_added":"7-06-2013","tags":{"0":"dynamic","1":"ltime01","2":"simple","3":"simple","4":"vamsi_kavala"},"editorial_url":"http://discuss.codechef.com/problems/COUPON","time":{"view_start_date":1372581279,"submit_start_date":1372581279,"visible_start_date":1372581279,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice likes to shop online. The main reason is that she gets a lot of discounts! There are <b>M</b> online shops from where she purchases her items. The prices of the same item vary in both the shops. She needs to buy <b>N</b> items in all. And each she can buy each item in any one of the shops. All the shops offer certain discounts. If she buys the <i>i</i><sup>th</sup> item in one shop, she gets a discount coupon for the <i>i+1</i><sup>th</sup> item in the same shop. But if she purchases the <i>i+1</i><sup>th</sup> item from a different shop, she cannot use the discount coupon.<br/> For example, if she buys the <i>i</i><sup>th</sup> item in Shop <i>j</i> and gets a discount of <i><b>X</b></i> rupees. Let the price of <i>i+1</i><sup>th</sup> item be <i><b>Y</b></i> rupees in shop <i>j</i> and <i><b>Z</b></i> rupees in shop <i>k</i>. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>j</i> she can use the discount coupon and hence, will have to pay <i><b>Y-X</b></i> rupees. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>k</i> she cannot use the discount coupon and hence, will have to pay <i><b>Z</b></i> rupees.<br/><br />
<b>Note:</b> If the discount given is more than price of the item in the shop, i.e. if <i><b>Y-X</b></i> &lt; 0, the item is given free but she does NOT get any money back.</br/></br/></p>
<p>Alice wants to spend as less as possible and wants your help. She starts buying from item 1 and goes on till item N in that order. Your task is simple. Tell her the least amount to spend to get all the <b>N</b> items.</p>
<h3>Input:</h3>
<p>First line of input contains a single integer <b>T</b>, the number of test cases.<br/><br />
Each test case starts with a line consisting of two space separated integers <b>N</b> &amp; <b>M</b>.<br />
The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the price of <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.<br/><br />
The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the value of discount coupon given after purchasing <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.<br/><br/></br/></br/></br/></br/></p>
<h3>Output:</h3>
<p>For each test case, output on a separate line the least amount that has to be spent to get all the <b>N</b> items.<br/><br/></br/></br/></p>
<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N, M</b> ≤ 100000
0 ≤ Prices, Discounts ≤ 1000000
1 ≤ <b>T * N * M</b> ≤ 1000000

</pre><h3>Example:</h3>
<p><b>Input:</b></p>
<pre>
2
2 2
3 4
1 2
1 0
0 1
2 4
1 2 3 4
4 3 2 1
2 3 2 1
1 2 1 1


</pre><p><b>Output:</b></p>
<pre>
3
2

</pre><h3>Scoring:</h3>
<p>You will be awarded <b>40</b> points for solving the problem correctly for <b>M = 2</b>.<br/><br />
Another <b>20</b> points for solving the problem correctly for <b>M &lt;= 100</b>.<br/><br />
Remaining <b>40</b> points will be awarded for solving the problem correctly for <b>M > 100</b>.</br/></br/></p>
