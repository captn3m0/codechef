---
{"category_name":"challenge","problem_code":"DELIVERY","problem_name":"Delivering Bread","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"CS2","6":"PAS fpc","7":"PAS gpc","8":"RUBY","9":"PHP","10":"GO","11":"NODEJS","12":"HASK","13":"SCALA","14":"D","15":"PERL","16":"FORT","17":"WSPC","18":"ADA","19":"CAML","20":"ICK","21":"BF","22":"ASM","23":"CLPS","24":"PRLG","25":"ICON","26":"SCM qobi","27":"PIKE","28":"ST","29":"NICE","30":"LUA","31":"BASH","32":"NEM","33":"LISP sbcl","34":"LISP clisp","35":"SCM guile","36":"JS","37":"ERL","38":"PERL6","39":"TEXT","40":"CLOJ","41":"FS"},"max_timelimit":4.21017,"source_sizelimit":50000,"problem_author":"friggstad","problem_tester":"pieguy","date_added":"9-10-2010","tags":{"0":"challenge","1":"dec10","2":"friggstad"},"editorial_url":"http://discuss.codechef.com/problems/DELIVERY","time":{"view_start_date":1292062430,"submit_start_date":1292062430,"visible_start_date":1292062430,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Stores from all around the city purchase their bread from the Chef. Normally, the Chef has a delivery man who brings the bread from the Chef's kitchen to the stores each day. Unfortunately, the delivery man is ill today so the Chef must deliver the bread himself.

</p><p>
The Chef can only deliver bread to a store if he reaches it before the store closes for the day. To complicate matters more, the city is a mess of one way streets so it is difficult to determine a good route that visits as many stores as possible before they close.

</p><p>
You may assume it takes 0 time to deliver bread to a store once the Chef has reached the store. Thus, the total time it takes the Chef to deliver the bread is simply amount of time he spends driving. Finally, we note that all stores close at the same time in this city.

<h3>Input</h3>
</p><p>
The first line consists of a single integer T indicating the number of test cases that will follow (at most 40). Each test case begins with a line consisting of three integers n, m, b. Here, n indicates the number of stores (including the Chef's bakery), m indicates the number of one-way streets and b is the number of time units until all stores close.

</p><p>
Then m lines follow, each consisting of three integers u,v,d with both u and v between 0 and n-1 and d between 0 and 1,000,000,000. This means there is a one way street from store u to store v that takes precisely d units of time to travel. The input will be such that there is at most one street from a store u to a store v, though there may be a one way street from u to v and one from v to u. Also, there is never a one way street from a store to itself. Finally, the Chef's bakery is always store 0 and this is where the Chef starts driving.

</p><p>
Bounds: 1 ≤ n ≤ 300, 0 ≤ m ≤ 10,000, and 0 ≤ b ≤ 1,000,000,000.

<h3>Output</h3>
</p><p>
The output for each test case consists of a single line. This line should begin with a sequence of integers between 0 and n-1 and end with -1. A sequence s<sub>1</sub>, s<sub>2</sub>, ..., s<sub>k</sub> followed by a -1 means the chef travels along a single one way street from store 0 (the bakery) to store s<sub>1</sub>, then from store s<sub>1</sub> to store s<sub>2</sub>, and so on until store s<sub>k</sub> is reached. That is, there should be a one way street from store 0 to store s<sub>1</sub> and, for each 0 &lt; j &lt; k there should be a one way street from store s<sub>j</sub> to store s<sub>j+1</sub>.

</p><p>
This should be done such that the total time taken along all streets should be at most b. Finally, since the Chef doesn't want the driving instructions to be too complicated the output should be such that k ≤ 10,000. A store may appear multiple times in this output list.

</p><p>
The goal is to visit as many distinct stores as possible before they close. Note that the optimum answer is not required. This problem is scored and any output that meets the above specifications will be considered valid. The details on how the score is calculated is described below the sample data.

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3 4 2
0 1 1
0 2 1
1 2 1
2 1 2
5 7 11
0 1 2
1 0 3
0 2 1
2 3 2
3 2 3
2 4 1
4 2 2


<b>Output:</b>
1 2 -1
1 0 2 3 -1
</pre>

<h3>Scoring</h3>
</p><p>
The score for each test case is simply the number of distinct stores visited by the Chef (recall the Chef starts at store 0 so it is counted even if it does not appear in the output list). The total score for a test file is then the sum of the scores of each test case. Finally, there are multiple input files and the displayed score will be the average of the scores of the individual test files.

<h3>Explanation of Output</h3>
</p><p>
The output for the first test case indicates the Chef drives from 0, to 1, and then to 2. The total time spent is 2 units so the Chef reaches the last store just in time and the score for this test case is 3.

</p><p>
For the second test case, the Chef travels along the sequence of stores 0,1,0,2,3 before stopping which takes 2+3+1+2=8 time units. Thus, he reaches exactly 4 distinct stores so the score for this test case is 4.

<h3>Test Data</h3>
Some test data is hand-crafted to defeat simple heuristics and some is randomly generated from a variety of distributions.</p>