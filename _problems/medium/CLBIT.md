---
{"category_name":"medium","problem_code":"CLBIT","problem_name":"Perry learns Binary","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":"","date_added":"25-06-2020","tags":{"0":"cole2020","1":"depth","2":"disjoint","3":"implementation","4":"sarthakmanna","5":"sarthakmanna","6":"segment","7":"trie"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CLBIT","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLBIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Phineas and Ferb have made the treehouse. They have now decided to spend time with Perry who is spending his off day (remember, Chef is dealing with Dr. Doofenshmirtz today). They have taught Perry about the binary number system. Now, to check whether Perry has understood properly, Phineas will ask some queries which Perry needs to answer correctly.

The tree contains $N$ nodes and every node $i$ $(1 \leq i \leq N)$ has a value $A_i$ associated with it. All the edges are bidirectional. The tree is rooted at node $1$. Phineas will ask $Q$ queries in total. Each query can be of 2 types:

- $1$ $u$ $v$ $x$ - For every node $r$ on the simple path between nodes $u$ and $v$, apply bitwise OR operation on the associated value with the value $x$, i.e., replace $A_r$ by $A_r ∨ x$, where $∨$ denotes the bitwise OR operation.

- $2$ $k$ $y$ - Calculate the maximum value of $A_r \oplus y$ over all nodes $r$ in the subtree of node $k$, where $\oplus$ denotes the bitwise XOR operation. The associated values of all the nodes will remain unchanged after this operation.

Help Perry answer the queries. Afterall, Perry is just a platypus. He doesn't do much.

###Input

- The first line contains a single integer $T$ denoting the number of testcases.
- The first line of each test case contains $2$ space separated integers $N$ and $Q$.
- The next line contains $N$ space separated integers denoting $A_i$.
- The next $N - 1$ lines contain two space separated integers $a$ and $b$, each denoting a bidirectional edge between the nodes $a$ and $b$ in the tree.
- The next $Q$ lines describe each query in the format given above.

###Output

For each query of type $2$, print the maximum possible XOR value in a new line.


###Constraints 

- $1 \leq T \leq 10^3$
- $1 \leq N \leq 3 \times 10^4$
- $1 \leq Q \leq 5 \times 10^5$
- $1 \leq a, b, u, v, k \leq N$
- $0 \leq A_i, x, y < 2^{17}$
- Sum of $N$ and $Q$ over all test cases for a particular test file does not exceed $3 \times 10^4$ and $5 \times 10^5$ respectively.

###Sample Input
    1
    4 3
    1 2 2 3
    1 2
    2 3
    1 4
    2 1 7
    1 1 3 4
    2 1 7

###Sample Output
    6
    4

###Explanation
The sample tree can be represented as follows:

<img src="https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2020/image3.jpeg" alt="query 1" width="200" height="200">

For the first query, the nodes in the subtree of node $1$ are nodes $1$, $2$, $3$ and $4$. Consider the bitwise XOR values with the corresponding node values.
- $7 \oplus 1 = 6$
- $7 \oplus 2 = 5$
- $7 \oplus 2 = 5$
- $7 \oplus 3 = 4$  

The maximum of these values is $6$. Therefore, the answer to this query is $6$.

After the update operation, the tree looks like the following representation:

<img src="https://codechef_shared.s3.amazonaws.com/download/HYC/External_contest_images/COLE2020/image4.jpeg" alt="query 1" width="200" height="200">

For the last query, the bitwise XOR values are:
- $7 \oplus 5 = 2$
- $7 \oplus 6 = 1$
- $7 \oplus 6 = 1$
- $7 \oplus 3 = 4$  

The maximum of these values is $4$. Therefore, the answer to this query is $4$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>