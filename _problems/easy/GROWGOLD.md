---
{"category_name":"easy","problem_code":"GROWGOLD","problem_name":"Golden Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"flying_ant","problem_tester":"laycurse","date_added":"7-06-2012","tags":{"0":"cook23","1":"easy","2":"flying_ant"},"editorial_url":"http://discuss.codechef.com/problems/GROWGOLD","time":{"view_start_date":1339959680,"submit_start_date":1339959680,"visible_start_date":1339959300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">
Long ago there was a beautiful kingdom in the island of Sona, the golden island, deep inside Africa. 
The trees in Sona island are made of gold and farmers are the richest group of people and are also heavy tax payers.

</p><p align="justify">
As you know that price of gold increases every year, the minister of Sona has proposed the following tax policy.
<ul>
<li>Pay <b>initTax</b> units of gold in the first year.<br /><br /></li>
<li>In each of the next <b>slot1</b> years, pay one unit of gold more than the previous year.<br /><br /></li>
<li>In each of the next <b>slot2</b> years, pay double the units of gold of the previous year.<br /><br /></li>
<li>In each of the following years, pay number of gold units equal to the product of the number of units paid in <b>K</b> recent years.<br /><br /></li>
</ul>
<br />
</p><p align="justify">
Given an integer <b>N</b>, find the number of units of gold to be paid in the <b>N</b><sup>th</sup> year. This result can be huge, so output the result modulo 100000007 (10<sup>8</sup>+7).


<h3>Input</h3>
</p><p align="justify">First line has an integer <b>T</b> (number of test cases, 1 ≤ <b>T</b> ≤ 3). Each of the next <b>T</b> lines has 5 integers, <b>initTax slot1 slot2 K N</b>.<br />
1 ≤ <b>initTax</b>, <b>slot1</b>, <b>slot2</b> ≤ 50<br />
1 ≤ <b>K</b> ≤ <b>slot1</b> + <b>slot2</b> + 1<br />
1 ≤ <b>N</b> ≤ 1000000000 (10<sup>9</sup>)<br />

<h3>Output</h3>
</p><p align="justify">For each test case, output the tax in units of gold to be paid in the <b>N</b><sup>th</sup> year modulo 100000007  (10<sup>8</sup>+7).

<h3>Example</h3>

<pre>
<b>Input:</b>
3
1 3 2 4 4
1 3 2 4 7
1 3 2 4 9

<b>Output:</b>
4
1536
18811834
</pre>
<br />
<b>Explanation:</b><br /><br />
Let tax[i] be the tax paid in i<sup>th</sup> year.<br /><br />
Init : tax[1] = 1<br /><br />
Next 3 years in slot1 (tax[i] = tax[i-1] + 1) : tax[2] = 2 , tax[3] = 3, tax[4] = 4<br /><br />
Next 2 years in slot2 (tax[i] = 2 * tax[i-1]) : tax[5] = 8 , tax[6] = 16<br /><br />
We have tax[1..6] = { 1, 2, 3, 4, 8, 16 }<br /><br />
tax[7] = tax[3] * tax[4] * tax[5] * tax[6] = 3 * 4 * 8 * 16 = 1536<br /><br />
similarly, tax[9] = tax[5] * tax[6] * tax[7] * tax[8].<br /><br />
Do not forget to print only the reminder of the result when divided by 100000007 (10<sup>8</sup>+7).<br /><br />
<br /></p>