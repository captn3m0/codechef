---
{"category_name":"easy","problem_code":"PERCAPTA","problem_name":"Per Capita Income","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n10 1 2\r\n5 1 1 \r\n1 2\r\n2 3\r\n1 3","output":"2\r\n1 3","explanation":"If the king chooses provinces $1$ and $3$, then the per-capita income is $\\frac{10 + 2}{5 + 1} = 2$. This is the only optimal solution.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rezwanarefin01","problem_tester":null,"date_added":"13-06-2020","tags":{"0":"cook119","1":"disjoint","2":"easy","3":"math","4":"rezwanarefin01","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Disjoint Set Union","editorial_url":"https://discuss.codechef.com/problems/PERCAPTA","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PERCAPTA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/PERCAPTA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/PERCAPTA.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/PERCAPTA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/PERCAPTA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/PERCAPTA.pdf) as well.

Chefland consists of $N$ provinces (numbered $1$ through $N$) connected by $M$ bidirectional roads (numbered $1$ through $M$). For each valid $i$, the $i$-th road connects provinces $U_i$ and $V_i$. It is possible to travel from each province to any other province using these roads.

For each valid $i$, the annual income of the $i$-th province is $A_i$ and its population is $B_i$. The per-capita income of some provinces is lower than that of some other provinces. For this reason, the king of Chefland wants to choose one or more provinces to keep in his kingdom and abandon the rest, in such a way that the per-capita income of the whole resulting kingdom, i.e. the sum of annual incomes of the chosen provinces divided by the sum of their populations, would be maximum possible. However, it should also be possible to travel from each of the chosen provinces to any other chosen province without visiting any of the abandoned provinces. Among all such ways to form the new kingdom, the king would prefer the number of chosen provinces to be as large as possible.

Can you help the king choose which provinces should form the new kingdom? If there are multiple solutions that maximise the per-capita income, you should choose one with the maximum number of chosen provinces. If there are still multiple solutions, you may choose any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $U_i$ and $V_i$.

### Output
Print two lines.
- The first of these lines should contain a single integer $K$ denoting the number of provinces the king should choose.
- The second line should contain $K$ space-separated integers denoting these provinces.

### Constraints
- $1 \le T \le 5$
- $1 \le N, M \le 2 \cdot 10^5$
- $1 \le U_i, V_i \le N$ for each valid $i$
- $U_i \neq V_i$ for each valid $i$
- there is at most one road between each pair of provinces
- $0 \le A_i \le 10^9$ for each valid $i$
- $1 \le B_i \le 10^9$ for each valid $i$

### Example Input
```
1
3 3
10 1 2
5 1 1 
1 2
2 3
1 3
```

### Example Output
```
2
1 3
```

### Explanation
If the king chooses provinces $1$ and $3$, then the per-capita income is $\frac{10 + 2}{5 + 1} = 2$. This is the only optimal solution.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>