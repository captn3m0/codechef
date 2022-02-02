---
{"category_name":"easy","problem_code":"INVYCNT","problem_name":"Counting Inversions Revisited","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3 3\n2 1 3\n4 100\n99 2 1000 24","output":"12\n30000","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"25-10-2019","tags":{"0":"jafarbadour","1":"jafarbadour","2":"ltime77"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INVYCNT","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVYCNT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/INVYCNT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/INVYCNT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/INVYCNT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/INVYCNT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/INVYCNT.pdf) as well.

Almir had a small sequence $A_1, A_2, \ldots, A_N$. He decided to make $K$ copies of this sequence and concatenate them, forming a sequence $X_1, X_2, \ldots, X_{NK}$; for each valid $i$ and $j$ ($0 \le j \lt K$), $X_{j \cdot N + i} = A_i$.

For example, if $A = (1, 2, 3)$ and $K = 4$, the final sequence is $X = (1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3)$.

A pair $(i, j)$, where $1 \le i \lt j \le N$, is an inversion if $X_i \gt X_j$. Find the number of inversions in the final sequence $X$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of inversions in the sequence $X$.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 100$
- $1 \le K \le 10^6$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
3 3
2 1 3
4 100
99 2 1000 24
```

### Example Output
```
12
30000
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>