---
{"category_name":"medium","problem_code":"KKLING","problem_name":"King Killing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n10    \r\n1 2\r\n1 3\r\n2 4\r\n2 5\r\n3 6\r\n3 7\r\n5 8\r\n6 9   \r\n6 10\r\n7\r\n1 2\r\n2 3\r\n2 4\r\n4 5\r\n4 6\r\n5 7","output":"3 3\r\n8 9 10\r\n1 3\r\n7","explanation":"**Test Case 1 :** \r\n\r\nThe assassins are initially present at nodes $4$, $7$, $8$, $9$, and $10$ (consider it day $0$). On day $1$, their positions become:\r\n- Assassin $4$ =\u003E Node $2$\r\n- Assassin $7$ =\u003E Node $3$\r\n- Assassin $8$ =\u003E Node $5$\r\n- Assassin $9$ =\u003E Node $6$\r\n- Assassin $10$ =\u003E Node $6$\r\n\r\nNow, since assassin $4$ is in the same path as assassin $8$, and assassin $7$ is in the same path as assassin $9$ and assassin $10$, they both will be assassinated and assassin $8$ will get to reach node $2$ at cost of $1$ day (no benefit) and assassin $9$ and $10$ will also reach node $3$ in one day (which is Day $2$). Now assassin $8$ is on node $2$ and assassin $9$ and $10$ are at node $3$, all three of them reach node $1$ simultaneously so all three of assassin $8$, assassin $9$ and assassin $10$ win (With a total cost of $3$ days).\r\n\r\n **Test Case 2 :** \r\n\r\nThe assassins are initially present at nodes $3$, $6$, and $7$  on day $0$.\r\nOn day $1$, their positions become:\r\n- Assassin $3$ =\u003E Node $2$\r\n- Assassin $6$ =\u003E Node $4$\r\n- Assassin $7$ =\u003E Node $5$\r\n\r\nNow since assassin $3$ and assassin $6$ are on the path of assassin $7$, the assassin $7$ will kill both of them and will advance to the position of assassin $3$, that is node $2$ (nearest position to the kingdom), and this will cost him $1$ day. On the next day (day $3$), he will reach the kingdom and take the reward.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xrxma1DTT3E","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"zankanotachi","problem_tester":"","date_added":"18-04-2021","tags":{"0":"implementation","1":"may21","2":"medium","3":"zankanotachi"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/KKLING","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=KKLING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/KKLING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/KKLING.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/KKLING.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/KKLING.pdf) as well.

In a faraway kingdom there are $N$ cities numbered $1$ to $N$ connected to each other in the form of a tree. The city numbered $1$ is the kingdom where the king resides. A city is called a leaf if it is not the kingdom and it has exactly one adjacent city. Each leaf city has an assassin.

The enemies of the king have announced a huge reward for the assassination of the king. Each assassin starts moving from his current city following the shortest path to the kingdom. It takes exactly $1$ day for an assassin to move to an adjacent city..

The assassins don’t want to split the reward, so if an assassin $A$ encounters any other assassin $B$ ahead of him on the same path that $A$ is supposed to follow (no matter how far ahead), then $A$ uses his magical power to attack $B$.

After all the magical powers were used, every assassin who was attacked dies. Suppose $A$ is a living assassin who attacked somebody. Now, $A$ will move directly to the position of the assassin closest to the kingdom that $A$ attacked, with the cost of $1$ day. If there are multiple assassins in the same city simultaneously, they form a pact not to kill each other and start moving together. **Once an assassin reaches the kingdom, he cannot be killed anymore**, since he can kill the king, take the reward, and leave.

Your task is to find which assassin will reach the kingdom first and in how many days. If more than one assassin reaches the kingdom simultaneously, output all of them in sorted order. Each assassin is represented by the number of the city where they started from.

###Input

- The first line contains an integer $T$, the number of test cases
- The first line of every test case contains a single integer $N$, the number of cities.
- Each of the next $N-1$ lines contains two integers $u$ and $v$ denoting that city $u$ is connected to city $v$.

###Output

- For every test case, the first line should contain $K$ and $T$, the number of assassins who are first to reach and the number of days required.
- In the next line print $K$ space-separated integers denoting the assassins who are first to reach the kingdom in sorted order.

###Constraints 

- $1\leq T\leq10^5$
- $3\leq N\leq2\cdot 10^5$ 
- $1\leq u, v\leq N$
- The sum of $N$ over all test cases does not exceed $10^6$
- The connections form a tree structure.

###Subtasks
**Subtask #1 (30 points):** 
- $T \leq 10^3$
- $N \leq 2\cdot 10^3$
- The sum of $N$ over all test cases does not exceed $10^4$
- Time limit: $1$ sec

**Subtask #2 (70 points):** 
- Original Constraints
- Time limit: $2$ sec

###Sample Input 
```
2
10    
1 2
1 3
2 4
2 5
3 6
3 7
5 8
6 9   
6 10
7
1 2
2 3
2 4
4 5
4 6
5 7
```  

###Sample Output
```
3 3
8 9 10
1 3
7
```      


###Explanation
 **Test Case 1 :** 

The assassins are initially present at nodes $4$, $7$, $8$, $9$, and $10$ (consider it day $0$). On day $1$, their positions become:
- Assassin $4$ => Node $2$
- Assassin $7$ => Node $3$
- Assassin $8$ => Node $5$
- Assassin $9$ => Node $6$
- Assassin $10$ => Node $6$

Now, since assassin $4$ is in the same path as assassin $8$, and assassin $7$ is in the same path as assassin $9$ and assassin $10$, they both will be assassinated and assassin $8$ will get to reach node $2$ at cost of $1$ day (no benefit) and assassin $9$ and $10$ will also reach node $3$ in one day (which is Day $2$). Now assassin $8$ is on node $2$ and assassin $9$ and $10$ are at node $3$, all three of them reach node $1$ simultaneously so all three of assassin $8$, assassin $9$ and assassin $10$ win (With a total cost of $3$ days).

 **Test Case 2 :** 

The assassins are initially present at nodes $3$, $6$, and $7$  on day $0$.
On day $1$, their positions become:
- Assassin $3$ => Node $2$
- Assassin $6$ => Node $4$
- Assassin $7$ => Node $5$

Now since assassin $3$ and assassin $6$ are on the path of assassin $7$, the assassin $7$ will kill both of them and will advance to the position of assassin $3$, that is node $2$ (nearest position to the kingdom), and this will cost him $1$ day. On the next day (day $3$), he will reach the kingdom and take the reward.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>