---
{"category_name":"medium","problem_code":"WEIRDMUL","problem_name":"Weird Product","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n3 1\r\n2 1 1\r\n1 7\r\n1\r\n5 998244351\r\n5 5 5 5 5\r\n10 69\r\n2 0 1 6 3 3 1 0 5 1","output":"2304\r\n1\r\n253808779\r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"1-06-2020","tags":{"0":"divide","1":"july20","2":"medium","3":"polynomial","4":"rajarshi_basu","5":"sjshohag"},"problem_difficulty_level":"Medium-Hard","best_tag":"Divide And Conquer","editorial_url":"https://discuss.codechef.com/problems/WEIRDMUL","time":{"view_start_date":1594632600,"submit_start_date":1594632600,"visible_start_date":1594632600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WEIRDMUL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY20/hindi/WEIRDMUL.pdf), [Bengali](https://www.codechef.com/download/translated/JULY20/bengali/WEIRDMUL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY20/mandarin/WEIRDMUL.pdf), [Russian](https://www.codechef.com/download/translated/JULY20/russian/WEIRDMUL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY20/vietnamese/WEIRDMUL.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$ and an integer $X$. The *weirdness* of a contiguous subsequence $A_l, A_{l+1}, \ldots, A_r$ is defined as $W(l, r) = \sum_{i=l}^r A_i \cdot X^{i-l}$. Find $P = \prod_{i=1}^N \prod_{j=i}^N W(i, j)^2$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer $P$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $0 \lt X \lt 998,244,353$
- $0 \le A_i \lt 998,244,353$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (15 points):** $A_1 = A_2 = \ldots = A_N$

**Subtask #2 (85 points):** original constraints

### Example Input
```
4
3 1
2 1 1
1 7
1
5 998244351
5 5 5 5 5
10 69
2 0 1 6 3 3 1 0 5 1
```

### Example Output
```
2304
1
253808779
0
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>