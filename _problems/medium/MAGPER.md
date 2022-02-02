---
{"category_name":"medium","problem_code":"MAGPER","problem_name":"Magic Permutations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4 3\n1 3 2 4\n4 3 2 1\n1 1\n2 3 1\n1 2","output":"4\n2\n8","explanation":"**Example case 1:**\n- Rami\u0027s permutation is $(1, 3, 2, 4) \\rightarrow (3, 2, 4, 1) \\rightarrow (3, 2, 4, 1) \\rightarrow (4, 1, 3, 2)$.\n- Ghoda\u0027s permutation is $(4, 3, 2, 1) \\rightarrow (4, 3, 2, 1) \\rightarrow (2, 3, 4, 1) \\rightarrow (2, 3, 4, 1)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":null,"date_added":"14-08-2019","tags":{"0":"cook109","1":"i_love_islam","2":"lazy","3":"medium","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/MAGPER","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAGPER","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/MAGPER.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/MAGPER.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/MAGPER.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/MAGPER.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/MAGPER.pdf) as well.

Saeed bought two magic permutations of integers $1$ through $N$ and gave them to his grandsons Rami and Ghoda to encourage them to train in problem solving.

Rami found out that he can only cyclically shift his permutation, i.e. choose any number of elements from the beginning and move them to the end without changing their order. On the other hand, Ghoda found out that he can only swap elements of his permutation.

The distance between two permutations $P_1, P_2, \ldots, P_N$ and $R_1, R_2, \ldots, R_N$ is the sum of $|i-j|$ over all pairs of valid indices $i, j$ such that $P_i = R_j$.

You should process $Q$ queries. In each query, one of Saeed's grandsons plays with his permutation (performs an operation described above), and afterwards, you should tell Saeed the distance between his grandsons' current permutations. Note that the queries are cumulative — the changes made in one query remain in subsequent queries.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$, denoting Rami's initial permutation.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$, denoting Ghoda's initial permutation.
- Each of the next $Q$ lines describes a query in one of the following formats:
    - `1 z`: Rami moves $z$ elements from the beginning of his permutation to the end.
    - `2 x y`: Ghoda swaps the $x$-th and $y$-th element of his permutation.

### Output
For each query, print a single line containing one integer — the current distance between the permutations.

### Constraints
- $1 \le T \le 100$
- $2 \le N, Q \le 10^5$
- $1 \le x, y \le N$
- $x \neq y$
- $1 \le z \le N-1$
- $1 \le A_i, B_i \le N$ for each valid $i$
- $A$ and $B$ are permutations
- the sum of $N$ over all test cases does not exceed $10^5$
- the sum of $Q$ over all test cases does not exceed $10^5$

### Example Input
```
1
4 3
1 3 2 4
4 3 2 1
1 1
2 3 1
1 2
```

### Example Output
```
4
2
8
```

### Explanation
**Example case 1:**
- Rami's permutation is $(1, 3, 2, 4) \rightarrow (3, 2, 4, 1) \rightarrow (3, 2, 4, 1) \rightarrow (4, 1, 3, 2)$.
- Ghoda's permutation is $(4, 3, 2, 1) \rightarrow (4, 3, 2, 1) \rightarrow (2, 3, 4, 1) \rightarrow (2, 3, 4, 1)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>