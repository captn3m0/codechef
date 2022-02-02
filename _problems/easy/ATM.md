---
{"category_name":"easy","problem_code":"ATM","problem_name":"ATM","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"TCL","39":"PERL6","40":"TEXT","41":"CLOJ","42":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"emptyskull","problem_tester":null,"date_added":"19-10-2013","tags":{"0":"emptyskull"},"time":{"view_start_date":1521019380,"submit_start_date":1521019380,"visible_start_date":1521019380,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> </p>
<p>Problem description.</p>
<p>Pooja would like to withdraw X $US from an ATM. The cash machine will only accept the transaction if X is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges). For each successful withdrawal the bank charges 0.50 $US.
Calculate Pooja's account balance after an attempted transaction.</p>


<h3>Input</h3>
<p>Input description.</p>
<p>Positive integer 0 < X <= 2000 - the amount of cash which Pooja wishes to withdraw.<BR>
Nonnegative number 0<= Y <= 2000 with two digits of precision - Pooja's initial account balance.
</p>

<h3>Output</h3>
<p>Output the account balance after the attempted transaction, given as a number with two digits of precision. If there is not enough money in the account to complete the transaction, output the current bank balance.</p>

<p> </p>
<h3>Example - Successful Transaction</h3>
<pre><b>Input:</b>
<b>30 120.00</b>
<br>
<b>Output:</b>
<b>89.50</b>
</pre>
<p> </p>
<h3>Example - Incorrect Withdrawal Amount (not multiple of 5)</h3>
<pre><b>Input:</b>
<b>42 120.00</b>
<br>
<b>Output:</b>
<b>120.00</b>
</pre>
<p> </p>
<h3>Example - Insufficient Funds</h3>
<pre><b>Input:</b>
<b>300 120.00</b>
<br>
<b>Output:</b>
<b>120.00</b>
</pre>
<p> </p>