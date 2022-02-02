---
{"category_name":"easy","problem_code":"SUBSPLAY","problem_name":"Easy Subsequence Selection","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4\r\nanxa","output":1,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bhavyarustgi10","problem_tester":null,"date_added":"2-10-2019","tags":{"0":"bhavyarustgi10","1":"dec19","2":"melfice","3":"simple","4":"strings","5":"subsequence"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SUBSPLAY","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUBSPLAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/SUBSPLAY.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/SUBSPLAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/SUBSPLAY.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/SUBSPLAY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/SUBSPLAY.pdf) as well.

Chef has always been fond of girls, but he could not make any girl his friend. In order to finally make one, he was asked to solve the following problem:

You are given a string $S$ with length $N$. Choose an integer $K$ and two non-empty subsequences $A$ and $B$ of characters of this string, each with length $K$, such that:
- $A = B$, i.e. for each valid $i$, the $i$-th character in $A$ is the same as the $i$-th character in $B$.
- Let's denote the indices of characters used to construct $A$ by $a_1, a_2, \ldots, a_K$, i.e. $A = (S_{a_1}, S_{a_2}, \ldots, S_{a_K})$. Similarly, let's denote the indices of characters used to construct $B$ by $b_1, b_2, \ldots, b_K$.
- If we denote the number of common indices in the sequences $a$ and $b$ by $M$, then $M+1 \le K$.

Since Chef is busy right now, he asks you to find the maximum value of $K$ such that it is possible to find sequences $A$ and $B$ which satisfy the given conditions or determine that there is no such $K$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the maximum $K$, or $0$ if there is no solution.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (20 points):** $N \le 8$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
4
anxa
```

### Example Output
```
1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>