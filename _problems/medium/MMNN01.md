---
{"category_name":"medium","problem_code":"MMNN01","problem_name":"Expected Number of Customers ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 2\r\n5 6","output":"875000009\r\n948302478","explanation":"**Example case 1:**\r\nFor the following sequences of flavours, the cake can be divided into:\r\n- 2 segments: $(1,2,1,2),(1,2,2,1),(2,1,1,2),(2,1,2,1)$\r\n- 3 segments: $(1,1,1,2),(1,1,2,1),(1,1,2,2),(1,2,1,1),(1,2,2,2),(2,1,1,1),(2,1,2,2),(2,2,1,1),(2,2,1,2),(2,2,2,1)$\r\n- 4 segments: $(1,1,1,1),(2,2,2,2)$\r\n\r\nThe expected value of the number of segments is $(2 \\cdot 4 + 3 \\cdot 10 + 4 \\cdot 2) / 16 = 23/8$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"mamnoonsiam","problem_tester":null,"date_added":"16-10-2019","tags":{"0":"cook112","1":"fast","2":"generating","3":"mamnoonsiam","4":"medium","5":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/MMNN01","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MMNN01","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/MMNN01.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/MMNN01.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/MMNN01.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/MMNN01.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/MMNN01.pdf) as well.

A cake consists of $N$ pieces arranged in a row. Each piece has one of $M$ distinct flavours (numbered $1$ through $M$) which are available in Chef's kitchen. For each valid $i$, the cost of the $i$-th flavour is $i$ rupees.

When Chef bakes a cake, he chooses the flavour of each piece independently and uniformly randomly from these $M$ flavours. After baking the cake, he splits it into several contiguous segments (each piece must belong to exactly one segment) and sells each segment to a different customer.

The price of a segment is the sum of costs of all distinct flavours of the pieces in that segment. For example, the cost of a segment with flavours $(1, 2, 1, 5)$ is $1+2+5=8$. Chef's profit is the sum of prices of all segments. Chef is very greedy, so he wants to maximise his profit, but he is also a perfectionist, so he wants to split the cake into the minimum number of segments such that his profit is still the largest possible.

Chef is wondering about the number of customers he would be able to serve. Help him find the expected value of the number of segments he would split a cake into.

It can be proved that this expected value can be expressed as a fraction $p/q$, where $p$ and $q$ are positive integers and $q$ is coprime to $10^9+7$. You should find $p \cdot q^{-1}$ modulo $10^9+7$, where $q^{-1}$ denotes the multiplicative inverse of $q$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $M$.

### Output
For each test case, print a single line containing one integer $p \cdot q^{-1}$ modulo $10^9+7$.

### Constraints
- $1 \le T \le 2 \cdot 10^5$
- $1 \le N \le 2 \cdot 10^5$
- $1 \le M \le 10^9$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
2
4 2
5 6
```

### Example Output
```
875000009
948302478
```

### Explanation
**Example case 1:**
For the following sequences of flavours, the cake can be divided into:
- 2 segments: $(1,2,1,2),(1,2,2,1),(2,1,1,2),(2,1,2,1)$
- 3 segments: $(1,1,1,2),(1,1,2,1),(1,1,2,2),(1,2,1,1),(1,2,2,2),(2,1,1,1),(2,1,2,2),(2,2,1,1),(2,2,1,2),(2,2,2,1)$
- 4 segments: $(1,1,1,1),(2,2,2,2)$

The expected value of the number of segments is $(2 \cdot 4 + 3 \cdot 10 + 4 \cdot 2) / 16 = 23/8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>