---
{"category_name":"medium","problem_code":"RIVPILE","problem_name":"Across the River","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"laycurse","problem_tester":"gamabunta","date_added":"19-09-2011","tags":{"0":"dijkstra","1":"july13","2":"laycurse","3":"medium","4":"shortest"},"editorial_url":"http://discuss.codechef.com/problems/RIVPILE","time":{"view_start_date":1373880600,"submit_start_date":1373880600,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Ciel would like to make a bridge on the river in order to purchase cooking ingredients more easily. The river is an infinitely long straight line with width <b>W</b>. To be more specific, the river is a set of the all points on <b>0 ≤ y ≤ W</b> in <b>xy</b>-plane.
</p>

<p>
There are <b>N</b> piles on the river, and <b>M</b> types of wooden disks are available.
The location of the <b>k</b>-th pile is <b>(X<sub>k</sub>, Y<sub>k</sub>)</b>.
The <b>k</b>-th type of wooden disks has radius <b>R<sub>k</sub></b>, and its price is <b>C<sub>k</sub></b> per disk.
</p>

<p>
Ciel can buy wooden disks as many as she likes, and Ciel can put them on the river.
For each wooden disk, its center must be one of the locations <b>(X<sub>k</sub>, Y<sub>k</sub>)</b> of piles.
Note that some part of wooden disks may be on the ground (<b>y &lt; 0</b>, <b>W &lt; y</b>) or other piles.
</p>

<p>
Ciel can move only on <b>y = 0</b>, on <b>y = W</b>, and on wooden disks.
What is the minimum cost to make it possible to move from <b>y = 0</b> to <b>y = W</b>.
</p>


<h3>Input</h3>
<p>
The first line contains an integer <b>T</b>, the number of test cases.
Then <b>T</b> test cases follow.
The first line for each test case has <b>3</b> space-sparated integers <b>N</b>, <b>M</b> and <b>W</b>.
Next <b>N</b> lines has <b>2</b> space-separated integers <b>X<sub>k</sub></b> and <b>Y<sub>k</sub></b>.
Then next <b>M</b> lines has <b>2</b> space-separated integers <b>R<sub>k</sub></b> and <b>C<sub>k</sub></b>.
</p>

<h3>Output</h3>
<p>
For each test case, print the minimum cost to make it possible to move from <b>y = 0</b> to <b>y = W</b>.
If it is impossible, print "impossible" without quotes.
</p>

<h3>Constraints</h3>
<p>
<b>1 ≤ T ≤ 10</b><br />
<b>1 ≤ N ≤ 250</b><br />
<b>1 ≤ M ≤ 250</b><br />
<b>2 ≤ W ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>0 ≤ X<sub>k</sub> ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>1 ≤ Y<sub>k</sub> &lt; W</b><br />
<b>1 ≤ R<sub>k</sub> ≤ 1000000000 (10<sup>9</sup>)</b><br />
<b>1 ≤ C<sub>k</sub> ≤ 1000000 (10<sup>6</sup>)</b><br />
</p>

<h3>Sample</h3>
<pre>
<b>Input</b>
3
11 4 13
19 10
8 7
11 4
26 1
4 2
15 4
19 4
1 9
4 6
19 5
15 10
2 1
3 100
4 10000
5 1000000
11 4 13
19 10
8 7
11 4
26 1
4 2
15 4
19 4
1 9
4 6
19 5
15 10
2 1
3 2
4 3
5 4
1 1 1000000000
0 500000000
1 1

<b>Output</b>
206
5
impossible

</pre>

<h3>Explanation</h3>
<p>
The following figure indicates the optimal way for the first case.
</p>
<img src="//www.codechef.com/download/RIVPILE.png" width="515" height="257" />