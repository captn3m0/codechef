---
{"category_name":"easy","problem_code":"PAIRCNT","problem_name":"Chef and Pairs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"24-06-2021","tags":{"0":"aryanag_adm","1":"easy","2":"july21","3":"small"},"problem_difficulty_level":"Easy-Medium","best_tag":"Small To Large","editorial_url":"https://discuss.codechef.com/problems/PAIRCNT","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PAIRCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/PAIRCNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/PAIRCNT.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/PAIRCNT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/PAIRCNT.pdf) as well.

You are given a tree (connected, undirected, acyclic graph) consisting of $N$ nodes. Based on this tree, you have to answer $Q$ queries. 

Each query is of the form:

- $K\ D\  V_1\ V_2\ \cdots\ V_K$ - output the number of pairs $(i, j)$, $1 \leq i \lt j \leq K$, such that the shortest path between nodes $V_i$ and $V_j$ in the tree has $D$ edges.

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- The first line of each test case contains two integers, $N$ and $Q$.
- $N - 1$ lines follow. Each line consists of two integers $u$ and $v$, indicating that there is an edge between nodes $u$ and $v$ in the tree. 
- $Q$ lines follow. Each line describes a query in the format given above.

### Output
For each query, output the answer on a new line.

### Constraints
- $1 \leq T \leq 5$
- $1 \leq N, Q \leq 10^5$
- $1 \leq u, v, V_i \leq N$
- $0 \leq D \leq 10^5$
- The sum of $K$ across all queries in a single test case is at most $10^5$.  

### Subtasks
- **Subtask 1 (20 points):** For each query, $K \leq 10$
- **Subtask 2 (80 points):** Original constraints

### Sample Input
```
1
5 2
1 2
1 3
2 4
4 5
3 2 2 3 5
2 4 1 3
```

### Sample Output
```
2
0
```

### Explanation

In the first query, the pairs of nodes $(2, 3)$ and $(2, 5)$ have distance $2$.

In the second query, there is no pair with distance $4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>