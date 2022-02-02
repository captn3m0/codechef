---
{"languages_supported":{"0":"NA"},"title":"TRAVELER","category":"NA","old_version":true,"problem_code":"TRAVELER","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><div class="primary-colum-width-left">
<div class="prob">
<p>Chef likes to travel very much. He plans some travel routes and wants to  know their lengths. He hired you to make these calculations. But be  careful, some of the routes are incorrect. There may be some misspelling  in city names or there will be no road between some two consecutive  cities in the route. Also note that Chef hates to visit the same city  twice during his travel. Even the last city should differ from the  first. Two consecutive cities in the route should also be different. So  you need to check these conditions for the given routes too. <br /><br /> You will be given the list of all cities and all roads between them with  their lengths. All roads are one-way. Also you will be given the list  of all travel routes that Chef plans. For each route you should check  whether it is correct and find its length in this case.</p>
<h3>Input</h3>
<p>The first line contains positive integer <b>N</b>, the number of cities. The second line contains space separated list of <b>N</b> strings, city names. All city names are distinct. <br /><br /> The third line contains non-negative integer <b>M</b>, the number of available roads. Each of the next <b>M</b> lines describes one road and contains names <b>C<sub>1</sub></b> and <b>C<sub>2</sub></b> of two cities followed by the positive integer <b>D</b>, the length of the one-way road that connects <b>C<sub>1</sub></b> with <b>C<sub>2</sub></b>. It is guaranteed that <b>C<sub>1</sub></b> and <b>C<sub>2</sub></b> will be correct names of two different cities from the list of <b>N</b> cities given in the second line of the input file. For each pair of  different cities there is at most one road in each direction and each  road will be described exactly once in the input file. <br /><br /> Next line contains positive integer <b>T</b>, the number of travel routes planned by the Chef. Each of the next <b>T</b> lines contains positive integer <b>K</b> followed by <b>K</b> strings, names of cities of the current route. Cities are given in order in which Chef will visit them during his travel. <br /><br /> All strings in the input file composed only of lowercase, uppercase  letters of the English alphabet and hyphens. Each string is non-empty  and has length at most 20. If some line of the input file contains more  then one element than consecutive elements of this line are separated by  exactly one space. Each line of the input file has no leading or  trailing spaces.</p>
<h3>Output</h3>
<p>For each travel route from the input file output a single line containing word <b>ERROR</b> if the route is incorrect and its length otherwise.</p>
<h3>Constraints</h3>
<p><b> 1 &lt;= N &lt;= 50 <br /> 0 &lt;= M &lt;= N * (N - 1) <br /> 1 &lt;= D &lt;= 20000 <br /> 1 &lt;= T &lt;= 50 <br /> 1 &lt;= K &lt;= 50 <br /> 1 &lt;= length of each string &lt;= 20 </b></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
Donetsk Kiev New-York Miami Hollywood
9
Donetsk Kiev 560
Kiev New-York 7507
New-York Miami 1764
Miami Hollywood 28
Hollywood Miami 30
Miami New-York 1764
Kiev Donetsk 550
Hollywood New-York 1736
New-York Hollywood 1738
13
5 Donetsk Kiev New-York Miami Hollywood
5 Hollywood Miami New-York Kiev Donetsk
3 Donetsk Kiev Donetsk
2 Kyiv New-York
3 New-York Hollywood Miami
2 New-York Miami
3 Hollywood New-York Miami
4 Donetsk Kiev Miami Hollywood
2 Donetsk Hollywood
1 Donetsk
2 Mumbai Deli
6 Donetsk Kiev New-York Miami Hollywood New-York
2 Miami Miami

<b>Output:</b>
9859
ERROR
ERROR
ERROR
1768
1764
3500
ERROR
ERROR
0
ERROR
ERROR
ERROR
</pre>
<h3>Explanation</h3>
The 2<sup>nd</sup> route is incorrect since there is no road from <b>New-York</b> to <b>Kiev</b>. Note however that inverse road from <b>Kiev</b> to <b>New-York</b> exists. <br /> The 3<sup>rd</sup> route is incorrect since the first city coincides with the last one. <br /> The 4<sup>th</sup> route is incorrect since there is no city with name <b>Kyiv</b> (Probably Chef means <b>Kiev</b> but he misspells this word). <br /> The 8<sup>th</sup> route is incorrect since there is no road from <b>Miami</b> to <b>Kiev</b>. <br /> The 9<sup>th</sup> route is incorrect since there is no road from <b>Donetsk</b> to <b> Hollywood</b>. <br /> The 10<sup>th</sup> route is correct. Note that a route composed of  exactly one city is always correct provided that city name is written  correctly. <br /> The 11<sup>th</sup> route is incorrect since there is no cities with names <b>Mumbai</b> and <b>Deli</b>. (Probably Chef is not so good in geography :)) <br /> The 12<sup>th</sup> route is incorrect since city <b>New-York</b> is visited twice.</div>
</div>
<p>Finally the 13<sup>th</sup> route is incorrect since we have equal consecutive cities.</p>    