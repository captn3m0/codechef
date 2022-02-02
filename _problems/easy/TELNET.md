---
{"category_name":"easy","problem_code":"TELNET","problem_name":"Telephone Network","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"12-12-2019","tags":{"0":"dynamic","1":"gw19mos","2":"icpc2019","3":"icpcgw19","4":"simple","5":"wittyceaser"},"problem_difficulty_level":"Simple","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TELNET","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TELNET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
The mayor of Townsville City wants to build a telephone network in the city.
The city is represented as a square grid of size $N$ x $N$. Rows and columns of the grid are numbered from $1$ to $N$. Each cell of the grid $(i, j)$ has a tower of height $H_{i, j}$. The height of each tower is between $1$ and $K$ (inclusive). It is guaranteed that there is at least one tower of each height in the city.

- The mayor's engineering team wants to use exactly $K - 1$ cables to create the network.
- The first cable should be between a tower of height $1$ and a tower of height $2$, the second cable should be between a tower of height $2$ and a tower of height $3$, and so on with the $(K - 1)^{th}$ cable connecting a tower of height $(K - 1)$ and a tower of height $K$, i.e., a chain of cables needs to be created in the height order $1, 2, 3, ... , K$.
- The cost of connecting two cells $(i_1, j_1)$ and $(i_2, j_2)$ is $|i_2 - i_1| + |j_2 - j_1|$.
- For all $i$ such that $1 \leq i < K$, the $i^{th}$ and $(i+1)^{th}$ cables should have one tower in common.

Find the minimum total cost of the chain of cables required to build the telephone network.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains $2$ space-separated integers $N$ and $K$.
- $N$ lines follow. Each line contains $N$ space-separated integers. The $j^{th}$ number in the $i^{th}$ line represents $H_{i, j}$.

### Output
For each test case, print a single line containing the minimum cost of cables used.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le K \le N^2$
- $1 \le H_{i, j} \le K$ for each valid $(i, j)$
- the sum of $N$ over all test cases does not exceed $100$

### Example Input
```
1
3 3
1 1 1
2 2 2
3 3 3
```

### Example Output
```
2
```

### Explanation
**Example case 1:** 
- One of the chains that can be formed with minimum cost is $(1, 1)$ -> $(2, 1)$ -> $(3, 1)$ with cost $2$.
- Even though $(1, 2)$ -> $(2, 3)$ -> $(3, 1)$ is also a valid chain (among other valid chains), it's cost is $5$ which is not the minimum.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>