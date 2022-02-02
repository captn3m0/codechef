---
{"category_name":"easy","problem_code":"AMBOXES","problem_name":"Nested Candy Boxes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"22-12-2017","tags":{"0":"admin2"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Andy got a box of candies for Christmas. In fact, he discovered that the box contained several identical smaller boxes, and they could contain even smaller boxes, and so on. Formally, we say that candies are boxes of level 0, and for 1 ≤ i ≤ <b>n</b>, a level i box contains <b>a<sub>i</sub></b> boxes of level i - 1. The largest box has level <b>n</b>. Andy realized that it can take quite a long time to open all the boxes before he actually gets to eat some candies, so he put the box aside in frustration.
</p>

<p>But today being his birthday, some friends came to visit Andy, and Andy decided to share some candies with them. In order to do that, he must open some of the boxes. Naturally, Andy can not open a box that is still inside an unopened box. If Andy wants to retrieve <b>X</b> candies, what is the least number of boxes he must open? You must help him answer many such queries. Each query is independent.</p>


<h3>Input</h3>
<ul>
	<li>The first line contains two integers <b>n</b> and <b>m</b>, which refer to the level of the largest box, and the number of queries respectively.</li>
	<li>The second line contains <b>n</b> integers <b>a<sub>1</sub></b>, ..., <b>a<sub>n</sub></b>.</li>
	<li>The third line contains <b>m</b> integers <b>X<sub>1</sub></b>, ..., <b>X<sub>m</sub></b>.</li>
</ul>


<h3>Output</h3>
<ul>
	<li>Print <b>m</b> integers each in a new line, i<sup>th</sup> of them equal to the smallest number of boxes Andy must open in order to retrieve at least <b>X<sub>i</sub></b> candies.</li>
</ul>


<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>n</b>,<b>m</b> ≤ 300000</li>
	<li>1 ≤ <b>a<sub>i</sub></b> ≤ 10<sup>9</sup></li>
	<li>1 ≤ <b>X<sub>i</sub></b> ≤ 10<sup>12</sup></li>
	<li>It is guaranteed that the total number of candies is at least <b>X<sub>i</sub></b> for all i</li>
</ul>


<h3>Example</h3>
<pre>
<b>Input 1:</b>
5 1
1 1 1 1 1
1

<b>Output 1:</b>
5

<b>Input 2:</b>
3 3
3 3 3
2 8 13

<b>Output 2:</b>
3
5
8
</pre>


<h3>Explanation</h3>
<p><b>Testcase 1:</b> The only candy is contained in five levels of boxes. </p>
<p><b>Testcase 2:</b> In the third query, for 13 candies, Andy should open the largest box, two level-2 boxes, and finally five of six available level-1 boxes. Each of those boxes will contain 3 level-0 boxes (which are candies). So he'll have 15 candies in total, but he needs only 13 of them. </p>