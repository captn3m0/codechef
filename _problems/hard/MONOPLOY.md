---
{"category_name":"hard","problem_code":"MONOPLOY","problem_name":"Gangsters of Treeland","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"utkarsh_lath","problem_tester":null,"date_added":"26-06-2013","tags":{"0":"medium","1":"nov13","2":"utkarsh_lath"},"editorial_url":"http://discuss.codechef.com/problems/MONOPLOY","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/MONOPLOY.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/MONOPLOY.PDF"> Russian</a>.</h3>
<p>Treeland is a kingdom consisting of <b>N</b> cities labelled <b>0</b>, <b>1</b>, <b>2</b>, ... <b>N-1</b>. There are <b>N-1</b> roads connecting these cities such that each pair of cities is connected by a unique path(forming a tree structure). Needless to say, city <b>0</b> is the <b>capital</b> of Treeland. Initially, each city is controlled by a different gangster. The citizens are allowed to move from any city to any of its adjacent city. However, if the two cities are controlled by different gangsters, they need to pay unit cost in order to move. The distance between any pair u, v of cities denoted by <b>dist(u,v)</b>  is defined as the minimum cost a person has to pay to go from <b>u</b> to <b>v</b>(or v to u).</p>
<p>
Every year, a new gangster emerges in the capital. As always, the gangster will wish to expand his territory. To do so, he will choose a city <b>u</b>, and march with his gangster army from the <b>capital</b> to <b>u</b>(along the tree path). All the cities they encounter(including <b>capital</b> and <b>u</b>) will be forciby occupied by this gangster. Because of this, distance between many cities can potentially change, which makes the people mad. Therefore, they will come to you for help.</p>
<p>
Given a city u, they will ask you evaluate </p>
<p><b> f(u) = avg<sub>x in subtree rooted at u(including u)</sub>  dist(capital, x) </b></p>
<p><h3>Input</h3>
</p><p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>
The first line of each test case contains a single integer <b>N</b> denoting the number of cities in Treeland. The next <b>N-1</b> lines contain two space-separated integers <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> denoting the <b>i<sup>th</sup></b> road is between cities A<sub>i</sub> and .B<sub>i</sub>.</p>
<p>
The next line contains <b>Q</b>, the number of queries. The next <b>Q</b> lines each contain a character <b>t</b> and an integer <b> u </b>.<br/><br />
If <b>t='O'</b>, it means a new gangster has marched from capital to u, Occupying all cities along the path.<br/><br />
If <b>t='q'</b>, it means you have to report <b>f(u)</b></br/></br/></p>
<p><h3>Output</h3>
<li>For each test case, for each query of type 'q', output a single line containing the value of <b> f(u) </b>. Answers correct upto 6 places after decimal are acceptable.</li>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 15 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 100000 </b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b> 100000 </b></li>
<li>The sum of value of N over all test cases will be no more than 200000.</li>
<li>The sum of value of Q over all test cases will be no more than 200000.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
13
0 1
0 2
1 11
1 10
1 9
9 12
2 5
5 8
2 4
2 3
4 6
4 7
7
q 0
O 4
q 6
q 2
O 9
q 9
q 2

<b>Output:</b>
2.0000000000
1.0000000000
0.8571428571
0.5000000000
1.8571428571

</pre></p><p> </p>
<h3>Explanation</h3>
<p> Initially, distance of each city from capital is equal to the number of edges on the shortest path, because each city is controlled by a different gangster.<br />
Therefore, value of f(0) is (0+1+1+2+2+2+3+2+2+3+2+3+3)/13 = 2.<br />
After performing 'O 4', cost of the edges (0,2) and (2,4) become 0. The cost of all other edges remains same. Therefore, f(6) becomes 1.
</p>
