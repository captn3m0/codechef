---
{"category_name":"easy","problem_code":"FUZZYCON","problem_name":"Fuzzy Conversions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n1 1 1 2 2 2\n1 2 3 2 4 2","output":"0\n1","explanation":"**Example case 1:** The tuple $(1, 1, 1)$ can be converted to $(2, 2, 2)$ using only three Split operations, with cost $0$: $(1, 1, 1) \\rightarrow (2, 0, 2) \\rightarrow (1, 1, 3) \\rightarrow (2, 2, 2)$.\n\n**Example case 2:** We can use one addition operation and one Split operation: $(1, 2, 3) \\rightarrow (1, 3, 3) \\rightarrow (2, 4, 2)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hackslash_123","problem_tester":null,"date_added":"10-05-2019","tags":{"0":"bitwise","1":"hackslash_123","2":"ltime73","3":"observation","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Bitwise Operation","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FUZZYCON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/FUZZYCON.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/FUZZYCON.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/FUZZYCON.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/FUZZYCON.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/FUZZYCON.pdf) as well.

Raj is a math pro and number theory expert. One day, he met his age-old friend Chef. Chef claimed to be better at number theory than Raj, so Raj gave him some fuzzy problems to solve. In one of those problems, he gave Chef a $3$-tuple of non-negative integers $(a_0, b_0, c_0)$ and told Chef to convert it to another tuple $(x, y, z)$.

Chef may perform the following operations any number of times (including zero) on his current tuple $(a, b, c)$, in any order:
- Choose one element of this tuple, i.e. $a$, $b$ or $c$. Either add $1$ to that element or subtract $1$ from it. The cost of this operation is $1$.
- Merge: Change the tuple to $(a-1, b-1, c+1)$, $(a-1, b+1, c-1)$ or $(a+1, b-1, c-1)$, i.e. add $1$ to one element and subtract $1$ from the other two. The cost of this operation is $0$.
- Split: Change the tuple to $(a-1, b+1, c+1)$, $(a+1, b-1, c+1)$ or $(a+1, b+1, c-1)$, i.e. subtract $1$ from one element and add $1$ to the other two. The cost of this operation is also $0$.

After each operation, all elements of Chef's tuple must be non-negative. It is not allowed to perform an operation that would make one or more elements of this tuple negative.

Can you help Chef find the minimum cost of converting the tuple $(a_0, b_0, c_0)$ to the tuple $(x, y, z)$? It can be easily proved that it is always possible to convert any tuple of non-negative integers to any other.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $a_0$, $b_0$, $c_0$, $x$, $y$ and $z$.

### Output
For each test case, print a single line containing one integer ― the minimum cost.

### Constraints
- $1 \le T \le 10^5$
- $0 \le a_0, b_0, c_0, x, y, z \le 10^{18}$

### Subtasks
**Subtask #1 (20 points):** $0 \le a_0, b_0, c_0, x, y, z \le 100$

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
1 1 1 2 2 2
1 2 3 2 4 2
```

### Example Output
```
0
1
```

### Explanation
**Example case 1:** The tuple $(1, 1, 1)$ can be converted to $(2, 2, 2)$ using only three Split operations, with cost $0$: $(1, 1, 1) \rightarrow (2, 0, 2) \rightarrow (1, 1, 3) \rightarrow (2, 2, 2)$.

**Example case 2:** We can use one addition operation and one Split operation: $(1, 2, 3) \rightarrow (1, 3, 3) \rightarrow (2, 4, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>