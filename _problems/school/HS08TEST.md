---
{"category_name":"school","problem_code":"HS08TEST","problem_name":"ATM","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLPS","8":"CPP 4.3.2","9":"CPP 4.9.2","10":"CPP14","11":"CS2","12":"D","13":"FORT","14":"GO","15":"HASK","16":"ICON","17":"JAVA","18":"JS","19":"LISP clisp","20":"LISP sbcl","21":"LUA","22":"NEM","23":"NICE","24":"NODEJS","25":"PAS fpc","26":"PAS gpc","27":"PERL","28":"PHP","29":"PIKE","30":"PRLG","31":"PYTH","32":"PYTH 3.4","33":"RUBY","34":"SCALA","35":"SCM guile","36":"SCM qobi","37":"ST","38":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"1-12-2008","tags":{"0":"admin","1":"cakewalk","2":"conditions","3":"datatypes","4":"input"},"editorial_url":"http://discuss.codechef.com/problems/HS08TEST","time":{"view_start_date":1240995052,"submit_start_date":1240995052,"visible_start_date":1240995052,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Pooja would like to withdraw <tt>X</tt> $US from an ATM. The cash machine will only accept the transaction if <tt>X</tt> is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges).  For each successful withdrawal the bank charges 0.50 $US.

Calculate Pooja's account balance after an attempted transaction.  

<h3>Input</h3>
<p> Positive integer 0 < <tt>X</tt> <= 2000 - the amount of cash which Pooja wishes to withdraw.
<p> Nonnegative number 0<= <tt>Y</tt> <= 2000 with two digits of precision - Pooja's initial account balance.

<h3>Output</h3>
<p>Output the account balance after the attempted transaction, given as a number with two digits of precision.  If there is not enough money in the account to complete the transaction, output the current bank balance.

<h3>Example - Successful Transaction</h3>

<pre>
<b>Input:</b>
30 120.00

<b>Output:</b>
89.50
</pre>

<h3>Example - Incorrect Withdrawal Amount (not multiple of 5)</h3>

<pre>
<b>Input:</b>
42 120.00

<b>Output:</b>
120.00
</pre>

<h3>Example - Insufficient Funds</h3>

<pre>
<b>Input:</b>
300 120.00

<b>Output:</b>
120.00
</pre>


