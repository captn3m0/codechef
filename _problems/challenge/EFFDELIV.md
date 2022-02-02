---
{"category_name":"challenge","problem_code":"EFFDELIV","problem_name":"Efficient Delivery","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":null,"date_added":"12-09-2015","tags":{"0":"challenge","1":"dijkstra","2":"knapsack","3":"oct15","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/EFFDELIV","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/EFFDELIV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/EFFDELIV.pdf">Russian</a> </h3>
<p>Sergey works as a delivery boy. Every day he has a number of deliveries to be completed.</p>
<p>Sergey lives in Bytetown - a city, consisting of <b>N</b> junctions, and <b>M</b> roads connecting these junctions. More precisely, the <b>i</b><sup>th</sup> road connects the junctions with the numbers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>. Each of these roads has its own (positive) length <b>Z<sub>i</sub></b>, and no road connects a junction to itself.</p>
<p>There are <b>K</b> delivery orders for Sergey. Each order is denoted with <b>four</b> integers: <b>A<sub>j</sub></b>, <b>B<sub>j</sub></b>, <b>V<sub>j</sub></b> and <b>C<sub>j</sub></b>. It means that for the <b>j</b><sup>th</sup> order Sergey has to pick a parcel of weight <b>V<sub>j</sub></b> at the junction numbered <b>A<sub>j</sub></b> and deliver it to the junction numbered <b>B<sub>j</sub></b>. After the parcel is delivered, Sergey gets <b>C<sub>j</sub></b> burles of reward. Sergey can't complete the same order twice or more times.</p>
<p>So, the business day for Sergey looks as follows: he remembers the whole list of orders and starts at his initial junction numbered <b>S</b>. Then, he travel the streets of the city via his bike. If Sergey visits a junction, where there is one or more orders available he can either take some of the orders and load the corresponding parcels on his bike, or not take anything now but do it later, if he appears at the same junction again. When Sergey visits a junction which is the destination for some of the parcels that are currently with him, he can complete these orders and unload the corresponding parcels.</p>
<p>Sadly, Sergey is not infinitely strong. Though he can carry any number of parcels at once, if the total weight of the parcels exceeds <b>W</b> Sergey won't be able to carry them on his bike. Sergey also can't take a parcel and not deliver it because there will be complains, hurting Sergey's reputation.</p>
<p>The bike has enough fuel to travel only for <b>D</b> units of distance. It is not necessary for Sergey to get back to his initial junction because he has a lot of friends in Bytetown who will drop him back after the party (Sorry, you're not invited). It is clear that under the given constraints, Sergey might be not able to deliver all the parcels. So your task is to plan the delivery for Sergey in such a way that:</p>
<ul>
<li>He moves only by streets</li>
<li>The total travelled distance doesn't exceed <b>D</b>.</li>
<li>There are no undelivered parcels with Sergey by the end of the delivery. In other words, all the parcels that Sergey has picked up should be delivered.</li>
<li>At any time, Sergey does not carry more than <b>W</b> units of weight.</li>
<li>The most important: the profit Sergey gets by the end of the day is maximized. You don't have to find the optimal delivery, but the more profit there is, the more are the points you'll get.
</li></ul>

<h3>Input</h3>
<p>The first line contains two space separated integers <b>N</b> and <b>M</b> denoting the number of junctions and the number of streets.</p>
<p>Each of the following <b>M</b> lines contain three space separated integers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>, denoting that the <b>i</b><sup>th</sup> street of length <b>Z<sub>i</sub></b> connects the <b>X<sub>i</sub></b><sup>th</sup> and the <b>Y<sub>i</sub></b><sup>th</sup> junctions. All the streets are <b>bidirectional</b>.</p>
<p>The next line contains a single integer <b>K</b> denoting the number of orders.</p>
<p>Each of the following <b>K</b> lines contain four space-separated integers <b>A<sub>j</sub></b>, <b>B<sub>j</sub></b>, <b>V<sub>j</sub></b> and <b>C<sub>j</sub></b>, denoting that for the <b>j</b><sup>th</sup> order, the parcel should be picked up at the <b>A<sub>j</sub></b><sup>th</sup> junction, left at the <b>B<sub>j</sub></b><sup>th</sup> junction, has the weight of <b>V<sub>j</sub></b>, and when delivered, gives <b>C<sub>j</sub></b> burles of profit.</p>
<p>The following line contains three space-separated integers <b>S</b>, <b>D</b> and <b>W</b> denoting the starting junction, the maximal distance that Sergey can travel and the maximum weight he can carry at any time, respectively.</p>
<h3>Output</h3>
<p>The first line of output should contain a single integer <b>Op</b>, denoting the number of operations. Each of the following <b>Op</b> lines should contain the operation code and the parameter. The following are the descriptions of the operation codes and the meanings of the parameters:</p>
<ul>
<li>0 <b>P</b>. Here <b>0</b> is the operation code and <b>P</b> is the parameter. The meaning is that Sergey should move from his current junction to the adjacent junction <b>P</b>. In case there is no <b>direct one-street</b> connection between Sergey's current position and the junction <b>P</b>, you will receive a <em>wrong answer</em> verdict. In case Sergey is unable to reach the junction <b>P</b> because the amount of fuel is too low, you will also get <em>wrong answer</em> verdict.</li>
<li>1 <b>P</b>. Here <b>1</b> is the operation code and <b>P</b> is the parameter. The meaning is that Sergey should takes the order numbered <b>P</b> in the orders' list. In case this order was already taken or Sergey is not in the junction which is the pick-up junction for the order, you will get a <em>wrong answer</em> verdict. In case the weight that Sergey will have to carry exceeds <b>W</b> after taking this order, you'll also get a <em>wrong answer</em> verdict.</li>
<li>2 <b>P</b>. Here <b>2</b> is the operation code and <b>P</b> is the parameter. The meaning is that Sergey should deliver the parcel for the order number <b>P</b> in 1-based orders' list. In case Sergey doesn't carry the parcel from this order, you'll receive <em>wrong answer</em> verdict.
</li></ul>
<p>You can also get a <em>wrong answer</em> if your output doesn't satisfy the format above or some parcels picked up by Sergey are left undelivered. If all the requirements are satisfied, you'll receive an <em>accepted</em> verdict ;).</p>

<h3>Test data and scoring</h3>
<p>There are <b>20</b> test cases in total. They are split into <b>5</b> groups, <b>4</b> tests in each.
</p>
<p><ul>
<li>In all the test cases:
<ul>
<li><b>1</b> ≤ <b>X<sub>i</sub>, Y<sub>i</sub>, A<sub>j</sub>, B<sub>j</sub>, S</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>V<sub>j</sub></b> ≤ <b>W</b></li>
<li><b>1</b> ≤ <b>C<sub>j</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li>It is possible to reach <b>any</b> junction from the initial junction <b>S</b> via the streets.</li>
<li>The streets are <b>bidirectional</b>.</li>
<li>Each pair of junctions is connected with <b>no more that one</b> street.</li>
</ul>
</li>
<li>Group 1:
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M, K</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>D, W</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>Z<sub>i</sub></b> ≤ <b>100</b>, for all the streets.</li>
</ul>
</li>
<li>Group 2:
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>M, K</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>Z<sub>i</sub></b> = 1 for all the streets.</li>
</ul>
</li>
<li>Group 3:
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>M</b> = <b>N-1</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>Z<sub>i</sub></b> ≤ <b>100</b>, for all the streets</li>
</ul>
</li>
<li>Group 4:
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M, K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>Z<sub>i</sub></b> ≤ <b>10</b>, for all the streets</li>
</ul>
</li>
<li>Group 5:
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M, K</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>W</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>Z<sub>i</sub></b> ≤ <b>10</b>, for all the streets</li>
</ul>
</li>
</ul>
</p>
<p>The score for a single test case equals the total profit of Sergey. The score for the whole task is the sum of the scores among all the test cases.</p>
<p>During the contest, you won't see the score of your solution on the complete test set. Instead of this, you will see the score, based on <b>4</b> test cases: one test case for each of groups <b>1-4</b>. You will also see whether your program got <b>accepted</b> verdict on <b>all</b> the test cases (not only these 4), but time and memory stats will be reported based <b>only</b> on four premilinary test cases.</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 5
1 2 1
2 3 2
1 4 1
4 5 1
5 2 3
3
1 4 5 10
2 5 6 15
4 1 10 10
1 5 12</tt>

<b>Output:</b>
<tt>7
1 1
0 2
1 2
0 5
2 2
0 4
2 1</tt>

</pre>
<h3>Explanation</h3>
<p>
Sergey starts at the junction numbered the <b>1</b><sup>st</sup>. Before moving on, he takes the order numbered the <b>1</b><sup>st</sup>. Then he moves to the <b>2</b><sup>nd</sup> junction and there he takes the <b>2</b><sup>nd</sup> order. Then, Sergey moves to the <b>5</b><sup>th</sup> junction, where he delivers the parcel from the <b>2</b><sup>nd</sup> order. Finally, he moves to the <b>4</b><sup>th</sup> junction, where he delivers the parcel from the <b>1</b><sup>th</sup> order.</p>
<p>The total profit that Sergey receives from this delivery is <b>(10 + 15) = 25</b> burles. Hence, this answer will get the score of <b>25</b>.</p>
