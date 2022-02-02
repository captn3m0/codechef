---
{"category_name":"easy","problem_code":"DECREM","problem_name":"Decreasing Srrnmieeda","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 6\r\n1 2","output":"6\r\n-1","explanation":"**Example case 1:** $N = 6$ satisfies the given condition, since $6 \\,\\%\\, 4 \\,(= 2) \\gt 6 \\,\\%\\, 5 \\,(= 1) \\gt 6 \\,\\%\\, 6 \\,(= 0)$. Notice that $N = 7$ also satisfies the condition, but it is larger.\r\n\r\n**Example case 2:** It is impossible to find a valid solution because for any non-negative integer $N$, we have $N \\,\\%\\, 1 \\,(= 0) \\le N \\,\\%\\, 2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Q_UX3Yrw-Bs","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"5-10-2020","tags":{"0":"cook123","1":"easy","2":"pigeonhole","3":"psychik","4":"sjshohag","5":"sjshohag"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DECREM","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DECREM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/DECREM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/DECREM.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/DECREM.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/DECREM.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/DECREM.pdf) as well.

You are given two integers $L$ and $R$. Find the smallest non-negative integer $N$ such that
$$N \,\%\, L \gt N \,\%\, (L + 1) \gt \ldots \gt N \,\%\, (R - 1) \gt N \,\%\, R \,.$$

Here, $\%$ is the modulo operator, so $A \,\%\, B$ is the remainder of $A$ after division by $B$. For example, $11 \,\%\, 3 = 2$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer ― the smallest possible $N$, or $-1$ if no solution exists.

It is guaranteed that when a solution exists, the smallest solution does not exceed $10^{18}$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le L \lt R \le 10^6$

### Example Input
```
2
4 6
1 2
```
### Example Output
```
6
-1
```

### Explanation
**Example case 1:** $N = 6$ satisfies the given condition, since $6 \,\%\, 4 \,(= 2) \gt 6 \,\%\, 5 \,(= 1) \gt 6 \,\%\, 6 \,(= 0)$. Notice that $N = 7$ also satisfies the condition, but it is larger.

**Example case 2:** It is impossible to find a valid solution because for any non-negative integer $N$, we have $N \,\%\, 1 \,(= 0) \le N \,\%\, 2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>