---
{"category_name":"medium","problem_code":"CHEFLIQD","problem_name":"Chef and Liquid Ingredients","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"m_17","problem_tester":null,"date_added":"21-06-2016","tags":{"0":"m_17"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Hari is a little chef in cheftown. One fine morning, his father asked him to go to market and buy liquid ingredients in order to make beverages for that particular day. Hari liked the idea as he really wanted to visit the shop of ingredients. His father gave him <b>M</b> Rupees to buy the ingredients. In addition to money, his father gave him <b>K</b> containers too. The containers are of volume <b>C<sub>1</sub>, C<sub>2</sub>, ........., C<sub>K</sub></b> and can hold the liquid of same volume.
</p>
<p>
At the shop, there are <b>N</b> types of liquid ingredients. The ingredients have price <b>P<sub>1</sub>, P<sub>2</sub>, ........, P<sub>N</sub></b> Rupees and are of volume <b>V<sub>1</sub>, V<sub>2</sub>, ........, V<sub>N</sub></b>. Now, Hari has to buy some ingredients with the amount(<b>M</b>) that he has, but he has few conditions also. The conditions are as following:
</p>
<p><ul>
<li>Hari doesn't want the ingredients to mix, so each container may contain at most <b>1</b> item.</li>
<li>If Hari buys an ingredient, he wants its complete volume. So, Hari will buy an ingredient only if he can buy the complete volume of that ingredient.</li>
<li>Hari doesn't want to waste more than one container for a single ingredient. So he'll buy an ingredient only if he has an empty container that can contain the complete volume of that ingredient.</li>
</ul>
</p>
<p>Now, Hari wants to buy as much volume of ingredients as possible. Help him in maximizing the total volume that he can buy satisfying all of the above conditions.
</p>
<h3>Input</h3>
<p>
First line of the input contains <b>T</b>, the number of text cases. The description of each test case is as following:
</p>
<p>
First line of each test case contains <b>3</b> space separated integers <b>N</b>, <b>M</b>, and <b>K</b>.
</p>
<p>
Next line contains <b>K</b> space separated integers <b>C<sub>1</sub>, C<sub>2</sub>, ........., C<sub>K</sub></b>: the volumes of containers.
</p>
<p>
Next line contains <b>N</b> space separated integers <b>P<sub>1</sub>, P<sub>2</sub>, ........., P<sub>N</sub></b>: the price of ingredients.
</p>
<p>
Next line contains <b>N</b> space separated integers <b>V<sub>1</sub>, V<sub>2</sub>, ........., V<sub>N</sub></b>: the volume of ingredients.
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the maximum amount of total volume that Hari can buy.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>P<sub>i</sub>, V<sub>i</sub>, C<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask#1: 20 points</b></p>
<ul>
<li><b>K</b> = <b>1</b></li>
</ul>

<p><b>Subtask#2: 80 points</b></p>
<ul>
<li><b>1</b> ≤ <b>K</b> ≤ <b>5</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
5 10 1
9
2 11 12 10 7
10 9 13 2 8
5 20 2
9 12
12 11 8 10 9
10 9 13 7 8
5 9 3
12 8 4
2 2 4 5 8
6 3 8 10 15

<b>Output:</b>
8
17
19
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In the first case, Hari buys 5th ingredient. In second case, Hari buys 2nd and 5th ingredient. In third case, Hari buys 1st, 2nd and 4th ingredients.</p>
