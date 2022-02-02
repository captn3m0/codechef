---
{"languages_supported":{"0":"NA"},"title":"HS08TEST","category":"NA","old_version":true,"problem_code":"HS08TEST","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3>
<p>Pooja would like to withdraw <tt>X</tt> $US from an ATM. The cash machine will only accept the transaction if <tt>X</tt> is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges).  For each successful withdrawal the bank charges 0.50 $US.</p>
<p>Calculate Pooja's account balance after an attempted transaction.  </p>
<h3>Input</h3>
<p> Positive integer 0 &lt; <tt>X</tt> &lt;= 2000 - the amount of cash which Pooja wishes to withdraw.</p>
<p> Nonnegative number 0&lt;= <tt>Y</tt> &lt;= 2000 with two digits of precision - Pooja's initial account balance.</p>
<h3>Output</h3>
<p>Output the account balance after the attempted transaction, given as a number with two digits of precision.  If there is not enough money in the account to complete the transaction, output the current bank balance.</p>
<h3>Example - Successful Transaction</h3>
<pre>
<b>Input:</b>
30 120.00

<b>Output:</b>
89.50
</pre><h3>Example - Incorrect Withdrawal Amount (not multiple of 5)</h3>
<pre>
<b>Input:</b>
42 120.00

<b>Output:</b>
120.00
</pre><h3>Example - Insufficient Funds</h3>
<pre>
<b>Input:</b>
300 120.00

<b>Output:</b>
120.00
</pre>    