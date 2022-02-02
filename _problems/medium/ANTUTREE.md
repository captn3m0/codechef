---
{"category_name":"medium","problem_code":"ANTUTREE","problem_name":"On Graphs, Probability Theory and Cakes","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/HSPuM2S491g","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"andrzej","problem_tester":"","date_added":"14-12-2020","tags":{"0":"andrzej","1":"centroid","2":"cook125","3":"expected","4":"fast","5":"math","6":"medium","7":"rajarshi_basu"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/ANTUTREE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ANTUTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/ANTUTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/ANTUTREE.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/ANTUTREE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/ANTUTREE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/ANTUTREE.pdf) as well.

Chef is viewing a simulation of creating a tree with $N$ vertices (numbered $1$ through $N$) which calculates mysterious coefficients for all the edges. Initially, there is a graph without edges, but there is a set $S$ containing $N-1$ edges (numbered $1$ through $N-1$) which should get added to the graph one by one.

In this process, $N-1$ times, the following steps are performed:
- An edge $e$ is chosen uniformly randomly from the current set $S$.
- This edge is added to the graph and removed from $S$.
- The coefficient of $e$ is set to the number of vertices in the connected component created by adding this edge.

Chef is wondering about the expected values of coefficients of the edges. Unfortunately, he does not have much time for such matters since he needs to prepare a superb cake for Chefina's birthday tomorrow.

Help Chef and for each edge, calculate the expected value of its coefficient modulo $998,244,353$. We can prove that each coefficient is a rational number; for a coefficient in the form $P/Q$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$, you should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ is the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The following $N-1$ lines describe the edges in $S$. For each valid $i$, the $i$-th of these lines contains two space-separated integers $u$ and $v$ denoting that the $i$-th edge connects vertices $u$ and $v$.

### Output
For each test case, print a single line containing $N-1$ integers. For each valid $i$, the $i$-th of these integers should be $R \cdot Q^{-1}$ modulo $998,244,353$ for the coefficient of the $i$-th edge.

### Constraints
- $2 \le T \le 10,000$
- $2 \le N \le 50,000$
- $1 \le u, v \le N$
- the edges in $S$ form a tree
- the sum of $N$ over all test cases does not exceed $200,000$

### Example Input
```
3
3
1 2
2 3
4
1 2
2 3
3 4
7
1 2
2 3
3 4
4 5
6 2
7 3
```

### Example Output
```
499122179 499122179
831870297 3 831870297
415935151 332748122 166374063 665496239 415935151 4
```

### Explanation
**Example case 1:**
- With probability $1/2$, the edge $(1,2)$ is added to the graph first and its coefficient is set to $2$ (vertices $1$ and $2$ are in the connected component). Then, with probability $1$, the edge $(2,3)$ is added and its coefficient is set to $3$.
- With probability $1/2$, the edge $(2,3)$ is chosen first instead and its coefficient is set to $2$. In this case, the coefficient of $(1,2)$ is then set to $3$.

The expected value of the coefficient of the first edge is $2 \cdot 1/2 + 3 \cdot 1/2 = 5/2$. For the second edge, it is the same.

**Example case 2:** The expected values of the coefficients are $17/6, 3, 17/6$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>