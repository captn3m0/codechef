---
{"category_name":"easy","problem_code":"TOTCRT","problem_name":"Total Correct Submissions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n1\nA 1\nB 2\nC 3\n2\nAA 1\nAB 1\nAB 1\nAC 1\nAC 1\nAD 1\n1\nZ 100\nZ 100\nZ 100","output":"1 2 3\n1 1 2 2\n300","explanation":"**Example case 1:** There is only $1$ problem in each division and no problems are shared among divisions, so the total number of distinct problems is $3$ and the numbers of solutions are: $1$ for \u0022A\u0022, $2$ for \u0022B\u0022, $3$ for \u0022C\u0022.\n\n**Example case 2:** There are $2$ problems in each division and each pair of consecutive divisions shares $1$ problem, so the total number of distinct problems is $4$ and the numbers of solutions are: $1$ for \u0022AA\u0022, $2$ for \u0022AB\u0022, $2$ for \u0022AC\u0022, $1$ for \u0022AD\u0022. We need to sort them in non-decreasing order, so the final answer is $(1, 1, 2, 2)$.\n\n**Example case 3:** There is only $1$ problem \u0022Z\u0022 in the entire contest, shared among all divisions, and the number of solutions for it is $300$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/jwnqk6Vb3Bw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"iscsi","date_added":"9-03-2021","tags":{"0":"daanish_adm","1":"map","2":"simple","3":"sorting","4":"start5","5":"vichitr"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TOTCRT","time":{"view_start_date":1624800600,"submit_start_date":1624800600,"visible_start_date":1624800600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TOTCRT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin Chinese](https://www.codechef.com/download/translated/START5/mandarin/TOTCRT.pdf), [Russian](https://www.codechef.com/download/translated/START5/russian/TOTCRT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START5/vietnamese/TOTCRT.pdf) as well.

Codechef challenges have three divisions. In one challenge, there are $N$ problems in each division, but some problems may be shared among multiple divisions. Each problem is uniquely identified by a *code* — a string containing only uppercase English letters. Each participant can only submit in one of the divisions.

Chef wants to find the number of correct solutions, in total among all $3$ divisions, for each problem. Given a list of $N$ problem codes with the numbers of correct solutions for each problem in each division, find the total number of correct solutions for each problem and sort them in non-decreasing order.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a string $S_{3,i}$ followed by a space and an integer $C_{3,i}$ — the problem code and the number of correct solutions on the $i$-th problem in the third division.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains a string $S_{2,i}$ followed by a space and an integer $C_{2,i}$ — the problem code and the number of correct solutions on the $i$-th problem in the second division.
- Finally, $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains a string $S_{1,i}$ followed by a space and an integer $C_{1,i}$ — the problem code and the number of correct solutions on the $i$-th problem in the first division.

### Output
For each test case, let $P$ be the number of distinct problems; you should print $P$ space-separated integers — the number of solutions for each of these problems, sorted in non-decreasing order.

### Constraints
- $1 \leq T \leq 10$
- $1 \leq N \leq 2 \cdot 10^4$
- $1 \leq |S_{1,i}|, |S_{2,i}|, |S_{3,i}| \leq 8$ for each valid $i$
- $S_{1,i}, S_{2,i}, S_{3,i}$ contain only uppercase English letters for each valid $i$
- $1 \leq C_{1,i}, C_{2,i}, C_{3,i} \leq 5 \cdot 10^8$ for each valid $i$
- the problem codes in each division are pairwise distinct, but some problem codes may appear in multiple divisions
- the sum of $N$ over all test cases does not exceed $10^5$

### Example Input
```
3
1
A 1
B 2
C 3
2
AA 1
AB 1
AB 1
AC 1
AC 1
AD 1
1
Z 100
Z 100
Z 100
```

### Example Output
```
1 2 3
1 1 2 2
300
```

### Explanation
**Example case 1:** There is only $1$ problem in each division and no problems are shared among divisions, so the total number of distinct problems is $3$ and the numbers of solutions are: $1$ for "A", $2$ for "B", $3$ for "C".

**Example case 2:** There are $2$ problems in each division and each pair of consecutive divisions shares $1$ problem, so the total number of distinct problems is $4$ and the numbers of solutions are: $1$ for "AA", $2$ for "AB", $2$ for "AC", $1$ for "AD". We need to sort them in non-decreasing order, so the final answer is $(1, 1, 2, 2)$.

**Example case 3:** There is only $1$ problem "Z" in the entire contest, shared among all divisions, and the number of solutions for it is $300$. 

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>