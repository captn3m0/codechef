---
{"category_name":"hard","problem_code":"DEG3MAXT","problem_name":"Three-Degree-Bounded Maximum Cost Subtree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":7.5,"source_sizelimit":50000,"problem_author":"mugurelionut","problem_tester":"shangjingbo","date_added":"24-07-2013","tags":{"0":"dynamic","1":"hard","2":"mugurelionut","3":"oct13"},"editorial_url":"http://discuss.codechef.com/problems/DEG3MAXT","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/DEG3MAXT.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>Chef has become a rich man and now owns the entire road network in the country, which consists of <b>N</b> cities (numbered from <b>1</b> to <b>N</b>) and <b>M</b> bidirectional roads. Each road connects two different cities <b>i</b> and <b>j</b> and has a cost <b>C(i,j)</b> - this is the cost paid by the drivers which use this road (and, thus, it is Chef's profit). The road network has the following properties:
<ul>
<li>it is possible to reach any city from any other city using the existing roads</li>
<li>any subset <b>S</b> of <b>10</b> or more cities contains at least two different cities <b>A</b> and <b>B</b> such that all the paths between <b>A</b> and <b>B</b> have at least one city <b>X</b> (<b>X≠A</b> and <b>X≠B</b>) in common (note that <b>X</b> does not necessarily belong to <b>S</b>) - note that this implies that if the city <b>X</b> were to be removed from the network, then no path would exist anymore between the cities <b>A</b> and <b>B</b></li>
</ul>
</p>
<p>However, the anti-monopoly committee decided that Chef is making too much money and that some restrictions should be imposed. Chef will be allowed to keep a part <b>P</b> of the road network that he chooses, provided that:
<ul>
<li>there exists exactly one path from any city in <b>P</b> to any other city in <b>P</b> using only the roads from <b>P</b> (this means that the sets of cities and roads from <b>P</b> form a tree)</li>
<li>every city from <b>P</b> has <b>at most 3</b> roads from <b>P</b> adjacent to it
</li></ul>
</p>
<p>Note that <b>P</b> may consist of any subset of the <b>N</b> cities and any subset of roads connecting these cities, as long as the two restrictions are satisfied. However, Chef doesn't want to simply pick any part <b>P</b> of the road network which satisfies the restrictions. He would like to choose a part <b>P</b> for which the total cost of the roads which belong to <b>P</b> is <b>maximum</b>. Moreover, he would also like to know how many such parts <b>P</b> of maximum total cost exist. Two parts <b>P1</b> and <b>P2</b> are considered different if their subsets of cities are different or if their subsets of roads are different.</p>
<h3>Input</h3>
<p>The first line contains the integer number <b>T</b> denoting the number of test cases. The description of the <b>T</b> test cases follows. The first line of each test case contains the integer numbers <b>N</b> and <b>M</b>. Each of the next <b>M</b> lines contains three space-separated integers: <b>i, j</b> and <b>C(i,j)</b>, meaning that there is a road between the cities <b>i</b> and <b>j</b> having cost <b>C(i,j)</b>.</p>
<h3>Output</h3>
<p>For each test case print a line containing two numbers: <b>CMAX</b> and <b>CNT32</b>. <b>CMAX</b> is the maximum cost of any part <b>P</b> which satisfies the restrictions imposed by the anti-monopoly committee. Let <b>CNT</b> be the total number of different parts <b>P</b> which have maximum cost and satisfy the restrictions. <b>CNT32</b> is equal to <b>CNT modulo 2<sup>32</sup></b> (i.e. we are only interested in the remainder of <b>CNT</b> when divided by <b>2<sup>32</sup></b>).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>6</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>N-1</b> ≤ <b>M</b> ≤ <b>min(N×(N-1)/2, 450)</b></li>
<li><b>1</b> ≤ <b>i, j</b> ≤ <b>N</b> (<b>i≠j</b>)</li>
<li><b>-10000</b> ≤ <b>C(i,j)</b> ≤ <b>10000</b></li>
<li>There exists at most one road connecting each pair of different cities.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
6
6 7
1 3 1
3 5 2
5 1 3
5 2 1
2 4 2
4 6 3
6 5 1
4 4
1 2 0
2 3 0
3 4 0
2 4 0
4 4
1 2 -1
2 3 -2
3 4 -3
2 4 -4
8 7
1 2 1
2 3 1
3 4 1
4 5 -2
5 6 1
6 7 1
7 8 1
8 7
1 2 1
2 3 1
3 4 1
4 5 -3
5 6 1
6 7 1
7 8 1
8 7
1 2 1
1 3 2
1 4 3
1 5 4
1 6 5
1 7 6
1 8 7

<b>Output:</b>
11 2
0 17
0 5
4 1
3 3
18 1
</pre><p/>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The maximum cost of a part P which satisfies the restrictions is 11. There are two such maximum cost parts, both of them containing all the cities and the following roads:
<ul>
<li><b>(1,5), (2,5), (2,4), (3,5), (4,6)</b></li>
<li><b>(1,5), (2,4), (3,5), (4,6), (5,6)</b></li>
</ul>
</p>
<p><b>Example case 2.</b> All the roads have cost 0, thus the maximum cost of any part P satisfying the restrictions is 0. The 17 different parts are as follows:
<ul>
<li>1 part containing 0 cities</li>
<li>4 parts containing 1 city (1 part for each of the 4 cities)</li>
<li>4 parts containing 2 cities and the road between them: {1,2}, {2, 3}, {2,4} and {3,4}</li>
<li>5 parts containing 3 cities:
<ul>
<li>cities 1, 2, 3 and the roads (1,2) and (2,3)</li>
<li>cities 1, 2, 4 and the roads (1,2) and (2,4)</li>
<li>cities 2, 3, 4 and the roads (2,3) and (3,4)</li>
<li>cities 2, 3, 4 and the roads (2,3) and (2,4)</li>
<li>cities 2, 3, 4 and the roads (2,4) and (3,4)</li>
</ul>
</li>
<li>3 parts containing all the 4 cities and the following roads:
<ul>
<li>(1,2), (2,3), (3,4)</li>
<li>(1,2), (2,3), (2,4)</li>
<li>(1,2), (2,4), (3,4)</li>
</ul>
</li>
</ul>
</p>
<p><b>Example case 3.</b> The maximum cost part P which satisfies the restrictions does not contain any of the roads. Thus, there are 5 possible ways of choosing P, consisting of the following sets of cities: <b>{1}, {2}, {3}, {4}, {}</b>.
</p>
<p><b>Example case 4.</b> Chef decides to keep the entire road network, because it satisfies the restrictions and has the maximum total cost among all of its parts.
</p>
<p><b>Example case 5.</b> Chef has 3 choices for the maximum cost part (whose cost is 3):
<ul>
<li>it can choose the entire road network</li>
<li>it can choose the cities 1, 2, 3, 4 and the roads (1,2), (2,3), (3,4)</li>
<li>it can choose the cities 5, 6, 7, 8 and the roads (5,6), (6,7), (7,8)</li>
</ul>
</p>
<p><b>Example case 6.</b> Chef chooses the cities 1, 6, 7, 8 and the roads (1,6), (1,7), (1,8).
</p>
</p/>