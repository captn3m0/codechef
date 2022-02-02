---
{"category_name":"medium","problem_code":"PERMDIST","problem_name":"Permutation Distance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"24-12-2019","tags":{"0":"balajiganapath"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1577730600,"submit_start_date":1577730600,"visible_start_date":1577730600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PERMDIST","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Consider a permutation $P = (p_1, p_2, ..., p_n)$ of numbers $\{1, 2, ... , n\}$. Let us construct a graph $G(P)$ with $n$ vertices as follows: if $i, j \in \{1, ..., n\}$ and $i < j$, then an undirected edge $(i, j)$ is present in $G(P)$ if and only if $p_i < p_j$.

Given a permutation $P$, answer several queries of the form "what is the shortest length of a path between $u$ and $v$ in $G(P)$?". If there is no path between $u$ and $v$, report so.


###Input:
- The first line contains a single integer $T$ denoting the number of test cases. $T$ test case descriptions follow.
- Each test case description starts with a line containing two integers, $n$ and $q$, denoting the length of the permutation $P$ and the number of queries respectively.
- The next line contains $n$ distinct integers $p_1, ..., p_n$ denoting the permutation $P$.
- The following $q$ lines describe queries. The $i$-th of these lines contains two integers $u_i$ and $v_i$ denoting parameters of the $i$-th query.

###Output:
- Print answers for all queries in order of appearance in the input, one per line.
- If there is no path between $u_i$ and $v_i$, print $-1$ as the answer for the $i$-th query. Otherwise, print a single integer denoting the shortest length of a path between $u_i$ and $v_i$.


###Constraints
- $1 \leq T \leq 10^5$
- $1 \leq n, q \leq 10^5$
- $1 \leq p_i \leq n$
- $p_1, ..., p_n$ forms a permutation of  $\{1, 2, ... , n\}$
- $1 \leq u_i, v_i \leq n$
- The sum of all $n$ in a test file does not exceed $5 \cdot 10^5$
- The sum of all $q$ in a test file does not exceed $5 \cdot 10^5$

###Sample Input:
```
1
5 4
3 5 2 4 1
1 1
2 3
1 4
4 5
```

###Sample Output:
```
0
3
1
-1
```

###Explanation
- In the first query, we can go from 1 to 1 by just staying there, and hence path of length 0.
- In the second query, we can go from the 2 (which has the value $p_2 = 5$) to 1, because 1 < 2 and $p_1 < p_2$. From there, we can go to 4, and from there to 3. This gives us a path of length 3, and is the shortest that we can get.
	
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>