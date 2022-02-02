---
{"category_name":"easy","problem_code":"DIAMOND","problem_name":"Need More Diamonds","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"anton_lunyov","date_added":"17-09-2012","tags":{"0":"dynamic","1":"easy","2":"kaushik_iska","3":"oct12"},"editorial_url":"http://discuss.codechef.com/problems/DIAMOND","time":{"view_start_date":1350293400,"submit_start_date":1350293400,"visible_start_date":1350293400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">
<b>Alice</b> and <b>Bob</b> have decided to play the following game. Initially there are <b>N</b> diamonds placed in a straight line. Diamonds numbered from 1 to <b>N</b> in consecutive order. Each diamond has a specific value. The value of <b>i-</b>th diamond is <b>V<sub>i</sub></b> for <b>i</b> from 1 to <b>N</b>. Players make moves alternatively. In each move player proceeds as follows. If there is only one diamond left the player takes it otherwise he/she tosses the unbiased coin and if it lands on heads he/she takes the <b>first</b> diamond among the diamonds that are currently present in a line, otherwise he/she takes the<br />
<b>last</b> diamond. What is the expected total value <b>Alice</b> will get, if she plays <b>first</b>? Note that the unbiased coin lands on heads with probability 0.5 (and hence lands on tail with the same probability). Also note that the total value is the sum of values of all diamonds that Alice will get.
</p>
<h3>Input</h3>
<p style="text-align:justify">
The first line of the input contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case consists of exactly 2 lines. The first line of each test case contains a single integer<br />
<b>N</b>, the number of diamonds. The second line contains <b>N</b> space separated integers<br />
<b>V<sub>1</sub></b>, <b>V<sub>2</sub></b>, ..., <b>V<sub>N</sub></b>, the values of diamonds in the order they lie in a line.
</p>
<h3>Output</h3>
<p style="text-align:justify">
Output for each test case should contain a single real number in a separate line, the expected total value Alice will get for this particular test. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-2</sup></b>.
</p>
<h3>Constraints</h3>
<p style="text-align:justify">
1 ≤ <b>T</b> ≤ 500 <br />
1 ≤ <b>N</b> ≤ 2000 <br />
0 ≤ <b>V<sub>i</sub></b> ≤ 999
</p>
<h3>Example</h3>
<pre>
<b>Input</b>
4
1
100
2
42 0
3
1 4 9
4
5 5 5 5

<b>Output</b>
100.000
21.000
9.500
10.000
</pre><h3>Explanation</h3>
<p style="text-align:justify">
<b>Case 1:</b> In the first move Alice has to take <b>100</b>, and this is the only move. Hence, the expected value Alice will get is <b>100</b>.
</p>
<p style="text-align:justify">
<b>Case 2: </b> It is quite clear that Alice will make only 1 move. As she can get <b>42</b> or <b>0</b> with<br />
equal probability, the expected value she will get is equal to <b>0.5 ∙ 42 + 0.5 ∙ 0 = 21</b>.
</p>
<p style="text-align:justify">
<b>Case 3: </b> Let's consider all possible scenarios how game can proceed:
</p>
<table border=1>
<tbody>
<tr>
<td>1st move</td>
<td>2nd move</td>
<td>3rd move</td>
<td>Alice total value</td>
</tr>
<tr>
<td>Alice gets 1</td>
<td>Bob gets 4</td>
<td>Alice gets 9</td>
<td>10</td>
</tr>
<tr>
<td>Alice gets 1</td>
<td>Bob gets 9</td>
<td>Alice gets 4</td>
<td>5</td>
</tr>
<tr>
<td>Alice gets 9</td>
<td>Bob gets 1</td>
<td>Alice gets 4</td>
<td>13</td>
</tr>
<tr>
<td>Alice gets 9</td>
<td>Bob gets 4</td>
<td>Alice gets 1</td>
<td>10</td>
</tr>
</tbody>
</table>
<p style="text-align:justify">
Clearly each of these scenarios will happen with probability <b>0.5 ∙ 0.5 = 0.25</b>. Hence the expected value Alice will get is equal to <b>0.25 ∙ 10 + 0.25 ∙ 5 + 0.25 ∙ 13 + 0.25 ∙ 10 = 9.5</b>.
</p>
<p style="text-align:justify">
<b>Case 4:</b> Out of the 4 diamonds, Alice will get some 2 of them. As all of the diamonds have the same value <b>5</b>, the expected value she will get is equal to <b>5 + 5 = 10</b>.
</p>
