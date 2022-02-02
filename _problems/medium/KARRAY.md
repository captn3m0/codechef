---
{"category_name":"medium","problem_code":"KARRAY","problem_name":"The Gifting Problem","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 1\r\n3 2 5 7","output":"33 32 19 18","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"smartnj","problem_tester":null,"date_added":"4-04-2020","tags":{"0":"cook117","1":"fast","2":"medium","3":"rajarshi_basu","4":"smartnj","5":"xor"},"problem_difficulty_level":"Medium-Hard","best_tag":"Fast Walsh Hadamard Transform","editorial_url":"https://discuss.codechef.com/problems/KARRAY","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KARRAY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/KARRAY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/KARRAY.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/KARRAY.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/KARRAY.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/KARRAY.pdf) as well.

Consider $N$ families (numbered $0$ through $N-1$). Each year, each family gives gifts to all other families based on the gifts they received in the previous year. Let's say that in some year, family $i$ received gifts with value $a_i$ (from all families in total). Then, for each valid $j$, the value of the gifts given by family $i$ to family $j$ in the next year is $G(i, j) \cdot a_i$, where $G(i, j) = 2 \cdot (i \vee j) - (i+j)$; note that $\vee$ denotes bitwise OR.

For each valid $i$, you are given the total value of gifts received by family $i$ in the year $0$. Find the total values of gifts received by each family in the year $K$. Since these values can be very large, compute them modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $a_0, a_1, \ldots, a_{N-1}$. For each valid $i$, $a_i$ denotes the total value of gifts received by family $i$ in the year $0$.

### Output
For each test case, print a single line containing $N$ integers. For each $i$ ($0 \le i \lt N$), the $i+1$-th of these integers should be the total value of gifts received by family $i$ in the year $K$, modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 2^{18}$
- $N$ is a power of $2$
- $0 \le K \le 100,000$
- $0 \le a_i \lt 10^9+7$ for each valid $i$

### Example Input
```
1
4 1
3 2 5 7
```

### Example Output
```
33 32 19 18
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>