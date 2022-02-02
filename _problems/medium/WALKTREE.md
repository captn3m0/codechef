---
{"category_name":"medium","problem_code":"WALKTREE","problem_name":"Not So Random Walks","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"16-12-2018","tags":{"0":"usaxena95"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef found a rooted tree with $N$  nodes. The nodes are labelled from $1$ to $N$. Node with label $1$ was marked as the root.

$R$ is the adjacency list representing the tree, which includes only children, but not the parent of every node. Denote $K(i)$ as the number of children of $i^{th}$ node. Denote $R(i, j)$ as the $j^{th}$ child of the $i^{th}$ node ( $0 \leq j \lt K(i)$).

Chef also found the piece of code lying below the tree.

```
void dfs(v, iter) {
  if (visit[v] == 0)
    visit[v] = iter;
  if (K(v) != 0) {
    special_child = R(v, F(v));
    dfs(special_child, iter);
    F(v) = (F(v) + 1) % K(v);
  }
}

initialize F(i) = 0;
initialize visit[i] = 0;
done = false;
iter = 0;

while (!done) {
  iter = iter + 1;
  dfs(1, iter);
  done = true;
  for (i = 1; i <= N; ++i)
    if (visit[i] == 0)
      done = false;
}
```

Chef is really excited to see this code and wants to know what is the value of the $visit$ array once this code is executed.

Since the values of the array can be large, print all the integers $mod \space 10^9+7$.


###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- The first line of each test case contains a single integer $N$, the number of nodes in the tree.
- $N$ lines follow. 
- First integer on the $i^{th}$ line denotes $K(i)$, the number of children of node $i$. $K(i)$ integers follow, $j^{th}$ of which denotes $R(i, j)$.

###Output:
For each testcase, output in a single line $N$ space separated integers.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq N \leq 10^5$
- Sum of $N$ over all testcases $\leq 10^6$ 
- $0 \leq K(i) \leq 10^5$

###Sample Input:
    2
    7
    3 2 3 4
    1 7
    0
    2 5 6
    0
    0
    0
    3
    1 2
    1 3
    0


###Sample Output:
    1 1 2 3 3 6 1
    1 1 1
	
###EXPLANATION:
For test case 1:
- Nodes visited in $1^{st}$ iteration: $1,2,7$. 
- Nodes visited in $2^{nd}$ iteration: $1,3$. 
- Nodes visited in $3^{rd}$ iteration: $1,4,5$.
- Nodes visited in $4^{th}$ iteration: $1,2,7$. 
- Nodes visited in $5^{th}$ iteration: $1,3$. 
- Nodes visited in $6^{th}$ iteration: $1,4,6$.  

For test case 2 all nodes are visited in the first iteration.