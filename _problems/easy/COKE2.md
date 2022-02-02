---
{"category_name":"easy","problem_code":"COKE2","problem_name":"Chef Does Coke Yet Again","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 2 5 4 6\r\n1 6\r\n2 8\r\n8 10\r\n3 5 10 20 30\r\n21 20\r\n22 22\r\n23 23","output":"-1 8\r\n20 22 23 -1 -1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"30-08-2019","tags":{"0":"easy","1":"kingofnumbers","2":"lazy","3":"ltime75","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/COKE2","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COKE2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/COKE2.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/COKE2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/COKE2.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/COKE2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/COKE2.pdf) as well.

Chef went to the store in order to buy one can of coke. In the store, they offer $N$ cans of coke (numbered $1$ through $N$). For each valid $i$, the current temperature of the $i$-th can is $C_i$ and its price is $P_i$.

After buying a can of coke, Chef wants to immediately start walking home; when he arrives, he wants to immediately drink the whole can. It takes Chef $M$ minutes to get home from the store. However, Chef does not know the value of $M$ yet.

The ambient temperature outside is $K$. When a can of coke is outside, its temperature approaches the ambient temperature. Specifically, if its temperature is $t$ at some point in time:
- if $t \gt K+1$, then one minute later, its temperature will be $t-1$
- if $t \lt K-1$, then one minute later, its temperature will be $t+1$
- if $K-1 \le t \le K+1$, then one minute later, its temperature will be $K$

When Chef drinks coke from a can, he wants its temperature to be between $L$ and $R$ (inclusive). For each $i$ between $1$ and $Q$ inclusive, find the cheapest can for which this condition is satisfied when $M = i$ or determine that there is no such can.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains five space-separated integers $N$, $Q$, $K$, $L$ and $R$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $C_i$ and $P_i$.

### Output
For each test case, print a single line containing $Q$ space-seperated integers. For each valid $i$, the $i$-th of these integers should be the answer for $M = i$: the price of the can Chef should buy, or $-1$ if it is impossible to buy a can such that Chef's condition is satisfied.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N, Q \le 10^5$
- $|C_i| \le 10^5$ for each valid $i$
- $|K| \le 10^5$
- $-10^5 \le L \le R \le 10^5$
- $1 \le P_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $Q$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N, Q \le 1,000$
- $|C_i| \le 10^3$ for each valid $i$
- $|K| \le 10^3$
- $-10^3 \le L \le R \le 10^3$
- the sum of $N$ over all test cases does not exceed $10,000$
- the sum of $Q$ over all test cases does not exceed $10,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
3 2 5 4 6
1 6
2 8
8 10
3 5 10 20 30
21 20
22 22
23 23
```

### Example Output
```
-1 8
20 22 23 -1 -1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>