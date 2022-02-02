---
{"category_name":"challenge","problem_code":"FACTORY","problem_name":"Optimizing Production and Sales","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":1.65521,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"innocentboy","date_added":"8-07-2010","tags":{"0":"aug10","1":"challenge","2":"friggstad"},"editorial_url":"http://discuss.codechef.com/problems/FACTORY","time":{"view_start_date":1281522241,"submit_start_date":1281522241,"visible_start_date":1281522241,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Your boss at the gadget company has recently asked you to help optimize operating costs.
Your company is in charge of both manufacturing and selling  their world-famous gadgets.
Currently, there are a number of factories open in various locations around the world and
each store receives their gadgets from precisely one factory.

</p><p>
Each factory has an associated operating cost and the cost of supplying a store from a
factory is proportional to the distance between the store and factory. Your job is to close
some factories and assign an open factory to each store. The cost of such an assignment
is the sum of the factory operating costs of the open factories plus the total cost of assigning each
store to a factory. Of course, your objective is to find a cheap solution.

</p><p>
To reiterate, each store must be supplied by exactly one open factory and each factory
may supply any number of stores. The operating cost of the factory does not depend
on how many stores it is supplying.


<h3>Input</h3>
</p><p>
The first line contains a single integer T &le; 30 indicating the number of test cases to follow.
The first line of each test case consists of two integers F and S, each between 1 and 100,
where F is the number of
factories and S is the number of stores. The next line contains F non-negative floating point
values where the i'th value is the operating cost of factory i.
The next S lines contain F non-negative floating point values where the i'th value on the j'th
line is the cost of supplying store j with factory i.

</p><p>
Since the cost of supplying a store by a factory is proportional to the distance between the
store and factory, you may assume that a sort of triangle inequality holds. Say d[j,i] is the
cost of supplying store j from factory i. Then for any two stores j,j' and any two factories i,i'
we have d[j,i] &le; d[j,i'] + d[j',i'] + d[j',i]. To say it plainly, the shortest
distance between store j and factory i is the direct route.

</p><p>
All floating point values are between 0 and 1000000 and contain at most two points of precision.
Consecutive test cases are separated by a blank line including a blank line immediately preceding
the first case.

<h3>Output</h3>
</p><p>
For each test case you are to output two lines. The first line consists of F values, each either 0 or 1.
If the i'th value is 1 then factory i is open and if the i'th value is 0 then factory i is closed.
The second line consists of S values, each between 1 and F. Here, the j'th value is the index of
an <b>open</b> factory from which store j is supplied.

<h3>Example</h3>

<pre>
<b>Input:</b>
2

3 3
1 2.5 3
3 1.7 1.5
1 2.1 1.2
2.1 1.4 2

2 3
0 15
4 0
4 0
4 0

<b>Output:</b>
1 0 1
3 1 1
1 0
1 1 1
</pre>

<h3>Scoring</h3>
</p><p>
For each test case, let K be the cost of the solution that keeps all factories open and assigns
each client to any nearest factory (i.e. the current cost of manufacturing and supplying gadgets
before your, hopefully cheaper, solution is applied). We will compute the cost of your solution,
say L, and assign a score of L/K to the test case (we guarantee K &gt;= 1 for each test case).
The final score is then the sum of the scores for each test case. The goal is, of course, to minimize
the total score.

</p><p>
For example, the first test case has of K = (1 + 2.5 + 3) + (1.5 + 1 + 1.4) = 10.4 (the first set of parenthesis
contains the cost of the factories and the second contains the cost of assigning stores to their cheapest factory).
The output solution has L = (1 + 3) + (1.5 + 1 + 2.1) = 8.6. Therefore, the score for the first test
case is 8.6/10.4 = 0.826923. Similarly, the second test case has K = (0 + 15) + (0 + 0 + 0) and the solution
output has L = 0 + (4 + 4 + 4) = 12 so the score is 12/15 = 0.8.

<h3>Test Data</h3>
Some of the test data is hand-crafted to make certain heuristics perform poorly and some of the test data is randomly generated according to different distributions.</p>