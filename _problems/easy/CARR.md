---
{"category_name":"easy","problem_code":"CARR","problem_name":"Construct Array","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 \r\n2 2\r\n3 4","output":"4\r\n60","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kharyusuf","problem_tester":null,"date_added":"20-01-2020","tags":{"0":"dynamic","1":"easy","2":"kharyusuf","3":"ltime80","4":"matrix","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CARR","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CARR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME80/hindi/CARR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/CARR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/CARR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/CARR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/CARR.pdf) as well.

You are given two integers $N$ and $M$. Find the number of sequences $A_1, A_2, \ldots, A_N$, where each element is an integer between $1$ and $M$ (inclusive) and no three consecutive elements are equal. Since this number could be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing one integer ― the number of valid sequences modulo $10^9+7$.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N, M \le 10^{18}$

### Subtasks
**Subtask #1 (50 points):**
- $T \le 20$
- $N \le 10^5$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2 
2 2
3 4
```

### Example Output
```
4
60
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>