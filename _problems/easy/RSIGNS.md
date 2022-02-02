---
{"category_name":"easy","problem_code":"RSIGNS","problem_name":"Road Signs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n1","output":10,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"daniel_1999","problem_tester":null,"date_added":"21-04-2019","tags":{"0":"daniel_1999","1":"june19","2":"junechallenge"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RSIGNS","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RSIGNS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/RSIGNS.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/RSIGNS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/RSIGNS.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/RSIGNS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/RSIGNS.pdf) as well.

On her way to ChefLand, Marichka noticed $10^K$ road signs (numbered $0$ through $10^K - 1$). For each valid $i$, the sign with number $i$ had the integer $i$ written on one side and $10^K-i-1$ written on the other side.

Now, Marichka is wondering — how many road signs have exactly two distinct decimal digits written on them (on both sides in total)? Since this number may be large, compute it modulo $10^9+7$.

For example, if $K = 3$, the two integers written on the road sign $363$ are $363$ and $636$, and they contain two distinct digits $3$ and $6$, but on the road sign $362$, there are integers $362$ and $637$, which contain four distinct digits — $2$, $3$, $6$ and $7$. On the road sign $11$, there are integers $11$ and $988$, which contain three distinct digits — $1$, $9$ and $8$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $K$.

### Output
For each test case, print a single line containing one integer — the number of road signs with exactly two digits, modulo $10^9+7$.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le K \le 10^9$

### Subtasks
**Subtask #1 (20 points):** $1 \le T, K \le 5$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
1
```

### Example Output
```
10
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>