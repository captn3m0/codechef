---
{"category_name":"easy","problem_code":"TOTEM","problem_name":"MEX-ception","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"8-07-2020","tags":{"0":"constructive","1":"cook120","2":"easy","3":"rajarshi_basu","4":"sjshohag"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TOTEM","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOTEM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/TOTEM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/TOTEM.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/TOTEM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/TOTEM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/TOTEM.pdf) as well.

You are given two integers $N$ and $M$. You have to construct a matrix with $N$ rows and $M$ columns. Consider a multiset $S$ which contains $N + M$ integers: for each row and each column of this matrix, the MEX of the elements of this row/column belongs to $S$. Then, in the matrix you construct, the MEX of $S$ must be maximum possible. 

Note: The MEX of a multiset of integers is the smallest non-negative integer that is not present in this multiset. For example, $\mathrm{MEX}(\{4,9,0,1,1,5\}) = 2$ and $\mathrm{MEX}(\{1,2,3\}) = 0$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print $N$ lines. For each $i$ ($1 \le i \le N$), the $i$-th of these lines should contain $M$ space-separated integers ― the elements in the $i$-th row of your matrix. Each element of the matrix must be non-negative and must not exceed $10^9$.

If there are multiple solutions, you may find any one of them.

### Constraints
- $1 \le T \le 400$
- $1 \le N, M \le 100$
- the sum of $N \cdot M$ over all test cases does not exceed $10^5$

### Example Input
```
2
3 3
4 2
```

### Example Output
```
9 1 0
1 0 2
7 5 8
2 2
3 0
1 1
0 1
```

### Explanation
**Example case 1:** The MEXs of the rows $\{9, 1, 0\}$, $\{1, 0, 2\}$ and $\{7, 5, 8\}$ are $2$, $3$ and $0$ respectively. The MEXs of the columns $\{9, 1, 7\}$, $\{1, 0, 5\}$ and $\{0, 2, 8\}$ are $0$, $2$ and $1$ respectively. Therefore, the multiset which contains the MEX of each row and each column is $S = \{0, 0, 1, 2, 2, 3\}$ and $\mathrm{MEX}(S) = 4$. We can show that this is the largest MEX that can be obtained for a $3 \times 3$ matrix.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>