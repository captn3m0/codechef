---
{"category_name":"challenge","problem_code":"TOLLS","problem_name":"Pricing Tollbooths","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"PERL6","43":"TEXT","44":"SCM chicken","45":"CLOJ","46":"COB","47":"FS"},"max_timelimit":3.07,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"pieguy","date_added":"10-04-2010","tags":{"0":"challenge","1":"friggstad","2":"june10"},"editorial_url":"http://discuss.codechef.com/problems/TOLLS","time":{"view_start_date":1276266450,"submit_start_date":1276266450,"visible_start_date":1276266450,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Your company has recently built its own highway from which they hope to generate some revenue. The highway has no branches or intersections, it is a simple line segment. Your company also has access to simple data from some potential customers that describe their start and endpoint locations and their budget.

</p><p>
Tollbooths are also located on various locations on the highway.  The total toll a customer pays is the sum of all tolls on the tollbooths that lie between their start and end locations. If a customer cannot afford the total toll they must pay, then they simply don't make the trip and end up paying nothing.

</p><p>
No customer wants to start or end their destination at the precise location of a tollbooth so we can represent the problem as follows. We have a graph that is a simple path with N nodes. Each node represents a potential start or end location of a customer and there is a single tollbooth located on the middle of each edge.  So the total toll a customer pays is the sum of the tolls on the edges they cross to reach their endpoint.

</p><p>
Your task is to set the tolls on each of the tollbooths to generate some revenue for your company.

<h3>Input:</h3>
The first line contains an integer T (about 40) indicating the number of test cases.

</p><p></p><p>
Each test case begins with two positive integers N and M (both at most 100) where N is the number of nodes in the graph and M is the number of potential customers. M lines follow where the i'th line contains the information of the i'th client.

</p><p>
Each such line consists of three integers S, E, B where 1 &lt;= S,E &lt;= N are, respectively, the start and end locations 
of the customer and 1 &lt;= B &lt;= 1,000,000 is the customer's budget.

</p><p>
A blank line separates test cases (as well as the first line containing T and the first test case).

<h3>Output:</h3>
For each test case, you are to output a single line consisting of N-1 integers, each of which is between 0 and 1,000,000. The i'th integer (1 &lt;= i &lt;= N-1) denotes the toll placed on the edge connecting nodes i and i+1.

<h3>Scoring:</h3>
From the output, we will calculate the total revenue obtained from all customers who can afford the total toll on their route according to the prices you set.  The score for each test case is then calculated as R/T where R is the revenue obtained and T is the total budget of all customers. The score for the entire set of test cases is just the sum of the scores of each individual test case.


<h3>Example:
Input:</h3>
<pre>
2

3 3
1 2 10
2 3 10
1 3 10

4 3
1 2 10
2 3 10
1 4 15
</pre>

<h3>Output:</h3>
<pre>
5 5
10 10 0
</pre>

</p><p></p><p>
In the first test case, the first two customers only pay a total toll of 5 and the last customer pays 10 so the total revenue is 20.  The score for this case is 20/30.

</p><p>
In the second case, the first two clients pay their full budget but the last client cannot afford the desired route.  The total revenue is then 20 and the score for this case is 20/35.</p>