---
{"category_name":"medium","problem_code":"STROPERS","problem_name":"String Operations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"10\r\n00000\r\n10001\r\n10101\r\n01111\r\n11001\r\n01101\r\n10110\r\n10010\r\n10111\r\n11001","output":"5\r\n11\r\n8\r\n9\r\n12\r\n10\r\n10\r\n11\r\n11\r\n12","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/kAYlIjvFTws","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"30-11-2020","tags":{"0":"dec20","1":"ildar_adm","2":"medium","3":"observation"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/STROPERS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STROPERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/STROPERS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/STROPERS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/STROPERS.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/STROPERS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/STROPERS.pdf) as well.

Two strings $A$ and $B$ are *equivalent* (denoted by $A \sim B$) if they have the same lengths and $A$ can be transformed into $B$ by performing the following operation zero or more times: choose a substring of $A$ which contains '1' an even number of times and reverse this substring.

You are given a binary string $S$. Find the number of different equivalence classes of the substrings of this string. In other words, find the smallest possible size of a set $\mathcal{C}$ of binary strings with the following property: for each non-empty string $R$ which is a substring of $S$ (including $S$ itself), there is a string $X \in \mathcal{C}$ such that $R \sim X$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the number of equivalence classes among the substrings of the given string.

### Constraints 
- $1 \le T \le 10$
- $1 \le N \le 1,000$
- $S$ contains only characters '0' and '1'

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (90 points):** original constraints

### Example Input
```
10
00000
10001
10101
01111
11001
01101
10110
10010
10111
11001
```

### Example Output
```
5
11
8
9
12
10
10
11
11
12
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>