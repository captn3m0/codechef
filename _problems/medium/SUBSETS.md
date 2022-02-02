---
{"category_name":"medium","problem_code":"SUBSETS","problem_name":"Nice Subsets","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\n3\n1 2 3\n1\n8\n5\n5 1 4 2 3\n2\n81 3","output":"8\n2\n24\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"13-06-2019","tags":{"0":"cook","1":"cook107","2":"erfaniaa"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SUBSETS","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBSETS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/SUBSETS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/SUBSETS.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/SUBSETS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/SUBSETS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/SUBSETS.pdf) as well.

A *good number* is a positive integer which is not divisible by the cube (third power) of any prime. For example, $2$, $3$, $25 = 5 \cdot 5$, $63 = 7 \cdot 9$ and $2057 = 11 \cdot 11 \cdot 17$ are good numbers, but $8 = 2 \cdot 2 \cdot 2$, $9317 = 7 \cdot 11 \cdot 11 \cdot 11$ and $2401 = 7 \cdot 7 \cdot 7 \cdot 7$ are not good numbers.

A pair of positive integers $(x, y)$ is *special* if $x \cdot y$ is a good number. A set of positive integers is *nice* if each pair of different integers from this set is special. In particular, the empty set is nice.

You are given a set of integers $\{A_1, A_2, \ldots, A_N\}$. Find the number of nice subsets of this set.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the number of nice subsets.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 40$
- $1 \le A_i \le 10^8$ for each valid $i$
- $A_1, A_2, \ldots, A_N$ are pairwise distinct

### Example Input
```
4
3
1 2 3
1
8
5
5 1 4 2 3
2
81 3
```

### Example Output
```
8
2
24
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>