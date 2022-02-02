---
{"languages_supported":{"0":"NA"},"title":"FLIPCOIN","category":"NA","old_version":true,"problem_code":"FLIPCOIN","tags":{"0":"NA"},"layout":"problem"}
---

<p>There are N coins kept on the table, numbered from 0 to N - 1. Initally, each coin is kept tails up. You have to perform two types of operations :</p>
<p>1) Flip all coins numbered between A and B. This is represented by the command "0 A B"</p>
<p>2) Answer how many coins numbered between A and B are heads up. This is represented by the command "1 A B".</p>
<p>Input :</p>
<p>The first line contains two integers, N and Q. Each of the next Q lines are either of the form "0 A B" or "1 A B" as mentioned above.</p>
<p>Output :</p>
<p>Output 1 line for each of the queries of the form "1 A B" containing the required answer for the corresponding query.</p>
<pre>Sample Input :<br />4 7<br />1 0 3<br />0 1 2<br />1 0 1<br />1 0 0<br />0 0 3<br />1 0 3 <br />1 3 3<br /><br /></pre>
<pre>Sample Output :<br />0<br />1<br />0<br />2<br />1<br /><br /></pre>
<pre>Constraints :<br />1 &lt;= N &lt;= 100000<br />1 &lt;= Q &lt;= 100000<br />0 &lt;= A &lt;= B &lt;= N - 1<br /></pre>
<p></p>    