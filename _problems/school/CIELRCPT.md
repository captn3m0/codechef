---
{"category_name":"school","problem_code":"CIELRCPT","problem_name":"Ciel and Receipt","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":null,"date_added":"4-07-2012","tags":{"0":"cakewalk","1":"cook24","2":"greedy","3":"laycurse"},"editorial_url":"http://discuss.codechef.com/problems/CIELRCPT","time":{"view_start_date":1342982428,"submit_start_date":1342982428,"visible_start_date":1342982428,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Tomya is a girl. She loves Chef Ciel very much.
</p>

<p>
Tomya like a positive integer <b>p</b>, and now she wants to get a receipt of Ciel's restaurant whose total price is exactly <b>p</b>.
The current menus of Ciel's restaurant are shown the following table.
</p>

<table border="1" align="center">
<tr><td><b>Name of Menu</b></td><td align="right"><b>price</b></td></tr>
<tr><td>eel flavored water</td><td align="right">1</td></tr>
<tr><td>deep-fried eel bones</td><td align="right">2</td></tr>
<tr><td>clear soup made with eel livers</td><td align="right">4</td></tr>
<tr><td>grilled eel livers served with grated radish</td><td align="right">8</td></tr>
<tr><td>savory egg custard with eel</td><td align="right">16</td></tr>
<tr><td>eel fried rice (S)</td><td align="right">32</td></tr>
<tr><td>eel fried rice (L)</td><td align="right">64</td></tr>
<tr><td>grilled eel wrapped in cooked egg</td><td align="right">128</td></tr>
<tr><td>eel curry rice</td><td align="right">256</td></tr>
<tr><td>grilled eel over rice</td><td align="right">512</td></tr>
<tr><td>deluxe grilled eel over rice</td><td align="right">1024</td></tr>
<tr><td>eel full-course</td><td align="right">2048</td></tr>
</table>

<p>
Note that the <b>i</b>-th menu has the price 2<sup><b>i</b>-1</sup> (1 ≤ <b>i</b> ≤ 12).
</p>

<p>
Since Tomya is a pretty girl, she cannot eat a lot.
So please find the minimum number of menus whose total price is exactly <b>p</b>.
Note that if she orders the same menu twice, then it is considered as two menus are ordered. (See <b>Explanations</b> for details)
</p>


<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.
Then <strong>T</strong> test cases follow.
Each test case contains an integer <b>p</b>.
</p>

<h3>Output</h3>
<p>
For each test case, print the minimum number of menus whose total price is exactly <b>p</b>.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 5<br>
1 ≤ <b>p</b> ≤ 100000 (10<sup>5</sup>)<br>
There exists combinations of menus whose total price is exactly <b>p</b>.<br>
</p>

<h3>Sample Input</h3>
<pre>4
10
256
255
4096</pre>

<h3>Sample Output</h3>
<pre>2
1
8
2</pre>

<h3>Explanations</h3>

<p>
In the first sample, examples of the menus whose total price is 10 are the following:<br>
1+1+1+1+1+1+1+1+1+1 = 10 (10 menus)<br>
1+1+1+1+1+1+1+1+2 = 10 (9 menus)<br>
2+2+2+2+2 = 10 (5 menus)<br>
2+4+4 = 10 (3 menus)<br>
2+8 = 10 (2 menus)<br>
Here the minimum number of menus is 2.
</p>
<p>
In the last sample, the optimal way is 2048+2048=4096 (2 menus).
Note that there is no menu whose price is 4096.
</p>
