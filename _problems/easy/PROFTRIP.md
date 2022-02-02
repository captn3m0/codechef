---
{"category_name":"easy","problem_code":"PROFTRIP","problem_name":"Professor on a Trip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4 3\n1 2 3\n2 3 1\n2 4 7\n3 6 2 2\n1 4","output":28,"explanation":"**Example case 1:** The Professor can buy $10$ litres of petrol in state $1$, travel to state $2$ and then to state $4$. This way, he spends $30$ units of money. However, the optimal solution is to buy $4$ litres of petrol in state $1$, travel to state $2$, then to state $3$, buy $8$ litres of petrol in state $3$ and then travel to state $4$, since this costs only $28$ units of money.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"24-07-2019","tags":{"0":"dynamic","1":"erfaniaa","2":"floyd","3":"ltime74","4":"shortest"},"problem_difficulty_level":"Easy","best_tag":"Shortest Path","editorial_url":"https://discuss.codechef.com/problems/PROFTRIP","time":{"view_start_date":1564246800,"submit_start_date":1564246800,"visible_start_date":1564246800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PROFTRIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME74/hindi/PROFTRIP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME74/bengali/PROFTRIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME74/mandarin/PROFTRIP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME74/russian/PROFTRIP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME74/vietnamese/PROFTRIP.pdf) as well.

The Professor is going on a trip with his family this weekend. The country where they live is a federation of $N$ states (numbered $1$ through $N$) with $R$ bidirectional interstate roads connecting them. For each road, we know the amount of fuel the Professor needs to traverse it; travelling within a state consumes no fuel. For each $i$, the price of fuel in state $i$ is fixed at $F_i$ units of money per litre.

Despite Professor's outstanding talent and his great scientific prowess, he has some bad habits as well: he is too penny-wise, so he carries huge barrels in his car in order to store extra petrol and avoid buying petrol in expensive states. Therefore, he is able to carry any amount of fuel he wants at any moment during the trip, and he is also fine with visiting the same state more than once on the trip if it saves him money. The Professor starts the trip without any fuel.

Help the Professor find the minimum possible amount of money he should spend on fuel in order to travel from state $P$ to state $Q$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $R$.
- Each of the next $R$ lines contains three space-separated integers $u$, $v$ and $w$ denoting that states $u$ and $v$ are connected by a road and it takes $w$ litres of fuel to traverse that road.
- The next line contains $N$ space-separated integers $F_1, F_2, \ldots, F_N$.
- The next line contains two space-separated integers $P$ and $Q$.

### Output
For each test case, print a single line containing one integer ― the minimum amount of money the Professor has to spend.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 300$
- $1 \le R \le N \cdot (N - 1) / 2$
- $1 \le u, v, P, Q \le N$
- each road connects two different states
- no two roads connect the same pair of states
- $1 \le w \le 10^6$
- $1 \le F_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):** $N \le 50$

**Subtask #2 (60 points):** original constraints

### Example Input
```
1
4 3
1 2 3
2 3 1
2 4 7
3 6 2 2
1 4
```

### Example Output
```
28
```
	
### Explanation
**Example case 1:** The Professor can buy $10$ litres of petrol in state $1$, travel to state $2$ and then to state $4$. This way, he spends $30$ units of money. However, the optimal solution is to buy $4$ litres of petrol in state $1$, travel to state $2$, then to state $3$, buy $8$ litres of petrol in state $3$ and then travel to state $4$, since this costs only $28$ units of money.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>