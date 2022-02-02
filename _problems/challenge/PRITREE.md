---
{"category_name":"challenge","problem_code":"PRITREE","problem_name":"Chef, Primes and Trees (Challenge)","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"fjzzq2002","problem_tester":null,"date_added":"29-10-2018","tags":{"0":"fjzzq2002"},"time":{"view_start_date":1542015002,"submit_start_date":1542015002,"visible_start_date":1542015002,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/NOV18/hindi/PRITREE.pdf) , [Vietnamese](http://www.codechef.com/download/translated/NOV18/vietnamese/PRITREE.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/NOV18/mandarin/PRITREE.pdf) , [Russian](http://www.codechef.com/download/translated/NOV18/russian/PRITREE.pdf) and [Bengali](http://www.codechef.com/download/translated/NOV18/bengali/PRITREE.pdf) as well.

Chef loves prime numbers and trees.

One day, Chef received $N$ nodes (numbered $1$ through $N$) as a gift. There are no edges between them yet, but each node contains a value; let's denote the value in node $i$ by $V_i$. Since Chef likes trees, he wants to form a tree by adding $N-1$ edges between these nodes.

Chef defines a subtree as any connected component obtained after deleting an edge. A tree with $N$ nodes has $2(N-1)$ subtrees. A *prime subtree* is a subtree such that the sum of values in its nodes is a prime number.

Since Chef likes prime numbers too, he wants to maximize the number of prime subtrees in the resulting tree. Help him solve this difficult problem!

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $V_1, V_2, \ldots, V_N$.

### Output
Print $N-1$ lines. Each of these lines should contain two space-separated integers $u$ and $v$ ($1 \le u, v \le N$) denoting an edge between nodes $u$ and $v$. The graph formed by these edges must be a tree.

### Constraints 
- $1 \le N \le 1,000$
- $1 \le V_i \le 20,000$ for each valid $i$

### Example Input
```
4
1 5 2 3
```

### Example Output
```
1 3
3 2
3 4
```

### Explanation
**Example case 1:** We can form a tree by adding edges $(1, 3)$, $(3, 2)$ and $(3, 4)$. The sums of values in nodes of its subtrees are $1, 3, 5, 6, 8, 10$, so there are two prime subtrees (the ones with sums $3$ and $5$).

### Scoring
The score for each test case (and therefore each test file) is $P / (N-1)$, where $P$ is the number of prime subtrees. The score of a submission is the sum of its scores for all test files. For the example output, the score would be $2/3 \doteq 0.666666$.

If the output of your solution is not a valid tree, its verdict will be Wrong Answer.

### Test Generation Process
There are twenty test cases. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on 20% (4/20) of the test files. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other sixteen test files.

The pseudocode used for generating all tests is given below. Assume that the function `rand(l, r)` generates a uniformly random integer between $l$ and $r$ (both inclusive).

```
N := rand(500, 1000)
for i in 1..N:
	V[i] := rand(1, 20000)
```
