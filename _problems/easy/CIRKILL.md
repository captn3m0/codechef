---
{"category_name":"easy","problem_code":"CIRKILL","problem_name":"Circle of death","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"gamabunta","date_added":"9-06-2013","tags":{"0":"easy","1":"geometry","2":"july13","3":"kaushik_iska","4":"maths"},"editorial_url":"http://discuss.codechef.com/problems/CIRKILL","time":{"view_start_date":1373880892,"submit_start_date":1373880892,"visible_start_date":1373880600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p style="text-align:justify">In the land of Chefton there is a trio of killers known as <b>Team Rocket (TR)</b>. Chefton is basically a set of tiles, only a single person can stand on a tile at a given instance. Each tile can be described by <b>X</b> and <b>Y</b> co-ordinates describing the position of the tile. For the purpose of this problem, you may assume that a tile does not have any length of breadth. It is only a point.</p>
<p style="text-align:justify"><b>TR</b> kill in a very unique way. Lets say the three members of the trio stand on the tiles <b>T1, T2, T3</b> respectively. If a <b>unique circle</b>, say <b>C</b>, can be formed using <b>T1, T2, T3</b> then all the people standing on the tiles lying within or on the circle <b>C</b> will be killed.</p>
<p style="text-align:justify">Chefton Intelligence Agency <b>(CIA)</b> send their top agent <b>Ash</b> to Chefton. Let us assume that <b>TR</b> and <b>Ash</b> are standing on random tiles, satisfying the following constraints</p>
<p style="text-align:justify"><b>All four individuals, the three members of TR and Ash are on different tiles.</b></p>
<p style="text-align:justify">There may be several ways in which the four individuals are placed. You may assume that the three members of <b>TR</b> are indistinguishable, while considering how many ways can everyone be placed. Any one of these ways now, is equiprobable. For clarity, refer to the explanation section.</p>
<p style="text-align:justify">What is the probability that <b>Ash</b> can be killed by <b>Team Rocket</b>.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b>, the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains a single integer <b>N</b>, the number of tiles in Chefton. The next <b>N</b> lines consist of <b>2</b> space separated integers each, where the <b>i'th</b> line specifies the <b>X</b> and <b>Y</b> co-ordinates of the <b>i'th</b> tile.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the probability that <b>Team Rocket</b> kills <b>Ash</b>. Your answer is considered correct if it has an absolute error less than <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 10</b><br />
<b>4 ≤ N ≤ 30</b><br />
<b>-50 ≤ X, Y ≤ 50</b><br />
<b>All (X,Y) in a test case are unique.</b>
</p>
<h3>Sample</h3>
<pre>
<b>Input</b>
2
4
-1 0
0 0
0 1
1 0
5
-1 0
0 -1
0 0
0 1
1 0

<b>Output</b>
0.25
0.4

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test 1:</b> There are 4 ways TR may be placed. Each one of them has the probability 0.25, of occuring.</p>
<p style="text-align:justify">
<ul>
<li>{ (-1,0), (0,0), (0,1) }, Ash is at (1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".</li>
<li>{ (-1,0), (0,0), (1,0) }, Ash is at (0,1). Ash cannot be killed because TR does not have a unique "kill circle".</li>
<li>{ (-1,0), (0,1), (1,0) }, Ash is at (0,0). Ash can be killed since he is standing inside TR's "kill circle".</li>
<li>{ (0,0), (0,1), (1,0) }, Ash is at (-1,0). Ash cannot be killed even though TR has a valid and unique "kill circle".</li>
</ul>
</p>
<p style="text-align:justify"><b>Test 2:</b> There are 10 ways TR may be placed. Each one of them has the probability 0.1, of occuring. For each one of those placements, Ash may be placed at one of the 2 remaining positions. Thus, with probability 0.05 each, there are 20 total arrangements to consider. Ash can be killed by TR in 8 of these 20 cases.</p>
