---
{"category_name":"easy","problem_code":"UWCOI21C","problem_name":"Organisation","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kimbj0709","problem_tester":"","date_added":"12-12-2020","tags":{"0":"easy","1":"kimbj0709","2":"uwcoi21"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UWCOI21C","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UWCOI21C","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Salmon loves to be a tidy person. One day, when he looked at the mess that he made after playing with his rubber ducks, he felt awful. Now he wants to clean up his mess, by placing his ducks into boxes.

Each rubber duck has a color. There are a total of $N+1$ colors, numbered from $0$ to $N$. Salmon wants to place his $N*K$ ducks into $N$ boxes, each of which can fit $K$ ducks. Each duck should be placed inside a box.

Salmon is very particular when it comes to how many colors he can place in each box. Since Salmon doesn't like lots of colors mixing together he only wants to have a maximum of $2$ distinct colors per box.

Please help Salmon achieve this goal!    
It can be shown that there will always be at least one valid solution under given constraints.   
If there are multiple correct solutions, you may output any one of them.   

### Input:
- The first line contains an integer $T$, denoting the number of testcases. $T$ testcases will follow, each containing two lines.   
- The first line of each testcase contains two space-separated integers $N$ and $K$.   
- The second line of each testcase contains $N+1$  space-separated integers. The $i+1$-th integer denotes the number of ducks with color-$i$ where $0 \leq i \leq N$

### Output:

- Output $N$ lines for each testcase. 
- The $i$-th line of a testcase should contain $4$ space-separated integers $c1, m1, c2, m2$ respectively which denotes that that are $m1$ ducks of color-$c1$ and $m2$ ducks of color-$c2$ inside the $i$-th box where $0 \leq m1,m2 \leq K$ and $0 \leq c1,c2 \leq N$. 
- Note that even if you have only one color to put inside the $i$-th box, you should still output $4$ space-separated integers and keep either $m1$ or $m2$ as $0$. And $0 \leq c1,c2 \leq N$.
- The output should be valid and should satisfy Salmon's goal.

### Constraints

- $T=10$
- $2 \leq N \leq 10^5$ 
- $2 \leq K \leq 10^5$ 
- Total ducks for each test case is exactly $N*K$
- There can be a color with $0$ ducks
 
### Subtasks

- Subtask 1 [20 points]: $2 \leq N \leq 10$, $K=2$  
- Subtask 2 [30 points]: $N=2$, $K=5$
- Subtask 3 [50 points]: original constraints

### Sample Input:

```
1
2 4
3 4 1
```

### Sample Output:

```
2 1 1 3
1 1 0 3
```

### Explanation:

- In the given testcase, Salmon has $N=2$ boxes, each of size $K=4$ and there are total $N*K=8$ ducks.   
- The first box is filled with $1$ duck of color-$2$ and $3$ ducks of color-$1$ and the second box is filled with $1$ duck of color-$1$ and $3$ ducks of color-$0$.   
- Each duck is inside a box and each box has at most two distinct colors. Also each box contains exactly $K=4$ ducks.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>