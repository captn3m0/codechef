---
{"languages_supported":{"0":"NA"},"title":"RESTEXP","category":"NA","old_version":true,"problem_code":"RESTEXP","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>You own a large local restaurant. Because now it is very popular, you want to expand your restaurant in a neighboring country.</p>

<p>The country consists N cities numbered 1 to N. There are N-1 roads connecting the cities. The country is efficiently organized, so there is exactly one path between every pairs of cities. No road will connect a city to itself.</p>

<p>You want to build new restaurants in some cities. From an amateur survey, for each city i you know its profit index S<sub>i</sub>, that is the profit you will get if you build a new restaurant in city i.</p>

<p>Initially, you have C chefs in city 1. You have D days to accomplish your expansion. On each day, you may perform exactly one of these options:</p>
<p>
<ul>
<li>Do nothing.</li>
<li>Transfer any number of chefs from a city to another city, provided that the two cities are connected by a road.</li>
<li>Build a new restaurant in a city, provided that there is at least one chef in the city. After that, all chefs in the city cannot be transferred again. You can only build one restaurant per city.</li>
</ul>
</p>
<br />
<p>After D days has passed, you get the profit associated with a city if the city has a restaurant. Of course, you want the maximum possible total profit. Arrange your expansion plan in order to maximize your total profit.</p>

<h3>Input</h3>
<p>The first line contains three integers N, C, and D. The next line contains a sequence of N integers S<sub>i</sub>. The next N-1 lines contains two integers u<sub>i</sub> and v<sub>i</sub>, where u<sub>i</sub> and v<sub>i</sub> are the two cities connected by the i-th road.</p>

<h3>Output</h3>
<p>In the first line, output the maximum possible total profit. The next D lines contain your expansion plan. In each of the next D lines, output exactly one of the following (quotes for clarity).</p>
<p>
<ul>
<li>"<b>nothing</b>", if you plan to do nothing on that day.</li>
<li>"<b>transfer</b> a b c", if you plan to transfer c chefs from city a to city b on that day.</li>
<li>"<b>build</b> a", if you plan to build a new restaurant in city a on that day.</li>
</ul>
</p>
<br />

<p>If there are several expansion plans that lead to the same maximum profit, you may output any.</p>

<h3>Example</h3>
<b>Input</b>
<pre>
4 2 5
-10 5 2 6
1 2
2 3
2 4
</pre>
<br />
<b>Output</b>
<pre>
11
transfer 1 2 2
transfer 2 4 1
nothing
build 4
build 2
</pre>

<h3>Constraints</h3>
<ul>
<li>1 &lt;= N &lt;= 30</li>
<li>1 &lt;= C &lt;= 30</li>
<li>1 &lt;= D &lt;= 30</li>
<li>-1000 &lt;= S<sub>i</sub> &lt;= 1000</li>
<li>1 &lt;= u<sub>i</sub> &lt;= N</li>
<li>1 &lt;= v<sub>i</sub> &lt;= N</li>
<li>u<sub>i</sub> != v<sub>i</sub></li>
<li>There is exactly one path between every pair of cities</li>
</ul>    