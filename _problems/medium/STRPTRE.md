---
{"category_name":"medium","problem_code":"STRPTRE","problem_name":"Strip in a Tree!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n2","output":"333333336\r\n142857144","explanation":"**Example case 1:** Alice picks one of the following pairs $(u,v)$: $(1,2)$, $(1,3)$, $(2,3)$, $(2,1)$, $(3,1)$ and $(3,2)$. She also picks a colour, but a strip can be created only if Alice picks the colour black and one of the pairs $(1,2)$, $(2,1)$, $(1,3)$ or $(3,1)$, so the probability is $4/12 = 1/3$, which is $333,333,336$ modulo $1,000,000,007$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"phoenix71","problem_tester":null,"date_added":"24-03-2020","tags":{"0":"combinatorics","1":"easy","2":"ltime82","3":"observation","4":"phoenix71","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/STRPTRE","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STRPTRE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/STRPTRE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/STRPTRE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/STRPTRE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/STRPTRE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/STRPTRE.pdf) as well.

Chef has a complete binary tree with depth $D$ and $N = 2^{D+1}-1$ nodes (numbered $1$ through $N$). Node $1$ is the root and each edge is either white or black. The shape of the tree is as follows:

![](https://codechef_shared.s3.amazonaws.com/download/LTIME82/STRPTRE/strip%20in%20a%20tree.png)

Let's number the levels of the tree $0$ through $D$ from top to bottom. Each node at an odd level is connected to its parent with a white edge (e.g. edges $1-2$ and $1-3$), while each node at an even level is connected to its parent with a black edge (e.g. edges $2-4$, $2-5$, $3-6$, $3-7$).

Chef's friend Alice wants to pick two distinct nodes $u$ and $v$ and a colour $C$ (white or black) uniformly randomly and add an edge between the nodes $u$ and $v$ with colour $C$. It is allowed for two parallel edges to exist between nodes $u$ and $v$ after this operation.

A *strip* is an alternating cycle of white and black edges. Each vertex may appear any number of times in a strip. Find the probability that a strip is created when Alice adds an edge to the graph. It can be proved that this probability can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $1,000,000,007$. You should compute $P \cdot Q^{-1}$ modulo $1,000,000,007$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $1,000,000,007$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $D$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $1,000,000,007$ ($10^9 + 7$).

### Constraints
- $1 \le T \le 50$
- $1 \le D \le 10^5$

### Subtasks
**Subtask #1 (50 points):** $D \le 15$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
1
2
```

### Example Output
```
333333336
142857144
```

### Explanation
**Example case 1:** Alice picks one of the following pairs $(u,v)$: $(1,2)$, $(1,3)$, $(2,3)$, $(2,1)$, $(3,1)$ and $(3,2)$. She also picks a colour, but a strip can be created only if Alice picks the colour black and one of the pairs $(1,2)$, $(2,1)$, $(1,3)$ or $(3,1)$, so the probability is $4/12 = 1/3$, which is $333,333,336$ modulo $1,000,000,007$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>