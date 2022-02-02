---
{"category_name":"medium","problem_code":"DAND","problem_name":"The Inexplicable Giant Floating Baby Head","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6\r\n1 9 3\r\n4 7 1\r\n10 75 12\r\n3 8 3\r\n5 10 2\r\n192 913893 3812","output":"4\r\n7\r\n64\r\n4\r\n8\r\n909312","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"20-12-2019","tags":{"0":"bitwise","1":"cook113","2":"kmaaszraa","3":"kmaaszraa","4":"observation"},"problem_difficulty_level":"Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/DAND","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/DAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/DAND.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/DAND.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/DAND.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/DAND.pdf) as well.

$$\textit{A Dr.D's Legacy Original}$$

Dr.D wishes to choose exactly $K$ distinct integers from a given interval $[L, R]$ in such a way that the bitwise AND of the chosen integers is maximum possible. Find this maximum value.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $L$, $R$ and $K$.

### Output
For each test case, print a single line containing one integer — the maximum value of the bitwise AND.

### Constraints 
- $1 \le T \le 10^6$
- $0 \le L \le R \le 10^{18}$
- $1 \le K \le R - L + 1$ 

### Example Input
```
6
1 9 3
4 7 1
10 75 12
3 8 3
5 10 2
192 913893 3812
```

### Example Output
```
4
7
64
4
8
909312
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>