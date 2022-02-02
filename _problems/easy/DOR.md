---
{"category_name":"easy","problem_code":"DOR","problem_name":"D-Or","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\n1 3\n4 5\n1031 93714\n1000000000123 1000000123456","output":"3\n5\n131071\n1000000192511","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"18-10-2019","tags":{"0":"bitwise","1":"cook111","2":"easy","3":"greedy","4":"kmaaszraa","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/DOR","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/DOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/DOR.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/DOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/DOR.pdf) as well.

Dr.D got so famous thanks to his first problem that he decided to commemorate it by making yet another problem with an almost identical statement — he only changed one word.

We want to choose exactly two integers (not necessarily distinct) from the interval $[L, R]$. Find the maximum possible value of the bitwise OR of the chosen integers.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$, $R$.

### Output
- For each test case, print a single line containing one integer — the maximum bitwise OR.

### Constraints
- $1 \le T \le 10^5$
- $0 \le L \le R \le 10^{18}$

### Example Input
```
4
1 3
4 5
1031 93714
1000000000123 1000000123456
```

### Example Output
```
3
5
131071
1000000192511
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>