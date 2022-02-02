---
{"category_name":"easy","problem_code":"BANQUNT","problem_name":"Banned Quotient","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 2\r\n10 2\r\n100 3","output":"4 1\r\n6 12\r\n76 49152","explanation":"**Example case 1:** The only subset $S$ with the maximum size which Chef can choose is $\\{1, 3, 4, 5\\}$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"nirjhor","problem_tester":null,"date_added":"15-06-2020","tags":{"0":"cook119","1":"easy","2":"nirjhor","3":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BANQUNT","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BANQUNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/BANQUNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/BANQUNT.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/BANQUNT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/BANQUNT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/BANQUNT.pdf) as well.

Chef wants to select a subset $S$ of the set $\{1, 2, \ldots, N\}$ such that there are no two integers $x, y \in S$ which satisfy $\frac{x}{y} = M$.

Help Chef find the maximum size of a subset $S$ he can choose and the number of ways in which he can choose a subset $S$ with this maximum size. Since the number of ways to choose $S$ can be very large, calculate it modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing two space-separated integers ― the maximum size of a subset Chef can choose and the number of ways to choose a subset with this maximum size modulo $998,244,353$. Note that only the number of ways to choose a subset should be printed modulo $998,244,353$.

### Constraints
- $1 \le T \le 10,000$
- $2 \le M \le N \le 10^{18}$

### Example Input
```
3
5 2
10 2
100 3
```

### Example Output
```
4 1
6 12
76 49152
```

### Explanation
**Example case 1:** The only subset $S$ with the maximum size which Chef can choose is $\{1, 3, 4, 5\}$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>