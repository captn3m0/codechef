---
{"category_name":"easy","problem_code":"ANUBTG","problem_name":"Suraj goes shopping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"xiaodao","date_added":"5-01-2015","tags":{"0":"anudeep2011","1":"cook54","2":"easy","3":"greedy"},"editorial_url":"http://discuss.codechef.com/problems/ANUBTG","time":{"view_start_date":1421609400,"submit_start_date":1421609400,"visible_start_date":1421609400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/mandarin/ANUBTG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK54/russian/ANUBTG.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>It is winter super sale and all the shops have various offers. Suraj selected <b>N</b> items to buy and he is standing in the billing queue. It was then he noticed the offer "Buy two, get two". That means for every two items you buy, they give you two items for free. However, items can be of varying price, they always charge for 2 most costly items and give other 2 as free. For example, if the items cost 1, 1, 2, 2, then you have to pay 4 and take all 4 items.</p>
<p>Suraj is busy reordering his items to reduce the total price he has to pay. He can separate the items and get them on different bills if needed. Can you tell me what is the least price Suraj has to pay to buy all the <b>N</b> items?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. First line of each test case has single integer <b>N</b>. Second line of each test case has <b>N</b> space separated integers, which are the costs of items Suraj want to buy.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>Cost of items</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 1 2 2
2
10 200
7
1 1 10 2 2 2 1

<b>Output:</b>
4
210
14
</pre><h3>Explanation</h3>
<p><b>Example case 1</b></p>
<p>Suraj pays for 2 costly items and gets other 2 for free.</p>
<p><b>Example case 2</b></p>
<p>Suraj has to pay for both the items, he wont get anything for free.</p>
<p><b>Example case 3</b></p>
<p>Suraj separates the items into 2 bills. In one bill he pays 12. And in another bill he pays 2.</p>
