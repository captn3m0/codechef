---
{"category_name":"hard","problem_code":"PALINDEQ","problem_name":"Palindromic Equivalence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\naaa\r\naba","output":"8\r\n5","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/kA7z6bscsmA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"30-11-2020","tags":{"0":"combinatorics","1":"dec20","2":"dynamic","3":"hard","4":"ildar_adm","5":"taran_1407"},"problem_difficulty_level":"Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PALINDEQ","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PALINDEQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC20/hindi/PALINDEQ.pdf), [Bengali](https://www.codechef.com/download/translated/DEC20/bengali/PALINDEQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC20/mandarin/PALINDEQ.pdf), [Russian](https://www.codechef.com/download/translated/DEC20/russian/PALINDEQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC20/vietnamese/PALINDEQ.pdf) as well.

For two strings $A$ and $B$ with the same length $N$, we will say that they are *equivalent* if the following rule holds: For each pair of integers $l$ and $r$ ($1 \le l \le r \le N$), the substring of $A$ between the $l$-th and $r$-th character (inclusive) is a palindrome if and only if the substring of $B$ between the $l$-th and $r$-th character (inclusive) is a palindrome.

You are given a string $S$ with length $N$. Find the number of sets $P \subset \{1, 2, \ldots, N\}$ such that there is a character $c$ and a string $X$ which is equivalent to $S$ and satisfies $X_p = c$ for each $p \in P$. Since the answer may be large, compute it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the number of subsets of characters that can be equal to each other in some string equivalent to $S$, modulo $998,244,353$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 2,000$
- $S$ contains only lowercase Latin letters

### Subtasks
**Subtask #1 (10 points):** $N \le 10$

**Subtask #2 (90 points):** $T \le 10$

### Example Input
```
2
aaa
aba
```

### Example Output
```
8
5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>