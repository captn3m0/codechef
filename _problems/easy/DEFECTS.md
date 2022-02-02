---
{"category_name":"easy","problem_code":"DEFECTS","problem_name":"Invincible Shield","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":null,"date_added":"20-10-2019","tags":{"0":"bipartite","1":"breadth","2":"dcod2019","3":"graphs","4":"sachin_yadav","5":"sachin_yadav"},"problem_difficulty_level":"Easy","best_tag":"Breadth First Search","editorial_url":"https://discuss.codechef.com/problems/DEFECTS","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DEFECTS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Greed has an invincible shield due to which the attacks of Edward would not work on him. But Edward being a prodigy has caught onto the flaws in Greed's shield. The shield is made up of the same fundamental element, by which all other life forms are formed, Carbon.
  
He observed that Greed's shield can be represented as a grid $G$ of carbon clusters with $N$ rows and $M$ columns. Each cell on the grid represents the orientation of the carbon cluster, either $0$ or $1$. Specifically, $G_{i, j}$ denote the $j$-th carbon cluster in $i$-th row.

The shield is penetrable only when all the carbon clusters in the shield grid have the same orientation. 

For achieving this, Initially, he chooses a single carbon cluster (ie. a single cell) in the shield. Now, he repeatedly applies the following move on this cluster, till all the carbon clusters in the grid have the same orientation:

In a single move, Edward flips the orientation of all clusters reachable from the chosen cluster. A cluster is called reachable from another cluster, if both clusters have the same orientation, and it is possible to move from one cluster to the other through clusters of that orientation only, moving vertically and horizontally. If earlier the orientation was $1$, it turns into $0$ and vice versa.

Choosing the start cell optimally, can you find the minimum number of moves to make all the clusters have same orientation?

Do not worry, you do not need to know about Carbon clusters in order to solve this problem.

### Input:
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For each test case, the first line contains $N$ and $M$ denoting the number of rows and columns of grid $G$ depicting the shield of Greed.
- For each test case, $N$ lines follow, each line containing $M$ integers where the $j$-th integer in $i$-th line depicts the initial orientation of the $G_{i, j}$ cluster.

### Output:
For each test case, output a single integer in a separate line denoting the minimum number of moves required to make the complete shield of a single orientation.

### Constraints 
- $1\leq T\leq 10$  
- $1 \leq N,M \leq 50$
- $0 \leq G_{i, j} \leq 1$ for $1 \leq i \leq N$ and $1 \leq j \leq M$

### Sample Input:
```
4
6 6
0 0 0 1 1 1
0 0 0 1 1 0
0 0 0 0 0 0
1 1 1 1 1 1
1 1 0 0 0 0
1 1 1 0 0 0
4 3
1 1 1
1 1 1
1 1 1
1 1 1
2 4
0 0 0 0
1 1 1 1
1 5
1 0 1 0 1
```

### Sample Output:
```
2
0
1
2
```
### Explanation:
- Testcase $1$: Choosing $G_{1, 1}$ as the start point, the whole shield gets orientation $0$ in $2$ moves.

After the first move, the grid would look like:
```
1 1 1 1 1 1
1 1 1 1 1 1
1 1 1 1 1 1
1 1 1 1 1 1
1 1 0 0 0 0
1 1 1 0 0 0
```

After the second move, the grid would look like:
```
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
0 0 0 0 0 0
```

There are many other starting points which lead to the optimal minimal number of moves as well.
- Testcase $2$: The shield is already of same orientation, so $0$ moves.
- Testcase $3$: Choosing $G_{1, 1}$ as the start point, the whole shield gets orientation $1$ in $1$ move.
- Testcase $4$: Choosing $G_{1, 3}$ as the start point, the whole shield gets orientation $1$ in $2$ move.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>