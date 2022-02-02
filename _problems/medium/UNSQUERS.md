---
{"category_name":"medium","problem_code":"UNSQUERS","problem_name":"Unusual Queries","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/deNty2kyEeI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"dalgerok","problem_tester":"","date_added":"18-10-2020","tags":{"0":"dalgerok","1":"medium","2":"nov20","3":"persistent"},"problem_difficulty_level":"Medium","best_tag":"Persistent Segment Tree","editorial_url":"https://discuss.codechef.com/problems/UNSQUERS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNSQUERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/UNSQUERS.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/UNSQUERS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/UNSQUERS.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/UNSQUERS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/UNSQUERS.pdf) as well.

There are $N$ mountains in Chefland, arranged in a line and numbered $1$ through $N$ from left to right. For each valid $i$, the $i$-th mountain from the left has a height $H_i$.

Chef wants to choose a contiguous sequence of mountains $l, l+1, \ldots, r$ and visit them in this order. He has a notebook where he writes down some heights of mountains. Initially, the notebook contains only the integer $0$ and each time he visits a new mountain whose height is strictly greater than all the integers written in the notebook so far, he writes its height in the notebook. The *satisfaction* Chef gets from travelling is the number of positive integers written in the notebook at the end. For example, if the mountains have heights $(\underline{1}, \underline{5}, 2, 5, 3, \underline{7}, 2, \underline{9})$, Chef's satisfaction is $4$ and the integers written in the notebook at the end are $0, 1, 5, 7, 9$.

Your task is to answer $Q$ queries. In each query, Chef gives you two integers $L$ and $R$ ($1 \le L \le R \le N$) and you should find the maximum satisfaction he can get if he can choose to visit any contiguous sequence of mountains from $l$ to $r$ such that $L \le l \le r \le R$. Note that the queries are encoded in such a way that they have to be processed online.

### Input
- The first line of each test case contains three space-separated integers $N$, $Q$ and $s$.
- The second line contains $N$ space-separated integers $H_1, H_2, \ldots, H_N$.
- Each of the following $Q$ lines contains two space-separated integers $x$ and $y$ describing a query. The parameters $L$ and $R$ for this query can be computed as follows:
	- Let $last$ be the answer to the previous query, or $0$ if this is the first query in this test case.
	- Set $L$ to $(x + s \cdot last - 1) \,\%\, N + 1$.
	- Set $R$ to $(y + s \cdot last - 1) \,\%\, N + 1$.
	- If $L \gt R$, swap $L$ and $R$.

### Output
For each query, print a single line containing one integer — the maximum satisfaction Chef can get.

### Constraints
- $1 \le N, Q \le 10^5$
- $0 \le s \le 1$
- $1 \le H_i \le 10^5$ for each valid $i$
- $1 \le x, y \le N$

### Subtasks
**Subtask #1 (15 points):** $N \le 1,000$

**Subtask #2 (35 points):** $s=0$, i.e. the queries do not have to be processed online

**Subtask #2 (50 points):** original constraints

### Example Input 1
```
6 3 0
4 2 3 1 5 5
1 6
2 4
3 4
```

### Example Output 1
```
3
2
1
```

### Explanation
In the first query, Chef can choose to visit a contiguous subsequence of mountains with heights $(4, 2, 3, 1, 5, 5)$. The subsequence that gives the maximum satisfaction is $(2, 3, 1, 5)$. In that case, Chef writes the integers $0, 2, 3, 5$ to his notebook, so the answer is $3$.

In the second query, Chef can choose to visit a contiguous subsequence of mountains with heights $(2, 3, 1)$. The whole sequence has the maximum satisfaction $2$, since Chef writes the integers $0, 2, 3$.

In the third query, the largest (and the only possible) satisfaction is $1$, since Chef writes either $0, 3$ or $0, 1$.

### Example Input 2
```
10 10 1
7 8 8 9 10 10 2 3 5 10
9 6
2 9
10 6
4 2
5 10
4 5
8 7
8 2
7 7
9 5
```

### Example Output 2
```
3
3
3
1
4
2
2
4
1
4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>