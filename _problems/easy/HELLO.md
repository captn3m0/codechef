---
{"category_name":"easy","problem_code":"HELLO","problem_name":"Hello Hello","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":null,"date_added":"29-01-2013","tags":{"0":"aug13","1":"simple","2":"simple","3":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/HELLO","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef talks a lot on his mobile phone. As a result he exhausts his talk-value (in Rokdas) very quickly. One day at a mobile recharge shop, he noticed that his service provider gives add-on plans which can lower his calling rates (Rokdas/minute). One of the plans said "Recharge for 28 Rokdas and enjoy call rates of 0.50 Rokdas/min for one month". Chef was very pleased. His normal calling rate is 1 Rokda/min. And he talked for 200 minutes in last month, which costed him 200 Rokdas. If he had this plan activated, it would have costed him: 28 + 0.5*200 = 128 Rokdas only! Chef could have saved 72 Rokdas. But if he pays for this add-on and talks for very little in the coming month, he may end up saving nothing or even wasting money. Now, Chef is a simple guy and he doesn't worry much about future. He decides to choose the plan based upon his last month’s usage.</p>
<p>There are numerous plans. Some for 1 month, some for 15 months. Some reduce call rate to 0.75 Rokdas/min, some reduce it to 0.60 Rokdas/min. And of course each of them differ in their activation costs. <b>Note</b> - If a plan is valid for <b>M</b> months, then we must pay for (re)activation after every <b>M</b> months (once in M months). Naturally, Chef is confused, and you (as always) are given the task to help him choose the best plan.</p>

<h3>Input</h3>
<p>First line contains <b>T</b>- the number of test cases. In each test case, first line contains <b>D</b>- the default rate (Rokdas/minute, real number), <b>U</b>- the number of minutes Chef talked in last month and <b>N</b>- the number of add-on plans available. Then <b>N</b> lines follow, each containing <b>M</b>- the number of months the plan is valid for, <b>R</b>- the calling rate for the plan (Rokdas/minute, real number) and <b>C</b>- the cost of the plan.</p>

<h3>Output</h3>
<p>For each test case, output one integer- the number of the best plan (from 1 to N). Output '0' if no plan is advantageous for Chef. No two plans are equally advantageous.</p>

<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 100<br/>0.5 ≤ <b>D</b> ≤ 10.0 (exactly 2 digits after the decimal point)<br/>1 ≤ <b>U</b> ≤ 10000<br/>1 ≤ <b>N</b> ≤ 100<br/>1 ≤ <b>M</b> ≤ 36<br/>0.05 ≤ <b>R</b> &lt; <b>D</b> (exactly 2 digits after the decimal point)<br/>1 ≤ <b>C</b> ≤ 1000</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
4
1.00 200 1
1 0.50 28
1.00 200 2
1 0.75 40
3 0.60 100
1.00 50 2
1 0.75 40
3 0.60 100
1.00 100 2
3 0.50 10
2 0.10 20

<b>Output:</b>
1
2
0
2
</pre>

<h3>Explanation</h3>

<p><b>Test Case 1:</b> This test case is same as the example in the problem statement.<br/><b>Test Case 2:</b> This is for you to work out!<br/><b>Test Case 3:</b> Chef's monthly usage is only 50 Rokdas and none of the 2 plans are advantageous, hence the answer is zero '0'.<br/><b>Test Case 4:</b> Again solve it yourself, but NOTE - if Chef had chosen plan 1, he would have to pay 10 Rokdas (Activation cost), after every 3 months and NOT every month. Similarly had he chosen plan 2, he would have to pay 20 Rokdas (Activation cost), after every 2 months.</p>