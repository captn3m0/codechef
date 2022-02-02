---
{"category_name":"easy","problem_code":"COUPON","problem_name":"Online Shopping","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"TEXT","9":"PAS fpc","10":"NODEJS","11":"RUBY","12":"PHP","13":"GO","14":"HASK","15":"TCL","16":"PERL","17":"SCALA","18":"LUA","19":"BASH","20":"JS","21":"LISP sbcl","22":"PAS gpc","23":"BF","24":"CLOJ","25":"D","26":"CAML","27":"FORT","28":"ASM","29":"FS","30":"WSPC","31":"LISP clisp","32":"SCM guile","33":"PERL6","34":"ERL","35":"CLPS","36":"ICK","37":"NICE","38":"PRLG","39":"ICON","40":"PIKE","41":"SCM qobi","42":"ST","43":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vamsi_adm","problem_tester":"Rubanenko","date_added":"7-06-2013","tags":{"0":"dynamic","1":"ltime01","2":"math","3":"simple","4":"vamsi_adm"},"problem_difficulty_level":"Simple","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/COUPON","time":{"view_start_date":1372581000,"submit_start_date":1372581000,"visible_start_date":1372581000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COUPON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<p>Alice likes to shop online. The main reason is that she gets a lot of discounts! There are <b>M</b> online shops from where she purchases her items. The prices of the same item vary in both the shops. She needs to buy <b>N</b> items in all. And each she can buy each item in any one of the shops. All the shops offer certain discounts. If she buys the <i>i</i><sup>th</sup> item in one shop, she gets a discount coupon for the <i>i+1</i><sup>th</sup> item in the same shop. But if she purchases the <i>i+1</i><sup>th</sup> item from a different shop, she cannot use the discount coupon.<br/> For example, if she buys the <i>i</i><sup>th</sup> item in Shop <i>j</i> and gets a discount of <i><b>X</b></i> rupees. Let the price of <i>i+1</i><sup>th</sup> item be <i><b>Y</b></i> rupees in shop <i>j</i> and <i><b>Z</b></i> rupees in shop <i>k</i>. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>j</i> she can use the discount coupon and hence, will have to pay <i><b>Y-X</b></i> rupees. If she purchases the <i>i+1</i><sup>th</sup> item from shop <i>k</i> she cannot use the discount coupon and hence, will have to pay <i><b>Z</b></i> rupees.<br/>
<b>Note:</b> If the discount given is more than price of the item in the shop, i.e. if <i><b>Y-X</b></i> < 0, the item is given free but she does NOT get any money back.</p>
<p>Alice wants to spend as less as possible and wants your help. She starts buying from item 1 and goes on till item N in that order. Your task is simple. Tell her the least amount to spend to get all the <b>N</b> items.</p>

<h3>Input:</h3>
First line of input contains a single integer <b>T</b>, the number of test cases.<br/>
Each test case starts with a line consisting of two space separated integers <b>N</b> & <b>M</b>.
The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the price of <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.<br/>
The next <b>N</b> lines consist of <b>M</b> space separated integers each. The <i>j</i><sup>th</sup> number on the <i>i</i><sup>th</sup> line denotes the value of discount coupon given after purchasing <i>i</i><sup>th</sup> item in the <i>j</i><sup>th</sup> shop.<br/><br/>

<h3>Output:</h3>
For each test case, output on a separate line the least amount that has to be spent to get all the <b>N</b> items.<br/><br/>

<h3>Constraints:</h3>
<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N, M</b> ≤ 100000
0 ≤ Prices, Discounts ≤ 1000000
1 ≤ <b>T * N * M</b> ≤ 1000000

</pre>

<h3>Example:</h3>

<b>Input:</b>
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


</pre>
<b>Output:</b>
<pre>
3
2

</pre>

<h3>Scoring:</h3>
You will be awarded <b>40</b> points for solving the problem correctly for <b>M = 2</b>.<br/>
Another <b>20</b> points for solving the problem correctly for <b>M <= 100</b>.<br/>
Remaining <b>40</b> points will be awarded for solving the problem correctly for <b>M > 100</b>.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>