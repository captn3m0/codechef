---
{"category_name":"school","problem_code":"BIGSALE","problem_name":"A Big Sale","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"2-02-2018","tags":{"0":"admin2","1":"easy","2":"march18","3":"maths"},"editorial_url":"https://discuss.codechef.com/problems/BIGSALE","time":{"view_start_date":1520847000,"submit_start_date":1520847000,"visible_start_date":1520847000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/mandarin/BIGSALE.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/russian/BIGSALE.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/MARCH18/vietnamese/BIGSALE.pdf">Vietnamese</a> as well.</h3>

<p>Chef recently opened a big e-commerce website where her recipes can be bought online. It's Chef's birthday month and so she has decided to organize a big sale in which grand discounts will be provided.</p>

<p>In this sale, suppose a recipe should have a discount of <b>x</b> percent and its original price (before the sale) is <b>p</b>. Statistics says that when people see a discount offered over a product, they are more likely to buy it. Therefore, Chef decides to first increase the price of this recipe by <b>x</b>% (from <b>p</b>) and then offer a discount of <b>x</b>% to people.</p>

<p>Chef has a total of <b>N</b> types of recipes. For each <b>i</b> (1 ≤ <b>i</b> ≤ <b>N</b>), the number of recipes of this type available for sale is <b>quantity<sub>i</sub></b>, the unit price (of one recipe of this type, before the <b>x</b>% increase) is <b>price<sub>i</sub></b> and the discount offered on each recipe of this type (the value of <b>x</b>) is <b>discount<sub>i</sub></b>.</p>

<p>Please help Chef find the total loss incurred due to this sale, if all the recipes are sold out.</p> 

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of recipe types.</li>
<li><b>N</b> lines follow. The <b>i</b>-th of these lines contains three space-separated integers <b>price<sub>i</sub></b>, <b>quantity<sub>i</sub></b> and <b>discount<sub>i</sub></b> describing the <b>i</b>-th recipe type.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one real number — the total amount of money lost. Your answer will be considered correct if it has an absolute error less than 10<sup>-2</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>price<sub>i</sub></b>, <b>quantity<sub>i</sub></b> ≤ 100 for each valid <b>i</b></li>
<li>0 ≤ <b>discount<sub>i</sub></b> ≤ 100 for each valid <b>i</b></li>
</ul>

<h3>Subtasks</h3>

<p><b>Subtask #1 (30 points):</b> 1 ≤ <b>N</b> ≤ 100</p>

<p><b>Subtask #2 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
2
100 5 10
100 1 50
3
10 10 0
79 79 79
100 1 100

<b>Output:</b>

30.000000000
3995.0081000
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> There are two recipes.</p>
<p>There are 5 recipes of the first type, each of them has a price of 100 and there is a 10% discount provided on it. Therefore, Chef first increases the price of each recipe by 10%, from 100 to 110. After that, she decreases the price by 10%, which makes the final price 99. The amount of money lost for each unit is 1, thus losing 5 for recipes of the first type.</p>

<p>There is only one recipe of the second type, with price 100 and a 50% discount. Therefore, Chef increases the price of the recipe by 50% from 100 to 150 and after that, she decreases its price by 50% to make its final price 75. She loses 25 for this recipe.</p>

<p>Overall, the amount of money Chef loses is 30.</p>
