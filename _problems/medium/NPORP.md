---
{"category_name":"medium","problem_code":"NPORP","problem_name":"Solve what you want","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"altruist_","problem_tester":"kingofnumbers","date_added":"20-04-2018","tags":{"0":"altruist_"},"editorial_url":"https://discuss.codechef.com/problems/NPORP","time":{"view_start_date":1524934802,"submit_start_date":1524934802,"visible_start_date":1524934802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/mandarin/NPORP.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/russian/NPORP.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME59/vietnamese/NPORP.pdf">Vietnamese</a> as well.</h3>

Gleb is trying to solve the **P versus NP** problem, so he is doing some research now. He does not have time to solve boring and easy problems like this one, so he gave it to you.

You are given a connected undirected graph with $N$ vertices labelled $1$ through $N$ and a number $K$. You have to solve exactly one of the following two problems or determine that both of them have no solution (if both have a solution, you are free to choose either one of them to solve):
- Find a cut in the graph with size strictly smaller than $K$. A *cut* is a partition of vertices of the graph into two non-empty subsets $A$ and $B$ ($A \cap B = \emptyset$, $|A| + |B| = N$). The *size* of a cut is the number of edges $(u, v)$ such that $u \in A$ and $v \in B$.
- Find a simple cycle in the graph with *size* at least $K$ (containing at least $K$ vertices). A simple cycle does not visit any edge more than once and does not visit any vertex more than once.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $K$.
- Each of the following $M$ lines contains two space-separated integers $u$ and $v$ describing an edge between vertices $u$ and $v$.

### Output
For each test case:
- If both problems have no solution, print a single line containing the string `"NO ANSWER"`.
- Otherwise, print three lines. The first line should contain the string `"CUT"` if you solved the first problem or `"CYCLE"` if you solved the second problem.
- If you solved the first problem, the second line should contain a single integer — the size of the set $A$, and the third line should contain $|A|$ space-separated integers denoting the labels of vertices in the set $A$.
- If you solved the second problem, the second line should contain a single integer — the size $S$ of the simple cycle you found, and the third line should contain $S$ space-separated integers denoting the vertices of the cycle in an order in which they appear on the cycle.

### Constraints 
- $1 \le T \le 100$
- $2 \le N, M \le 2 \cdot 10^5$
- $3 \le K \le N$
- $1 \le u, v \le N$
- $u \neq v$ for each edge
- there are no two edges connecting the same pair of vertices
- the graph described on the input is connected
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (40 points):** $1 \le N \le 10$

**Subtask #2 (60 points):** original constraints

### Example Input
```
2
8 7 3
1 4
2 4
3 4
4 5
5 6
5 7
5 8
3 3 3
1 2
2 3
1 3
```

### Example Output
```
CUT
4
1 2 3 4
CYCLE
3
1 2 3
```
