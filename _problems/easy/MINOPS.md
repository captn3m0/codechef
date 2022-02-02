---
{"category_name":"easy","problem_code":"MINOPS","problem_name":"Simple Operations","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\nadefb\r\nbdefa","output":4,"explanation":"**Example case 1:** $S$ can be made equal to $R$ in two moves. First, we replace $S_1$ by $R_1$ and then replace $S_5$ by $R_5$. We have $k = l = 2$, so the cost is $2 \\cdot 2 = 4$. If we wanted to perform only one operation, the cost would be $5$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"6-04-2020","tags":{"0":"cook117","1":"rajarshi_basu","2":"rumblefool","3":"simple","4":"sorting"},"problem_difficulty_level":"Simple-Easy","best_tag":"Simple Easy","editorial_url":"https://discuss.codechef.com/problems/MINOPS","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINOPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/MINOPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/MINOPS.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/MINOPS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/MINOPS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/MINOPS.pdf) as well.

You are given two strings $S$ and $R$. Each of these strings has length $N$. We want to make $S$ equal to $R$ by performing the following operation some number of times (possibly zero):
- Choose two integers $a$ and $b$ such that $1 \le a \le b \le N$.
- For each $i$ such that $a \le i \le b$, replace the $i$-th character of $S$ by the $i$-th character of $R$.

Suppose that we make $S$ equal to $R$ by performing this operation $k$ times, in such a way that the total number of replaced characters (i.e. the sum of all $k$ values of $b-a+1$) is $l$. Then, the cost of this process is defined as $k \cdot l$.

Find the minimum cost with which we can make $S$ equal to $R$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $S$.
- The second line contains a single string $R$.

### Output
For each test case, print a single line containing one integer ― the minimum cost.

### Constraints
- $1 \le T \le 4,000$
- $1 \le N \le 10^6$
- $|S| = |R| = N$
- $S$ and $R$ contain only lowercase English letters
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
1
adefb
bdefa
```

### Example Output
```
4
```

### Explanation
**Example case 1:** $S$ can be made equal to $R$ in two moves. First, we replace $S_1$ by $R_1$ and then replace $S_5$ by $R_5$. We have $k = l = 2$, so the cost is $2 \cdot 2 = 4$. If we wanted to perform only one operation, the cost would be $5$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>