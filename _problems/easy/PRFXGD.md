---
{"category_name":"easy","problem_code":"PRFXGD","problem_name":"Good Prefix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nabcdefagahai\r\n0 1\r\nabcdefagahai\r\n1 1\r\nabcdefagahai\r\n2 1","output":"6\r\n7\r\n8","explanation":"**Example case 1:** Chef cannot delete any characters and each character may occur only once in a good prefix, so there are only six good prefixes.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"phoenix71","problem_tester":null,"date_added":"24-03-2020","tags":{"0":"greedy","1":"ltime82","2":"phoenix71","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PRFXGD","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRFXGD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/PRFXGD.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/PRFXGD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/PRFXGD.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/PRFXGD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/PRFXGD.pdf) as well.

Chef got a string $S$ with length $N$ as his birthday gift. A prefix of this string is *good* if each character occurs in it at most $X$ times.

Chef can delete at most $K$ characters from this string. He wants to maximise the number of good prefixes in the resulting string. Can you help him?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$.
- The second line contains two space-separated integers $K$ and $X$.

### Output
For each test case, print a single line containing one integer ― the maximum number of good prefixes.

### Constraints
- $1 \le T \le 100$
- $1 \le N, X \le 10,000$
- $|S| = N$
- $0 \le K \le 10,000$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (50 points):** $K = 0$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
abcdefagahai
0 1
abcdefagahai
1 1
abcdefagahai
2 1
```

### Example Output
```
6
7
8
```

### Explanation
**Example case 1:** Chef cannot delete any characters and each character may occur only once in a good prefix, so there are only six good prefixes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>