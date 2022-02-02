---
{"category_name":"medium","problem_code":"UWCOI21G","problem_name":"Roman Routing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"astoria","problem_tester":"","date_added":"17-12-2020","tags":{"0":"astoria","1":"uwcoi21"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21G","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21G","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon has time-travelled to the dying days of the Roman Empire, and needs to travel to Rome.

There are $N$ cities in the Roman Empire; these are numbered from $0$ to $N-1$. City $0$ is Rome. There are also $M$ unidirectional roads between some of these $N$ cities. The $i$-th road is from city $A_i$ to city $B_i$, and has a length of $W_i$.

As the old saying goes, "All roads lead to Rome". In particular, starting at a city and following an arbitrary sequence of roads, one will eventually reach Rome and terminate. Note that there are no directed cycles in this graph. In other words, it is not possible to leave a city and then return to it later. 

In addition, to prevent the Empire from becoming too fractured, the roads were built such that the largest set of cities such that all cities in the set are pairwise unreachable from each other has size $\leq 10$. In other words, it is guaranteed that in any set of $11$ or more vertices, there will exist at least two vertices $u$ and $v$, such that it is possible to travel from $u$ to $v$ in the original graph.

Salmon will make a journey from each city towards Rome. Each journey can be represented as a sequence of cities, $S$, such that the first integer is the origin city and the last integer is city 0, Rome. Note that $S$ may have any size.

Salmon needs to travel between every two consecutive cities on his journey. It is not necessary that the cities are directly connected, however, the latter city must be reachable from the earlier one. Roman authorities now mandate that to travel from city $X$ to $Y$, one must hire soldiers for protection in city $X$. As nowadays journeys near Rome are more dangerous, the number of soldiers to hire is equal to $K-d_Y$ where $d_Y$ represents the length of the longest path from $Y$ to Rome, and $K$ is a constant. The cost of hiring a single soldier in city $X$ is $c_X$. In addition, Salmon will have to pay an entry tax $t_Y$ upon arrival in city $Y$, to enter. Notice that Salmon is not required to pay the entry fee for the city he starts in (the origin city), and that he only has to pay the entry fee for cities in the sequence $S$.

Given that Salmon chooses his journeys optimally, what is the minimum cost of travelling from every city from $1 \dots N-1$ to Rome?

###Input:

- The first line will contain three integers: $N$, $M$, and $K$.
- The second line will contain $N$ integers: $c_0 c_1 \dots c_{N-1}$
- The third line will contain $N$ integers: $t_0 t_1 \dots t_{N-1}$
- The next $M$ lines will contain three integers each: $u_i v_i w_i$, representing that there is an road from $u_i$ to $v_i$ of length $w_i$.

### Output:
Output $N-1$ space-separated integers: the $i$-th integer is the minimum cost to travel from city $i$ to Rome (city 0).

### Constraints 
- $2 \leq N \leq 10^5$
- $1 \leq M \leq 2*10^5$
- $d_{max} \leq K \leq 10^9$, where $d_{max}$ is the highest value of $d_i$ across all cities.
- $0 \leq u_i, v_i \leq N-1$
- $1\leq w_i \leq 10^4$
- $1 \leq c_i, t_i \leq 10^4$
- The road network forms a connected Directed Acyclic Graph, with node $0$ as the sole sink.
- There are no multi-edges.
- The largest set of cities such that all cities are pairwise unreachable from each other has size $\leq 10$.

### Subtasks

- Subtask 1 [10 points]: $N \leq 1000$, $M \leq 2000$
- Subtask 2 [15 points]: $M = N-1$; $u_i=i+1$, $v_i=i$ for all $i$
- Subtask 3 [25 points]: $M = N-1$
- Subtask 4 [50 points]: No additional constraints.

### Sample Input 1
```
2 1 5
1 2 
3 4
1 0 2
```
### Sample Output 1
```
13
```

### Explanation

Salmon travels directly from city 1 to Rome (city 0). He has to hire $5-0 = 5$ soldiers. The hiring-cost of each soldier in city 1 is $2$. So, he has to spend $10$ on soldier salaries. In addition, he has to pay a tax of $3$ to enter city 0, for a total of $13$.

### Sample Input 2
```
3 3 17
4 4 1
9 6 8
2 0 5
2 1 8
1 0 2
```

### Sample Output 2
```
77 26 
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>