---
{"category_name":"easy","problem_code":"CHFRAN","problem_name":"Chefina and Ranges","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n1 4\r\n2 6\r\n5 7\r\n2\r\n1 4\r\n4 6\r\n2\r\n3 7\r\n8 9","output":"1\r\n-1\r\n0","explanation":"**Example case 1:** It is enough to delete the range $[2, 6]$.\r\n\r\n**Example case 2:** There is no way to divide these two ranges into two suitable non-empty subsets and deleting any range obviously makes it impossible too.\r\n\r\n**Example case 3:** There is no need to delete any ranges, we can just put one range into one subset and the other range into the other subset.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"28-04-2019","tags":{"0":"dec19","1":"easy","2":"greedy","3":"melfice","4":"partition","5":"rishup_nitdgp"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFRAN","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFRAN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/CHFRAN.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/CHFRAN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/CHFRAN.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/CHFRAN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/CHFRAN.pdf) as well.

Chefina is playing with ranges. There are $N$ ranges $[l_1, r_1], [l_2, r_2], \ldots, [l_N, r_N]$. Chefina wants to divide the ranges into two non-empty subsets in such a way that each range is in exactly one subset and whenever two ranges have a common point, they are in the same subset.

Since this could be difficult to achieve, Chefina can delete any number of ranges (possibly zero) and then divide the remaining ranges into such non-empty subsets. She wants to know whether it is possible to achieve her task after deleting some ranges and if it is possible, she also wants to know the minimum number of ranges she needs to delete to achieve it.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.  
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
For each test case, print a single line containing one integer ― the minimum number of ranges to delete, or $-1$ if it is impossible to delete some ranges and divide the remaining ranges into two non-empty subsets.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le l_i \le r_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N = 16$

**Subtask #2 (15 points):** $N = 1,000$

**Subtask #3 (15 points):** $r_i \le 10^6$ for each valid $i$

**Subtask #4 (60 points):** original constraints

### Example Input
```
3
3
1 4
2 6
5 7
2
1 4
4 6
2
3 7
8 9
```

### Example Output
```
1
-1
0
```

### Explanation
**Example case 1:** It is enough to delete the range $[2, 6]$.

**Example case 2:** There is no way to divide these two ranges into two suitable non-empty subsets and deleting any range obviously makes it impossible too.

**Example case 3:** There is no need to delete any ranges, we can just put one range into one subset and the other range into the other subset.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>