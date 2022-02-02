---
{"category_name":"hard","problem_code":"CUCUMBER","problem_name":"Cucumber Boy and Cucumber Girl","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.301,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"anton_lunyov","date_added":"3-12-2012","tags":{"0":"gauss","1":"hard","2":"jan13","3":"laycurse"},"editorial_url":"http://discuss.codechef.com/problems/CUCUMBER","time":{"view_start_date":1358247981,"submit_start_date":1358247981,"visible_start_date":1358242651,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p align="justify">As everybody knows, a pizza consists of <b>N</b> ingredients, for instance, crust, sauce, toppings, etc.</p>
<p align="justify">Long ago in Wolf Town, there were <b>N</b> kinds of pizza shops each selling one ingredient of pizza. Let ingredients and pizza shops be numbered from <b>1</b> to <b>N</b>, then pizza shop <b>k</b> selling ingredient <b>k</b>. They had never invaded other shops, namely, they had kept to sell only one ingredient. But the situation changed after some shop violates the unspoken rule. Then all of <b>N</b> pizza shops start to sell all <b>N</b> ingredients and they are competing.</p>
<p align="justify">As time past, a pizza is now one of the most popular foods, and every pair of pizza shops is collaborated for improving quality. Let pizza shop <b>(j<sub>1</sub>, j<sub>2</sub>)</b> denotes the shop collaborated between shops <b>j<sub>1</sub></b> and <b>j<sub>2</sub></b>. There are <b>B</b> pizza buildings having every pizza shop, including collaborated shops. The price of a pizza is determined by its quality. </p>
<p align="justify">Let the quality of ingredient <b>k</b> of pizza shop <b>j</b> in building <b>i</b> be <b>Q[i, j, k]</b>. Then the quality of ingredient <b>k</b> of pizza shop <b>(j<sub>1</sub>, j<sub>2</sub>)</b> in building <b>i</b> is <b>Q[i, j<sub>1</sub>, k] * Q[i, j<sub>2</sub>, k]</b>. The price of a pizza is the summation of qualities of its ingredients.</p>
<p align="justify">By the way, Cucumber Boy and Cucumber Girl live in the Wolf Town. Cucumber Boy and Cucumber Girl like pizza very much, but now they are bored by the existing pizzas, despite there are many kinds of pizzas. So they want to propose the collaboration between two distinct buildings (say <b>i<sub>1</sub></b> and <b>i<sub>2</sub></b>). If their wish is realized, the pizza collaborated between shop <b>j<sub>1</sub></b> in building <b>i<sub>1</sub></b> and <b>j<sub>2</sub></b> in building <b>i<sub>2</sub></b> will be sold. The price of the pizza will be determined by the usual way, that is, the price will be<br /><b>the summation of <b>Q[i<sub>1</sub>, j<sub>1</sub>, k] * Q[i<sub>2</sub>, j<sub>2</sub>, k]</b> over <b>1 ≤ k ≤ N</b></b>.<br />Note that <b>j<sub>1</sub></b> = <b>j<sub>2</sub></b> is possible here.</p>
<p align="justify">Now Cucumber Boy chooses two buildings <b>i<sub>1</sub></b> and <b>i<sub>2</sub></b> such that <b>1</b> ≤ <b>i<sub>1</sub></b> &lt; <b>i<sub>2</sub></b> ≤ <b>B</b>. In each day Cucumber Boy and Cucumber Girl want to eat <b>N</b> collaborated pizzas. Here these <b>N</b> pizzas should satisfy the following conditions.</p>
<ul>
<li>Each of <b>N</b> pizzas is a collaborated pizza between one shop in building <b>i<sub>1</sub></b> and one shop in building <b>i<sub>2</sub></b>.</li>
<li>Every shop in building <b>i<sub>1</sub></b> collaborates for one of <b>N</b> pizzas.</li>
<li>Every shop in building <b>i<sub>2</sub></b> collaborates for one of <b>N</b> pizzas.</li>
</ul>
<p align="justify">Clearly, there are exactly <b>N!</b> (factorial of <b>N</b>) of such sets of <b>N</b> pizzas. Therefore, Cucumber Boy and Cucumber Girl will eat all distinct such sets during <b>N!</b> days eating each such set of pizzas exactly once and, of course, eating exactly one such set per day (see the first sample input for clarity).</p>
<p align="justify">Cucumber Boy is a show-off, so he wants to pay more money than Cucumber Girl. But Cucumber Girl is a steadfast person, so she may disturb it. However if at least one of <b>N</b> pizzas has odd price (that is, the price not divisible by 2), she gives away him to pay more money than her in this day (otherwise, she pays the same amount of money as he pays). But the next time such situation occurs, she will pay more money than Cucumber Boy in this day. Namely, consider all days for which we have at least one pizza with odd price and number them starting from 1. Then in the (<b>2*x−1</b>)-th such day Cucumber Boy pays more money than Cucumber Girl, and in the (<b>2*x</b>)-th such day, Cucumber Girl pays more money than Cucumber Boy. That is, at such days with numbers <b>1, 3, 5, ...</b> Cucumber Boy pays more money than Cucumber Girl, while at such days with numbers <b>2, 4, 6, ...</b> we have the opposite situation. So now Cucumber Boy's objective will be accomplished if<br /><b>the number of times that he pays more money than her greater than the number of times that he pays less than her</b>.</p>
<p align="justify">Now your task is to calculate the number of pairs of buildings for which Cucumber Boy's objective will be accomplished.</p>
<h3>Input</h3>
<p align="justify">The first line contains an integer <b>T</b> denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p align="justify">The first line of each test case contains <b>2</b> space-separated integers <b>N</b> and <b>B</b>. The description of each <b>B</b> buildings follows.</p>
<p align="justify">The first line for each building <b>i</b> contains one string, which is <b>raw</b> or <b>random</b>. If this string is <b>raw</b>, then <b>N</b> lines follow, each line contains <b>N</b> space-separated integers, where the <b>k</b>-th integer of the <b>j</b>-th line denotes <b>Q[i, j, k]</b>. If this string is <b>random</b>, then a single line follows containing <b>3</b> space-separated integers <b>S<sub>i</sub></b>, <b>P<sub>i</sub></b> and <b>A<sub>i</sub></b>. Let the array <b>X<sub>i</sub></b> be defined as <b>X<sub>i</sub>[1] = S<sub>i</sub>, X<sub>i</sub>[k] = (P<sub>i</sub> * X<sub>i</sub>[k−1] + A<sub>i</sub>) modulo M</b>, where <b>M = 2<sup>32</sup> = 4294967296</b>. Then <b>Q[i, j, k]</b> is calculated as <b>(floor(X<sub>i</sub>[(j−1)*N+k] / D) modulo 100) + 1</b>, where <b>D = 2<sup>12</sup> = 4096</b>.</p>
<h3>Output</h3>
<p align="justify"> For each test case, output a single line containing the number of pairs <b>(i<sub>1</sub>, i<sub>2</sub>)</b> of buildings with <b>1</b> ≤ <b>i<sub>1</sub></b> &lt; <b>i<sub>2</sub></b> ≤ <b>B</b> for which Cucumber Boy's objective will be accomplished.</p>
<h3>Constraints</h3>
<p align="justify"><b>1 ≤ T ≤ 4000</b><br /><b>1 ≤ N ≤ 60</b><br /><b>2 ≤ B ≤ 8000</b><br /><b>1 ≤ Q[i, j, k] ≤ 100</b><br /><b>0 ≤ S<sub>i</sub>, T<sub>i</sub>, A<sub>i</sub> ≤ 40000 (4*10<sup>4</sup>)</b><br />The summation of <b>B</b> in one input file does not exceed <b>8000</b>.<br />The size of one input file does not exceed <b>1.5 megabytes = 1,572,864 bytes</b>.</p>
<h3>Sample</h3>
<pre>
<b>Input:</b>
3
3 3
raw
82 51 44
41 10 38
23 33 58
raw
19 84 64
17 43 44
30 81 57
raw
61 84 31
52 90 82
29 16 45
4 8
random
11708 9521 15107
random
5874 19373 36492
random
11504 36617 16182
random
33487 35453 8669
random
33741 25749 9927
random
12099 17221 19740
random
5587 2589 14716
random
36950 17607 32881
10 2
random
29163 283 8737
raw
55 23 6 47 7 89 4 96 77 97
19 20 85 35 72 70 77 71 32 82
44 40 75 68 9 66 10 40 51 46
47 64 73 77 40 49 89 81 50 95
20 88 5 98 52 3 3 26 35 48
25 55 29 49 30 27 70 73 85 93
6 27 81 74 51 21 76 71 12 66
6 49 65 59 92 70 95 56 4 21
98 39 50 13 22 38 31 70 63 29
3 60 93 22 81 95 7 21 12 49

<b>Output:</b>
1
5
1
</pre><h3>Explanation</h3>
<p align="justify">In the first sample case, Cucumber Boy's objective will be accomplished if and only if he selects buildings <b>(i<sub>1</sub>, i<sub>2</sub>) = (1, 2)</b>. Let's call the pizza of the shop <b>x</b> of the building <b>1</b> collaborated with the shop <b>y</b> of the building <b>2</b> as pizza <b>(x, y)</b>. Then<br />the price of the pizza <b>(1, 1)</b> is <b>82*19+51*84+44*64 = 8658</b>,<br />the price of the pizza <b>(1, 2)</b> is <b>82*17+51*43+44*44 = 5523</b>,<br />the price of the pizza <b>(1, 3)</b> is <b>82*30+51*81+44*57 = 9099</b>,<br />the price of the pizza <b>(2, 1)</b> is <b>41*19+10*84+38*64 = 4051</b>,<br />the price of the pizza <b>(2, 2)</b> is <b>41*17+10*43+38*44 = 2799</b>,<br />the price of the pizza <b>(2, 3)</b> is <b>41*30+10*81+38*57 = 4206</b>,<br />the price of the pizza <b>(3, 1)</b> is <b>23*19+33*84+58*64 = 6921</b>,<br />the price of the pizza <b>(3, 2)</b> is <b>23*17+33*43+58*44 = 4362</b>,<br />the price of the pizza <b>(3, 3)</b> is <b>23*30+33*81+58*57 = 6669</b>.<br />There will be <b>5</b> days for which at least one of the corresponding pizzas has odd price as follows:<br />pizzas <b>(1, 1)</b>, <b>(2, 2)</b>, <b>(3, 3)</b>,<br />pizzas <b>(1, 2)</b>, <b>(2, 1)</b>, <b>(3, 3)</b>,<br />pizzas <b>(1, 2)</b>, <b>(2, 3)</b>, <b>(3, 1)</b>,<br />pizzas <b>(1, 3)</b>, <b>(2, 1)</b>, <b>(3, 2)</b>,<br />pizzas <b>(1, 3)</b>, <b>(2, 2)</b>, <b>(3, 1)</b>.<br />Therefore Cucumber boy will pay more money than Cucumber girl in 3 of these 5 days, and Cucumber boy will pay less in 2 of these 5 days. Note that all pizzas <b>(1, 1)</b>, <b>(2, 3)</b>, <b>(3, 2)</b> have even price, hence Cucumber Boy and Cucumber Girl pay the same amount of money in this day.</p>
<p>In the second sample case, the data <b>Q[1, j, k]</b> about building <b>1</b> are the following:<br /><b>Q[1, 1, 1] = 3, Q[1, 1, 2] = 19, Q[1, 1, 3] = 68, Q[1, 1, 4] = 7,<br />Q[1, 2, 1] = 44, Q[1, 2, 2] = 89, Q[1, 2, 3] = 84, Q[1, 2, 4] = 33,<br />Q[1, 3, 1] = 25, Q[1, 3, 2] = 10, Q[1, 3, 3] = 50, Q[1, 3, 4] = 89,<br />Q[1, 4, 1] = 27, Q[1, 4, 2] = 27, Q[1, 4, 3] = 34, Q[1, 4, 4] = 30.<br /></b>Note that the array <b>X<sub>1</sub></b> is calculated as follow:<br /><b>X<sub>1</sub>[1] = 11708,<br />X<sub>1</sub>[2] = 111486975,<br />X<sub>1</sub>[3] = 610581970,<br />X<sub>1</sub>[4] = 2260199989,<br />X<sub>1</sub>[5] = 1577957416,<br />X<sub>1</sub>[6] = 4231938731,<br />X<sub>1</sub>[7] = 1200469182,<br />X<sub>1</sub>[8] = 759122273,<br />X<sub>1</sub>[9] = 3468184468,<br />X<sub>1</sub>[10] = 875763287,<br />X<sub>1</sub>[11] = 1610749098,<br />X<sub>1</sub>[12] = 2908930445,<br />X<sub>1</sub>[13] = 1977657344,<br />X<sub>1</sub>[14] = 138961667,<br />X<sub>1</sub>[15] = 204119446,<br />X<sub>1</sub>[16] = 2096042681.<br /></b>Cucumber Boy's objective will be accomplished if and only if he selects buildings <b>(i<sub>1</sub>, i<sub>2</sub>)</b> to be one of the following: <b>(1, 4), (1, 6), (2, 5), (4, 5), (4, 6)</b>.</p>
<p>Note that in the third sample case we have building 1 given as row input and building 2 given as random input. This is only to emphasize that such mix is possible. You should figure it out by yourself why for the only pair of buildings in this example Cucumber Boy's objective will be accomplished.</p>
