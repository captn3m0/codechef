---
{"category_name":"easy","problem_code":"SLUSH","problem_name":"Drink Slush","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n5 3\n1 2 3\n2 6 3\n2 10 7\n2 50 3\n1 10 5\n1 7 4","output":"33\n2 2 3 1 3","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"19-06-2019","tags":{"0":"cook","1":"cook107","2":"kingofnumbers"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SLUSH","time":{"view_start_date":1561314600,"submit_start_date":1561314600,"visible_start_date":1561314600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SLUSH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK107/hindi/SLUSH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK107/mandarin/SLUSH.pdf), [Russian](https://www.codechef.com/download/translated/COOK107/russian/SLUSH.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK107/vietnamese/SLUSH.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK107/bengali/SLUSH.pdf) as well.

Chef is operating a slush machine. The machine produces slush drinks with $M$ flavors (numbered $1$ through $M$); for each valid $i$, the maximum number of drinks with flavour $i$ the machine can produce is $C_i$.

Chef expects $N$ customers to come buy slush drinks today. The customers are numbered $1$ through $N$ in the order in which they buy the drinks. For each valid $i$, the favorite flavour of the $i$-th customer is $D_i$ and this customer is willing to pay $F_i$ units of money for a drink with this flavour, or $B_i$ units of money for a drink with any other flavuor. Whenever a customer wants to buy a drink:
- if it is possible to sell this customer a drink with their favourite flavour, Chef must sell them a drink with this flavour
- otherwise, Chef must sell this customer a drink, but he may choose its flavour

Chef wants to make the maximum possible profit. He is asking you to help him decide the flavours of the drinks he should sell to the customers in order to maximise the profit.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $M$ space-separated integers $C_1, C_2, \ldots, C_M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $D_i$, $F_i$ and $B_i$.

### Output
For each test case, print two lines:
- The first of these lines should contain a single integer — the maximum profit.
- The second line should contain $N$ space-separated integers denoting the flavours of the drinks Chef should sell, in this order.

If there are multiple solutions, you may find any one.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N, M \le 10^5$
- $1 \le D_i \le M$ for each valid $i$
- $1 \le C_i \le N$ for each valid $i$
- $1 \le B_i \lt F_i \le 10^9$ for each valid $i$
- $C_1+C_2+\ldots+C_M \ge N$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Example Input
```
1
5 3
1 2 3
2 6 3
2 10 7
2 50 3
1 10 5
1 7 4
```

### Example Output
```
33
2 2 3 1 3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>